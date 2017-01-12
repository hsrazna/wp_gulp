<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Title</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/path/to/image.jpg">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-114x114.png">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.min.css">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

</head>

<body>

	<!-- <div class="container">

		<div class="row">

			<div class="col-sm-8 col-sm-offset-2">
				
				<img class="img-responsive" src="img/preview.jpg" alt="Start HTML5 Template">
				
				<?php //require_once('includes/block1.php'); ?>

			</div>
			
		</div>

	</div> -->
	<?php require_once('includes/header.php'); ?>
	<?php require_once('includes/block1.php'); ?>
	<?php require_once('includes/block2.php'); ?>
	<?php require_once('includes/block3.php'); ?>
	<?php require_once('includes/block4.php'); ?>
	<?php require_once('includes/block5.php'); ?>
	<?php require_once('includes/block6.php'); ?>
	<?php require_once('includes/block7.php'); ?>
	<?php require_once('includes/block8.php'); ?>
	<?php require_once('includes/footer.php'); ?>


	<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.min.js"></script>

</body>
</html>