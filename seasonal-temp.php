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
		
			<header><h1 id="winter"><span>Winter</span></h1></header>
			
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
						<header class="featured-item">ACORN SQUASH SOUP <div>[<mark>&#36;</mark><span class="padding-left-10">5]</span></div>
							<aside>A chilled, blended soup with ginger, lemon, and orange 
and a drizzle of raw local honey</aside></header>
					</li>
					<li class="last">
						<header class="featured-item">VEGETABLE NORI ROLL <div>[<mark>&#36;</mark><span class="padding-left-10">7]</span></div>
							<aside>Cucumber, avocado, and carrot, zucchini, sesame, rice, 
rolled up in raw nori sheets. Served with lemon sesame cream.</aside></header>
				</ul>
				<ul class="featured-items-double-list easy-clearing">
					<li>
						<header class="featured-item">CASHEW CHEESE PLATE <div>[<mark>&#36;</mark><span class="padding-left-10">8]</span></div>
							<aside>A Brie-like cheese made completely of cashews. Served 
with kumquat marmalade, carrot ﬂax crackers and 
cucumber</aside></header>
					</li>
					<li class="last">
						<header class="featured-item">COCONUT NOODLES w/ MISO <div>[<mark>&#36;</mark><span class="padding-left-10">6.5]</span></div>
							<aside>Shaved coconut, zucchini and parsnip served over a 
bowl of chilled honeydew and miso soup, spiked with 
ginger and Thai chili.</aside></header>
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
						<header class="featured-item">STUFFED COLLARD GREENS <div>[<mark>&#36;</mark><span class="padding-left-10">14]</span></div>
							<aside>Smokey sprouted lentil hummus, carWith curried oat groats, sweet pumpkin seed butter, carrot, zucchini, rice, and chunks of 
cashew cheese. Served with smoked paprika dipping sauce.</aside></header>
					</li>
					<li class="last">
						<header class="featured-item">PORTOBELLO STEAK <div>[<mark>&#36;</mark><span class="padding-left-10">15]</span></div>
							<aside>Marinated portobello steaks sliced and served over a bed of spinach and mounds of riced 
cauliﬂower and broccoli in an avocado and sunﬂower cream.</aside></header>
				</ul>
				<ul class="featured-items-double-list easy-clearing">
					<li>
						<header class="featured-item">FENNEL, SHIITAKE, AND ASPARAGUS STEW   <div>[<mark>&#36;</mark><span class="padding-left-10">14]</span></div>
							<aside>Brazil nut, coconut and carrot puree with marinated fennel, shiitake mushrooms, asparagus 
and parsnip. </aside></header>
					</li>
					<li class="last">
						<header class="featured-item">SEA PIZZA <div>[<mark>&#36;</mark><span class="padding-left-10">13.5]</span></div>
							<aside>Carrot and ﬂax crust with green pea and sunﬂower cream, wakame seaweed, and cucumber.
</aside></header>
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
						RED CURRIED STEW
						<div>
							[<mark>&#36;</mark><span class="padding-left-10">12]</span>
						</div>
						<aside>
							Red curry, coconut milk, potatoes, green peas, and cauliﬂower. 
Served with brown rice.
							<aside class="sub-caption">Get it with organic tofu, organic tempeh, or natural local chicken for an additional $2. 
</aside>
						</aside>
						</header>
					</li>					
					<li>
						<header class="featured-item">
						PEANUT KALE
						<div>
							[<mark>&#36;</mark><span class="padding-left-10">12]</span>
						</div>
						<aside>
						Kale, peanuts and butternut squash in a maple peanut sauce. 
Served with brown rice.
							<aside class="sub-caption">Get it with organic tofu, organic tempeh, or natural local chicken for an additional $2.
</aside>
						</aside>
						</header>
					</li>
					<li class="last">
						<header class="featured-item">
						MEXICAN BURRITO BOWL	
 						<div>
							[<mark>&#36;</mark><span class="padding-left-10">11]</span>
						</div>
						<aside>
			 Peppers, black beans, red onion and zucchini sauteed with a cumin chili 
			and cacao sauce. Served with brown rice, avocado and pepitas.							
			<aside class="sub-caption">Get it with organic tempeh, organic tofu, or local natural chicken for an additional $2.		<aside>

						</header>
					</li>
				</ul>				
				<ul class="featured-items-triple-list easy-clearing">
					<li>
						<header class="featured-item">
						WINTER STEW
						<div>
							[<mark>&#36;</mark><span class="padding-left-10">12]</span>
						</div>
						<aside>
							Butternut squash, beets, carrots, potatoes, and broccoli,  in a zesty tomato, 
basil stew
							<aside class="sub-caption">Get it with organic tofu, organic tempeh, or local natural chicken for and additional $2.
</aside>
						</aside>
						</header>
					</li>					
					<li>
						<header class="featured-item">
						SEA GREEN SALAD 
						<div>
							[<mark>&#36;</mark><span class="padding-left-10">11]</span>
						</div>
						<aside>
							Wakame seaweed, kale, and sesame tossed in a house made ginger dressing.
							<aside class="sub-caption">Get it with organic tempeh, organic tofu, or local natural chicken  for an additional $2.
</aside>
						</aside>
						</header>
					</li>
					<li class="last">
						<header class="featured-item">HUGE GARDEN SALAD  
 						<div>
							[<mark>&#36;</mark><span class="padding-left-10">10]</span>
						</div>
						<aside>
 						Baby greens, kale, spinach, tomatoes, carrots, cucumber, red pepper and 
sunﬂower seeds with a house made balsamic dressing.
						<aside class="sub-caption">Get it with organic tofu, organic tempeh, or local natural chicken for and additional $2.
</aside>
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
						AVOCADO ICE CREAM CAKE
						<div>
							[<mark>&#36;</mark><span class="padding-left-10">7.5]</span>
						</div>
						<aside>
							Avocado, lime and ginger ice cream with a sunﬂower and 
cacao crust and a cacao and ginger sauce.
						</aside>
						</header>
					</li>					
					<li>
						<header class="featured-item">
						CHOCOLATE PECAN PIE 
						<div>
								</br>[<mark>&#36;</mark><span class="padding-left-10">8]</span>
						</div>
						<aside>
							Rich cacao ganache with a salty pecan crust and a vanilla 
walnut cream.
						</aside>
						</header>
					</li>
					<li class="last">
						<header class="featured-item">LAVENDER AND ALMOND CAKE  
 					<div>
							[<mark>&#36;</mark><span class="padding-left-10">7]</span>
						</div>
						<aside>
 						Almond and lavender cake with a lemon cream and 
mango puree
						</aside>
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
