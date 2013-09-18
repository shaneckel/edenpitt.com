<?php session_start(); ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  	<title>Contact Us | Eden</title>
 	<meta name="description" content="">

  	<meta name="viewport" content="width=device-width,initial-scale=1">

	<!-- Include Head Files -->
	<?php 
		$head = 'inc/head-files.php';
		if(file_exists($head) && is_readable($head)) {include($head);}
	?>   		
</head>

<body>

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
				<li><a href="about.php">About</a></li>
				<li><a id="contact-current" href="contact.php"><span>Contact</span></a></li>
			</ul>
		</nav>
		
		<section id="main" role="main">
		
			<header><h1 id="contact"><span>Contact</span></h1></header>
			
			<p class="contact">
				Eden is located in the lower level of <a target="_blank" href="http://maps.google.com/maps?q=735+Copeland+St.+Pittsburgh,+Pa+15232&um=1&ie=UTF-8&hq=&hnear=0x8834f210e0181241:0x8f971a55e1378d7,735+Copeland+St,+Pittsburgh,+PA+15232&gl=us&ei=89tyTpuMEqLg0QHig8yqCg&sa=X&oi=geocode_result&ct=title&resnum=1&ved=0CBgQ8gEwAA">735 Copeland St.</a>, nestled in the neighborhood of Shadyside in Pittsburgh, Pennsylvania. We'd love to hear from you, so if you have any questions or comments, you can send us an email at <a href="mailto:helloedenpitt@gmail.com">helloedenpitt@gmail.com</a>, reach us by phone at 412.802.7070, send a message via carrier pigeon, or use the contact form below. For reservations, please contact us by phone.
			</p>
			
			<section id="contact-form" class="clearfix">
	            <?php
				//init variables
				$cf = array();
				$sr = false;
				
				if(isset($_SESSION['cf_returndata'])){
					$cf = $_SESSION['cf_returndata'];
				 	$sr = true;
				}
	            ?>
	            <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
	                <li id="info">
	                	<div class="margin-bottom-5">Oops! You missed some required fields:</div>
	                </li>
	                <?php 
					if(isset($cf['errors']) && count($cf['errors']) > 0) :
						foreach($cf['errors'] as $error) :
					?>
	                <li><?php echo $error ?></li>
	                <?php
						endforeach;
					endif;
					?>
	            </ul>
	            <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>"><span class="bold block">Yay! Your message was sent successfully.</span>Thanks and we'll get back to you as soon as we can!</p>
	            <form method="post" action="process.php">
	                <label for="name">Name <span class="required">*</span></label>
	                <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" required autofocus />
	                
	                <label for="email">Email <span class="required">*</span></label>
	                <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" required />
	                
	                <label for="message">Message <span class="required">*</span></label>
	                <textarea id="message" name="message" placeholder="We like compliments (hint, hint)..."><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
	                
	                <span id="loading"></span>
	                <input type="submit" value="Send" id="submit-button" />
	                <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
	            </form>
	            <?php unset($_SESSION['cf_returndata']); ?>												
			</section>
			
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
