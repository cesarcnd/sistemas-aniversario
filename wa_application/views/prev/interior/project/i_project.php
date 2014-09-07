<?php /*$projects= array(
array("ciclo"=>"IX","title"=>"Desarrollo de nuevas TI'cs","description"=>"Esto es una applicacion que sera usado para porder Esto es una applicacion que sera usado para porder Esto es una applicacion que sera usado para porder"));*/
$projects=array(); //Descomentar la otra linea cuando haya proyectos y comentar esta linea ?>
<div id="projects">
<?php if(count($projects)>0){
	foreach($projects as $project){ ?>
		<div class="item-project">
			<div class="ciclo display-inline"><?php echo $project['ciclo'] ?></div>
			<div class="content_project display-inline">
				<div class="title_project"><b><?php echo $project['title'] ?></b></div>
				<div class="description"><?php echo stringShort($project['description'],70) ?></div>
			</div>
		</div>
	<?php } 
}else{?>
<p class="no_public"><b>No hay Proyectos</b></p>
<?php } ?>
</div>