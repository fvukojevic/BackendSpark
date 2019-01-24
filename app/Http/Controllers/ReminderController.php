<?php

namespace App\Http\Controllers;

use App\Reminder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ReminderController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(){

        $reminder = new Reminder();

        $this->validate(request(),[

            'name' => 'required'
        ]);

        $reminder->name = request('name');
        $reminder->save();

        return back();

    }


    public function show(Reminder $reminder)
    {
        //
    }


    public function edit($id)
    {
        $reminder = Reminder::findOrFail($id);
        return view('admin.editReminder', compact('reminder'));
    }


    public function update($id, Request $request)
    {

        $reminder = Reminder::findOrFail($id);
        $reminder->update($request->all());

        Session::flash('flash_message', 'Podjestnik uspješno uređen!');
        return back();
    }


    public function destroy($id)
    {
        $reminder = Reminder::findOrFail($id);
        $reminder->delete();
        return back();

    }
}
