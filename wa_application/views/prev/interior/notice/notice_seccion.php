<div id="noticia_general">
<?php $i=1;foreach ($urls as $url) {?>
<section class="item_notice " >
	<section class="display-inline img_notice">
		<div class="day_notice">
			<p><?php echo $url['day_short'] ?></p>
			<p><?php echo $url['month_short'] ?></p>
		</div>
		<div class="img-border">
			<div class="web_site_opacity">
				<div class="share_social">
					<a href="http://www.facebook.com/sharer.php?s=100&p[url]=<?php echo base_url()?>informacion/<?php echo $url['url_notice']?>/detalle&p[title]=<?php echo $url['title_notice']?>&&p[images][0]=<?php echo base_url().img_local($url['type_image'],400,$url['image'])?>,''sharer','toolbar=0,status=0,width=626,height=436'" target="_blank" class="sprite social_network display-inline facebook"></a>
					<a href="https://twitter.com/" target="_blank" class="sprite social_network display-inline twitter"></a>
				</div>
			</div>
			<a href="javascript:;" >
				<img src="<?php echo base_url().img_local($url['type_image'],600,$url['image'])?>"/> 
			</a>
		</div>
		<a href="<?php echo base_url()?>informacion/<?php echo $url['url_notice']?>/detalle" target="_self" class="more_notice">+</a>
	</section><!--
	--><section class="display-inline content_notice">
		<header class="header_notice">
			<h3><?php echo $url['title_notice'] ?></h3>
		</header>
		<div class="time_notice"><?php echo $url['date_notice_large'] ?>| <a href="javascript:;" class="link_notice"><?php echo $url['name_section_notice'] ?></a></div>
		<article class="abstract_notice">
			<?php echo stringShort($url['content_notice'],230) ?>
		</article>
		<div class="btns_notice">
			
			<a href="<?php echo base_url()?>informacion/<?php echo $url['url_notice']?>/detalle" target="_self" class="btn_read_more display-inline">Leer m&aacute;s</a>
		</div>
	</section>
</section>	
<?php $i++;} ?>
</div>