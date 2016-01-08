<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Blog</title>

    {{-- link tag for bootstap and css go above top-script --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome-4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Fugaz+One|Lobster|Shadows+Into+Light' rel='stylesheet' type='text/css'>
    @yield('top-script')
</head>
<body>
    <nav class="navbar navbar-default" id="navbar-example" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/resume">My Resume</a></li>
                    <li><a href="#abilities">Abilities</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    @yield('content')


    {{-- script tags for jquery and bootstrap go above bottom script--}}
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="/view/js/script.js"></script>
    <script type="text/javascript" src="/view/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
    @yield('bottom-script')
</body>
</html>