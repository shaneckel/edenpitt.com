<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  	<title>Summer | Eden</title>
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
		
			<header><h1 id="summer"><span>Summer</span></h1></header>
			
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
						<header class="featured-item">TOMATO SALAD <div>[<mark>&#36;</mark><span class="padding-left-10">9]</span></div>
							<aside>With macadamia and cashew nut cheese and fresh basil sauce.</aside></header>
					</li>
					<li class="last">
						<header class="featured-item">BANANA BREAD <div>[<mark>&#36;</mark><span class="padding-left-10">7.5]</span></div>
							<aside>With walnut and cinnamon butter.</aside></header>
				</ul>
				<ul class="featured-items-double-list easy-clearing">
					<li>
						<header class="featured-item">SUNFLOWER TABBOULEH <div>[<mark>&#36;</mark><span class="padding-left-10">8]</span></div>
							<aside>With mint, parsley, onion, garlic and zucchini. Served with flax crackers and cucumber.</aside></header>
					</li>
					<li class="last">
						<header class="featured-item">STUFFED GREENS <div>[<mark>&#36;</mark><span class="padding-left-10">9]</span></div>
							<aside>Fig, pumpkin seed, Jamaican allspice, and cabbage stuffed summer greens with whole grain mustard and orange dipping sauce.</aside></header>
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
						<header class="featured-item">SEA GREEN BOWL <div>[<mark>&#36;</mark><span class="padding-left-10">13]</span></div>
							<aside>Wakame, kelp noodles, kale and spinach with sesame and ginger.</aside></header>
					</li>
					<li class="last">
						<header class="featured-item">WALNUT CARROT AND SUMAC FRITTERS <div>[<mark>&#36;</mark><span class="padding-left-10">14]</span></div>
							<aside>With garlic, sunflower hummus, cucumber salad, summer greens and a sesame cream.</aside></header>
				</ul>
				<ul class="featured-items-double-list easy-clearing">
					<li>
						<header class="featured-item">ZUCCHINI AND CABBAGE ANGEL HAIR W/ SPICY SAFFRON CREAM <div>[<mark>&#36;</mark><span class="padding-left-10">15]</span></div>
							<aside>With carrot, coconut, fresh citrus and avocado.</aside></header>
					</li>
					<li class="last">
						<header class="featured-item">MUSHROOM TACOS <div>[<mark>&#36;</mark><span class="padding-left-10">15]</span></div>
							<aside>Zucchini and flax tortillas, seasoned mushrooms, avocado and arugula. With cashew sour cream, spicy red sauce and a citrus, green sauce.</aside></header>
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
							GARAM MASALA AND POMEGRANATE STEW
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">13]</span>
							</div>
							<aside>With lentils, cashews, cauliflower, and broccoli. Comes with brown rice.
								<aside class="sub-caption">with organic tofu, organic tempeh or organic chicken for an extra $2.</aside>
							</aside>
						</header>
					</li>	

					<li>
						<header class="featured-item">
							BROWN RICE PENNE WITH COCONUT ALFREDO SAUCE
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">12]</span>
							</div>
							<aside>With zucchini, tomato and fresh basil.
								<aside class="sub-caption">with organic tofu, organic tempeh or organic chicken for an extra $2.</aside>
							</aside>
						</header>
					</li>

					<li class="last">
						<header class="featured-item">
							SUMMER VEGETABLE RED QUINOA AND BLACK RICE
	 						<div>
								[<mark>&#36;</mark><span class="padding-left-10">12]</span>
							</div>
							<aside>Cumin seed, summer greens, peppers, onion and broccoli. With a smokey mustard and sesame sauce.
								<aside class="sub-caption">with organic tofu, organic tempeh or organic chicken for an extra $2.</aside>
							</aside>
						</header>
					</li>
				</ul>				
				<ul class="featured-items-triple-list easy-clearing">
					<li>
						<header class="featured-item">
							TURMERIC AND ALMOND BUTTER VEGETABLES
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">13]</span>
							</div>
							<aside>With broccoli, zucchini, cauliflower, onion and kale. Comes with brown rice.
								<aside class="sub-caption">with organic tofu, organic tempeh or organic chicken for an extra $2.</aside>
							</aside>
						</header>
					</li>					
					<li>
						<header class="featured-item">
							VIETNAMESE SALAD
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">12]</span>
							</div>
							<aside>Cabbage, carrots, onion and cucumber, with mint and basil. Comes tossed in a sesame ginger dressing.
								<aside class="sub-caption">with organic tofu, organic tempeh or organic chicken for an extra $2.</aside>
							</aside>
						</header>
					</li>
					<li class="last">
						<header class="featured-item">
							HUGE GARDEN SALAD  
	 						<div>
								[<mark>&#36;</mark><span class="padding-left-10">10]</span>
							</div>
							<aside>Mixed organic greens, carrots, cucumber, tomato, red pepper, and sunflower seeds.
								<aside class="sub-caption">with organic tofu, organic tempeh or organic chicken for an extra $2.</aside>
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
							ICE CREAM CAKE
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">8.5]</span>
							</div>
							<aside>Fresh mint and cacao.</aside>
						</header>
					</li>					
					<li class="last">
						<header class="last featured-item">
							PUMPKIN SEED SPICE CAKE
							<div>
									</br>[<mark>&#36;</mark><span class="padding-left-10">8.5]</span>
							</div>
							<aside>With mango and fig chutney and goji berry and orange sauce.</aside>
						</header>
					</li>

				<ul class="featured-items-double-list easy-clearing">

					<li >
						<header class="featured-item">
							ORANGE AND VANILLA CHEESE CAKE
		 					<div>
								[<mark>&#36;</mark><span class="padding-left-10">9]</span>
							</div>
							<aside>With black berry sauce.</aside>
						</header>
					</li>					
					<li class="last">
						<header class="featured-item">
							SUMMER BERRY AND CARROT SOUP
		 					<div>
								[<mark>&#36;</mark><span class="padding-left-10">7]</span>
							</div>
							<aside>Topped with cashew sour cream and local bee boy honey.</aside>
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
