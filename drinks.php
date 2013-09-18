<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  	<title>Drinks | Eden</title>
 	<meta name="description" content="">
  	<meta name="author" content="">

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
					<a id="menu-current" href="seasonal.php"><span>Menu</span></a>
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
		
			<header><h1 id="drinks"><span>Drinks</span></h1></header>
			
			<article class="drinks-grid easy-clearing">
				
				<header class="featured-item-header easy-clearing">
					<h2 class="float-left">Smoothies <span style="font-size: 14px; font-style: normal; margin: -2px 0 0 5px;">[12 oz.]</span></h2><aside class="featured-item-price"><mark>&#36;</mark>5</aside>
				</header>
				
				<section>
					<div class="drinks-block">
						<ul class="drinks-list">			
							<li class="easy-clearing">
								<header class="menu-item"><h3>The Sunrise</h3></header>
								<aside class="menu-item-description block">Strawberry, pineapple, orange</aside>
							</li>
							<li class="last easy-clearing">
								<header class="menu-item"><h3>The Yellow Sun</h3></header>
								<aside class="menu-item-description block">Mango, banana, pineapple, orange</aside>
							</li>
						</ul>
					</div>
					<div class="drinks-block-last">
						<ul class="drinks-list">	
							<li class="easy-clearing">
								<header class="menu-item"><h3>The Magic Hour</h3></header>
								<aside class="menu-item-description block">Peanut butter, almond milk, banana</aside>
							</li>
							<li class="last easy-clearing last">
								<header class="menu-item"><h3>The Blue Moon</h3></header>
								<aside class="menu-item-description block">Blueberry, mango, banana, apple</aside>
							</li>																
						</ul>
					</div>
				</section>
				
			</article>
			
			<article class="drinks-grid easy-clearing">
				
				<header class="featured-item-header easy-clearing">
					<h2 class="float-left">Premium Smoothies <span style="font-size: 14px; font-style: normal; margin: -2px 0 0 5px;">[12 oz.]</span></h2><aside class="featured-item-price"><mark>&#36;</mark>6</aside>
				</header>
				
				<section>
					<div class="drinks-block">
						<ul class="drinks-list">			
							<li class="easy-clearing">
								<header class="menu-item"><h3>Immunity Booster</h3></header>
								<aside class="menu-item-description block">Bee pollen, yogurt, strawberry, mango,<br /> orange, banana</aside>
							</li>
							<li class="last easy-clearing">
								<header class="menu-item"><h3>Energizer</h3></header>
								<aside class="menu-item-description block">Kale, spirolina, raspberry, blueberry, apple</aside>
							</li>
						</ul>
					</div>
					<div class="drinks-block-last">
						<ul class="drinks-list">	
							<li class="easy-clearing">
								<header class="menu-item"><h3>Rockstar</h3></header>
								<aside class="menu-item-description block">Coconut, flax, blueberry, pineapple, banana, orange</aside>
							</li>
							<li class="last easy-clearing last">
								<header class="menu-item"><h3>Strong Man</h3></header>
								<aside class="menu-item-description block">Peanut butter, protein, cocoa, almond milk, banana</aside>
							</li>																
						</ul>
					</div>
				</section>
				
			</article>	
			
			<article class="drinks-grid easy-clearing">
				
				<header class="featured-item-header-pre-note easy-clearing">
					<h2 class="float-left">Low-Calorie Smoothies <span style="font-size: 14px; font-style: normal; margin: -2px 0 0 5px;">[12 oz.]</span></h2><aside class="featured-item-price"><mark>&#36;</mark>4</aside>
				</header>
				
				<ul class="menu-list">
					<li class="easy-clearing note">
						<aside class="menu-item-note">All low-calorie smoothies are under 60 calories.</aside>
					</li>	
				</ul>				
				
				<section>
					<div class="drinks-block">
						<ul class="drinks-list">			
							<li class="easy-clearing">
								<header class="menu-item"><h3>Watermelon</h3></header>
								<aside class="menu-item-description block">Watermelon, ice</aside>
							</li>
							<li class="last easy-clearing">
								<header class="menu-item"><h3>Citrus</h3></header>
								<aside class="menu-item-description block">Orange, lemon, stevia, ice</aside>
							</li>
						</ul>
					</div>
					<div class="drinks-block-last">
						<ul class="drinks-list">	
							<li class="easy-clearing">
								<header class="menu-item"><h3>Apple Ginger</h3></header>
								<aside class="menu-item-description block">Apple, ginger, stevia ice</aside>
							</li>																
						</ul>
					</div>
				</section>
				
			</article>	
			
			<article class="drinks-grid easy-clearing">
				
				<header class="featured-item-header easy-clearing">
					<h2 class="float-left">Juice <span style="font-size: 14px; font-style: normal; margin: -2px 0 0 5px;">[12 oz.]</span></h2><aside class="featured-item-price"><mark>&#36;</mark>5</aside>
				</header>
				
				<section>
					<div class="drinks-block">
						<ul class="drinks-list">			
							<li class="easy-clearing">
								<header class="menu-item"><h3>Red</h3></header>
								<aside class="menu-item-description block">Beet, tomato, carrot, apple, ginger</aside>
							</li>
							<li class="last easy-clearing">
								<header class="menu-item"><h3>Green</h3></header>
								<aside class="menu-item-description block">Kale, celery, spinach, cucumber, lemon</aside>
							</li>
						</ul>
					</div>
					<div class="drinks-block-last">
						<ul class="drinks-list">	
							<li class="easy-clearing">
								<header class="menu-item"><h3>Orange</h3></header>
								<aside class="menu-item-description block">Orange, carrot, ginger, apple</aside>
							</li>
							<li class="last easy-clearing last">
								<header class="menu-item"><h3>Pink</h3></header>
								<aside class="menu-item-description block">Apple, grapefruit, lemon</aside>
							</li>																
						</ul>
					</div>
				</section>
				
			</article>	
			
			<article class="drinks-grid easy-clearing">
				
				<header class="featured-item-header easy-clearing">
					<h2 class="float-left">Shots <span style="font-size: 14px; font-style: normal; margin: -2px 0 0 5px;">[3 oz.]</span></h2><aside class="featured-item-price"><mark>&#36;</mark>3</aside>
				</header>
				
				<section>
					<div class="drinks-block">
						<ul class="drinks-list">			
							<li class="last easy-clearing">
								<header class="menu-item"><h3>Kale</h3></header>
								<aside class="menu-item-description block">Kale, lemon, ginger</aside>
							</li>
						</ul>
					</div>
					<div class="drinks-block-last">
						<ul class="drinks-list">	
							<li class="last easy-clearing last">
								<header class="menu-item"><h3>Spinach</h3></header>
								<aside class="menu-item-description block">Spinach, lime, ginger</aside>
							</li>																
						</ul>
					</div>
				</section>
				
			</article>		
			
			<article>
				
				<header class="featured-item-header easy-clearing">
					<h2>Extras</h2>
				</header>
				
				<ul class="menu-list">
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>French Press Coffee</h3></header>
							<aside class="menu-item-description block">Local 19 Coffee</aside>
						</div>
						<div class="float-right">
							<aside class="price">
								<mark>&#36;</mark>2.5
							</aside>
						</div>	
						<div class="float-right margin-right-15 padding-top-10">
							[ S ]
						</div>											
						<div class="float-right margin-right-25">
							<aside class="price">
								<mark>&#36;</mark>5
							</aside>
						</div>
						<div class="float-right margin-right-15 padding-top-10">
							[ L ]
						</div>
					</li>	
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>Hot Tea</h3></header>
							<aside class="menu-item-description block">Assorted flavors</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>2</aside>
						</div>
					</li>														
					<li class="easy-clearing last">
						<div class="float-left">
							<header class="menu-item"><h3>Iced Tea</h3></header>
							<aside class="menu-item-description block">12 oz.</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>2</aside>
						</div>
					</li>
				</ul>
				
			</article>											
		
		</section>
		
		<!-- Include Footer -->
		<?php 		
			$footerOffHome = 'inc/footer-off-home.php';
			if(file_exists($footerOffHome) && is_readable($footerOffHome)) {include($footerOffHome);}			
		?>
	
	</div> <!--! end of #container -->	
	
<!-- Include JS Files -->
<?php 		
	$js = 'inc/js.php';
	if(file_exists($js) && is_readable($js)) {include($js);}			
?>	

  
</body>
</html>
