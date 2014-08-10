<div id="gallery_foto">
	<?php $i=0;foreach($gallery_fotos as $gallery_foto) {echo ($i>0&&count($gallery_fotos)>($i))?'-->':'';?><a href="<?php echo base_url()?>galeria/fotos/<?php echo $gallery_foto['url_gallery_image']?>/detalle" class="item display-inline">
		<div class="circle">
			<div class="sistemas_ico_photo"></div>
		</div>	
		<figure class="display-inline">
			<img src="<?php echo base_url().img_local($gallery_foto['type_image'],400,$gallery_foto['image']);?>" alt="">
			<figcaption class="display-inline"><?php echo $gallery_foto['title_gallery_image'] ?></figcaption>
		</figure>
	</a>
	<?php $i++;echo ($i>0&&count($gallery_fotos)>($i))?'<!--':'';} ?>
</div>