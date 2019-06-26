<?php

namespace App\Http\Controllers;

use App\Game;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use Auth;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $games = Game::all();
        return view('apply.create',compact('games'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = new Message();
        $message->email = auth()->user()->email;
        $message->name = $request['name'];
        $message->age = $request['age'];
        $message->game_id = $request['game_id'];
        $message->country = $request['country'];
        $message->body = $request['body'];
        $message->skills = $request['skills'];
        $message->user_id = auth()->id();
        $message->save();
        return redirect()->route('fapply.final')->with('message','We`ll message you once we approve your submission');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function final()
    {
       $initial_user_info = User::with('messages.game')->find(auth()->id());
       $game_name = $initial_user_info->messages[0]->game->name; // jeez what a fix
        return view('apply.final',compact('game_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
