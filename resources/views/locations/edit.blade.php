@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <p>
                <a class="btn btn-primary" href="{{ url('locations') }}" role="button">Return to list</a>
            </p>
            <div class="table-responsive">

            {!! Form::model($location, ['method' => 'PATCH', 'action' => ['LocationController@update', $location->id]]) !!}
                @include('locations._form', ['submitButtonText' => 'Edit Location'])
            {!! Form::close() !!}

            @include('errors.list')

            </div>
        </div>
    </div>
@endsection
