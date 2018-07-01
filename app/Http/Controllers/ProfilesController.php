<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Cart;
use Session;
use Auth;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('profile.myprofile');
    }

    public function orders(){
      $orders = Auth::user()->orders;
      $orders->transform(function($order,$key){
        $order->cart = unserialize($order->cart);
        return $order;
      });
      return view('profile.orders')->with('orders', $orders);
    }

    public function reset($id)
    {
      return view('profile.reset');
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
        return view('profile.edit');
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
      $this->validate($request,[
       'name' => 'required',
       'email' => 'required',
    ]);

    $user = User::find($id);
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->save();

    return redirect('/profile')->with('success', 'Profile Updated');
    }

    public function pwdupdate(Request $request,$id)
    {
      $this->validate($request,[
      'oldpwd' => 'required',
      'newpwd' => 'required'
      ]);
      $user = User::find($id);
      $oldpwd = $user->password;

      if (Hash::check($request->oldpwd, $oldpwd)) {
      $user->password = Hash::make($request->newpwd);
      $user->save();
      return redirect('/profile')->with('success', 'Password changed');
      }
      else
        return redirect('/profile')->with('error', 'Passwords did not match');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();

      return redirect('/home')->with('success', 'Korisnik je obrisan');
    }


}
