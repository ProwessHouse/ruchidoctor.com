<!doctype html>
<?php 
	$mtime = microtime();
	$mtime = explode(" ",$mtime);
	$mtime = $mtime[1] + $mtime[0];
	$pagestarttime = $mtime; 

?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Ruchi Doctor - Publisher, Coach, Trainer, Speaker, Marketer, Curator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
  <meta http-equiv="Content-Security-Policy" content="default-src * data: gap: content: https://ssl.gstatic.com; style-src * 'unsafe-inline'; script-src * 'unsafe-inline' 'unsafe-eval'">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400&family=Raleway:wght@100;300;400&family=Share&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/framework7/css/framework7.bundle.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/app.css" type="text/css">
  <script src="/framework7/js/framework7.bundle.min.js"></script>
  </head>

<body>
		<div class="page">
  <div class="page-content">
		<?php echo $this->_render('element', 'header');?>	
  <?php echo $this->content(); ?>
<?php 
	$mtime = microtime();
	$mtime = explode(" ",$mtime);
	$mtime = $mtime[1] + $mtime[0];
	$pageendtime = $mtime;
	$pagetotaltime = ($pageendtime - $pagestarttime);
?>
   
   <?php echo $this->_render('element', 'footer', compact('pagetotaltime'));?>	
   </div>
  </div>
</body>
<!-- JS code -->
</html>