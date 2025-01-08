<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Topic Listing Bootstrap 5 Template</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="{{asset ('frontend/asset')}}/https://fonts.googleapis.com">
        
        <link rel="preconnect" href="{{asset ('frontend/asset')}}/https://fonts.gstatic.com" crossorigin>

        <link href="{{asset ('frontend/asset')}}/https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="{{asset ('frontend/asset')}}/css/bootstrap.min.css" rel="stylesheet">

        <link href="{{asset ('frontend/asset')}}/css/bootstrap-icons.css" rel="stylesheet">

        <link href="{{asset ('frontend/asset')}}/css/templatemo-topic-listing.css" rel="stylesheet">      
<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    </head>
    
    <body id="top">

        <main>

            @include('backend.layout.navbar')
            @yield('content')



        <!-- JAVASCRIPT FILES -->
        <script src="{{asset ('frontend/asset')}}/js/jquery.min.js"></script>
        <script src="{{asset ('frontend/asset')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset ('frontend/asset')}}/js/jquery.sticky.js"></script>
        <script src="{{asset ('frontend/asset')}}/js/click-scroll.js"></script>
        <script src="{{asset ('frontend/asset')}}/js/custom.js"></script>

    </body>
</html>

