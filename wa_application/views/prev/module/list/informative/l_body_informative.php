<?php foreach ($file as $item): ?>
	<div class="item-informative">
		<div class="display-inline top image">
			<div class="sprite img-informative pdf">
			</div>
		</div><!-- 
	 --><div class="display-inline top content">
		 	<p class="title"><?php echo $item['name_file']; ?></p>
		 	<p>
		 		<a href=""><span class="sistemas_ico_download"></span> Descargar </a> &nbsp;
		 		<a href=""><span class="sistemas_ico_view"> Vista Previa</span></a>
		 	</p>
	 	</div>
	</div>
<?php endforeach ?>
<!-- <div class="item-informative">
	<div class="display-inline top image">
		<div class="sprite img-informative pdf">
		</div>
	</div> 
 	<div class="display-inline top content">
	 	<p class="title">Campeonato Relampago Sistema Deportes</p>
	 	<p>
	 		<a href=""><span class="sistemas_ico_download"></span> Descargar </a> &nbsp;
	 		<a href=""><span class="sistemas_ico_view"> Vista Previa</span></a>
	 	</p>
 	</div>
</div>
<div class="item-informative">
	<div class="display-inline top image">
		<div class="sprite img-informative doc">
		</div>
	</div> 
	<div class="display-inline top content">
	 	<p class="title">Campeonato Relampago Sistema Deportes</p>
	 	<p>
	 		<a href=""><span class="sistemas_ico_download"></span> Descargar </a> &nbsp;
	 		<a href=""><span class="sistemas_ico_view"> Vista Previa</span></a>
	 	</p>
 	</div>
</div> -->
<div class="list-item display-none">
	<ul>
		<li><a class="link-a" href="">Todos</a></li>
		<?php foreach ($list_file as $item): ?>
			<li><a class="link-a" href=""><?php echo $item['type_file']; ?></a></li>
		<?php endforeach ?>
	</ul>
</div>