<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
		<meta name="description" content="XXI Aniversario de Ingenieria de Sistemas de la UNJFSC" />
		<meta name="keywords" content="Aniversario de sistemas, Aniversario de Ing. de sistemas, Ingenieria de sistemas aniversario, xxi aniversario de ingenieria de sistemas" />
		<title><?php echo $title_page ?> | XXI Aniversario de Ingenieria de Sistemas de la UNJFSC</title>
		<link rel="stylesheet" href="<?php echo base_url()?>resource/css/base.css" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url()?>resource/css/style.css" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url()?>resource/css/interior_detail.css" type="text/css">
		<script src="<?php echo base_url()?>resource/js/jquery-1.9.1.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url()?>resource/js/like.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>resource/js/tweet.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url()?>resource/js/jquery-collapsible.min.js"></script>
		<script>base_url="<?php echo base_url()?>"</script>
	</head>
	<body>
		<section class="b-all-body">
			<header id="header">
				<?php $this->load->view('prev/base/v_header'); ?>
			</header>
			<nav id="browser">
				<?php $this->load->view('prev/base/v_browser.php') ?>
			</nav>
			<section class="b-body">
				<section class="b-body">
					<?php $this->load->view('prev/interior/'.$interior); ?>
				</section>
			</section>
			<section id="institute">
				<?php $this->load->view('prev/module/v_institute'); ?>
			</section>
			<footer id="footer">
				<?php $this->load->view('prev/base/v_footer'); ?>
			</footer>
		</section>
	</body>
</html>