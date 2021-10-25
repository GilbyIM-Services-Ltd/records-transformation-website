<!doctype html>
<html lang="en" class="h-100">
  <head>
	<!-- Joomla "head" -->
	<jdoc:include type="head" />
	<!-- End Joomla "head" -->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Neal O'Kelly, Records Transformation Ltd">	 

	<!-- Joomla system CSS -->
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />

	<!-- Bootstrap core CSS -->
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css" rel="stylesheet">

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
	
		.html, body {
			  height: 100%;
  				margin: 0;
		}
		.wrapper {
			height: 100%;
			display: flex;
			flex-direction: column;
		}
		.content {
			flex: 1;
			overflow: auto;
			
		}
    </style>


  </head>
  <body class="d-flex flex-column h-100" style="height:100%;">
<div class="wrapper">
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	
    <div class="container-fluid">
		<span id="site-logo"></span>
      <a class="navbar-brand" href="portal">Customer Portal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
		  <jdoc:include type="modules" name="nav-menu" style="xhtml" />
      </div>
    </div>
  </nav>
</header>

<!-- Begin page content -->
	   
<!--<main class="flex-shrink-0" style="height:calc(100% - 60px);overflow:hidden;">-->
	<main class="content">
	
	  <div class="container">
	

	<jdoc:include type="component" />  

  </div>

</main>

<footer class="footer mt-auto py-3">
  <div class="container" style="text-align:center;">
    <span style="color:white;">&copy; Records Transformation Ltd (2021)</span>
  </div>
</footer>
	  </div>

    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
