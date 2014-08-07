<link rel="stylesheet" href="<?php echo base_url()?>resource/css/base.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url()?>resource/css/inscription.css" type="text/css">
<script src="<?php echo base_url()?>resource/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url()?>resource/js/typewrite.js"></script>
<script>
	$(function(){
		textEscribe("<?php echo $text?>", "#success_inscription", 100);
	});
</script>
<div id="success_inscription"></div>