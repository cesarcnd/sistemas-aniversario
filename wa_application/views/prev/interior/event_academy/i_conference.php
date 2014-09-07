<?php $conferencias = array(
array("theme"=>"¿Qué es Ingeniería de Sistemas?","img"=>"pon.png","name_pon"=>"Est. Deyvis Valladares L.","org_pon"=>"UNJFSC","exp"=>"","date_pon"=>"15 de Septiembre","hour"=>"11:30 am - 12:30 pm"),
array("theme"=>"Megatendencias de TI","img"=>"pon.png","name_pon"=>"Ing. Miguel Chávez M.","org_pon"=>"GRUPO G&S","exp"=>"","date_pon"=>"15 de Septiembre","hour"=>"02:30 pm - 05:00 pm"),
array("theme"=>"Gestión del Conocimiento en la Acreditación Univ.","img"=>"pon.png","name_pon"=>"Dr. Daniel Andrade G.","org_pon"=>"UNJFSC","exp"=>"","date_pon"=>"16 de Septiembre","hour"=>"08:30 am - 10:00 am"),
array("theme"=>"STARTUP","img"=>"pon.png","name_pon"=>"Ing. Fernando Vilela L.","org_pon"=>"Reclutec","exp"=>"CEO y Fundador","date_pon"=>"16 de Septiembre","hour"=>"10:00 am - 11:30 am"),
array("theme"=>"SAP - ERP Overview","img"=>"pon.png","name_pon"=>"Mg. Juan Ponte H.","org_pon"=>"TechNova Peru","exp"=>"","date_pon"=>"16 de Septiembre","hour"=>"11:30 am - 01:00 pm"),
array("theme"=>"Gestión de proyectos de TI - PMBOK","img"=>"pon.png","name_pon"=>"Ing. Romel Mandamiento G.","org_pon"=>"TISI","exp"=>"","date_pon"=>"18 de Septiembre","hour"=>"09:00 am - 10:30 am"),
array("theme"=>"El Rol de Auditoría, Seguridad y Hacking Ético en la Org.","img"=>"pon.png","name_pon"=>"Ing. Diana Castillo R.","org_pon"=>"Isaca Lima","exp"=>"","date_pon"=>"18 de Septiembre","hour"=>"10:30 am - 12:00 pm"),
array("theme"=>"Ponencia de gestión","img"=>"pon.png","name_pon"=>"Ing. Yulia Trujillo H.","org_pon"=>"","exp"=>"","date_pon"=>"18 de Septiembre","hour"=>"12:30 pm - 02:00 pm"),
array("theme"=>"Ponencia de gestión","img"=>"pon.png","name_pon"=>"Ing. Adolfo Galindo B.","org_pon"=>"","exp"=>"","date_pon"=>"18 de Septiembre","hour"=>"02:00 pm - 03:30 pm"),
					); ?>
<div id="conference" class="event_academy">
	<?php $i=0;foreach($conferencias as $conferencia) {echo ($i>0&&count($conferencias)>$i)?'-->':'';?><div class="item_event_academy display-inline">
			<header class="super">
				<h2><?php echo $conferencia['theme'] ?></h2>
			</header>
			<section class="medium">
				<div class="photo display-inline">
					<img src="<?php echo base_url()?>resource/image/body/event-academy/<?php echo $conferencia['img'] ?>" alt="">
				</div><!--
				--><div class="text display-inline">
					<p class="name"><?php echo $conferencia['name_pon'] ?></p>
					<p class="institute"><?php echo $conferencia['org_pon'] ?></p>
					<p class="experience"><?php echo $conferencia['exp'] ?></p>
				</div>
			</section>
			<footer class="sub text">
				<div class="display-inline month_c"><?php echo $conferencia['date_pon'] ?></div><!--
				--><div class="display-inline"><?php echo $conferencia['hour'] ?></div>
			</footer>
		</div><?php $i++;echo ($i>0&&count($conferencias)>$i)?'<!-- ':'';} ?>
</div>