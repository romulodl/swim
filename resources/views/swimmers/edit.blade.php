@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <p>
                <a class="btn btn-primary" href="{{ url('swimmers') }}" role="button">Return to list</a>
            </p>
            <div class="table-responsive">

            {!! Form::model($swimmer, ['method' => 'PATCH', 'action' => ['SwimmerController@update', $swimmer->id]]) !!}
                @include('swimmers._form', ['submitButtonText' => 'Edit Swimmer'])
            {!! Form::close() !!}

            @include('errors.list')

            </div>
        </div>
    </div>
@endsection
