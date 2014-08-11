<?php $i=1;foreach ($noticias as $noticia) {?>
<section class="item_notice <?php echo ($i==1)?'sup_notice':'sub_notice';?>">
	<section class="display-inline img_notice">
		<div class="day_notice">
			<p><?php echo $noticia['day_short'] ?></p>
			<p><?php echo $noticia['month_short'] ?></p>
		</div>
		<div class="img-border">
			<div class="web_site_opacity">
				<div class="share_social">
					<a href="http://www.facebook.com/sharer.php?s=100&p[url]=<?php echo base_url()?>informacion/<?php echo $noticia['url_notice']?>/detalle&p[title]=<?php echo $noticia['title_notice']?>&&p[images][0]=<?php echo base_url().img_local($noticia['type_image'],400,$noticia['image'])?>,''sharer','toolbar=0,status=0,width=626,height=436'" target="_blank" class="sprite social_network display-inline facebook"></a>
					<a href="https://twitter.com/" target="_blank" class="sprite social_network display-inline twitter"></a>
				</div>
			</div>
			<a href="javascript:;" >
				<img src="<?php echo base_url().img_local($noticia['type_image'],400,$noticia['image'])?>"/> 
			</a>
		</div>
		<a href="<?php echo base_url()?>informacion/<?php echo $noticia['url_notice']?>/detalle" target="_self" class="more_notice">+</a>
	</section><!--
	--><section class="display-inline content_notice">
		<header class="header_notice">
			<h3><?php echo $noticia['title_notice'] ?></h3>
		</header>
		<div class="time_notice"><?php echo $noticia['date_notice_large'] ?>| <a href="javascript:;" class="link_notice"><?php echo $noticia['name_section_notice'] ?></a></div>
		<article class="abstract_notice">
			<?php echo stringShort($noticia['content_notice'],230) ?>
		</article>
		<div class="btns_notice">
			<a href="<?php echo base_url()?>informacion/noticias/todos" target="_self" class="btn_all display-inline">Ver todo</a>
			<a href="<?php echo base_url()?>informacion/<?php echo $noticia['url_notice']?>/detalle" target="_self" class="btn_read_more display-inline">Leer m&aacute;s</a>
		</div>
	</section>
</section>	
<?php $i++;} ?>