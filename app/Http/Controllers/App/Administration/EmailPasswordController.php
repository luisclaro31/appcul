<?php

namespace App\Http\Controllers\App\Administration;

use App\Email;
use App\EmailPassword;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EmailPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('hello');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = User::where('id',Auth::user()->id)->first();
        $email_id = Email::where('user_id',Auth::user()->id)->first();
        //dd($user);
        return view('app.administration.email_password.create', compact('user_id', 'email_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'user_id'           => 'required|exists:users,id',
            'email_id'          => 'required|exists:emails,id',
            'personal_email'    => 'required|email',
            'phone'             => 'required|integer|digits_between:7,10',
            'type_of_problem'   => 'required',
        ]);

        $result = EmailPassword::create($request->all());
        Session::flash('message', $result->id . ' Añadido Con Exito');
        //return Redirect::away('http://evaluacion.ul.edu.co/', 301);
        return Redirect::route('student.email.index');
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
