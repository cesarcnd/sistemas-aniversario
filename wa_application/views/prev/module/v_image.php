<div class="multimedia">
	
	<div class="circle">
		<a class="link-a photo_href" href="javascript:;"></a>
		<div class="sistemas_ico_photo"></div>
	</div>
        <div class="camera_wrap camera_white_skin spacing_multimedia" id="photo_camera">
            <?php foreach ($photos as $photo){?>
            <div data-thumb="<?php echo $photo['image']?>" data-src="<?php echo $photo['image']?>" data-link="<?php echo base_url().'galeria/'.$photo['url_gallery_image'].'/detalle'?>">
                <div class="camera_caption fadeIn">
                    <?php  echo $photo['title_gallery_image']?>
                </div>
            </div>
            <?php } ?>
        </div>
</div>