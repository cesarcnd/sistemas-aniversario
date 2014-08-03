<div class="camera_wrap camera_white_skin" id="front_camera">
	<?php foreach ($fronts as $front){?>	
		<div data-src="<?php echo $front['image']?>" data-link="<?php echo base_url().'informacion/'.$front['url_new'].'/detalle'?>">
	        	<div class="camera_caption fadeFromBottom">
	            	<?php echo $front['title_new']?>
				</div>
        </div>
    <?php }?>
</div>