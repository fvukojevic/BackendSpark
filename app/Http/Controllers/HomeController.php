<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dohvacamo sve korisnike
        $users = User::all();


        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        if($user->role == 'admin')
        {
            return view('profile.home')->with('articles', $user->article)->with('users',$users);
        }
        return redirect('/articles')->with('error','Samo admin može u panel');
    }
}
