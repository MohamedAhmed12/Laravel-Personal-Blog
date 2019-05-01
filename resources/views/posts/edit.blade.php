@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' =>['PostsController@update', $post-> id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
        <div class="form-group">
            <!-- Form::syntax('name', 'value', [form attributes of css style]) -->
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post-> title,['class' => 'form-control', 'placeholder' => 'Title'])}} 
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post-> body,['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Title'])}} 
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <!-- spoofing put request cuz there is no put request at form it's just get or post & the route of PostsController@update need PUT-->
        {{form::hidden('_method', 'PUT')}}
        <!-- n the submit -> Form::attribute('value') -->
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection('content')
