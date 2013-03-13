<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  	<title>About Eden | Eden</title>
 	<meta name="description" content="">

  	<meta name="viewport" content="width=device-width,initial-scale=1">

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
				<li><a href="/">Home</a></li>
				 <li id="menu-sub-nav-wrap">
					<a href="seasonal.php">Menu</a>
					<?php 		
						$subNav = 'inc/sub-nav.php';
						if(file_exists($subNav) && is_readable($subNav)) {include($subNav);}			
					?>	
				</li> 
				<li><a id="about-current" href="about.php"><span>About</span></a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		
		<section id="main" role="main">
		
			<header><h1 id="about"><span>About Eden</span></h1></header>
			
			<article>
				
				<header class="featured-item-header easy-clearing">
					<h2>At the Core</h2>
				</header>
				
				<p class="about">
					Our mission is your health. We want to provide you with diverse and quality options that fit all kinds of people, from local chicken to raw, vegan entrees to gluten-free waffles, everyone is welcome. 
				</p>
				
				<p class="about">	
				There are so many nutrients in the world we live in, growing and blooming with each season, and we've taken the time to appreciate them for what they are at their core. Nothing is more exciting to us than preparing delicious food without taking any of the rich and vital nutrients away. We want you to feel good about yourself and feel good about what you're eating.  
				</p>
				
				<p class="about-last">
					Everything we serve has been hand-selected from local cooperatives and farms that believe in the same virtues that we do. Fresh. Local. Smart.				
				</p>
				
			</article>	
			
			<article>
				
				<header class="featured-item-header easy-clearing">
					<h2>Food</h2>
				</header>
				
				<p class="about-last">
					We source our ingredients as locally as possible, and organically when available. Your health is very important to us, as is the health of our local farms and cooperatives. We want to do good for you, and do good for our community. 
				</p>

			</article>	
			
			<article>
				
				<header class="featured-item-header easy-clearing">
					<h2>Drinks</h2>
				</header>
				
				<p class="about-last">					
					A wide variety of fruits and vegetables contain vitamins and minerals stored within them that build our immune system and make us stronger. We offer a large selection of juices and smoothies, all made from 100% real fruits and vegetables, with no added sugar.
				</p>

			</article>	
			
			<article>
				
				<header class="featured-item-header easy-clearing">
					<h2>Hours</h2>
				</header>
				
				<p class="about-last">					
					Eden is open Monday, Wednesday - Saturday 5PM - 10PM for dinner and Saturday and Sunday from 10AM - 3PM for brunch. Eden is closed on Tuesdays. 
				</p>

			</article>	
			
			<article>
				
				<header class="featured-item-header easy-clearing">
					<h2>Reservations</h2>
				</header>
				
				<p class="about-last">					
					We will gladly take reservations for any sized party. For reservations, please contact us by phone at 412.802.7070. 
				</p>

			</article>	
			
			<article>
				
				<header class="featured-item-header easy-clearing">
					<h2>Parking</h2>
				</header>
				
				<p class="about-last">					
					We're located at <a target="_blank" href="http://maps.google.com/maps?q=735+Copeland+St.+Pittsburgh,+Pa+15232&um=1&ie=UTF-8&hq=&hnear=0x8834f210e0181241:0x8f971a55e1378d7,735+Copeland+St,+Pittsburgh,+PA+15232&gl=us&ei=89tyTpuMEqLg0QHig8yqCg&sa=X&oi=geocode_result&ct=title&resnum=1&ved=0CBgQ8gEwAA">735 Copeland Street</a> (directly off of Walnut Street), in the heart of Pittsburgh's beautiful Shadyside neighborhood. We have ample  on-street parking in near proximity to the restaurant, but should the situation arise where no such parking can be found, a sizable parking garage is located on the street that runs parallel to Copeland (Bellefonte Street).</a>
				</p>

			</article>
			
			<article>
				
				<header class="featured-item-header easy-clearing">
					<h2>Dress Code</h2>
				</header>
				
				<p class="about-last">					
					Be comfortable. Be unique. Be you.
				</p>

			</article>		
			
			<article>
				
				<header class="featured-item-header easy-clearing">
					<h2>Interior</h2>
				</header>
				
				<p class="about-last">					
					Our interior d&#233;cor and ambiance was meticulously conceived and brought to life by <a target="_blank" href="http://www.seangrayinternational.com/">Sean Gray</a>.
				</p>

			</article>	
			
			<article>
				
				<header class="featured-item-header easy-clearing">
					<h2>Creative</h2>
				</header>
				
				<p class="about-last">					
					The creation of Eden's identity, website, print pieces, photography, and outdoor signage was a collaborative effort, compliments of a pair of local creatives:  <a href="http://www.shaneckel.com">Shane Eckel</a> and <a href="mailto:jonathan.k.carson@gmail.com">Jonathan Carson</a>. 
				</p>

			</article>																												
		
		</section>
		
		<!-- Include Footer -->
		<?php 		
			//$footerOffHome = 'inc/footer-off-home.php';
			//if(file_exists($footerOffHome) && is_readable($footerOffHome)) {include($footerOffHome);}			
		?>
	
	</div> <!--! end of #container -->	
	
<!-- Include JS Files -->
<?php 		
	$js = 'inc/js.php';
	if(file_exists($js) && is_readable($js)) {include($js);}			
?>	

  
</body>
</html>
