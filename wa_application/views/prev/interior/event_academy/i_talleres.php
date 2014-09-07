<?php $talleres = array(
array("theme"=>"Java Web","img"=>"pon.png","name_pon"=>"Ing. Mayer Horna","org_pon"=>"Lima TI","exp"=>"","date_pon"=>"15 de Septiembre","hour"=>"05:00 pm - 07:30 pm"),
array("theme"=>"BACKEND","img"=>"pon.png","name_pon"=>"Est. Diego Vicente","org_pon"=>"Softmarkperu","exp"=>"Frontend y backend","date_pon"=>"15 de Septiembre","hour"=>"05:00 pm - 07:30 pm"),
array("theme"=>"STARTUP","img"=>"pon.png","name_pon"=>"Ing. Fernando Vilela L.","org_pon"=>"Reclutec","exp"=>"CEO y Fundador","date_pon"=>"16 de Septiembre","hour"=>"02:30 pm - 05:00 pm"),
array("theme"=>"Des. de sitios web adaptables (Responsive design)","img"=>"pon.png","name_pon"=>"Est. Cesar Nicho","org_pon"=>"Softmarkperu","exp"=>"Frontend, backend y SEO","date_pon"=>"16 de Septiembre","hour"=>"05:00 pm - 07:30 pm"),
array("theme"=>"Arduino y Rapberry","img"=>"pon.png","name_pon"=>"Est. José Silva","org_pon"=>"Escienza","exp"=>"CEO y Fundador","date_pon"=>"16 de Septiembre","hour"=>"05:00 pm - 07:30 pm")); ?>
<div id="talleres" class="event_academy">
	<?php $i=0;foreach($talleres as $taller){echo ($i>0&&count($talleres)>$i)?'-->':''; ?><div class="item_event_academy display-inline">
			<header class="super">
				<h2><?php echo $taller['theme'] ?></h2>
			</header>
			<section class="medium">
				<div class="photo display-inline">
					<img src="<?php echo base_url()?>resource/image/body/event-academy/<?php echo $taller['img'] ?>" alt="">
				</div><!--
				--><div class="text display-inline">
					<p class="name"><?php echo $taller['name_pon'] ?></p>
					<p class="institute"><?php echo $taller['org_pon'] ?></p>
					<p class="experience"><?php echo $taller['exp'] ?></p>
				</div>
			</section>
			<footer class="sub text">
				<div class="display-inline month_c"><?php echo $taller['date_pon'] ?></div><!--
				--><div class="display-inline"><?php echo $taller['hour'] ?></div>
			</footer>
		</div><?php $i++;echo ($i>0&&count($talleres)>$i)?'<!-- ':'';} ?>
</div>