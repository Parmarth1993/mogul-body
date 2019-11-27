<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Mail\AdminEmail;
use App\Quiz;
use App\User;
use Stripe;
require_once(base_path() . '/vendor/stripe/stripe-php/init.php');

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function patientSignup(){

        return view('patient-signup');

    }

    public function physicianSignup(){

        return view('physician-signup');

    }

    public function patientSignupQuiz(Request $request){

        $request->validate([
          'first_name'=>'required',
          'last_name'=>'required',
          'email'=> 'required',
        ]);
 

        $input = $request->only('gender','teens','diagnosis','diagonsis_condition','active','describe','body_type','doctor','doctor_name','first_name','last_name', 'email','password');

        //check for duplicate email
        $checkEmail = User::Where('email', $input['email'])->get()->first(); 
        if(!empty($checkEmail)) {
            return response()->json([
                'message' => 'Email already exists, please try with different email',
                'success' => false
            ]);
        }

        $user = new User([
            'name' => $input['first_name'],
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'type' => 'patient',
            'password' => bcrypt($input['password']),
        ]);

        $user->save();
        
        if(!empty($input['diagonsis_condition'])){

             $input['diagonsis_condition'] = implode(',', $input['diagonsis_condition']);
        }
        $input['type'] = 'patient';
        $quiz = new Quiz([
            'user_id' => $user->id,
            'gender' => $input['gender'],
            'teens' => $input['teens'],
            'diagnosis' => $input['diagnosis'],
            'diagonsis_condition' => $input['diagonsis_condition'],
            'active' => $input['active'],
            'describe' => $input['describe'],
            'body_type' => $input['body_type'],
            'doctor' => $input['doctor'],
            'doctor_name' => $input['doctor_name'],
            'type' => 'patient',
        ]);


        $quiz->save();
        
        if(!in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', 'localhost'))){
            $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
            $input['login'] = $protocol.$_SERVER['HTTP_HOST'] . '/login';
            // Mail::to($input['email'])->send(new ContactEmail($input));
            //send email to admin
            Mail::to(['brajeshjha108@gmail.com'])->send(new AdminEmail($input));
        }
        return response()->json([
            'message' => 'Thank you for your registration. Below are your quiz details.',
            'redirect' => '/thank-you/'.$quiz->id.'#btn-design',
            'success' => true
        ]);
        // return redirect('/thank-you/'.$quiz->id.'#btn-design')->with('success', 'Thank you for your registration. Below are your quiz details.');

    }

    public function physicianSignupQuiz(Request $request){

        $request->validate([
          'first_name'=>'required',
          'last_name'=>'required',
          'email'=> 'required',
          'phone'=> 'required',
        ]);
 

        $input = $request->only('qualification','service_time','business_name','typical_patients', 'first_name', 'last_name', 'email', 'phone', 'password');
        //check for duplicate email
        $checkEmail = User::Where('email', $input['email'])->get()->first(); 
        if(!empty($checkEmail)) {
            return response()->json([
                'message' => 'Email already exists, please try with different email',
                'success' => false
            ]);
        }
        $user = new User([
            'name' => $input['first_name'],
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'type' => 'physician',
            'password' => bcrypt($input['password']),
        ]);

        $user->save();        
        $input['type'] = 'physician';
        $quiz = new Quiz([
            'user_id' => $user->id,
            'qualification' => $input['qualification'],
            'service_time' => $input['service_time'],
            'business_name' => $input['business_name'],
            'typical_patients' => $input['typical_patients'],
            'type' => 'physician',
        ]);

        $quiz->save();
        
        if(!in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', 'localhost'))){
            $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
            $input['login'] = $protocol.$_SERVER['HTTP_HOST'] . '/login';
            // Mail::to($input['email'])->send(new ContactEmail($input));
            //send email to admin
            Mail::to(['brajeshjha108@gmail.com'])->send(new AdminEmail($input));
        }

        return response()->json([
            'message' => 'Thank you for your registration. Below are your quiz details.',
            'redirect' => '/thank-you/'.$quiz->id.'#btn-design',
            'success' => true
        ]);
        // return redirect('/thank-you/'.$quiz->id.'#btn-design')->with('success', 'Thank you for your registration. Below are your quiz details.');

    }

    public function quizResults(Request $request, $id){

            // $quiz_details = Quiz::Where('id', $id)->get()->first(); 
            $quiz_details = Quiz::join('users', 'users.id', '=', 'quizzes.user_id')
                ->orderBy('quizzes.created_at')
                ->select('quizzes.*','users.*', 'quizzes.id as quiz_id', 'users.id as user_id')
                ->Where('quizzes.id', $id)
                ->get()
                ->first(); 
            return view('showquiz', compact('quiz_details'));
    }

    public function stripePayment(Request $request) {

        $input = $request->only('first_name','last_name','email','card_numder', 'expiry_month', 'expiry_year', 'card_security', 'stripe_token', 'user_id', 'quiz_id', 'password', 'stripe_price');
        $quiz = Quiz::Where('id', $input['quiz_id'])->get()->first();
        $input['gender'] = $quiz['gender'];
        $input['teens'] = $quiz['teens'];
        $input['diagnosis'] = $quiz['diagnosis'];
        $input['diagonsis_condition'] = $quiz['diagonsis_condition'];
        $input['active'] = $quiz['active'];
        $input['describe'] = $quiz['describe'];
        $input['body_type'] = $quiz['body_type'];
        $input['doctor'] = $quiz['doctor'];
        $input['doctor_name'] = $quiz['doctor_name'];
        $input['qualification'] = $quiz['qualification'];
        $input['service_time'] = $quiz['service_time'];
        $input['typical_patients'] = $quiz['typical_patients'];
        $input['type'] = $quiz['type'];

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        try {            
            $charge = Stripe\Charge::create ([
                    "amount" => $input['stripe_price'] * 100,
                    "currency" => "usd",
                    "source" => $input['stripe_token'],
                    "description" => "Payment from Mogul Body by users:" . $input['email']
            ]);

            if($charge && $charge->id) {
                //update password
                $user = User::Where('id', $input['user_id'])->get()->first();
                $user->password = bcrypt($input['password']);
                $user->stripe_payment_id = $charge->id;
                $user->save();

                if(!in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', 'localhost'))){
                    $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
                    $input['login'] = $protocol.$_SERVER['HTTP_HOST'] . '/login';
                    Mail::to($input['email'])->send(new ContactEmail($input));
                }
                // die('from header_remove()');
                //save charge->id
               return redirect('/thank-you/'.$input['quiz_id'].'#btn-design')->with('success', 'Payment successful');
            }

        } catch(\Stripe\Exception\CardException $e) {
            die('from header_remove() 2');
            redirect('/thank-you/'.$input['quiz_id'].'#btn-design')->with('error', $e->getError()->message);

        } catch (\Stripe\Exception\RateLimitException $e) {
            die('from header_remove()');
          // Too many requests made to the API too quickly
            redirect('/thank-you/'.$input['quiz_id'].'#btn-design')->with('error', $e->getError()->message);
        } catch (\Stripe\Exception\InvalidRequestException $e) {
          // Invalid parameters were supplied to Stripe's API
            redirect('/thank-you/'.$input['quiz_id'].'#btn-design')->with('error', $e->getError()->message);
        } catch (\Stripe\Exception\AuthenticationException $e) {
          // Authentication with Stripe's API failed
          // (maybe you changed API keys recently)
            redirect('/thank-you/'.$input['quiz_id'].'#btn-design')->with('error', $e->getError()->message);
        } catch (\Stripe\Exception\ApiConnectionException $e) {
          // Network communication with Stripe failed
            redirect('/thank-you/'.$input['quiz_id'].'#btn-design')->with('error', $e->getError()->message);
        } catch (\Stripe\Exception\ApiErrorException $e) {
          // Display a very generic error to the user, and maybe send
          // yourself an email
            redirect('/thank-you/'.$input['quiz_id'].'#btn-design')->with('error', $e->getError()->message);
        } catch (Exception $e) {
          // Something else happened, completely unrelated to Stripe
            redirect('/thank-you/'.$input['quiz_id'].'#btn-design')->with('error', $e->getError()->message);
        }
        
    }

}
