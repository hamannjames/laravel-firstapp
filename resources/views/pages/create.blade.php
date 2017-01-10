@extends('app')

@section('content')

<h1>Create a Page</h1>

{!! Form::open(['url' => 'pages']) !!}
    <div class="form-group">
        {!! Form::label('title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add Page', ['class' => 'btn btn-primary form-control']) !!}
    </div>
{!! Form::close() !!}
@stop
