<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  	<title>Eden | Fresh. Local. Smart. | 735 Copeland St. - Pittsburgh, Pa</title>
 		<meta name="description" content="">


  	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script>//code healthy</script>
	<!-- Include Head Files -->
	<?php 
		$head = 'inc/head-files.php';
		if(file_exists($head) && is_readable($head)) {include($head);}
	?>   		
</head>

<body onload="setupZoom()">
	<div id="container" class="easy-clearing">
	
		<!-- Include Masthead -->
		<?php 		
			$masthead = 'inc/masthead.php';
			if(file_exists($masthead) && is_readable($masthead)) {include($masthead);}			
		?>
		
		<nav id="nav" role="navigation">
			<ul>
				<li><a id="home-current" href="/"><span>Home</span></a></li>
				 <li id="menu-sub-nav-wrap">
					<a href="seasonal.php">Menu</a>
					
					<?php 		
						$subNav = 'inc/sub-nav.php';
						if(file_exists($subNav) && is_readable($subNav)) {include($subNav);}			
					?>					
				</li> 
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		
		<section id="main" role="main">
			<div id="home-header-text">
				<h1 id="home"><span>Fresh. Local. Smart.</span></h1>
	
			</div>
			<header id="masthead-header">

			</header>
			
			 <section id="masthead">
				<div><img src="img/home-masthead-1.jpg" alt="" title="" /></div>
				<div><img src="img/home-masthead-2.jpg" alt="" title="" /></div>
				<div><img src="img/home-masthead-3.jpg" alt="" title="" /></div>
				<div><img src="img/home-masthead-4.jpg" alt="" title="" /></div>
				<div><img src="img/home-masthead-5.jpg" alt="" title="" /></div>
				<div><img src="img/home-masthead-6.jpg" alt="" title="" /></div>
				<div><img src="img/home-masthead-7.jpg" alt="" title="" /></div>
				<div><img src="img/home-masthead-8.jpg" alt="" title="" /></div>
			</section> 
				
			<article id="intro-text">
			
				<div id="intro-text-divide">
					<h2 id="delicious"><span>Delicious &amp; Creative Food From Farm to Table</span></h2>
				</div>
				
				<p class="margin-bottom-25">Eden is Pittsburgh's premier restaurant for clean and healthy eating.  We specialize in offering raw, vegan entrees, local produce and chicken, and Sunday brunch. Eden is a BYOB establishment and is located at <a target="_blank" href="http://maps.google.com/maps?q=735+Copeland+St.+Pittsburgh,+Pa+15232&um=1&ie=UTF-8&hq=&hnear=0x8834f210e0181241:0x8f971a55e1378d7,735+Copeland+St,+Pittsburgh,+PA+15232&gl=us&ei=89tyTpuMEqLg0QHig8yqCg&sa=X&oi=geocode_result&ct=title&resnum=1&ved=0CBgQ8gEwAA">735 Copeland Street</a>, in Pittsburgh's beautiful Shadyside neighborhood.</p>
				
				<p>Your health is very important to us, as is the health of our local farms and cooperatives. We want to do good for you, and do good for our community. <a href="about.php">Learn more about Eden...</a></p>
			</article>	
			
			<!--<section id="grand-opening" class="easy-clearing">
				<div class="float-left"><img src="img/grand-opening-badge.png" alt="Grand Opening Dinner Special" title="Grand Opening Dinner Special" /></div>
				<div id="tension-bg" class="float-left easy-clearing">					
					<div id="grand-opening-text" class="float-left">
						<h3 id="entrees-app"><span>Any Two Entrees + Appetizer</span></h3>
					</div>
					<div id="twenty-five">
						<img src="img/twenty-five.png" alt="$25" title="$25" />
					</div>
				</div>
			</section>-->
					
			<section>
				
				<!-- Hours and Location --> 				
				<ul class="hp-GR-list easy-clearing">
					<li>
						<div id="hp-location"><img src="img/hp-location-bg.png" alt="Eden is located at:" title="Eden is located at:"</div>
					</li>
					<li class="last">
						<a class="featured-photo-triple-link" target="_blank" href="http://maps.google.com/maps?q=735+Copeland+St.+Pittsburgh,+Pa+15232&um=1&ie=UTF-8&hq=&hnear=0x8834f210e0181241:0x8f971a55e1378d7,735+Copeland+St,+Pittsburgh,+PA+15232&gl=us&ei=89tyTpuMEqLg0QHig8yqCg&sa=X&oi=geocode_result&ct=title&resnum=1&ved=0CBgQ8gEwAA">
							<div class="hp-map-over"></div>
							<img src="img/hp-map.jpg" alt="View Eden's location on Google Maps" title="View Eden's location on Google Maps" />
						</a>
					</li>
				</ul>
				
			</section>
			
			<section class="margin-bottom-25 easy-clearing">
				<div id="hp-hours"><span>Hours of Operation</span></div>
				<div id="hp-hours-text">
					<ul>
						<li>
							<div id="hp-date-define" class="float-left">Dinner</div> 
							<div id="hp-date-list">
								<p>Monday, Wednesday, Thursday <span class="footer-mark">5PM - 10PM</span></p>
								<p>Friday, Saturday <span class="footer-mark">5PM - 10PM</span></p>
								<p>Tuesday <span class="footer-mark">closed</span></p>
							</div>
						</li>
						<li class="last easy-clearing">
							<div id="hp-date-define" class="float-left">Brunch</div> 
							<div id="hp-date-list">
								<p>Saturday<span class="footer-mark">10AM - 2PM</span></p>
								<p>Sunday<span class="footer-mark">10AM - 2PM</span></p>
							</div>
						</li>
					</ul>
				</div>
			</section>				
			
			<footer id="footer-home">
				&#169;2011 Eden. All rights reserved.
			</footer>
									
		</section>
	
	</div> <!--! end of #container -->	
	
<!-- Include JS Files and Stop IE6 -->
<?php 		
	$js = 'inc/js.php';
	if(file_exists($js) && is_readable($js)) {include($js);}
	
	$ie = 'inc/stop-ie.php';
	if(file_exists($ie) && is_readable($js)) {include($ie);}
?>	
<script src="js/plugins.js" type="text/javascript"></script>

<!-- Initialize j05Slider -->
<script type="text/javascript" charset="utf-8">	
	$('#masthead').j05Slider({
		speed : 750,
		pause : 5000,	
		transition : 'slide'
	})
</script>

  
</body>
</html>
