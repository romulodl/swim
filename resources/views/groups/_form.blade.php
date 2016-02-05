<div class="form-group">
{!! Form::label('name', 'Name:') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('swimmer_list', 'Swimmers:') !!}
{!! Form::select('swimmer_list[]', $swimmers, null, ['id' => 'swimmer_list', 'multiple', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit($submitButtonText, null, ['class' => 'btn btn-primary form-control']) !!}
</div>

@section('footer')
    <script>
        $('#swimmer_list').select2();
    </script>
@endsection
