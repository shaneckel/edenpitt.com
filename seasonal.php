<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  	<title>Fall | Eden</title>
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
		
			<header><h1 id="fall"><span>Fall</span></h1></header>
			
			<p id="dinner-intro">
				Eden is a BYOB establishment.
			</p>

			<article>
			
				<!-- Featured Starts -->
				<header class="featured-item-header easy-clearing">
					<h2 class="float-left">Start [Raw]</h2>
				</header>				
				<ul class="featured-items-double-list easy-clearing">
					<li>
						<header class="featured-item">CHEESE PLATE <div>[<mark>&#36;</mark><span class="padding-left-10">12]</span></div>
							<aside>Cashew and brazil nut, sage cheeses, coconut walnuts, apricot jam, beet and sunflower cake and local bee boy honey.</aside></header>
					</li>
					<li class="last">
						<header class="featured-item">CARROT BREAD <div>[<mark>&#36;</mark><span class="padding-left-10">7.5]</span></div>
							<aside>With apple coconut butter.</aside></header>
				</ul>
				<ul class="featured-items-double-list easy-clearing">
					<li>
						<header class="featured-item">APPLE AND FENNEL SALAD <div>[<mark>&#36;</mark><span class="padding-left-10">7]</span></div>
							<aside>Parsley, celery, green onion, lemon, EVOO.</aside></header>
					</li>
					<li class="last">
						<header class="featured-item">STUFFED MUSHROOMS <div>[<mark>&#36;</mark><span class="padding-left-10">8]</span></div>
							<aside>Sage, sunflower, carrot, rosemary, orange and lemon.</aside></header>
					</li>
				</ul>			
			</article>					
			
			<article>
		 
				<!-- Featured Main [Raw] -->		
				<header class="featured-item-header easy-clearing">
					<h2 class="float-left">Main [Raw]</h2>
				</header>				
				<ul class="featured-items-double-list easy-clearing">
					<li>
						<header class="featured-item">CURRIED BROCCOLI WRAP <div>[<mark>&#36;</mark><span class="padding-left-10">15]</span></div>
							<aside>Flax and beet wrap, ginger, avocado and arugula w/ a cucumber and mint salad.</aside></header>
					</li>
					<li class="last">
						<header class="featured-item">KOBOCHA SQUASH PAD THAI <div>[<mark>&#36;</mark><span class="padding-left-10">14]</span></div>
							<aside>Kelp noodles, tamarind, basil, garlic, green onion, carrot, mint and almond.</aside></header>
				</ul>
				<ul class="featured-items-double-list easy-clearing">
					<li>
						<header class="featured-item">NACHOS <div>[<mark>&#36;</mark><span class="padding-left-10">15]</span></div>
							<aside>Flax and sweet potato chips, beet, walnut, avocado, cashew sour cream, red onion, shaved cabbage and red pepper.</aside></header>
					</li>
					<li class="last">
						<header class="featured-item">STUFFED COLLARD GREENS <div>[<mark>&#36;</mark><span class="padding-left-10">13]</span></div>
							<aside>Portobello, pumpkin seeds, celery, garlic, pickled onions, spicy ginger cream.</aside></header>
					</li>
				</ul>					
								
			</article>			
			<article class="hot">
				<header class="featured-item-header easy-clearing">
					<h2 class="float-left">Main [Hot]</h2>
				</header>				
				<ul class="featured-items-triple-list easy-clearing">
					<li>
						<header class="featured-item">
							BLACK TRUFFLE MAC AND CHEESE
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">13]</span>
							</div>
							<aside>W/ brown rice pasta, coconut and cashew sauce, broccoli, sun dried tomatoes and spinach.
								<aside class="sub-caption">with organic chicken, tofu or tempeh for an extra $2.</aside>
							</aside>
						</header>
					</li>	

					<li>
						<header class="featured-item">
							PEANUT BUTTER KALE AND BUTTER NUT SQUASH
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">12]</span>
							</div>
							<aside>W/ maple syrup, red onion, garlic, and crushed peanuts.
								<aside class="sub-caption">with organic chicken, tofu or tempeh for an extra $2.</aside>
							</aside>
						</header>
					</li>

					<li class="last">
						<header class="featured-item">
							MUSHROOM NOODLE BOWL
	 						<div>
								[<mark>&#36;</mark><span class="padding-left-10">12]</span>
							</div>
							<aside>W/ rice vermicelli, miso and mushroom broth, peppers, greens, onion, ginger, garlic, mint and basil.
								<aside class="sub-caption">with organic chicken, tofu or tempeh for an extra $2.</aside>
							</aside>
						</header>
					</li>
				</ul>				
				<ul class="featured-items-triple-list easy-clearing">
					<li>
						<header class="featured-item">
							PUMPKIN CURRY
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">13]</span>
							</div>
							<aside>W/ sweet potato, red potato, yellow curry, garlic, onion, chick peas, and coconut milk.
								<aside class="sub-caption">with organic chicken, tofu or tempeh for an extra $2.</aside>
							</aside>
						</header>
					</li>					
					<li>
						<header class="featured-item">
							BBQ TOFU SALAD
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">12]</span>
							</div>
							<aside>Mixed organic greens, carrot, tomato cucumber, kale, chick peas and a roasted tomato dressing.
								<aside class="sub-caption">with organic chicken, tofu or tempeh for an extra $2.</aside>
							</aside>
						</header>
					</li>
					<li class="last">
						<header class="featured-item">
							HUGE GARDEN SALAD  
	 						<div>
								[<mark>&#36;</mark><span class="padding-left-10">10]</span>
							</div>
							<aside>Mixed organic greens, carrots, kale, cucumber, tomato, red pepper, and sunflower seeds.
								<aside class="sub-caption">with organic chicken, tofu or tempeh for an extra $2.</aside>
							</aside>
						</header>
					</li>
				</ul>				
			</article>
		
			<article>
			 
				<!-- Featured Ends --> 
				<header class="featured-item-header easy-clearing">
					<h2 class="float-left">End</h2>
				</header>				
				<ul class="featured-items-double-list easy-clearing">
					<li>
						<header class="featured-item">
							PUMPKIN PIE
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">9]</span>
							</div>
							<aside>Almond, date, coconut, vanilla cashew cream.</aside>
						</header>
					</li>					
					<li class="last">
						<header class="last featured-item">
							APPLE CHEESE CAKE
							<div>
									</br>[<mark>&#36;</mark><span class="padding-left-10">8.5]</span>
							</div>
							<aside>Sunflower seed, pumpkin seed, chai tea.</aside>
						</header>
					</li>

				<ul class="featured-items-double-list easy-clearing">

					<li >
						<header class="featured-item">
							CHOCOLATE AVOCADO FUDGE
		 					<div>
								[<mark>&#36;</mark><span class="padding-left-10">9]</span>
							</div>
							<aside>W/ Caramel macaroons, raspberry sauce.</aside>
						</header>
					</li>					
					<li class="last">
						<header class="featured-item">
							SEASONAL GRANITA
		 					<div>
								[<mark>&#36;</mark><span class="padding-left-10">3]</span>
							</div>
							<aside>Ask your server for the flavor.</aside>
						</header>
					</li>
				</ul>				

			</article>	
			
			<section id="special-options-wrap" class="easy-clearing">
				<div id="special-options"><span>Special Options</span></div>
				<div id="special-options-text">
					<ul  style="margin-top: 40px;">
						<li>
							<span class="block">We are gluten free and vegan friendly!</span>
							
						</li>
						<li>
							<span class="block">We are very sensitive to allergies!</span>
							Please let us know and we will do our best to substitute and accommodate.
						</li>						
						<li>
							<span class="block">Farmer acknowledgements:</span>
							P. C.F. A, Knotweed Farm, One Woman Farm, Paragon, Bee Boy Honey, 19 Coffee, Shadyside Nursery</span>
						</li>
					</ul>
				</div>
			</section>												
					
		<!-- Include Footer -->

	
	</div> <!--! end of #container -->	
	
<!-- Include JS Files -->
<?php 		
	$js = 'inc/js.php';
	if(file_exists($js) && is_readable($js)) {include($js);}			
?>	

  
</body>
</html>
