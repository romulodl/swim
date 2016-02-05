@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <p>
                <a class="btn btn-primary" href="{{ url('swimmers') }}" role="button">Return to list</a>
            </p>
            <div class="table-responsive">

            {!! Form::open(['action' => 'SwimmerController@store']) !!}
                @include('swimmers._form', ['submitButtonText' => 'Add New Swimmer'])
            {!! Form::close() !!}

            @include('errors.list')

            </div>
        </div>
    </div>
@endsection
