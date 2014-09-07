<?php $programmings=array(
	array("img"=>"IMG_5518.JPG","title"=>"Bievenida de Cachimbos y premiación","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"¿Qué es Ingeniería de Sistemas?","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>'Presentación del Proyecto "Construcción de una impresora 3D Open Source"',"date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"Megatendencias de TI","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"Taller SAP","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"Java Web","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"Backend","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"Gestión del Conocimiento en la Acreditación Universitaria","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"STARTUP","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"SAP - ERP Overview","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"Taller STARTUP","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"Taller ABAP","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"Des. de sitios web (Responsive design)","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"Arduino y Rapberry ","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"Feria Tecnológica","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"Gestión de proyectos de TI utilizando la metodología PMBOK","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"El Rol de Auditoría, Seguridad y Hacking Ético en las Organizaciones","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"Ponencia de gestión","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"Ponencia de gestión","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"Verbena de Sistemas","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"Olimpiada Sistémica","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"),
	array("img"=>"IMG_5518.JPG","title"=>"Fiesta de Sistemas","date_pro"=>"15/08/14 | 9:30 am","place_pro"=>"Explanada Universidad"));
 ?>
 <?php foreach($programmings as $programming) {?>
	<div class="item-programming">
		<div class="display-inline top image">
			<div>
				<img src="<?php echo base_url().IMAGE_PATH;?>body/images/programming/<?php echo $programming['img']?>" alt="">
			</div>
		</div><!-- 
	 --><div class="display-inline top content">
		 	<p class="title"><?php echo $programming['title']?></p>
		 	<p><span class="sistemas_ico_clock"></span> <?php echo $programming['date_pro']?></p>
		 	<p><span class="sistemas_ico_location"></span> <?php echo $programming['place_pro']?></p>
	 	</div>
	</div>
<?php } ?>
<div class="list-item display-none">
	<ul>
		<li><a class="link-a" href="">Todos</a></li>
		<li><a class="link-a" href="">Programacion</a></li>
	</ul>
</div>