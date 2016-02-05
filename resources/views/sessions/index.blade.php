@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="table-responsive">

                <p>
                    <a class="btn btn-primary" href="{{ url('/sessions/create') }}" role="button">Create New</a>
                </p>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Start</th>
                            <th>Finish</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($sessions as $session)
                        <tr>
                            <td>{{ $session->title }}</td>
                            <td>{{ $session->session_date }}</td>
                            <td>{{ $session->start_time }}</td>
                            <td>{{ $session->finish_time }}</td>
                            <td><a class="btn btn-primary btn-sm" href="{{ action('SessionController@edit', $session->id) }}">Edit</a></td>
                            <td>
                                {!! Form::open(['action' => ['SessionController@destroy', $session->id]]) !!}
                                    {!! Form::hidden('_method', 'DELETE') !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {!! $sessions->render() !!}
            </div>
        </div>
    </div>
@endsection
