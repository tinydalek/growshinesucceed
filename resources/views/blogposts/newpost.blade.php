@extends('layouts.layout')

@section('content')

    <div>
        
        <h1>Write a New Blog Post</h1>

        {!! Form::open() !!}

            <div class="form-group row">
                {!!  Form::label('title', 'Title:', ['class' => 'col-sm-2 col-md-2 control-label']) !!}             
                {!!  Form::text('title', null, ['class' => 'col-sm-10 col-md-7 form-control']) !!}
            </div>

            <div class="form-group row">
                {!!  Form::label('body', 'Body:', ['class' => 'col-sm-2 col-md-2 control-label']) !!}             
                {!!  Form::textarea('body', null, ['class' => 'col-sm-10 col-md-7 form-control']) !!}
            </div>

            <div class="form-group row">
                {!!  Form::label('author', 'Author:', ['class' => 'col-sm-2 col-md-2 control-label']) !!}             
                {!!  Form::text('author', null, ['class' => 'col-sm-10 col-md-7 form-control']) !!}
            </div>

            <div class="form-group">
                {!!  Form::label('', '', ['class' => 'col-sm-2 col-md-2 control-label']) !!} 
                {!! Form::submit('Add Post', ['class' => 'col-sm-10 col-md-7 btn btn-info form-control']) !!}
            </div>

        {!! Form::close() !!}

    </div>

@endsection