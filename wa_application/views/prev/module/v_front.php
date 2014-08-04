<?php $fronts=array(
	array("image"=>base_url()."resource/image/body/images/notice/front/IMG_5518.JPG","url_new"=>"tlkj","title_new"=>"Inaguracion de la cancha de Ingenieria"),
	array("image"=>base_url()."resource/image/body/images/notice/front/IMG_5540.JPG","url_new"=>"tlkj","title_new"=>"Partido Inagural")
);
 ?>
<div class="camera_wrap camera_white_skin" id="front_camera">
	<?php foreach ($fronts as $front){?>	
		<div data-src="<?php echo $front['image']?>" data-link="<?php echo base_url().'informacion/'.$front['url_new'].'/detalle'?>">
	        	<div class="camera_caption fadeFromBottom">
	            	<?php echo $front['title_new']?>
				</div>
        </div>
    <?php }?>
</div>
</div>