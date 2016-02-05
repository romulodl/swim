@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <p>
                <a class="btn btn-primary" href="{{ url('groups') }}" role="button">Return to list</a>
            </p>
            <div class="table-responsive">

            {!! Form::open(['action' => 'GroupController@store']) !!}
                @include('groups._form', ['submitButtonText' => 'Add New Group'])
            {!! Form::close() !!}

            @include('errors.list')

            </div>
        </div>
    </div>
@endsection
