<?php defined( '_JEXEC' ) or die( 'Restricted access' );
$app = JFactory::getApplication();
?>

<?php
$menu = $app->getMenu();
$active = $menu->getActive();
if (is_object( $active )) :
$params = new JRegistry( $active->params );
$pageclass = $params->get( 'pageclass_sfx' );

endif;


$doc = JFactory::getDocument();


//$menu = &Jsite::getMenu();
//$menuname = $menu->getActive()->title;
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

	<head>
	  
		<!-- Joomla "head" -->
		<jdoc:include type="head" />
		<!-- End Joomla "head" -->

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Neal O'Kelly, Records Transformation Ltd">	 

		<!-- Joomla system CSS -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />

		<!-- Bootstrap CSS -->
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/carousel.css" rel="stylesheet">

		<!-- Font Awesome -->
		<script src="https://use.fontawesome.com/5dbac9569e.js"></script> 


		<!-- Template CSS -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />	  


		<!-- Favicons -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicons/favicon-16x16.png">
		<link rel="manifest" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">


		<style>
		  .bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		  }

		  @media (min-width: 768px) {
			.bd-placeholder-img-lg {
			  font-size: 3.5rem;
			}
		  }
		</style>

	</head>
	<body id="<?php echo $pageclass ? $pageclass : 'default'; ?>">
    
		<header class="fixed-top">
			<div id="top-bar" class="navbar navbar-expand-md navbar-dark bg-dark top-bar-widgets">
				<div class="container" style="padding-left: 10px;padding-right: 10px;">
					<div class="widget widget_address_block">
						<ul>
							<li><i class="fa fa-map-marker"></i>London, UK</li>
							<li><i class="fa fa-phone"></i><a href="tel:07767871653" class="phone">07767 871653</a></li>
							<li>
								<i class="fa fa-envelope"></i>				
								<a href="mailto:contact@recordstransformation.co.uk" class="email">
									contact@recordstransformation.co.uk
								</a>
							</li>
						</ul>
					</div><!-- .widget_address_block -->
					<div id="socialIcons" class="widget widget_social_icons">
						<div class="social-icons">
							<ul>
								<li><a href="https://www.linkedin.com/company/records-transformation/" target="_blank"></a></li>
								<li><a href="https://twitter.com/rt_gilbyim" target="_blank"></a></li>
							</ul>
						</div>
					</div><!-- .widget_social_icons -->
				</div>
			</div>
			<div style="width:100%;background-color: #fff;" class="d-flex justify-content-center">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/records-transformation-logo-inline-dark-text.png" style="height: 80px;" class="d-lg-none" id="rt-logo-1" >
			</div>

			<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff;">
				<div class="container">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-top: 15px; margin-bottom: 15px;">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div style="width:100%;">
						<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/records-transformation-logo-inline-dark-text.png" style="height: 80px; margin-right: -40px;" class="float-end d-none d-lg-block" id="rt-logo-2" >
						<div class="collapse navbar-collapse" id="navbarSupportedContent" style="height: 80px;">
							<jdoc:include type="modules" name="menu" />
						</div>
					</div>
				</div>
			</nav>
		</header>

		<main style="margin-top:92px;">
			<jdoc:include type="modules" name="top" />

			
			
			<?php 
			if(strpos(JUri::getInstance(), "/news/"))
				{
				
				
			//echo strrchr(JUri::getInstance(), "/News/");
			
			if (strrchr(JUri::getInstance(), "/")!=="/news" || strrchr(JUri::getInstance(), "/")!=="blog") : ?>
				<div class="container">
					<div class="row">
						<div class="col-lg-8">	
							<jdoc:include type="component" />	
						</div>
						<div class="col-lg-4">
							<jdoc:include type="modules" name="see_also" style="xhtml" />
						</div>
					</div>
				</div>
			<?php 
			
				else :
				?>
				<div class="container">
					<jdoc:include type="component" />	
				</div>
				<?php endif;
				}
				else
				{?>
				<div class="container">
					<jdoc:include type="component" />	
				</div>
				<?php }
			?>
			

		  <!-- Marketing messaging and featurettes
		  ================================================== -->
		  <!-- Wrap the rest of the page in another container to center all the content. -->

			<div class="container marketing">
				<jdoc:include type="modules" name="services" />

				<!-- START THE FEATURETTES -->
				<jdoc:include type="modules" name="featurette_1" />
				<jdoc:include type="modules" name="featurette_2" />
				<jdoc:include type="modules" name="featurette_3" />
				<!-- /END THE FEATURETTES -->

				<div style="margin-top: 50px;">
					<jdoc:include type="modules" name="social-sharing" />	
				</div>
				<hr class="featurette-divider">
				<jdoc:include type="modules" name="news" />

			</div><!-- /.container -->


			<!-- FOOTER -->
			<footer class="container">
				<div class="row d-none d-lg-inline-flex" style="width:100%;">
					<div class="col d-flex justify-content-center">
						<a href="https://irms.org.uk/" target="_blank"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/irms-logo.png" alt="Information & Records Maagement Society Logo" style="height:100px;"></a>
					</div>
					<div class="col d-flex justify-content-center">
						<a href="https://www.ncsc.gov.uk/cyberessentials/overview" target="_blank"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/cyber-essentials-logo.png" alt="Cyber Essentials Logo" style="height:100px;"></a>
					</div>

					<div class="col d-flex justify-content-center">
						<a href="https://www.microfocus.com/en-us/products/secure-content-management/overview" target="_blank"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/micro-focus-gold-partner-badge.png" alt="Micro Focus Gold Partner Badge" style="height:100px;"></a>
					</div>
				</div>
				<div class="row d-lg-none" style="width:100%;margin-bottom:25px;">
					<div class="col d-flex justify-content-center">
						<a href="https://irms.org.uk/" target="_blank"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/irms-logo.png" alt="Information & Records Maagement Society Logo" style="height:100px;"></a>
					</div>
				</div>
				<div class="row d-lg-none" style="width:100%;margin-bottom:25px">
					<div class="col d-flex justify-content-center">
						<a href="https://www.ncsc.gov.uk/cyberessentials/overview" target="_blank"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/cyber-essentials-logo.png" alt="Cyber Essentials Logo" style="height:100px;"></a>
					</div>
				</div>
				<div class="row d-lg-none" style="width:100%;">
					<div class="col d-flex justify-content-center">
						<a href="https://www.microfocus.com/en-us/products/secure-content-management/overview" target="_blank"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/micro-focus-gold-partner-badge.png" alt="Micro Focus Gold Partner Badge" style="height:100px;"></a>
					</div>
				</div>
				<hr class="featurette-divider">
				<jdoc:include type="modules" name="footer" />
			</footer>
		</main>

		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.bundle.min.js"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-35RGYJ4ECH"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-35RGYJ4ECH');
		</script>
		
		<!-- Calendly badge widget begin -->
		<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
		<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
		<script type="text/javascript">window.onload = function() { Calendly.initBadgeWidget({ url: 'https://calendly.com/gilbyim/gilbyim-edrms-as-a-service-online-demo', text: 'Book a free demo of GilbyIM', color: '#006bff', textColor: '#ffffff', branding: false }); }</script>
		<!-- Calendly badge widget end -->
		
	</body>
</html>
