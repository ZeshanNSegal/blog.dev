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
    @yield('content')


    {{-- script tags for jquery and bootstrap go above bottom script--}}
    <script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
    @yield('bottom-script')
</body>
</html>