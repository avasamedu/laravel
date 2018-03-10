<?php


Route::get('/', function () {

    //--------- E 19 S01 Laravel Samenta.ir ---------------------------------------
//    return view('welcome');
//    if(Auth::check())
//    {
//        return 'user is logged in ';
//
//    }else
//    {
//        return 'user is NOT logged in ';
//    }

    // - ----------------------------------------------------------
//    $email = 'info@samenta.ir';
//    $password = '123456789';
//    if(Auth::attempt(['email'=>$email , 'password'=>$password])){
//        return 'true';
//    }

//    Auth::logout(); // exit

return view('welcome');


});

Route::auth();

Route::get('/home', 'HomeController@index');

// -------- E 20 S 01 Laravel Samenta.ir  -----------------------------------
Route::get('/user/panel',['middleware'=>'Role' ,function(){
    return 'user panel';
}]);

Route::get('/middleware',['middleware'=>'Role',function(){

}]);

Route::get('/admin','AdminController@index');
// --------- E21 S01 Laravel Samenta.ir  ---------------------------------------
Route::resource('/post','PostController'); //resource route posts