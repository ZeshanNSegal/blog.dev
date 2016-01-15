<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>--ZNS--</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Bootstrap Core CSS -->
    <link href="/css/ionicons.min.css" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link href="/css/simple-sidebar.css" rel="stylesheet">
    <link rel="icon" type="image/jpeg" href="img/faviconz1.jpeg">
    <link rel="stylesheet" href="/css/blog.css"/>

@yield('top-script')
</head>

<body>
<div class="container-fluid">
    <div id="wrapper" class="toggled"><!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="/">HOME PAGE</a>
                </li>
                <li>
                    <a href="/resume">RESUME</a>
                </li>
                <li>
                    <a href="/portfolio">PORTFOLIO</a>
                </li>
                <li>
                    <a href="/blog">BLOG</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                @if(!Auth::check())
                    <li><a href="{{{ action('HomeController@getLogin') }}}">Login</a></li>
                @else    
                    <li><a href="{{{ action('HomeController@getLogout') }}}">Logout</a></li>
                @endif    
            <ul>    
            </ul>

        </div><!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-12">
    <div>                        
        <div>
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
        </div><!-- /#page-content-wrapper -->
    </div><!-- /#wrapper -->
</div> <!-- end container-fluid--> 

    @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif        
@yield('content') 

<hr class="footerLineBreak" />
<footer class="footer">
        <div class="row">
            <div class= "footer_container">
                <div class="container faIcons col-md-12">
                    <a href="http://linkedin.com/in/zeshan-segal-a987b569" target="_blank">
                        <span class="fa fa-linkedin-square"></span>            
                    </a>
                    <a href="https://github.com/ZeshanNSegal" target="_blank">
                        <span class="fa fa-github-square"></span> 
                    </a>
                    <a href="mailto:zeshan.segal@gmail.com">
                        <span class="fa fa-envelope"></span>                
                    </a>
                    <a href="http://twitter.com/ZeeSegal" target="_blank">
                        <i class="fa fa-twitter-square"></i>
                    </a>
                    <span class="fa fa-file-text"></span>
                </div> <!-- container faIcon -->
            </div> <!--end of  class="row"-->
        </div> <!-- end of class= "footer_container"-->        
</footer>

{{-- script tags for jquery and bootstrap go above bottom script--}}
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>
@yield('bottom-script')

</body>
</html>