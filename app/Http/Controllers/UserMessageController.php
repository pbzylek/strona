<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use Auth;
use Session;

class UserMessageController extends Controller
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
    public function send()
    {
        $messages = Messages::where('od_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);

        return view('user.messages.send', compact('messages'));
    }

    public function received()
    {
        $messages = Messages::where('do_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);

        return view('user.messages.received', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.messages.create');
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
        Session::flash('success', 'Wiadomość została wysłana poprawnie');
        return redirect()->route('messages.received');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Messages $messages)
    {
        return view('user.messages.show', compact('messages'));
    }
}
