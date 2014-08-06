<?php $institutes = array(
				array('img'=>'interbank.png','url'=>'','name_institute'=>""),
				array('img'=>'microsoft.png','url'=>'','name_institute'=>""),
				array('img'=>'mozila-peru.png','url'=>'','name_institute'=>""),
				array('img'=>'smperu.png','url'=>'','name_institute'=>""),
				array('img'=>'gobierno-regional.png','url'=>'','name_institute'=>"")) ?>
<script src="<?php echo base_url()?>resource/js/slides.min.jquery.js"></script>
<script>
	$(function(){
	$('#slide_institute').slides({
		//preload: true,
		generateNextPrev: false,
		pagination:false,
		play: 2500
	});
});
</script>
<div class="imginstitute b-body" id="slide_institute">
	<div class="slides_container" >
		<div class="slides">
			<?php foreach ($institutes as $institute) {?>
				<div class="item display-inline">
					<div class="institutelogo1 "><img src="<?php echo base_url()?>resource/image/body/institute/<?php echo $institute['img']?>"></div>		
				</div>
			<?php } ?>
		</div>
		<div class="slides">
			<?php foreach ($institutes as $institute) {?>
				<div class="item display-inline">
					<div class="institutelogo1 "><img src="<?php echo base_url()?>resource/image/body/institute/<?php echo $institute['img']?>"></div>		
				</div>
			<?php } ?>
		</div>
	</div>
</div>