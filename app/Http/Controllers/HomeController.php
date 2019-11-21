<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Mail\AdminEmail;
use App\Quiz;
use App\User;

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
            Mail::to($input['email'])->send(new ContactEmail($input));
            //send email to admin
            Mail::to(['brajeshjha108@gmail.com'])->send(new AdminEmail($input));
        }
        return response()->json([
            'message' => 'Thank you for your registration. Below are your quiz details.',
            'redirect' => '/thank-you?id='.$quiz->id.'#message',
            'success' => true
        ]);
        // return redirect('/thank-you?id='.$quiz->id.'#message')->with('success', 'Thank you for your registration. Below are your quiz details.');

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
            Mail::to($input['email'])->send(new ContactEmail($input));
            //send email to admin
            Mail::to(['brajeshjha108@gmail.com'])->send(new AdminEmail($input));
        }

        return response()->json([
            'message' => 'Thank you for your registration. Below are your quiz details.',
            'redirect' => '/thank-you?id='.$quiz->id.'#message',
            'success' => true
        ]);
        // return redirect('/thank-you?id='.$quiz->id.'#message')->with('success', 'Thank you for your registration. Below are your quiz details.');

    }

    public function quizResults(Request $request){

            $id = $request['id'];
            $quiz_details = Quiz::Where('id', $id)->get()->first(); 
            return view('showquiz', compact('quiz_details'));
    }

}
