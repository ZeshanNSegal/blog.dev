@extends('layouts.master')

@section('top-script')
<header>
<div class="sideNav right" style="margin-right: -300px;"><div class="nav-wrap" style="position: absolute; top: 0px;">
  <ul class="nav">

    <!-- <li class="navTitle first">hello</li> -->

    <li class="navItem active"><a data-href="" href="#">Home</a></li>
    <li class="navItem"><a data-href="work" href="#">Featured Work</a></li>
    <li class="navItem"><a data-href="about" href="#">About Us</a></li>
    <li class="navItem"><a data-href="news" href="#">News &amp; Press</a></li>
    <li class="navItem primary-last"><a href="#" data-href="contact">contact</a></li>



    <li class="navItem secondary"><a href="http://ads.badassembly.com/" target="_blank">Ad Showcase</a> <span class="icon dark icon-external"></span></li>
    <li class="navItem secondary"><a href="http://archive.badassembly.com" target="_blank" id="archive">Project Archive</a><span class="icon dark icon-external"></span></li>
    <li class="navItem secondary horizontal-rule-top"><hr></li>

    <li id="tweet_section"><div id="tweet-container" style="display: block;" class=""><div class="tweet">


      <div class="content-author">
        <div class="author">
          
          <a target="_blank" href="http://twitter.com/badassembly">@badassembly</a>
          
        </div>
        <div class="content">Where Flux Went Wrong. <a href="https://t.co/ept6fR67Jl" target="_blank">https://t.co/ept6fR67Jl</a></div>
  </div>
</div>
</div></li>


    </ul>

</div>
<div class="navItem social">
    <hr>
    <a target="_blank" href="http://www.facebook.com/pages/Bad-Assembly/47323791072"><span class="icon dark icon-facebook"></span></a>
    <a target="_blank" href="http://www.vimeo.com/badassembly"><span class="icon icon-vimeo-filled dark"></span></a>
    <a target="_blank" href="http://www.twitter.com/badassembly"><span class="icon icon-twitter-filled dark "></span></a>
</div>
<div class="menuClose icon-x-thin"></div>
</div>
</header>

<footer id="page_footer">
<div id="register" class="group">
	<div class="split">
	<!-- !Begin MailChimp Signup Form -->
		<form action="http://sohofixed.us2.list-manage1.com/subscribe/post?u=f17479efba5e726efcd353fa7&amp;id=2439a13008" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
			<label for="mce-EMAIL">Enter your email to be the first to know when a new bike hits the site.<br>(We never pass on your details to anyone else)</label> 
			<input type="text" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn">
			<div id="mce-responses">
			    <div class="response" id="mce-error-response" style="display:none"></div>
			    <div class="response" id="mce-success-response" style="display:none"></div>
			</div>
		</form>
	</div>
	<div id="social_links" class="split">
		<a href="http://twitter.com/sohofixed/" title="@sohofixed" id="twitter" class="social">Follow @sohofixed</a>
		<a href="http://www.facebook.com/pages/Soho-Fixed/162808170418069" title="become a fan on facebook" id="facebook" class="social facebook">Become a fan</a>
	</div><!-- /social_links -->
</div>
	<nav><a class="default active" href="http://www.sohofixed.com/">Home</a><a class="bikes" href="http://www.sohofixed.com/bikes/">Bikes</a><a class="about" href="http://www.sohofixed.com/about/">About</a><a class="blog" href="http://www.sohofixed.com/blog/">Blog</a><a class="faqs" href="http://www.sohofixed.com/faqs/">FAQs</a></nav>
	<p id="credit"><small>Site designed &amp; developed by <a href="http://martineau.tv">Zander</a> for <a href="http://neverbland.com" title="Never Bland">NeverBland</a><br>
	Site photography by <a href="http://martineau.tv">Zander</a> &amp; bike photography by <a href="http://julianmarshall.com/" title="Julian Marshall">Julian Marshall</a></small></p>
</footer>

@stop

@stop