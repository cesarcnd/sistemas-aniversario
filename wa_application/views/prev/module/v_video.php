<?php $videos=array(
	array("image"=>base_url()."resource/image/body/images/gallery/photo/front/IMG_5524.JPG","url_gallery_image"=>"tlkj","title_gallery_image"=>"Los docentes tambien juegan"),
	array("image"=>base_url()."resource/image/body/images/gallery/photo/front/IMG_5523.JPG","url_gallery_image"=>"tlkj","title_gallery_image"=>"Partido inagural")
);
 ?>
<div class="multimedia">
	<div class="circle">
        <a class="link-a video_href" href="javascript:;"></a>
		<div class="sistemas_ico_video"></div>
	</div>
    <div class="camera_wrap camera_white_skin spacing_multimedia" id="video_camera">
        <?php foreach ($videos as $video){?>
        <div data-thumb="<?php echo $video['image']?>" data-src="<?php echo $video['image']?>" data-link="<?php echo base_url().'galeria/'.$video['url_gallery_image'].'/detalle'?>">
            <div class="camera_caption fadeIn">
                <?php  echo $video['title_gallery_image']?>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="reproductor">
        <div class="sistemas_ico_play display-inline"></div>
        <div class="sistemas_ico_pause display-inline"></div>
        <div class="sistemas_ico_stop display-inline"></div>
        <div class="sprite line_time display-inline"></div>
        <div class="hd display-inline">HD</div>
        <div class="sistemas_ico_complete display-inline"></div>
    </div>    
</div>