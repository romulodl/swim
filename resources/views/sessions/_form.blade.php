<div class="form-group">
{!! Form::label('title', 'Title:') !!}
{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('description', 'Session Description:') !!}
{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('date', 'Date:') !!}
{!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('start_time', 'Start Time:') !!}
{!! Form::time('start_time', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('finish_time', 'Finish Time:') !!}
{!! Form::time('finish_time', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('location_id', 'Location:') !!}
{!! Form::select('location_id', $locations, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('related_videos', 'Related Videos:') !!}
{!! Form::textarea('related_videos', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit($submitButtonText, null, ['class' => 'btn btn-primary form-control']) !!}
</div>
