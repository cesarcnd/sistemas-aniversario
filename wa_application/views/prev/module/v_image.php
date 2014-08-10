<div class="multimedia">
	
	<div class="circle">
		<a class="link-a photo_href" href="javascript:;" target="_self"></a>
		<div class="sistemas_ico_photo"></div>
	</div>
        <div class="camera_wrap camera_white_skin spacing_multimedia" id="photo_camera">
            <?php foreach ($photos as $photo){?>
            <div data-thumb="<?php echo base_url().img_local($photo['type_image'],400,$photo['image']);?>" data-src="<?php echo base_url().img_local($photo['type_image'],400,$photo['image']);?>" data-link="<?php echo base_url().'galeria/fotos/'.$photo['url_gallery_image'].'/detalle'?>">
                <div class="camera_caption fadeIn">
                    <?php  echo $photo['title_gallery_image']?>
                </div>
            </div>
            <?php } ?>
        </div>
</div>