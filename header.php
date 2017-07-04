<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<?php wp_head();?>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<!--<a href="index.html" class="logo"><strong>Editorial</strong> by HTML5 UP</a>-->
									<a href="<?php echo get_bloginfo( 'wpurl' );?>" class="logo"><strong><?php echo get_bloginfo( 'name' ); ?></strong> - <?php echo get_bloginfo( 'description' ); ?></a>
									<ul class="icons">
										<li><a href="<?php echo get_option( 'twitter' );?>" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
										<li><a href="<?php echo get_option( 'facebook' );?>" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
										<li><a href="<?php echo get_option( 'github' );?>" class="icon fa-github" target="_blank"><span class="label">GitHub</span></a></li>
									</ul>
								</header>
