<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use App\User;

class MessagesController extends Controller
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
        $messages = Messages::paginate(10);

        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('messages.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Messages::create($request->all());
        return redirect()->route('messages.index');
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
     * @param  \App\Messages  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Messages $message)
    {
        return view('messages.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Messsages  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Messages $message)
    {
        $message->update($request->all());
        return redirect()->route('messages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Messages  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Messages $message)
    {
        $message->delete();
        return redirect()->route('messages.index');
    }
}
