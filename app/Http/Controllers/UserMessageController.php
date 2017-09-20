<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use Auth;

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
    public function index()
    {
        $messages = Messages::where('do_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
        $messages2 = Messages::where('od_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(5);

        return view('user.messages.index', compact('messages', 'messages2'));
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
}
