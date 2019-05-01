@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' =>'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            <!-- Form::syntax('name', 'value', [form attributes of css style]) -->
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '',['class' => 'form-control', 'placeholder' => 'Title'])}} 
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '',['id' => '', 'class' => 'form-control', 'placeholder' => 'Body of the Post'])}} 
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <!-- n the submit -> Form::attribute('value') -->
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection('content')
