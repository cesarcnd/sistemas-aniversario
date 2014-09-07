<?php $programmings=array(
	array("img"=>"cachimbos.jpg","title"=>"Bievenida de Cachimbos y premiación","date_pro"=>"15/09/14 | 10:00 - 11:30","place_pro"=>""),
	array("img"=>"interrogation.png","title"=>"¿Qué es Ingeniería de Sistemas?","date_pro"=>"15/09/14 | 11:30 - 12:30","place_pro"=>""),
	array("img"=>"3d.jpg","title"=>'Presentación del Proyecto "Construcción de una impresora 3D Open Source"',"date_pro"=>"15/09/14 | 12:30","place_pro"=>""),
	array("img"=>"megatendencia.jpg","title"=>"Megatendencias de TI","date_pro"=>"15/09/14 | 14:30 - 17:00","place_pro"=>""),
	array("img"=>"sap3.jpg","title"=>"Taller SAP","date_pro"=>"15/09/14 | 14:30 - 17:00","place_pro"=>""),
	array("img"=>"java.jpg","title"=>"Java Web","date_pro"=>"15/09/14 | 17:00 - 19:30","place_pro"=>""),
	array("img"=>"backend.png","title"=>"Backend","date_pro"=>"15/09/14 | 17:00 - 19:30","place_pro"=>""),
	array("img"=>"gc.jpg","title"=>"Gestión del Conocimiento en la Acreditación Universitaria","date_pro"=>"16/09/14 | 08:30 - 10:00","place_pro"=>""),
	array("img"=>"startup.jpg","title"=>"STARTUP","date_pro"=>"16/09/14 | 10:00 - 10:30","place_pro"=>""),
	array("img"=>"sap3.jpg","title"=>"SAP - ERP Overview","date_pro"=>"16/09/14 | 11:30 - 13:00","place_pro"=>""),
	array("img"=>"startup.jpg","title"=>"Taller STARTUP","date_pro"=>"16/09/14 | 14:30 - 17:00","place_pro"=>""),
	array("img"=>"abap.jpg","title"=>"Taller ABAP","date_pro"=>"16/09/14 | 14:30 - 17:00","place_pro"=>""),
	array("img"=>"responsive.jpg","title"=>"Des. de sitios web (Responsive design)","date_pro"=>"16/09/14 | 17:00 - 19:30","place_pro"=>""),
	array("img"=>"arduino.jpg","title"=>"Arduino y Rapberry ","date_pro"=>"16/09/14 | 17:30 - 19:30","place_pro"=>""),
	array("img"=>"feria.jpg","title"=>"Feria Tecnológica","date_pro"=>"17/09/14 | 09:00 - 13:00","place_pro"=>""),
	array("img"=>"pmbok.jpg","title"=>"Gestión de proyectos de TI utilizando la metodología PMBOK","date_pro"=>"18/09/14 | 09:00 - 10:30","place_pro"=>""),
	array("img"=>"auditoria.jpg","title"=>"El Rol de Auditoría, Seguridad y Hacking Ético en las Organizaciones","date_pro"=>"18/09/14 | 10:30 - 12:00","place_pro"=>""),
	array("img"=>"ponencia.jpg","title"=>"Ponencia de gestión","date_pro"=>"18/09/14 | 12:30 - 14:00","place_pro"=>""),
	array("img"=>"ponencia.jpg","title"=>"Ponencia de gestión","date_pro"=>"18/09/14 | 14:00 - 15:30","place_pro"=>""),
	array("img"=>"verbena.jpg","title"=>"Verbena de Sistemas","date_pro"=>"18/09/14 | 18:00","place_pro"=>""),
	array("img"=>"IMG_5518.JPG","title"=>"Olimpiada Sistémica","date_pro"=>"18/09/14 | 08:30 - 18:00","place_pro"=>"'Campestre Mangales' - Campiña"),
	array("img"=>"discoteca.jpg","title"=>"Fiesta de Sistemas","date_pro"=>"18/09/14 | 23:00","place_pro"=>"Ophera disco"));
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