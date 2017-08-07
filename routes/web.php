<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   // if (\Request::is('login') || \Request::is('/') )
   // { 
      if(!Session::has('user_id'))
        {
            return view('auth/login');
        }  else {
             return view('home');
        }
         return view('auth/login');
  //  }
    
});

Route::get('/login', function () {
        if(!Session::has('user_id'))
                {
                    return view('auth/login');
                }  else {
                     return view('home');
                }
   });
// Second Route method – Root URL with ID will match this method
/*Route::get('ID/{id}',function($id){
   echo 'ID: '.$id;
}); //http://localhost/QuizMS/public/ID/55


// Third Route method – Root URL with or without name will match this method
Route::get('/user/{name?}',function($name = 'Virat Gandhi'){
   echo "Name: ".$name;
});*/

//factory(App\User::class ,1)->create();
 //  factory(App\Quize::class ,1)->create();
   
Auth::routes();

Route::get('/home', 'HomeController@index');//->name('home');


// route to process the form
Route::post('/loginme','HomeController@dologin');
     //   function(){    echo"it'ssss working";}
   
//if write Admin in url will redirect to index in admincontroller
Route::resource('/admin','AdminController');

Route::resource('/questions','QuestionsController');
Route::resource('/quezques','QuezQuestionsController');

Route::get('/logout', 'HomeController@getLogout');
