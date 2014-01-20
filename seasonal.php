<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  	<title>Winter | Eden</title>
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
		
			<header><h1 id="winter"><span>Winter</span></h1></header>
			
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
						<header class="featured-item">STUFFED AVOCADO <div>[<mark>&#36;</mark><span class="padding-left-10">7]</span></div>
							<aside>Red cabbage, arugula and acorn squash with a horse radish and sunflower sauce.</aside></header>
					</li>
					<li class="last">
						<header class="featured-item">BRUSSEL SPROUT SALAD <div>[<mark>&#36;</mark><span class="padding-left-10">7]</span></div>
							<aside>Shaved brussel sprouts, apples and walnuts. with a lemon thyme vinaigrette.</aside></header>
				</ul>
				<ul class="featured-items-double-list easy-clearing">
					<li>
						<header class="featured-item">ZUCCHINI RAVIOLI<div>[<mark>&#36;</mark><span class="padding-left-10">8]</span></div>
							<aside>Thinly sliced zucchini filled with cashew and butter nut squash cream topped with sage and black pepper olive oil.</aside></header>
					</li>
					<li class="last">
						<header class="featured-item">CRISPY KALE CHIPS <div>[<mark>&#36;</mark><span class="padding-left-10">6]</span></div>
							<aside>Green kale leaves tossed in pumpkinseed butter and sea salt then dehydrated until crispy.</aside></header>
					</li>
				</ul>			
			</article>					
			
			<article>
		 
				<!-- Featured Main [Raw] -->		
				<header class="featured-item-header easy-clearing">
					<h2 class="float-left">Main [Raw]</h2>
				</header>				
				<ul class="featured-items-triple-list easy-clearing">
					<li>
						<header class="featured-item">ACORN SQUASH AND LEEK TART <div>[<mark>&#36;</mark><span class="padding-left-10">14]</span></div>
							<aside>With a sunflower seed, carrot crust and celeriac cream, topped with arugula and served with a savoy cabbage and apple slaw.</aside></header>
					</li>
					<li class="featured-item">
						<header class="featured-item">PORTOBELLO BURRITO <div>[<mark>&#36;</mark><span class="padding-left-10">15]</span></div>
							<aside>Marinated portobello with spicy almond meat, avocado, lettuce, and cashew sour cream. Served with cauliflower rice and fresh tomato salsa.</aside></header>	
					</li>				
					<li class="last">
						<header class="featured-item">TOMATO AND PESTO FLATBREAD<div>[<mark>&#36;</mark><span class="padding-left-10">15]</span></div>
							<aside>Dehydrated flax and vegetable crust, sun dried tomato marinara, chopped spinach and pumpkin seed pesto, sunflower seed cheese and fresh tomato.</aside></header>
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
							COCONUT GREEN BEAN NOODLES
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">13]</span>
							</div>
							<aside>Bean thread noodles made of green beans and green peas with cauliflower, broccoli, zucchini, carrots and spinach with a coconut, ginger and cumin seed broth.
								<aside class="sub-caption">with organic chicken, tofu or tempeh for an extra $2.</aside>
							</aside>
						</header>
					</li>	

					<li>
						<header class="featured-item">
							RUSSIAN CHILI
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">13]</span>
							</div>
							<aside>Beets, black beans, cabbage and tomato with smoked paprika, chili and cumin. Served with brown rice and cashew sour cream or local goat cheese.
								<aside class="sub-caption">with organic chicken, tofu or tempeh for an extra $2.</aside>
							</aside>
						</header>
					</li>

					<li class="last">
						<header class="featured-item">
							VEGETABLE RICE BOWL
	 						<div>
								[<mark>&#36;</mark><span class="padding-left-10">11]</span>
							</div>
							<aside>Brown rice, sauteed zucchini, broccoli, carrots and mushrooms with pickled vegetables and a fried egg. Topped with a tahini sauce.
								<aside class="sub-caption">with organic chicken, tofu or tempeh for an extra $2.</aside>
							</aside>
						</header>
					</li>
				</ul>				
				<ul class="featured-items-triple-list easy-clearing">
					<li>
						<header class="featured-item">
							IRISH STEW
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">13]</span>
							</div>
							<aside>Sweet potato, red potato, kale, green lentils, gluten free beer, chickpea rosemary and thyme. Served with a gluten free oat muffin.
								<aside class="sub-caption">with organic chicken, tofu or tempeh for an extra $2.</aside>
							</aside>
						</header>
					</li>					
					<li>
						<header class="featured-item">
							WINTER BEAN SALAD
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">10]</span>
							</div>
							<aside>Warm chickpeas, black beans, and green lentils tossed with fresh kale red onion spinach and cabbage and a rosemary vinaigrette.
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
							LEMON AND CASHEW MOUSSE
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">8]</span>
							</div>
							<aside>Almond and lavender cookies and fresh fruit.</aside>
						</header>
					</li>					
					<li class="last">
						<header class="last featured-item">
							BEET AND ORANGE CHEESECAKE
							<div>
									</br>[<mark>&#36;</mark><span class="padding-left-10">9]</span>
							</div>
							<aside>Topped with vanilla macerated strawberries.</aside>
						</header>
					</li>

				<ul class="featured-items-double-list easy-clearing">

					<li >
						<header class="featured-item">
							CREAM FILLED CHOCOLATE CAKE
		 					<div>
								[<mark>&#36;</mark><span class="padding-left-10">9]</span>
							</div>
							<aside>Caramel cream, hazelnut cake and a black cherry sauce.</aside>
						</header>
					</li>					
					<li class="last">
						<header class="featured-item">
							CINNAMON CHIA SEED PUDDING
		 					<div>
								[<mark>&#36;</mark><span class="padding-left-10">6]</span>
							</div>
							<aside>With fruit and local Bee Boy Honey. Nut Free.</aside>
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
