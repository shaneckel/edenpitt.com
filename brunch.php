<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  	<title>Brunch | Eden</title>
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
		
			<header><h1 id="brunch"><span>Brunch</span></h1></header>
			
			<article>
				
				<header class="featured-item-header easy-clearing">
					<h2>sweet</h2>
				</header>
				
				<ul class="menu-list">
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>VEGAN and GLUTEN FREE WAFFLES</h3></header>
							<aside class="menu-item-description block">Made with our gluten free flour, house made
rice milk and brown sugar. Comes with vegan
butter and local maple syrup.</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>9</aside>
						</div>
					</li>
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>FARM HOUSE WAFFLES</h3></header>
							<aside class="menu-item-description block">Made with local free range eggs, whole wheat
flour, house made rice milk and brown sugar.
Comes with real butter and local maple syrup.</aside>
							<aside  class="menu-item-description block" style="margin-top: 12px;">Get them piled high for an extra <span style="font-size: 1.5em;font-weight: bold; ">$1</span>
With your choice of three: seasonal fruit,
walnuts, choc. chips, banana, coconut or apples.</aside>

						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>9</aside>
						</div>
					</li>					
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>MUESLI (raw)</h3></header>
							<aside class="menu-item-description block">Rolled Oats, goji berries, hemp seeds, coconut,
raisins, walnuts, sunflower seeds, pumpkin
seeds and fresh fruit served with house made
raw nut milk.</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>10</aside>
						</div>
					</li>
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>GRANOLA BOWL</h3></header>
							<aside class="menu-item-description block">Our house made granola is vegan and gluten free
and is made with maple syrup and olive oil. It
comes with fresh fruit, and organic European
yogurt, organic vanilla soy yogurt or almond milk.</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>8</aside>
						</div>
					</li>					
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>MUFFIN AND FRUIT OF THE DAY</h3></header>
							<aside class="menu-item-description block">Our house made muffin of the day is vegan and
gluten free. It comes with fruit and organic vanilla
soy or organic European yogurt and local honey.</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>9</aside>
						</div>
					</li>
				</ul>
				
			</article>	
			
			<article>
				
				<header class="featured-item-header easy-clearing">
					<h2>Savory</h2>
				</header>
				
				<ul class="menu-list">
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>VEGAN BREAKFAST BURRITO</h3></header>
							<p class="sub-information">Comes with a side salad or a fruit cup</p>
							<aside class="menu-item-description block">Tomato wheat wrap, TVP scramble, seasoned
black beans, tomatoes and avocado.
Or get it as a scramble with corn tortillas instead
of the flour tortilla.</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>9</aside>
						</div>
					</li>					
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>VEGETABLE OMELETTE</h3></header>
							<p class="sub-information">Comes with toast and a side salad or a fruit cup.</p>
							<aside class="menu-item-description block">3 local and free range eggs, spinach, zucchini ,
tomato and local goat cheese. Get it with
egg whites upon request.</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>10</aside>
						</div>
					</li>					
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>CURRY EGGS</h3></header>
							<p class="sub-information">Comes with toast and a side salad or a fruit cup.</p>
							<aside class="menu-item-description block">4 local and free range eggs, local goat cheese,
curry and onion, scrambled to perfection with
arugula.</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>10</aside>
						</div>
					</li>					
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>FRIED EGG SANDWICH</h3></header>
							<p class="sub-information">Comes with a side salad or a fruit cup</p>
							<aside class="menu-item-description block">2 local and free range eggs, whole wheat or
gluten free bread, cream cheese,
local feta cheese, spinach and tomato.</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>9</aside>
						</div>
					</li>
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>GRILLED TEMPEH SALAD</h3></header>
							<aside class="menu-item-description block">Arugula, grilled tempeh, sun dried tomatoes, olives,
cucumber and local feta cheese with a
balsamic and olive oil dressing.</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>10</aside>
						</div>
					</li>					
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>MOCK TUNA SALAD</h3></header>
							<aside class="menu-item-description block">Vegan tuna salad made with TVP, seaweed, onions, celery
and vegan mayo served on a huge bed of baby lettuce
and tomatoes.</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>9</aside>
						</div>
					</li>					
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>SPROUTED LENTIL SALAD (raw)</h3></header>
							<aside class="menu-item-description block">House sprouted lentils, peppers, carrots, walnuts
and cucumbers served on a huge bed of baby lettuce,
tossed in a tangy brazil nut cream.</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>12</aside>
						</div>
					</li>
				</ul>
				
			</article>	
			
			<article>
				
				<header class="featured-item-header easy-clearing">
					<h2>small plates / extra sides</h2>
				</header>
				
				<ul class="menu-list">
				<ul class="menu-list">
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>ARUGULA APPLE AND WALNUT SALAD</h3></header>
							<aside class="menu-item-description block">Comes with a balsamic and olive oil dressing.</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>6</aside>
						</div>
					</li>
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>LOCAL FRUIT BOWL</h3></header>
							<aside class="menu-item-description block">Seasonal</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>6.5</aside>
						</div>
					</li>					
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>SIDE SALAD OR SIDE OF FRUIT</h3></header>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>5</aside>
						</div>
					</li>					
					<li class="easy-clearing">
						<div class="float-left">
							<header class="menu-item"><h3>EXTRA EGG</h3></header>
							<aside class="menu-item-description block">Local and free range. We can prepare them
any way you like.</aside>
						</div>
						<div class="float-right">
							<aside class="price"><mark>&#36;</mark>1.5</aside>
						</div>
					</li>					

				
					<li class="last">
						<p>* In our skillets we only use cold
pressed extra virgin olive
oil, fresh ground pepper and sea salt!</p>
					
						<p style="margin-top: 22px;">* We are very sensitive to your
allergies, please let us know.</p>
					</li>
				</ul>
				
			</article>							
		
		</section>
		
		<!-- Include Footer -->
		<?php 		
			$footerOffHome = 'inc/footer-off-home.php';
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
