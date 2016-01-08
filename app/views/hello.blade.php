@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-script-type" content="text/javascript" />
		<meta http-equiv="content-style-type" content="text/css" />
		<meta http-equiv="content-language" content="nl" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<meta name="author" content="Zeshan -Zee- Segal" />	
		<meta name="description" content="I'm Zeshan -Zee- Segal a ninja webdeveloper / creative programmer with good knowledge of front-end technics." />
		<meta name="keywords" content="Zeshan -Zee- Segal Interactive Resume, PHP programmer, Web developer, Startup, Interactive CV, Resume, CV, Algorithms, PHP, MySQL," />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="14 days" />
			
		<title>Zeshan -Zee- Segal - Full Stack Web Developer - Interactive Resume</title>
		
		<!-- Bootstrap core CSS -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css" />
		<link href="/view/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/view/style.css" rel="stylesheet" />
		
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="icon" href="/favicon.ico" type="image/x-icon" />
		
		<!-- Begin Inspectlet Embed Code -->
		// <script type="text/javascript" id="inspectletjs">
			window.__insp = window.__insp || [];
			__insp.push(['wid', 92785244]);
			(function() {
				function __ldinsp(){var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://www.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); }
				if (window.attachEvent){
					window.attachEvent('onload', __ldinsp);
				}else{
					window.addEventListener('load', __ldinsp, false);
				}
			})();
		</script>
		<!-- End Inspectlet Embed Code -->
	</head>
	<body data-spy="scroll" data-target="#navbar-example">	
		
		<div id="top" class="jumbotron" data-src="/view/images/coffee_animation.gif" data-position="center center">
			<div class="container">
				<h1>Zeshan N. Segal</h1>
				<p class="lead">Interactive resume</p>
			</div>
			
			<div class="overlay"></div>
			
			<a href="/" class="scroll-down">	
				<span class="glyphicon glyphicon-chevron-down"></span>
			</a>
		</div>
		
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
					<li><a href="/">Hello</a></li>
					<li><a href="#resume">Resume</a></li>
					<li><a href="#abilities">Abilities</a></li>
					<li><a href="#projects">Projects</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
		
		<div class="background-white">
			<div id="profile" class="container">
				<h2>Profile</h2>
			<p class="lead">I&#039;m a Full Stack Developer</p>

<hr/>

<div class="row">
	<div class="col-md-4">
		<h3>About me</h3>
		<p>
			I am an all around web developer. I am a junior programmer with good knowledge of front-end techniques. I love structure and order and I also stand for quality. I love spending time on fixing little details and optimizing web apps. Also I like working in a team, you'll learn faster and more. As the saying goes: 'two heads are better than one'.		
		</p>
	</div>
	<div class="col-md-4 text-center">
		<img src="/public/img/downtownATX.jpeg" alt="Zee Segal" width="246" height="246" />
	</div>
	<div class="col-md-4">
		<h3>Details</h3>
		<p>
			<strong>Name:</strong><br/>
			Zeshan N. Segal<br/>
			<strong>Age:</strong><br/>
			29 years<br/>
			<strong>Location:</strong><br/>
			Austin, San Antonio, Dallas, Fort Worth, Denver, LA, SF, Philadelphia- USA, Earth	
		</p>
		
		<a href="https://twitter.com/zeebeepants" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow @zeebeepants</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	</div>
</div>	
		
		<div id="experiences" class="container">
			<h2>Experiences</h2>
			<p class="lead">
				&ldquo;Protons give an atom its identity, electrons its personality.&rdquo;<br/>- Bill Bryson, A short history of nearly everything
			</p>

<hr/>

{{-- <h3>Education</h3>

<div class="experiences">			
	<div class="experience row">
		<div class="col-md-4">
			<h4>Texas State University-San Marcos</h4>
			<p class="experience-period">
				Aug 2000 - May 2004</p>
		</div>
		<div class="col-md-8">
			<p>
				<strong>Course - Gamification (course)</strong>
				<span class="hidden-phone">
					Gamification is the application of game elements and digital game design techniques to non-game problems, such as business and social impact challenges. This course thought me about the mechanisms of gamification, why it has such tremendous potential, and how to use it effectively.				
				</span>
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						Online					
					</span>
				</span>
			</p>
		</div>
	</div>
					
	<div class="experience row">
		<div class="col-md-4">
			<h4>Lamar High School</h4>
			<p class="experience-period">
				Aug 1995 - Jun 1998
			</p>
		</div>
		<div class="col-md-8">
			<p>
				<strong>Bachelor of Science -Geography (Specialization: Water Resource Management)</strong>
				<span class="hidden-phone">
					The education was mainly Java-based programming, but I also learned about SQL, PHP, MVC, UML and more. During my time in college, I specialized in multimedia. Here I learned about gaming -the importance of OOP-, web- and user experience and design.				
				</span>
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						's-Hertogenbosch					
					</span>
				</span>
			</p>
		</div>
	</div>
	
					
	<div class="experience row">
		<div class="col-md-4">
			<h4>Rodenborch</h4>
			<p class="experience-period">
				Aug 1999 - Jun 2004			
			</p>
		</div>
		<div class="col-md-8">
			<p>
				<strong>Highschool - Havo (Nature/Technics & Nature/Health)</strong>
				<span class="hidden-phone">
					I graduated highschool, where I enjoyed doing science, math, biology and arts. I realized in my third year of school that I wanted to do something with websites, and so I started making small flash/actionscript applications.				</span>
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						Rosmalen					
					</span>
				</span>
			</p>
		</div>
	</div>	
</div>

<hr/>

<h3>Careers</h3>

<div class="experiences">
				
	<div class="experience row">
		<div class="col-md-4">
			<h4>Caviar Digital</h4>
			<p class="experience-period">
				Feb 2015 - Jul 2015
			</p>
		</div>
		<div class="col-md-8">
			<p>
				<strong>Fulltime - Creative Developer</strong>
				<span class="hidden-phone">
					Caviar Digital is a digital agency based in Amsterdam. I worked here as a creative developer on a big project for the new Samsung Galaxy S6 / S6 edge and created a configurable CMS based on the Laravel Framework. Due to economically reasons it was a short but good experience.				
				</span>
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						Amsterdam					
					</span>
					
										
					<span class="seperator">|</span>
					<span class="link">
						<span class="glyphicon glyphicon-link"></span>
						<a href="http://digital.caviarcontent.com/" target="_blank">http://digital.caviarcontent.com/</a>
					</span>						
				</span>
			</p>
		</div>
	</div>
					
	<div class="experience row">
		<div class="col-md-4">
			<h4>Whoopaa / HRMatches</h4>
			<p class="experience-period">
				Apr 2011 - Jan 2015			
			</p>
		</div>
		<div class="col-md-8">
			<p>
				<strong>Fulltime - Lead Developer</strong>
				<span class="hidden-phone">
					Whoopaa is a startup that began as a social network where users were able to separate their business- and personal social life. As this idea didn't exactly take off the way we expected it to, we changed the idea. We began a job matching platform, where Whoopaa became the place for job seekers to make an interactive CV enriched with certified tests. The place where companies can create job openings and efficiently find the right candidates needed a name as well, and was called HRMatches. I developed an own framework, which I improved in user experience and speed after the big idea change. I also developed the real time match algorithm as well as a lot of other helpful algorithms.	
				</span>
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						's-Hertogenbosch					
					</span>
					
										
					<span class="seperator">|</span>
					<span class="link">
						<span class="glyphicon glyphicon-link"></span>
						<a href="http://www.whoopaa.com/" target="_blank">http://www.whoopaa.com/</a>
					</span>						
				</span>
			</p>
		</div>
	</div>
	
					
	<div class="experience row">
		<div class="col-md-4">
			<h4>C2K internet solutions</h4>
			<p class="experience-period">
				Sep 2008				- Mar 2011			</p>
		</div>
		<div class="col-md-8">
			<p>
				<strong>Fulltime - Lead Developer</strong>
				<span class="hidden-phone">
					Right after I graduated, I started working for C2K: a full service internet agency. I developed a homemade CMS, CRM and e-mail marketing system. The CMS was used for a dozens of clients, as well as the e-mail marketing system. I also did a lot of custom made web sites/applications. Later on I also developed Layars like: Conquar (a digital adaption of the board game of Risk) and Gowalla (based on Gowalla's API). C2K no longer exists.				</span>
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						Eindhoven / 's-Hertogenbosch					
					</span>			
				</span>
			</p>
		</div>
	</div>
	
					
	<div class="experience row">
		<div class="col-md-4">
			<h4>Davinci Advies Groep</h4>
			<p class="experience-period">
				Feb 2008 - Jul 2008			
			</p>
		</div>
		<div class="col-md-8">
			<p>
				<strong>Graduate Internship - ICT Consultant</strong>
				<span class="hidden-phone">
					My second internship and the place I eventually graduated, was at Davinci. I investigated new web-technologies they could possibly use to improve the front-end of their java-based CRM system. I compared technologies such as Adobe Flex, Silverlight, Ruby on Rails together, to find out which could work best for the company. Based on the results of my research, the company eventually decided to use the ZK Framework.				</span>
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						Amsterdam					
					</span>
									
					<span class="seperator">|</span>
					<span class="link">
						<span class="glyphicon glyphicon-link"></span>
						<a href="http://www.davincigroep.nl/" target="_blank">http://www.davincigroep.nl/</a>
					</span>					
				</span>
			</p>
		</div>
	</div>
	
					
	<div class="experience row">
		<div class="col-md-4">
			<h4>Sanitairwinkel.nl</h4>
			<p class="experience-period">
				Oct 2007 - Jun 2008			
			</p>
		</div>
		<div class="col-md-8">
			<p>
				<strong>Part-time - Webdeveloper</strong>
				<span class="hidden-phone">
					At sanitairwinkel.nl, I improved/expanded the current webapplication and re-factored the code. I also created a brand new back-end system and improved the front-end by giving it a new look and feel. I also improved the website's SEO. 
				</span>
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						Rosmalen					
					</span>
									
					<span class="seperator">|</span>
					<span class="link">
						<span class="glyphicon glyphicon-link"></span>
						<a href="http://www.sanitairwinkel.nl/" target="_blank">http://www.sanitairwinkel.nl/</a>
					</span>				
				</span>
			</p>
		</div>
	</div>
	
					
	<div class="experience row">
		<div class="col-md-4">
			<h4>Goomla.com</h4>
			<p class="experience-period">
				Jan 2007 - Sep 2007			
			</p>
		</div>
		<div class="col-md-8">
			<p>
				<strong>Part-time - PHP Developer</strong>
				<span class="hidden-phone">
					After my internship ended I was asked to stay as part-time employee. Goomla became partner of the year of Bol.com. In October 2007 Goomla was sold to Daisycon.				
				</span>
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						Eindhoven					
					</span>					
				</span>
			</p>
		</div>
	</div>
	
					
	<div class="experience row">
		<div class="col-md-4">
			<h4>Goomla.com</h4>
			<p class="experience-period">
				Aug 2006 - Jan 2007			
			</p>
		</div>
		<div class="col-md-8">
			<p>
				<strong>Internship - PHP Developer</strong>
				<span class="hidden-phone">
					I did my first internship at a company named Goomla. There I learned to apply my knowledge of PHP. Goomla was a shopping/comparison-site, with more than 100 affiliates including bol.com, wehkamp, neckermann, to name a few.			
				</span>
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						Eindhoven					
					</span>						
				</span>
			</p>
		</div>
	</div>	
</div> --}}
	
		<div class="background-white">
			<div id="abilities" class="container">
				<h2>Abilities</h2>
			<p class="lead">
				&ldquo;Life without knowledge is death in disguise.&rdquo;<br/>- Talib Kweli
			</p>
<hr/>

{{-- 		<h3>Skills</h3>

		<div class="row">
			<div class="col-md-6">
				<ul class="no-bullets">
				<li>
					<span class="ability-title">CSS(3)</span>
					<span class="ability-score">			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>		
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>				
					</span>
				</li>

				<li>
					<span class="ability-title">HTML(5)</span>
					<span class="ability-score">			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>		
						<span class="glyphicon glyphicon-star filled"></span>		
						<span class="glyphicon glyphicon-star filled"></span>			
					</span>
				</li>
					
				<li>
					<span class="ability-title">JSON</span>
					<span class="ability-score">			
						<span class="glyphicon glyphicon-star filled"></span>		
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>				
					</span>
				</li>
				
						
					
				<li>
					<span class="ability-title">MySQL</span>
					<span class="ability-score">		
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>		
						<span class="glyphicon glyphicon-star filled"></span>		
						<span class="glyphicon glyphicon-star filled"></span>				
					</span>
				</li>	
					
				<li>
					<span class="ability-title">PHP</span>
					<span class="ability-score">			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>				
					</span>
				</li>

				<li>
					<span class="ability-title">XML</span>
					<span class="ability-score">		
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>		
						<span class="glyphicon glyphicon-star filled"></span>		
						<span class="glyphicon glyphicon-star filled"></span>					
					</span>
				</li>

				<li>
					<span class="ability-title">Bootstrap Framework</span>
					<span class="ability-score">		
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>		
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star "></span>				
					</span>
				</li>
					
				<li>
					<span class="ability-title">Builder Pattern</span>
					<span class="ability-score">			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>		
						<span class="glyphicon glyphicon-star filled"></span>		
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star "></span>				
					</span>
				</li>	
					
				<li>
					<span class="ability-title">Command line</span>
					<span class="ability-score">		
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>		
						<span class="glyphicon glyphicon-star "></span>				
					</span>
				</li>

				<li>
					<span class="ability-title">JQuery</span>
					<span class="ability-score">
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>		
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star "></span>					
					</span>
				</li>
		
				<li>
					<span class="ability-title">Java</span>
					<span class="ability-score">			
						<span class="glyphicon glyphicon-star filled"></span>		
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>		
						<span class="glyphicon glyphicon-star filled"></span>		
						<span class="glyphicon glyphicon-star "></span>				
					</span>
				</li>
		
				<li>
					<span class="ability-title">Javascript</span>
					<span class="ability-score">			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>		
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star filled"></span>			
						<span class="glyphicon glyphicon-star "></span>				
					</span>
				</li>
				</ul>
			</div> <!-- end col-md-6 -->	
	</div> <!-- row-->
	<div class="col-md-6">
		<ul class="no-bullets">	
			<li>
				<span class="ability-title">LESS</span>
				<span class="ability-score">		
					<span class="glyphicon glyphicon-star filled"></span>			
					<span class="glyphicon glyphicon-star filled"></span>			
					<span class="glyphicon glyphicon-star filled"></span>			
					<span class="glyphicon glyphicon-star filled"></span>			
					<span class="glyphicon glyphicon-star "></span>				
				</span>
			</li>		
				
			<li>
				<span class="ability-title">Laravel Framework</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>
						
			<li>
				<span class="ability-title">MVC Pattern</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>		
				
			<li>
				<span class="ability-title">Method Factory Pattern</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>		
				
			<li>
				<span class="ability-title">Object Orientated Programming</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>
				
			<li>
				<span class="ability-title">SASS</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>		
				
			<li>
				<span class="ability-title">SEO</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
					
				
			<li>
				<span class="ability-title">Singleton Pattern</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>
					
			<li>
				<span class="ability-title">UML</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>
					
			<li>
				<span class="ability-title">Wordpress</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>		
				
			<li>
				<span class="ability-title">AngularJS</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>					
					<span class="glyphicon glyphicon-star "></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>
						
			<li>
				<span class="ability-title">Ruby</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>					
					<span class="glyphicon glyphicon-star "></span>					
					<span class="glyphicon glyphicon-star "></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>		
				
		</ul>
	</div>
		
</div>

<div class="text-center project-referal">
	<p>This project is build on a custom made PHP framework.</p>
	<a href="https://github.com/pascalvgemert/resume" class="btn btn-primary" target="_blank">See project on Github</a>
</div>

<hr/>

<h3>Languages</h3>
<div class="row">	
	<div class="col-md-6">
		<ul class="no-bullets">	
			<li>
				<span class="ability-title">Dutch (Mother tongue)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>						
				</span>
			</li>

			<li>
				<span class="ability-title">English (Daily use)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>						
				</span>
			</li>
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="no-bullets">	
			<li>
				<span class="ability-title">German (Survivable)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>					
					<span class="glyphicon glyphicon-star "></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
				
				
			<li>
				<span class="ability-title">French (Un petit peu)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>					
					<span class="glyphicon glyphicon-star "></span>					
					<span class="glyphicon glyphicon-star "></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>			
		</ul>
	</div>	
</div>

<hr/> --}}

{{-- <h3>Tools</h3>

<div class="row">
		
	<div class="col-md-6">
		<ul class="no-bullets">	
			<li>
				<span class="ability-title">Filezilla (8 years)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>						
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>						
				</span>
			</li>

			<li>
				<span class="ability-title">Firefox (8 years)</span>
				<span class="ability-score">			
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>						
				</span>
			</li>
		
			<li>
				<span class="ability-title">MS Office (10+ years)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
				</span>
			</li>
	
			<li>
				<span class="ability-title">Mac (4 years)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>						
				</span>
			</li>
	
			<li>
				<span class="ability-title">Notepad++ (8 years)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>						
				</span>
			</li>
			
			<li>
				<span class="ability-title">Webkit browsers (6 years)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>						
				</span>
			</li>
			
			<li>
				<span class="ability-title">Windows (10+ years)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>						
				</span>
			</li>
	
			<li>
				<span class="ability-title">Adobe Fireworks (8 years)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>					
				</span>
			</li>
			
		</ul>
	</div>

	<div class="col-md-6">
		<ul class="no-bullets">	
				
			<li>
				<span class="ability-title">Coda2 (2 years)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>	
				
			<li>
				<span class="ability-title">Git (3 year)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>					
				</span>
			</li>
				
			<li>
				<span class="ability-title">Internet Explore 6+ (8 years)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>
	
			<li>
				<span class="ability-title">MAMP (1 year)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>
	
			<li>
				<span class="ability-title">Stash (1 year)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>

			<li>
				<span class="ability-title">Sublime Text (2 years)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>
	
			<li>
				<span class="ability-title">Subversion (5 years)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>
				
			<li>
				<span class="ability-title">Adobe Photoshop (6 years)</span>
				<span class="ability-score">				
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star filled"></span>					
					<span class="glyphicon glyphicon-star "></span>					
					<span class="glyphicon glyphicon-star "></span>						
				</span>
			</li>	
		</ul>
	</div>
	</div>	 --}}	
				
		<div id="projects" class="container">
			<h2>Projects</h2>
			<p class="lead">
				&ldquo;You can do anything you set your mind to.&rdquo;<br/>- Benjamin Franklin
			</p>
		<hr/>
		</div>


{{-- <div class="row">
	<div class="col-md-6 col-sm-12 col-xs-12">
		<figure class="effect">
			<img src="/view/images/project_mals.jpg" alt="Mals" />
			
			<figcaption>
				<h3>Mals</h3>
				<p>Mals, a creative agency located in Rotterdam.</p>
				<p><strong>Tags:</strong> <br />Development, Wordpress, Bootstrap</p>
				<a href="http://studiomals.com" target="_blank">View more</a>
				<span class="icon">
					<span class="glyphicon glyphicon-new-window"></span>
				</span>
			</figcaption> 
		</figure>
	</div>

		
	<div class="col-md-6 col-sm-12 col-xs-12">
		<figure class="effect">
			<img src="/view/images/project_mbm.jpg" alt="Medisch Biomagnetisme" />
			
			<figcaption>
				<h3>Medisch Biomagnetisme</h3>
				<p>A nice one pager build for Hanneke Velthuijsen.</p>
				<p><strong>Tags:</strong> <br />Development, Design, Bootstrap, Wordpress</p>
				<a href="http://medischbiomagnetisme.com" target="_blank">View more</a>
				<span class="icon">
					<span class="glyphicon glyphicon-new-window"></span>
				</span>
			</figcaption> 
		</figure>
	</div>

		
	<div class="col-md-6 col-sm-12 col-xs-12">
		<figure class="effect">
			<img src="/view/images/project_soap.jpg" alt="SOAP - Den Bosch" />
			
			<figcaption>
				<h3>SOAP - Den Bosch</h3>
				<p>Build the website of the local barbershop.</p>
				<p><strong>Tags:</strong> <br />Design, Development, Bootstrap, Wordpress</p>
				<a href="http://soaphair.nl" target="_blank">View more</a>
				<span class="icon">
					<span class="glyphicon glyphicon-new-window"></span>
				</span>
			</figcaption> 
		</figure>
	</div>

		
	<div class="col-md-6 col-sm-12 col-xs-12">
		<figure class="effect">
			<img src="/view/images/project_paf.jpg" alt="Playful Arts Festival" />
			
			<figcaption>
				<h3>Playful Arts Festival</h3>
				<p>Build a website for the Playful Arts Festival</p>
				<p><strong>Tags:</strong> <br />Development, Bootstrap, Wordpress</p>
				<a href="http://playfulartsfestival.com" target="_blank">View more</a>
				<span class="icon">
					<span class="glyphicon glyphicon-new-window"></span>
				</span>
			</figcaption> 
		</figure>
	</div>

		
	<div class="col-md-6 col-sm-12 col-xs-12">
		<figure class="effect">
			<img src="/view/images/project_veramulder.jpg" alt="Vera Mulder" />
			
			<figcaption>
				<h3>Vera Mulder</h3>
				<p>Created a personal website for the Journalist Vera Mulder.</p>
				<p><strong>Tags:</strong> <br />Development, Design, Wordpress, Bootstrap</p>
				<a href="http://veramulder.com" target="_blank">View more</a>
				<span class="icon">
					<span class="glyphicon glyphicon-new-window"></span>
				</span>
			</figcaption> 
		</figure>
	</div>

		
	<div class="col-md-6 col-sm-12 col-xs-12">
		<figure class="effect">
			<img src="/view/images/project_oetelspel.jpg" alt="Oetelspel" />
			
			<figcaption>
				<h3>Oetelspel</h3>
				<p>An online game specially for Carneval at 's-Hertogenbosch.</p>
				<p><strong>Tags:</strong> <br />Development, Concept, Founder</p>
				<a href="http://oetelspel.nl" target="_blank">View more</a>
				<span class="icon">
					<span class="glyphicon glyphicon-new-window"></span>
				</span>
			</figcaption> 
		</figure>
	</div>		
</div> --}}
		
		<div class="background-gray">
			<div id="contact" class="container">
				<h2>Contact</h2>
			<p class="lead">
				&ldquo;If I had asked people what they wanted, they would have said faster horses. &rdquo;<br/>- Henry Ford
			</p>

		<hr/>
		</div>

<div class="row">
	<div class="col-md-6">
		<ul class="no-bullets">
			<li>
				<a href="http://twitter.com/zeebeepants" target="_blank">
					<span class="icon icon-twitter"></span>
					http://twitter.com/zeebeepants
				</a>
			</li>
			<li>
				<a href="http://linkedin.com/in/zeshan-segal-a987b569" target="_blank">
					<span class="icon icon-linkedin"></span>
					https://www.linkedin.com/in/zeshan-segal-a987b569				
				</a>
			</li>
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="no-bullets">
			<li>
				<a href="http://facebook.com/zeshan.segal">
					<span class="icon icon-facebook"></span>
					http://facebook.com/zeshan.segal				
				</a>
			</li>
			<li>
				<a href="mailto:zeshan.segal@gmail.com">
					<span class="icon icon-email"></span>
					{{-- <span style="unicode-bidi:bidi-override; direction: rtl;"> --}}
						zeshan.segal@gmail.com					
					</span>
				</a>
			</li>
		</ul>
	</div>
</div>

<hr/>

<div class="text-center">
	<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://twitter.com/zeebeepants" data-via="zeshansegal">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

	{{-- <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fzeshan.nl%3Fref%3Dfacebook&amp;width=120&amp;height=21&amp;colorscheme=dark&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false&amp;appId=143175172374579" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe> --}}
</div>
		
		<div class="modal fade" id="upgrade-dialog" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
				<h4 class="modal-title">Your browser is out of date</h4>
		</div>
			<div class="modal-body">
				<p>To get the best possible experience using our site we recommend that you upgrade to a modern web browser. To download a newer web browser click on the Upgrade button.</p>
			</div>
			<div class="modal-footer">
				<a href="http://browsehappy.com/" target="_blank" class="btn btn-primary">Upgrade</a>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->		
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="/view/js/script.js"></script>
		<script type="text/javascript" src="/view/js/bootstrap.min.js"></script>
		
		<!-- Google Analytics -->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-3361587-8']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</body>
</html>