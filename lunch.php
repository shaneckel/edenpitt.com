<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  	<title>Lunch | Eden</title>
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
		
			<header><h1 id="lunch"><span>Lunch</span></h1></header>
			
			<article>
				
				<header class="featured-item-header-pre-note easy-clearing">
					<h2>Salads</h2>
				</header>
				
				<ul class="menu-list">
					<li class="easy-clearing note">
						<aside class="menu-item-note">All salads come with a slice of country seed bread. This bread is not vegan; small amount of honey in the dough.</aside>
					</li>				
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>The Garden [Vegan]</h3></header>
							<aside class="menu-item-description block">Baby lettuce, cucumber, tomato, red peppers, sunflower seeds, carrots, broccoli, avocado and garlic mustard balsamic dressing. <span>Add feta [ + .50 ]</span></aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>5.5</aside>
						</div>
					</li>
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>The Eden [Veg]</h3></header>
							<aside class="menu-item-description block">Spinach, apple, walnut, blue cheese and a citrus balsamic dressing</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>8</aside>
						</div>
					</li>					
					<li class="easy-clearing last">
						<div class="float-left">
							<header class="menu-item"><h3>The Harvest Chicken</h3></header>
							<aside class="menu-item-description block">Baby lettuce, local chicken, almonds, cranberries and a raspberry vinaigrette</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>10</aside>
						</div>
					</li>

				</ul>
				
			</article>	
			
			<article>
				
				<header class="featured-item-header-pre-note easy-clearing">
					<h2>Wraps</h2>
				</header>
				
				<ul class="menu-list">
					<li class="easy-clearing note">
						<aside class="menu-item-note">All wraps come with a side salad or cup of soup. Our fall/winter soups:  curried squash and vegan chili.</aside>
					</li>				
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>Garden Wrap [Vegan]</h3></header>
							<aside class="menu-item-description block">Whole wheat wrap, cucumber, tomato, carrots, broccoli, avocado, lettuce, garlic mustard balsamic dressing. <span>Add feta [ + .50 ]</span></aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>6</aside>
						</div>
					</li>
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>Chicken or Portobello Wrap</h3></header>
							<aside class="menu-item-description block">Whole wheat wrap, local chicken or portobello, garlic aioli, mozzarella cheese, lettuce, <span class="block">red onion</span></aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>10</aside>
						</div>
					</li>					
					<li class="easy-clearing last">
						<div class="float-left">
							<header class="menu-item"><h3>Mock Tuna Wrap [Vegan]</h3></header>
							<aside class="menu-item-description block">Whole wheat wrap, mock tuna, lettuce, tomato</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>7.5</aside>
						</div>
					</li>

				</ul>
				
			</article>	
			
			<article>
				
				<header class="featured-item-header-pre-note easy-clearing">
					<h2>Sandwiches</h2>
				</header>
				
				<ul class="menu-list">
					<li class="easy-clearing note">
						<aside class="menu-item-note">All sandwiches come with a side salad or a cup of soup. Our fall/winter soups:  curried squash and vegan chili.</aside>
					</li>				
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>Black Bean Burger [Vegan]</h3></header>
							<aside class="menu-item-description block">Rustic <span class="uppercase">i</span>talian bread, house made black bean burger, veganaise, lettuce, tomato. <span>Add cheese or avocado [ + .50 ]</span></aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>7.5</aside>
						</div>
					</li>
					<li class="easy-clearing last">
						<div class="float-left">
							<header class="menu-item"><h3>Chicken or Portobello Sandwich</h3></header>
							<aside class="menu-item-description block">Country seed bread, local grilled chicken or portobello, garlic aioli, mozzarella cheese, lettuce, <span class="block">red onion</span></aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>10</aside>
						</div>
					</li>					
				</ul>
				
			</article>	
			
			<article>
				
				<header class="featured-item-header-pre-note easy-clearing">
					<h2>Grilled Sandwiches</h2>
				</header>
				
				<ul class="menu-list">
					<li class="easy-clearing note">
						<aside class="menu-item-note">All grilled sandwiches come with a side salad or a cup of soup. Our fall/winter soups:  curried squash and vegan chili.</aside>
					</li>				
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>Turkey and Avocado</h3></header>
							<aside class="menu-item-description block">Rustic <span class="uppercase">i</span>talian bread, cilantro avocado spread, sliced deli style turkey, cheddar cheese, spinach</span></aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>7.5</aside>
						</div>
					</li>
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>Mock Tuna Melt [Veg]</h3></header>
							<aside class="menu-item-description block">Country seed bread, mock tuna, mozzarella cheese, tomato, kale</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>8</aside>
						</div>
					</li>
					<li class="easy-clearing last">
						<div class="float-left">
							<header class="menu-item"><h3>Grilled Cheese [Veg]</h3></header>
							<aside class="menu-item-description block">Rustic <span class="uppercase">i</span>talian bread, mozzarella cheese, feta cheese, tomato</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>7</aside>
						</div>
					</li>										
				</ul>
				
			</article>	
			
			<section id="special-options-wrap" class="easy-clearing">
				<div id="special-options"><span>Special Options</span></div>
				<div id="special-options-text">
					<ul>
						<li>Anything can be made vegan</li>
						<li>Add extra cheese or avocado [ + .50 ]</li>
						<li>Get it on vegan / gluten-free English muffins [ + .50 ]</li>
					</ul>
				</div>
			</section>									
		
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
