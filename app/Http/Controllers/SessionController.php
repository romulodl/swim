<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionRequest;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sessions = \Auth::user()
            ->sessions()
            ->orderBy('date', 'desc')
            ->simplePaginate(10);

        return view('sessions.index', compact('sessions'));
    }

    public function create()
    {
        $locations = \Auth::user()->locations->lists('name', 'id');

        return view('sessions.create', compact('locations'));
    }

    public function store(SessionRequest $request)
    {
        $session = new \App\Session($request->all());
        \Auth::user()->sessions()->save($session);
        \Session::flash('flash_message', 'Session has been created.');

        return redirect('sessions');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $locations = \Auth::user()->locations->lists('name', 'id');
        $session = \App\Session::findOrFail($id);

        return view('sessions.edit', compact('session', 'locations'));
    }

    public function update(SessionRequest $request, $id)
    {
        $session = \App\Session::findOrFail($id);
        $session->update($request->all());
        \Session::flash('flash_message', 'Session has been updated.');

        return redirect('sessions');
    }

    public function destroy($id)
    {
        $session = \App\Session::FindOrFail($id);
        $session->delete();
        \Session::flash('flash_message', 'Session has been deleted.');

        return redirect('sessions');
    }
}
