<?php foreach ($videos as $youtube) {?>
	<iframe width="627" height="445" src="//www.youtube.com/embed/<?php echo $youtube['youtube']?>" frameborder="0" allowfullscreen></iframe>
	<div class="comments">
<?php 
$this->data['comment_url']=base_url().'galeria/videos/'.$youtube['url_video'].'/detalle';
$this->load->view('prev/base/v_social_network_comments',$this->data);?>
<?php } ?>
</div>