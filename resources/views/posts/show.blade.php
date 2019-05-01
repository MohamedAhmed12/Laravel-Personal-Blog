@extends('layouts.app')

@section('content')
    <h1 class="mt-3">{{$post->title}}</h1>
    <img class="img-fluid w-50 mt-3 mb-3" alt="Responsive image" src="{{url('storage/cover_images/' . $post->cover_image)}}">
    
    <div class="lead mt-4 mb-4">  
        <!-- I used this brackets here and not regular so it parase the HTML code and not treat it like normal text  -->
        {!!$post->body!!} 
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by <b>{{$post->user->name}}</b></small>
    <hr>        
    
    <!-- Auth:: or auth()  if is a member and not a guest-->
    @if(!Auth::guest()) 
       
       <!-- if the member logged in is the post writer -->
        @if(Auth::user()->id === $post->user_id)
            <a href="{{url('/posts/' . $post->id . '/edit')}}" class="btn btn-dark d-inline-block mr-2">Edit</a>
            
            <!-- open form and send it by post to destroy controller and with attributes-->
            {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class'=> 'pull-right d-inline-block'])!!}
               
                {{Form::hidden('_method', 'DELETE')}}<!-- spoofing delete request like faking post to be delete-->
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}<!-- submit(value of the btn, style)-->
                
            {!!Form::close()!!}<!-- close the form -->
            
        @endif
       
    @endif
    
@endsection('content')
