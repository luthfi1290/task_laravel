<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larapus</title>

    <!-- link css -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">LARAPUS</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="{{ route('author.index') }}"> Author</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
            
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading" > @yield('panel_heading')</div>
            <div class="panel-body">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- script file -->
    <script src="/js/app.js"></script>
</body>
</html>