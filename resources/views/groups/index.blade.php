@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="table-responsive">

                <p>
                    <a class="btn btn-primary" href="{{ url('/groups/create') }}" role="button">Add New</a>
                </p>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($groups as $group)
                        <tr>
                            <td>{{ $group->name }}</td>
                            <td><a class="btn btn-primary btn-sm" href="{{ action('GroupController@edit', $group->id) }}">Edit</a></td>
                            <td>
                                {!! Form::open(['action' => ['GroupController@destroy', $group->id]]) !!}
                                    {!! Form::hidden('_method', 'DELETE') !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {!! $groups->render() !!}
            </div>
        </div>
    </div>
@endsection
