<div class="form-group">
{!! Form::label('name', 'Name:') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('email', 'Email:') !!}
{!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('dob', 'Date of Birth:') !!}
{!! Form::date('dob', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit($submitButtonText, null, ['class' => 'btn btn-primary form-control']) !!}
</div>
