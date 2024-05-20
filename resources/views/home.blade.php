<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Atajan</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/splide.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/button.css')}}">
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/splide.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger" aria-label="navbar">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars"
                aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fw-bold px-3" href="{{route('home')}}">HOME</a>
                </li>
                @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link link-light fw-bold px-3"
                           href="{{route('category', $category->id)}}">{{$category->name_tm}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
</body>
</html>