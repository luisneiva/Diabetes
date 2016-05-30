<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use Auth;

use App\User;
use App\Utente;
use App\Notifica;


class NotificaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // caso o id do utente não seja especificado usa o login
        if (!$request->has('utente') || $request->get('utente') == '') {
            $user_id = Auth::user()->id;
        } else {
            $user_id = $request->get('utente');
        }

        $notificas = User::find($user_id)->notificacoes;

        return view('notifica/listNotifica', compact('notificas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notifica/newNotifica');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notifica = Notifica::create(Input::all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // este metodo é usado para criar uma notificação
        return view('notifica/newNotifica', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $notifica = Notifica::findOrFail($id);
         return view ('notifica/editNotifica', compact('notifica'));
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
        $notifica = Notifica::find($id);
        $notifica->fill(Input::all());
        $notifica ->save();
        return redirect()->route('notifica.index');
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
