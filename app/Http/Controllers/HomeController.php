<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

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

    public function quiz(){

        return view('quiz');

    }

    public function saveQuiz(Request $request){

        $request->validate([
          'first_name'=>'required',
          'last_name'=>'required',
          'email'=> 'required',
        ]);
 

        $input = $request->only('gender','teens','diagnosis','diagonsis_condition','active','describe','body_type','doctor','doctor_name','first_name','last_name', 'email','password');

        $user = new User([
            'name' => $input['first_name'],
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
        ]);

        $user->save();
        
        if(!empty($input['diagonsis_condition'])){

             $input['diagonsis_condition'] = implode(',', $input['diagonsis_condition']);
        }
        
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
        ]);


        $quiz->save();
        $emails = ['brajeshjha108@gmail.com', 'parthibatman@gmail.com'];
        
        if(!in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', 'localhost'))){
            Mail::to($emails)->send(new ContactEmail($input));
        }

        return redirect('/showquiz?id='.$quiz->id.'#quiz_section')->with('success', 'Thank you for your registration. Below are your quiz details.');

    }

    public function showquiz(Request $request){

            $id = $request['id'];
            $quiz_details = Quiz::Where('id', $id)->get()->first(); 
            return view('showquiz', compact('quiz_details'));
    }

}
