@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <p>
                <a class="btn btn-primary" href="{{ url('locations') }}" role="button">Return to list</a>
            </p>
            <div class="table-responsive">

            {!! Form::open(['action' => 'LocationController@store']) !!}
                @include('locations._form', ['submitButtonText' => 'Add New Location'])
            {!! Form::close() !!}

            @include('errors.list')

            </div>
        </div>
    </div>
@endsection
