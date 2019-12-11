<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name')}}</title>
        </head>
        <body>
            @include('inc.navbar')

            <div class="container">
          @include('inc.messeges')
        @yield('content')

            </div>
            <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'article-ckeditor' );
            </script>
        
    </body>
</html>


<ul class="navbar-nav mr-auto">
        &nbsp;
       </ul>
       <ul class="nav navbar-nav">
        <li class="nav-item active">
           <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
       </li>
       
       <li class="nav-item">
           <a class="nav-link" href="/about">About</a>
       </li>
       <li class="nav-item">
           <a class="nav-link " href="/services">Services</a>
       </li>
       <li class="nav-item">
               <a class="nav-link " href="/posts">Blog</a>
           </li>
       </ul>