<?php $photos=array(
	array("image"=>base_url()."resource/image/body/images/gallery/photo/front/IMG_5523.JPG","url_gallery_image"=>"tlkj","title_gallery_image"=>"Partido inagural"),
	array("image"=>base_url()."resource/image/body/images/gallery/photo/front/IMG_5524.JPG","url_gallery_image"=>"tlkj","title_gallery_image"=>"Los docentes tambien juegan")
);
 ?>
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