<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupRequest;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $groups = \Auth::user()
            ->groups()
            ->orderBy('name')
            ->simplePaginate(10);

        return view('groups.index', compact('groups'));
    }

    public function create()
    {
        $swimmers = \App\Swimmer::lists('name', 'id');
        return view('groups.create', compact('swimmers'));
    }

    public function store(GroupRequest $request)
    {
        $group = \Auth::user()->groups()->create($request->all());
        $group->swimmers()->attach($request->get('swimmer_list'));
        \Session::flash('flash_message', 'Group has been created.');

        return redirect('groups');
    }

    public function edit($id)
    {
        $swimmers = \App\Swimmer::lists('name', 'id');
        $group = \App\Group::findOrFail($id);

        return view('groups.edit', compact('group', 'swimmers'));
    }

    public function update(GroupRequest $request, $id)
    {
        $group = \App\Group::findOrFail($id);
        $group->update($request->all());
        $group->swimmers()->sync($request->get('swimmer_list'));
        \Session::flash('flash_message', 'Group has been updated.');

        return redirect('groups');
    }

    public function destroy($id)
    {
        $group = \App\Group::FindOrFail($id);
        $group->delete();
        \Session::flash('flash_message', 'Group has been deleted.');

        return redirect('groups');
    }
}
