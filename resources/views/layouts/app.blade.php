<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="h-100">
  <?php if( isset($bg_img) == 1 && $title != 'Service'){// if there is $title and $bg0img put overlay and background image?>
    
   <div id="app" class="h-100" style="background: url('{{ asset("images/" . $bg_img) }} ') no-repeat center">
     
        <!--      Overlay Layer-->
        <div class="overlay"></div>
    
<?php }else{ ?>
      
      <div id="app">
      
 <?php  } //end else?>
       
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
        </div>
        <div class="container">
            @yield('content')
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> <!-- asset('') call out the path of the project (project/public/) directory -->
    <script src="{{url('/..') . ('/node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {  
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );
    </script> 
</body>
</html>