@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Dashboard</h1>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button type="submit"  href="posts/create" class="btn mb-1">
                           <a href="posts/create" class="text-light p-2 text-decoration-none"> Create Post</a>
                    </button>
                    
                    <h3 class="mt-5 mb-4">Your Blog Posts</h3>
                        
                    <!--   Start Posts     -->
                    @foreach($posts as $post)

                    <div class="card mb-3 border-0" style="max-width: 70rem;">
                      <div class="row no-gutters bg-transparent rounded">
                        <!--  Post Image-->
                        <div class="col-md-4">
                           <a href="posts/{{$post->id}}">
                             <img style="width:100%; max-height:250px" src="{{url('storage/cover_images/' . $post->cover_image)}}"/>
                          </a> 
                        </div>
                        <!--  Post Text-->
                        <div class="col-md-8 ">
                          <div class="card-body border-left-0">
                            <h3><a href="posts/{{$post->id}}" class="text-light text-decoration-none">{{$post->title}}</a></h3>
                          </div>
                        </div>

                      </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
