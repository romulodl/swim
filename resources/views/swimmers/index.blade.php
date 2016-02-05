@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="table-responsive">

                <p>
                    <a class="btn btn-primary" href="{{ url('/swimmers/create') }}" role="button">Add New</a>
                </p>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date of Birth</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($swimmers as $swimmer)
                        <tr>
                            <td>{{ $swimmer->name }}</td>
                            <td>{{ $swimmer->email }}</td>
                            <td>{{ $swimmer->birth }}</td>
                            <td><a class="btn btn-primary btn-sm" href="{{ action('SwimmerController@edit', $swimmer->id) }}">Edit</a></td>
                            <td>
                                {!! Form::open(['action' => ['SwimmerController@destroy', $swimmer->id]]) !!}
                                    {!! Form::hidden('_method', 'DELETE') !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {!! $swimmers->render() !!}
            </div>
        </div>
    </div>
@endsection
