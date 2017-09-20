<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'login' => $request['login'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'imie' => $request['imie'],
            'nazwisko' => $request['nazwisko'],
            'firma' => $request['firma'],
            'nip' => $request['nip'],
            'adres' => $request['adres'],
            'miejscowosc' => $request['miejscowosc'],
            'kod' => $request['kod'],
            'telefon' => $request['telefon'],
        ]);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Messsages  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $old_password = $user->password;

        if($request['new_password']=='')
        {
            $user->update([
                'login' => $request['login'],
                'email' => $request['email'],
                'password' => $old_password,
                'imie' => $request['imie'],
                'nazwisko' => $request['nazwisko'],
                'firma' => $request['firma'],
                'nip' => $request['nip'],
                'adres' => $request['adres'],
                'miejscowosc' => $request['miejscowosc'],
                'kod' => $request['kod'],
                'telefon' => $request['telefon'],
            ]);
        }
        else
        {
            $user->update([
                'login' => $request['login'],
                'email' => $request['email'],
                'password' => bcrypt($request['new_password']),
                'imie' => $request['imie'],
                'nazwisko' => $request['nazwisko'],
                'firma' => $request['firma'],
                'nip' => $request['nip'],
                'adres' => $request['adres'],
                'miejscowosc' => $request['miejscowosc'],
                'kod' => $request['kod'],
                'telefon' => $request['telefon'],
            ]);
        }

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Users  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
