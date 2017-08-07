<?php

/*namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;



class HomeController extends Controller
{
     //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth'); //to prevent log to system without login
        //$this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function dologin(Request $req)
     {
        $email = $req->input('email');
        $password = $req->input('password');

        $checkLogin = DB::table('users')->where(['email'=>$email,'password'=>  md5($password)])->get();
        if(count($checkLogin)  >0)
        {
//            foreach ($checkLogin as $user)
//            {
//                Session::put('user_id', $user->id);
//
//                //echo$user->id.'<br/>---'.$user->password.'<br/>---';
//            }
            //$request->session()->flash('status', 'Login SuccessFull!');
            return redirect('/home');
           // echo $value = Session::get('user_id');
       //  echo "<br/>Login SuccessFull<br/>";
        // print_r($checkLogin);
       // print_r($req->input());
        }
        else
        {
           // $request->session()->flash('status', 'Login Faield Wrong Data Passed!');
            return redirect('/');
           // echo "Login Faield Wrong Data Passed";
        }
     }
     
     public function getLogout() 
    {
       // $this->auth->logout();
        Session::flush();//removes all session data
        Session::forget('user_id');// Removes a specific variable
       // Auth::logout(); // logs out the user 

        return redirect('/');
    }
}
