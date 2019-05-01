    @extends('layouts.app')

@section('content')
    <h1 class="text-light mt-3 mb-4 text-center font-weight-bold">posts</h1>
    <!--    Start POsts-->
   @if(count($posts) > 0 )
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
    @else
        <p>No posts found</p>
    @endif
@endsection('content')
