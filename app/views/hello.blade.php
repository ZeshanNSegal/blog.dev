<!DOCTYPE html>
<html lang="en">
<head>
	<title>-- ZNS --</title>
	<!-- Bootstrap core CSS -->
	<link href="/css/ionicons.min.css" rel="stylesheet">
	<link href="/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="/css/simple-sidebar.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/blog.css"/>
</head>

<div class="container-fluid">

	<div class="pictureOpacity text-center">
		<img src="img/zees_z.png" class="img-responsive bigZ">
<br>
		<span class="bigSentInPic hidden-sm hidden-xs">Full-Stack Web Developer</span>
	</div> <!--end picOpacity div -->

	<div class="clear"></div>
	<div id="top" class="jumbotron backgroundImg">
		<div class="container lead"></div>
		<div class="overlay"></div>
	</div>

	<div id="profile" class="container">
		<h1><a class="titles" href="{{{ action('HomeController@showResume') }}}">Profile</a></h1>
		<li>Linux/Ubuntu, Apache, MySQL, PHP</li>
		<li>HTML, CSS, JavaScript</li>
		<li>Laravel, Jquery</li>
		<li>MVC, OOD, Rest APIs</li>
		<li>nginx</li>
		<li>Git- Version Control System</li>
		<li>Sublime Text Editor</li>
		<li>Group Projects, Game Design, Web Application Design</li>
	</div>	<!--end profile container-->
</div> <!--end container-fluid-->	

<hr>

	<div class="row">
		<div class="col-md-4 aboutMe">
			<h3 class="titles">About me</h3>
			<p>
				Hey there! I am an all around web developer, focused on object-oriented design. As a junior programmer, I have a good working knowledge of the LAMP Stack. Currently, I am working with Linux/Ubuntu, Apache, PHP, MySQL, and Laravel on the back end. On the front end, I am using HTML, CSS, and JavaScript. Some of my experience includes working on the nginix platform, Model-View-Controller frameworks, REST APIs, AJAX requests, Sublime Text-Editor, and Terminal. I also have experience working with mapping and ArcGIS software. You can see all of my work on <strong><a href="https://github.com/ZeshanNSegal">GitHub</a></strong>, or just click 'About Me' to see my portfolio.		
			</p>
		</div><!--end aboutMe-->

		<div class="col-md-4 text-center">
			<img src="/img/zeeNnik.jpeg" alt="Zee Segal" width="350" height="400" />
		</div>

		<div class="col-md-4">
			<h3 class="titles">Details</h3>
			<p>
				<strong>Name:</strong><br/>
				Zeshan N. Segal<br/>
				<strong>Location:</strong><br/>
				Austin, San Antonio, DFW, Denver, LA, SF, Philadelphia, Mumbai	
			</p>
			
			<a href="https://twitter.com/ZeeSegal" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow @zeesegal</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</div><!--end col-md-4-->
	</div><!--end row-->	
		
<hr>

	<div id="experiences" class="container">
		<h2><a class="titles" href="{{{ action('PostsController@index') }}}"><strong>BLOG POSTS</strong></h2></a>
		
		@foreach($posts as $post)
			<p>Post Created At:	{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS, Y @ h:i A') }}} </p>
			<h2>
				<a href="{{{ action('PostsController@show', ($post->title)) }}}">{{{ $post->title }}}</a>
			</h2>
			<p class="blogBody">{{{ $post->body }}}</p>	
		@endforeach
	</div><!--end of experiences -->

<hr>

	<div id="contact" class="container">
		<h2 class="titles">Contact</h2>
		<p class="lead">
			&ldquo;The meeting of two personalities is like the contact of two chemical substances: if there is any reaction, both are transformed.&rdquo;<br/>- Carl Jung
		</p>
	</div><!-- end of contact -->

	<div class="container faIcons col-md-12">
		<a href="http://linkedin.com/in/zeshan-segal-a987b569" target="_blank">
			<span class="fa fa-linkedin-square"></span>		
		</a>
		<a href="https://github.com/ZeshanNSegal" target="_blank">
			<span class="fa fa-github-square"></span>
		</a>
		<a href="http://linkedin.com/in/zeshan-segal-a987b569" target="_blank">
		</a>
		<a href="mailto:zeshan.segal@gmail.com">
			<span class="fa fa-envelope"></span>						
		<a href="http://twitter.com/ZeeSegal" target="_blank">
			<span class="fa fa-twitter-square"></span>
		</a>
		{{-- <span class="fa fa-file-text"></span> --}}
	</div> <!-- container faIcon -->

<hr>

{{-- <div class="text-center">
	<a href="https://twitter.com/share" class="twitter-share-button" data-url="https://twitter.com/ZeeSegal" data-via="zeshansegal">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>
 --}}

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>