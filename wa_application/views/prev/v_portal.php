<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="XXI Aniversario de Ingenieria de Sistemas de la UNJFSC" />
		<meta name="keywords" content="Aniversario de sistemas, Aniversario de Ing. de sistemas, Ingenieria de sistemas aniversario, xxi aniversario de ingenieria de sistemas" />
		<title>XXI Aniversario de Ingenieria de Sistemas de la UNJFSC</title>
		<link rel="stylesheet" href="<?php echo base_url()?>resource/css/base.css" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url()?>resource/css/style.css" type="text/css">
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
				<section id="front">
					<?php $this->load->view('prev/module/v_front'); ?>
				</section>
				<section id="public">
					<?php $this->load->view('prev/module/v_public'); ?>
				</section>
				<section id="first_block">
					<section id="programming" class="display-inline">
						<?php $this->load->view('prev/module/v_programming'); ?>
					</section><!--
					--><section id="informative" class="display-inline">
						<?php $this->load->view('prev/module/v_informative'); ?>
					</section><!--
					--><section id="inscription" class="display-inline">
						<?php $this->load->view('prev/module/v_inscription'); ?>
					</section>
				</section>
				<section id="second_block">
					<section id="notice" class="display-inline">
						<?php $this->load->view('prev/module/v_notice'); ?>
					</section><!--
					--><section id="access_direct" class="display-inline">
						<?php $this->load->view('prev/module/v_access_direct'); ?>
					</section>
				</section>
				<section id="third_block">
					<section id="image" class="display-inline">
						<?php $this->load->view('prev/module/v_image'); ?>
					</section><!--
					--><section id="video" class="display-inline">
						<?php $this->load->view('prev/module/v_video'); ?>
					</section>
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