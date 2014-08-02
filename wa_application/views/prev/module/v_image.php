<?php $photos=array(
	array("image"=>base_url()."resource/image/body/images/gallery/photo/front/IMG_5523.JPG","url_new"=>"tlkj","title_new"=>"Partido inagural"),
	array("image"=>base_url()."resource/image/body/images/gallery/photo/front/IMG_5524.JPG","url_new"=>"tlkj","title_new"=>"Los docentes tambien juegan")
);
 ?>
<div class="multimedia">
	<div class="camera_wrap camera_white_skin" id="photo_camera">
		<?php foreach ($photos as $photo){?>	
			<div data-src="<?php echo $photo['image']?>" data-link="<?php echo base_url().'fotos/'.$photo['url_new'].'/detalle'?>">
		        	<div class="camera_caption fadeFromBottom">
		            	<?php echo $photo['title_new'];?>
					</div>
	        </div>
	    <?php }?>
	</div>
</div>