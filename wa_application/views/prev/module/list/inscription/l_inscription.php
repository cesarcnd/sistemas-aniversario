<div class="form_inscription">
	<form class="inscription" action="<?php echo base_url();?>pre-inscribirse/eventos" method="post">
		<div id="estudiante">
			<label for="estudiante"><b class="letter">Estudiante de la UNJFSC</b> <input type='checkbox' name="estudiante" class="opcion" value="1" checked="true" /></label>
		</div>
		<div>
			<input class="dato" name="attendance" type="text" placeholder="Apellidos y Nombres" onkeydown="return deletePaste(event)" onkeypress="return isLetter(event)" autcomplete="off"required />
		</div>
		<div>
			<input class="dato" name="dni" type="text" maxlength="8" placeholder="N&uacute;mero de DNI" onkeydown="return deletePaste(event)" onkeypress="return isNumeric(event)" autcomplete="off" required />
		</div>
		<div>
			<input list="eventos" class="dato" id="theme" placeholder="Seleccionar...">
			<datalist id="eventos">
				<option value="SELECCIONAR..."><input type="hidden" name="" value="0">														
				<?php foreach ($eventos as $event_academy){?>
					<option value="<?php echo $event_academy['theme']?>"><input type="hidden" name="id_event_academy" value="<?php echo $event_academy['id_event_academy']?>">
				<?php }?>
			</datalist>
		</div>
		<div>
			<button name="btn" type="submit">Pre - inscribirse</button> 	
		</div>
	</form>
</div>