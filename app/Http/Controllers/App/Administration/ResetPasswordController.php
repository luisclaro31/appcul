<?php

namespace App\Http\Controllers\App\Administration;

use App\Email;
use App\EmailPassword;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ResetPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = EmailPassword::with('user', 'email')->where('state', 0)->get();
        //dd($results);

        return view('app.administration.reset_password.index', compact('results'));
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
        $result = Email::where('user_id',$id)->first();

        //dd($result);

        return view('app.administration.reset_password.create', compact('result'));
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

        $email_password = EmailPassword::with('User', 'Email')->whereNotIn('state', [1])->where('user_id', $request->user_id)->get();
        //dd($email_password->toArray());

        $this->validate(request(), [
            'password'          => 'required',
        ]);

        //dd($request->password);

        $result = Email::findOrFail($id);
        $result->password = $request->password;
        $result->save();


        foreach($email_password as $req){
            $result = EmailPassword::findOrFail($req->id);
            $result->state = 1;
            $result->save();
        }

        foreach($email_password as $req){
            $result = EmailPassword::findOrFail($req->id);
            $result->category = 3;
            $result->save();

            Session::flash('identification', $req->email->email);
            Session::flash('password', $req->email->password);

            Mail::send('app.administration.reset_password.message', ['profile' => $req], function ($message) use ($req){

                $message->from('noticias@ul.edu.co', 'Evaluación Desempeño Docentes');

                $message->to($req->personal_email)->cc($req->personal_email)->subject('Credenciales de Ingreso | Correo Institucional - Moodle');

            });

            return view('app.administration.reset_password.message');
        }

        /*
        $result = Email::findOrFail($id);
        $result->password = $request->password;
        //$result->fill($request->all());
        $result->save();
        //Session::flash('message', $result->full_name . ' Editado Con Exito');

        $update = Ticket::findOrFail($ticket_id->id);
        $update->state_id = 2;
        $update->save();
        */

        return Redirect::route('admin.index');

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
