<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //return 'test this controller index method';
        //return $request;

        // Retrive Session
        //return session()->all(); //retrive all sessions
        //return session()->get('_token'); // retrive one session value

        //Set New Values To Session
        //session(['name'=>'Samenta','email'=>'info@samenta.ir','url'=>'http://samenta.ir']);
        //session()->put('user_id',100);
        //return session()->all(); //retrive all sessions
       //return session()->get('url');

        //Delete sessions

        //        session()->forget('name'); //delete one session value
        //        return session()->all();
//            session()->flush(); // delete all sessions
//            return session()->all();

            //return session('email');

        //return $request->session()->all();

        //flash data
//        $request->session()->flash('msg','User Created Success');
//        return $request->session()->get('msg');

//        $request->session()->reflash();
//        $request->session()->keep('msg');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
