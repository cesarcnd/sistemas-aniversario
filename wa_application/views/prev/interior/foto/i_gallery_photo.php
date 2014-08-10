<link rel="stylesheet" href="<?php echo base_url()?>resource/css/prettyPhoto.css" type="text/css">
<script src="<?php echo base_url()?>resource/js/jquery.prettyPhoto.js"></script>

<script>
	$(document).ready(function(){
				$("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square'});
			});
</script>
<div class="btns_prev_g">
	<a href="<?php echo base_url()?>galeria/fotos/todos" class="btn_prev_g">Ver todos los &aacute;lbum</a>
</div>
<div id="gallery_foto_detail">
	<?php $i=0;foreach($fotos as $foto) {echo ($i>0&&count($fotos)>($i))?'-->':'';?><a href="<?php echo base_url().img_local($foto['type_image'],1024,$foto['image']);?>" rel="prettyPhoto[unusual]" class="item display-inline">
		<figure class="display-inline">
			<img src="<?php echo base_url().img_local($foto['type_image'],400,$foto['image']);?>" alt="">
			<figcaption class="display-inline"><?php echo $foto['title_image'] ?></figcaption>
		</figure>
	</a>
	<?php $i++;echo ($i>0&&count($fotos)>($i))?'<!--':'';} ?>
</div>