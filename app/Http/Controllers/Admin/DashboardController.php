<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Quiz;
use App\User;

class DashboardController extends Controller
{
    //
    public function index() {
    	$title = 'Quiz List';
    	$quizList = Quiz::join('users', 'users.id', '=', 'quizzes.user_id')
                ->orderBy('quizzes.created_at')
                ->select('quizzes.*','users.*')
                ->Where('quizzes.type', 'patient')
            ->get();
    	return view('admin/dashboard', compact('quizList', 'title'));
    }

    public function getPatients() {
    	$title = 'Patients';
    	$patientList = Quiz::join('users', 'users.id', '=', 'quizzes.user_id')
                ->orderBy('quizzes.created_at')
                ->select('quizzes.*','users.*')
                ->Where('quizzes.type', 'patient')
            ->get();
    	return view('admin/patients', compact('patientList', 'title'));
    }

    public function getPhysicians() {
    	$title = 'Physicians';
    	$patientList = Quiz::join('users', 'users.id', '=', 'quizzes.user_id')
                ->orderBy('quizzes.created_at')
                ->select('quizzes.*','users.*')
                ->Where('quizzes.type', 'physician')
            ->get();
    	return view('admin/physicians', compact('patientList', 'title'));
    }

    public function profile(){
         $title = 'My Profile';
         $user = Auth::user();
         return view('admin/profile', compact('user','title'));

    }

    public function updateprofile(){

    }

     public function updatepassword(){

    }


}
