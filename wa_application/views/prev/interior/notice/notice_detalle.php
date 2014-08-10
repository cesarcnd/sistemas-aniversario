<div id="noticia_detalle">
		<?php foreach($noticia_detalle as $detalle) {?>
		<div class="noticia_imagen">
			<img src="<?php echo base_url().img_local($detalle['type_image'],600,$detalle['image']);?>">
			<div class="noticia_titulo">
				<h3> <?php echo $detalle['title_notice'] ?></h3>
			</div>
		</div> 
		<div class="noticia_descripcion">
			<div class="noticia_comentario">
				<?php echo $detalle['content_notice'] ?>
			</div>
			<div class="display-inline noticia_botones">
				<a href="<?php echo base_url()?>noticia/todos" class="noticias_general">
					Todas las noticias
				</a>
				<a href="<?php echo base_url()?>noticia/<?php echo $detalle['url_section']?>/todos"  class="noticias_seccion">
					<?php echo $detalle['section'] ?>
				</a>
			</div>	
		</div>
		<?php } ?>
</div>
