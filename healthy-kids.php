<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  	<title>Healthy Kids | Eden</title>
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
					<a id="menu-current" href="late-summer.php"><span>Menu</span></a>
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
		
			<header><h1 id="healthy-kids"><span>Healthy Kids</span></h1></header>
			
			<article>
				
				<header class="featured-item-header-pre-note easy-clearing">
					<h2 class="float-left">Sandwiches</h2><aside class="featured-item-price"><mark>&#36;</mark>5.5</aside>
				</header>
				
				<ul class="menu-list">
					<li class="easy-clearing note">
						<aside class="menu-item-note">All kid's meals have the option of a kid's smoothie or juice for an extra &#36;1.</aside>
					</li>				
					<li class="easy-clearing">
						<header class="menu-item"><h3>Peanut Butter and Banana</h3></header>
						<aside class="menu-item-description block">Country seed bread, organic peanut butter and banana with a side of fresh fruit or carrot sticks</aside>
					</li>
					<li class="easy-clearing">
						<header class="menu-item"><h3>Grilled Cheese</h3></header>
						<aside class="menu-item-description block">Rustic italian bread, mozzarella and cheddar cheese with a side of fresh fruit or carrot sticks</aside>
					</li>					
					<li class="easy-clearing last">
						<header class="menu-item"><h3>Turkey and Cheese Sandwich</h3></header>
						<aside class="menu-item-description block">Country seed bread, deli style turkey and cheddar cheese with a side of fresh fruit or carrot sticks</aside>
					</li>
				</ul>
				
			</article>	
						
			<article class="drinks-grid easy-clearing">
				
				<header class="featured-item-header easy-clearing">
					<h2 class="float-left">Kids' Smoothies <span style="font-size: 14px; font-style: normal; margin: -2px 0 0 5px;">[9 oz.]</span></h2><aside class="featured-item-price"><mark>&#36;</mark>4</aside>
				</header>				
				
				<section>
					<div class="drinks-block">
						<ul class="drinks-list">			
							<li class="easy-clearing">
								<header class="menu-item"><h3>The Lady Bug</h3></header>
								<aside class="menu-item-description block">Strawberry, banana, apple juice</aside>
							</li>
							<li class="last easy-clearing">
								<header class="menu-item"><h3>The Lovely Lion</h3></header>
								<aside class="menu-item-description block">Mango, banana, orange</aside>
							</li>
						</ul>
					</div>
					<div class="drinks-block-last">
						<ul class="drinks-list">	
							<li class="easy-clearing">
								<header class="menu-item"><h3>The Silly Snake</h3></header>
								<aside class="menu-item-description block">Pineapple, strawberry, orange juice</aside>
							</li>																
						</ul>
					</div>
				</section>
				
			</article>	
			
			<article class="drinks-grid easy-clearing">
				
				<header class="featured-item-header easy-clearing">
					<h2 class="float-left">Kids' Juices <span style="font-size: 14px; font-style: normal; margin: -2px 0 0 5px;">[9 oz.]</span></h2><aside class="featured-item-price"><mark>&#36;</mark>4</aside>
				</header>			
				
				<section>
					<div class="drinks-block">
						<ul class="drinks-list">			
							<li class="easy-clearing">
								<header class="menu-item"><h3>Apple</h3></header>
							</li>
							<li class="last easy-clearing">
								<header class="menu-item"><h3>Orange</h3></header>
							</li>
						</ul>
					</div>
					<div class="drinks-block-last">
						<ul class="drinks-list">	
							<li class="easy-clearing">
								<header class="menu-item"><h3>Carrot</h3></header>
							</li>																
						</ul>
					</div>
				</section>
				
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
