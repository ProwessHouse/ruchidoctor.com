<!doctype html>
<?php 
	$mtime = microtime();
	$mtime = explode(" ",$mtime);
	$mtime = $mtime[1] + $mtime[0];
	$pagestarttime = $mtime; 

?>
<html lang="en">

<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ruchi Doctor - Publisher, Coach, Trainer, Speaker, Marketer, Curator</title>
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/app/webroot/en/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/app/webroot/en/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/app/webroot/en/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/app/webroot/en/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="/app/webroot/en/lib/hover/hover.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/app/webroot/css/style.css" rel="stylesheet">

  <!-- Responsive css -->
  <link href="/app/webroot/en/css/responsive.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="/app/webroot/images/favicon.png">

  <!-- =======================================================
    Theme Name: Folio
    Theme URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
<body>
   		<?php echo $this->_render('element', 'header', compact('pagetotaltime'));?>	
		<div class="container content">
			<?php echo $this->content(); ?>
		</div>
<?php 
	$mtime = microtime();
	$mtime = explode(" ",$mtime);
	$mtime = $mtime[1] + $mtime[0];
	$pageendtime = $mtime;
	$pagetotaltime = ($pageendtime - $pagestarttime);
?>

		<?php echo $this->_render('element', 'footer', compact('pagetotaltime'));?>	



  <!-- End section footer -->
  <!-- JavaScript Libraries -->
  <script src="/app/webroot/en/lib/jquery/jquery.min.js"></script>
  <script src="/app/webroot/en/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/app/webroot/en/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/app/webroot/en/lib/typed/typed.js"></script>
  <script src="/app/webroot/en/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/app/webroot/en/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="/app/webroot/en/lib/isotope/isotope.pkgd.min.js"></script>


  <!-- Template Main Javascript File -->
  <script src="/app/webroot/js/main.js"></script>
</body>

</html>