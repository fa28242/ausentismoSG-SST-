@extends('adminlte::page')

@section('title', 'HOME')

@section('content_header')
    <h1>Bienvenido</h1>
@stop

@section('content')


    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cards Hover2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
        crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <div class="icon">
                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <h3>
                            <a href="https://www.linkedin.com/in/adamdipinto/" target="_blank">_adamdipinto</a>
                        </h3>
                        <p>This is where I network and build my professional protfolio.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <div class="icon">
                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <h3>
                            <a href="https://twitter.com/AdamDipinto" target="_blank">@AdamDipinto</a>
                        </h3>
                        <p>This is where I read news and network with different social groups.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <div class="icon">
                            <i class="fa fa-github-square" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <h3>
                            <a href="https://github.com/atom888" target="_blank">atom888</a>
                        </h3>
                        <p>This is where I share code and work on projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>

@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/homeStyle.css') }}">
    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop