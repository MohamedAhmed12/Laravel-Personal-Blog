@extends('layouts.app')

@section('content')
    <div class="content service">
        <h1 class="text-capitalize" >{{$title}}</h1>
        <div class="title m-b-md">
            <p class="lead ">This are services we offer </p>
            <?php

            if(count($services) > 0 && count($images) > 0){ ?>
                
                    <div class="row">
                        <div class="col-6 pr-0 mt-4">
                            <img src="{{$images[0]}}" class="img-fluid" alt="responsive image">
                        </div>
                        <div class="col-6 pt-4 bg-transparent text-white ">
                            <p class="h1 mt-3">{{$services[0]}}</p>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>
                    </div>
                    
                     <div class="row mt-0">
                        <div class="col-6 pt-4 bg-transparent text-white">
                            <p class="h1 mt-3">{{$services[1]}}</p>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>
                        <div class="col-6 pl-0 pr-0 middle">
                            <img src="{{$images[1]}}" class="img-fluid" alt="responsive image">
                        </div>
                    </div>
                    
                     <div class="row mt-0">
                        <div class="col-6 pr-0">
                            <img src="{{$images[2]}}" class="img-fluid" alt="responsive image">
                        </div>
                        <div class="col-6 pt-4 bg-transparent text-white">
                            <p class="h1 mt-3">{{$services[2]}}</p>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>
                    </div>
                
           <?php  }//end of if functions?>
        </div>
    </div>
@endsection('content')
