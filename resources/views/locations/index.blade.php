@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="table-responsive">

                <p>
                    <a class="btn btn-primary" href="{{ url('/locations/create') }}" role="button">Add New</a>
                </p>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($locations as $location)
                        <tr>
                            <td>{{ $location->name }}</td>
                            <td>{{ $location->address }}</td>
                            <td><a class="btn btn-primary btn-sm" href="{{ action('LocationController@edit', $location->id) }}">Edit</a></td>
                            <td>
                                {!! Form::open(['action' => ['LocationController@destroy', $location->id]]) !!}
                                    {!! Form::hidden('_method', 'DELETE') !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {!! $locations->render() !!}
            </div>
        </div>
    </div>
@endsection
