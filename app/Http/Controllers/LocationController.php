<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $locations = \Auth::user()
            ->locations()
            ->orderBy('name')
            ->simplePaginate(10);

        return view('locations.index', compact('locations'));
    }

    public function create()
    {
        return view('locations.create');
    }

    public function store(LocationRequest $request)
    {
        $location = new \App\Location($request->all());
        \Auth::user()->locations()->save($location);
        \Session::flash('flash_message', 'Location has been created.');

        return redirect('locations');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $location = \App\Location::findOrFail($id);

        return view('locations.edit', compact('location'));
    }

    public function update(LocationRequest $request, $id)
    {
        $location = \App\Location::findOrFail($id);
        $location->update($request->all());
        \Session::flash('flash_message', 'Location has been updated.');

        return redirect('locations');
    }

    public function destroy($id)
    {
        $location = \App\Location::FindOrFail($id);
        $location->delete();
        \Session::flash('flash_message', 'Location has been deleted.');

        return redirect('locations');
    }
}
