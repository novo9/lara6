<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Blog Post - Start Bootstrap Template</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="{{asset('/css/blog-post.css')}}" rel="stylesheet">

    </head>
    <body>

        @include('partials.navigation')     <!-- Navigation -->


        <!-- Page Content -->
        <div class="container">

            <div class="row">
                @yield('content')
                @include('partials.sidebar')<!-- Content -->
            </div>


        </div>
            @include('partials.footer')     <!-- Footer -->
        </body>

</html>
