@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <p>
                <a class="btn btn-primary" href="{{ url('sessions') }}" role="button">Return to list</a>
            </p>
            <div class="table-responsive">

            {!! Form::open(['action' => 'SessionController@store']) !!}
                @include('sessions._form', ['submitButtonText' => 'Create Session'])
            {!! Form::close() !!}

            @include('errors.list')

            </div>
        </div>
    </div>
@endsection
