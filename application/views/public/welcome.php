<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en">
<head>
<!--Meta control to meta information START -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta content='no' name='apple-mobile-web-app-capable'>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
	<meta http-equiv="Content-Type" content="application/json; charset=utf-8"/>
	<meta name="resource-type" content="document" />
	<meta http-equiv="content-Language" content="en"/>
	<meta name="revisit-after" content="2 days" />
	<meta name="robots" content="index, follow" />
	<meta name="language" content="en-us" />
	<meta name="rating" content="general" />
	<meta name="distribution" content="global" />
	<meta name="generator" content="eclipse"/>
	<meta name="author" content="Designed by Ashiq."/>
	<title><?php echo $pagetitle;?></title>
	<meta name="description" content="<?php echo $metadesc;?>" />
	<meta name="keywords" content="<?php echo $metakey;?>" />
	<script type="text/javascript"> var weblink="<?php echo base_url();?>"; </script>
	<style>
		  html, body{ margin: 0; padding: 0; height: 100%; }
	</style>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/agency.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body class="home">

	<?php $this->view($layout);?>
	<!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/classie.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/agency.js"></script>
	<!--CUSTOM JS-->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascripts/public/custom.js"></script>
</body>
</html>