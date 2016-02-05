@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <p>
                <a class="btn btn-primary" href="{{ url('groups') }}" role="button">Return to list</a>
            </p>
            <div class="table-responsive">

            {!! Form::model($group, ['method' => 'PATCH', 'action' => ['GroupController@update', $group->id]]) !!}
                @include('groups._form', ['submitButtonText' => 'Edit Group'])
            {!! Form::close() !!}

            @include('errors.list')

            </div>
        </div>
    </div>
@endsection
