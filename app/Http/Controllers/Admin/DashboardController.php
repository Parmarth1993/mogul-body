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

    public function updateprofile(Request $request){

        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
        ]);

        /**
         * storing the input fields name & email in variable $input
         * type array
         **/
        $input = $request->only('first_name','last_name');
        /**
         * fetching the user model
         */
        $user = Auth::user();

        /**
         * Accessing the update method and passing in $input array of data
         **/
        $user->update(['first_name' => $input['first_name'],
                       'last_name' => $input['last_name']]);

        /**
         * Change password if not blank

        /**
         * after everything is done return them pack to /profile/ uri
         **/
        return redirect('/admin/profile')->with('success', 'Profile has been updated.');

    }

    public function updatepassword(Request $request){
        
         $this->validate($request, [
            'new_password' => 'required|max:255',
            'confirm_password' => 'required|max:255',
        ]);

          $input = $request->only('new_password','confirm_password');

          $user = Auth::user();

          if(isset($input['new_password']) && $input['new_password'] != '' && $input['new_password'] == $input['confirm_password']) {
            $update = $user->update(['password' => bcrypt($input['new_password'])]);
            return redirect('/admin/profile')->with('success', 'Password has been changed.');
        } else{ 

            return redirect('/admin/profile')->with('error', 'Password and confirm password do not match.');
        }
    }

}
