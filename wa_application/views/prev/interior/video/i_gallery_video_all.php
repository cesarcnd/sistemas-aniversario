<div id="video_all">
	<?php $i=0;foreach($videos as $video) {echo ($i>0&&count($videos)>($i))?'-->':'';?><a href="<?php echo base_url()?>galeria/video/<?php echo $video['url_video']?>/detalle" class="item display-inline">
		<div class="circle">
			<div class="sistemas_ico_video"></div>
		</div>	
		<figure class="display-inline">
			<img src="<?php echo $video['image'];?>" alt="">
			<figcaption class="display-inline"><?php echo $video['title_video'] ?></figcaption>
		</figure>
	</a>
	<?php $i++;echo ($i>0&&count($videos)>($i))?'<!--':'';} ?>
</div>