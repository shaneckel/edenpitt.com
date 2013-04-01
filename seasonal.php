<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  	<title>Spring | Eden</title>
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
		
			<header><h1 id="spring"><span>Spring</span></h1></header>
			
			<p id="dinner-intro">
				Eden is a BYOB establishment.
			</p>
			
			<section id="grand-opening" class="easy-clearing">
				<div class="float-left"><img src="img/three-course-badge.png" alt="Three Course Sample Dinner Special" title="Three Course Sample Dinner Special" /></div>
				<div id="three-course-tension-bg" class="float-left easy-clearing">					
					<div id="three-course-text" class="float-left">
						<h3 id="three-course">Try samples of every item on our winter menu (excluding drinks)</h3>
					</div>
					<div id="twenty-five">
						<img src="img/fifteen.png" alt="$15" title="$15" />
					</div>
				</div>
			</section>				

			<article>
			
				<!-- Featured Starts -->
				<header class="featured-item-header easy-clearing">
					<h2 class="float-left">Start [Raw]</h2>
				</header>				
				<ul class="featured-items-double-list easy-clearing">
					<li>
						<header class="featured-item">BEET CARPACCIO <div>[<mark>&#36;</mark><span class="padding-left-10">10]</span></div>
							<aside>Macadamia nut cheese, arugula and a whole grain mustard vinaigrette.</aside></header>
					</li>
					<li class="last">
						<header class="featured-item">CURRIED CASHEW SOUP <div>[<mark>&#36;</mark><span class="padding-left-10">6]</span></div>
							<aside>Beet and orange.</aside></header>
				</ul>
				<ul class="featured-items-double-list easy-clearing">
					<li>
						<header class="featured-item">VEGETABLE CHIPS <div>[<mark>&#36;</mark><span class="padding-left-10">7]</span></div>
							<aside>Dehydrated vegetables with sauce of the day.</aside></header>
					</li>
					<li class="last">
						<header class="featured-item">SHIITAKE CEVICHE <div>[<mark>&#36;</mark><span class="padding-left-10">8.5]</span></div>
							<aside>With jicama, fresh chiles, cilantro and lime. Served with dehydrated vegetable chips.</aside></header>
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
						<header class="featured-item">MUSHROOM BURGER <div>[<mark>&#36;</mark><span class="padding-left-10">15]</span></div>
							<aside>Carrot and zucchini bread, cashew cheese, avocado, pickled red onion and arugula. Served with fresh greens.</aside></header>
					</li>
					<li class="last">
						<header class="featured-item">AMARANTH AND QUINOA GNOCCHI <div>[<mark>&#36;</mark><span class="padding-left-10">14]</span></div>
							<aside>With spinach, butter beans, sun dried marinara and cashew parmesan.</aside></header>
				</ul>
				<ul class="featured-items-double-list easy-clearing">
					<li>
						<header class="featured-item">SPICY CABBAGE NOODLES <div>[<mark>&#36;</mark><span class="padding-left-10">13.5]</span></div>
							<aside>With green peas, red peppers, carrots, sliced almonds, ginger, sesame and a creamy, spiced almond sauce.</aside></header>
					</li>
					<li class="last">
						<header class="featured-item">STUFFED PORTOBELLO <div>[<mark>&#36;</mark><span class="padding-left-10">15]</span></div>
							<aside>Marinated portobello mushrooms stuffed with riced cauliflower and chopped kale, topped with coconut ricotta and a smokey sunfower sauce.</aside></header>
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
							BLACK TRUFFLE RICE NOODLES
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">13]</span>
							</div>
							<aside>Shiitake mushrooms, red peppers, carrots and leeks with a coconut, black truffle and miso broth.
								<aside class="sub-caption">with organic tofu, organic tempeh or organic chicken for an extra $2.</aside>
							</aside>
						</header>
					</li>	

					<li>
						<header class="featured-item">
							PEANUT LENTIL CURRY
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">12]</span>
							</div>
							<aside>Steamed mixed vegetables in a Moroccan spice blend. Served with brown rice. This dish contains no oil.
								<aside class="sub-caption">with organic tofu, organic tempeh or organic chicken for an extra $2.</aside>
							</aside>
						</header>
					</li>

					<li class="last">
						<header class="featured-item">
							MOROCCAN SPICED VEGETABLES	
	 						<div>
								[<mark>&#36;</mark><span class="padding-left-10">11]</span>
							</div>
							<aside>Steamed mixed vegetables in a Moroccan spice blend. Served with brown rice. This dish contains no oil.
								<aside class="sub-caption">with organic tofu, organic tempeh or organic chicken for an extra $2.</aside>
							</aside>
						</header>
					</li>
				</ul>				
				<ul class="featured-items-triple-list easy-clearing">
					<li>
						<header class="featured-item">
							SPICY CAULIFLOWER AND POTATOES W/KALE
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">12]</span>
							</div>
							<aside>Cauliflower, kale and potatoes with a spicy chipotle and ancho chile sauce.
								<aside class="sub-caption">with organic tofu, organic tempeh or organic chicken for an extra $2.</aside>
							</aside>
						</header>
					</li>					
					<li>
						<header class="featured-item">
							WILD RICE SALAD
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">11]</span>
							</div>
							<aside>Edamame, almonds, kale, goji berries and wild rice in a lemon, apple cider vinegar and extra virgin oil dressing.
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
				<ul class="featured-items-triple-list easy-clearing">
					<li>
						<header class="featured-item">
							CARDAMOM AND STRAWBERRY CAKE
							<div>
								[<mark>&#36;</mark><span class="padding-left-10">8.5]</span>
							</div>
							<aside>With brazil nut cream, strawberry puree and salted brazil nut crumble.</aside>
						</header>
					</li>					
					<li>
						<header class="featured-item">
							CACAO AND COFFEE 
							<div>
									</br>[<mark>&#36;</mark><span class="padding-left-10">9.5]</span>
							</div>
							<aside>Cacao cake with cashew latte cream, cacao truffle and espresso sauce.</aside>
						</header>
					</li>
					<li class="last">
						<header class="featured-item">
							COCONUT PUDDING
		 					<div>
								[<mark>&#36;</mark><span class="padding-left-10">7]</span>
							</div>
							<aside>With banana squares, pineapple pumpkin seed cake and black currant sauce.</aside>
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
