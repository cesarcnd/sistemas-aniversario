<div>
	<form class="inscription" action="inscription.php" method="post">
		<div id="estudiante">
			<label for="estudiante">Estudiante de la UNJFSC <input type='checkbox' name="estudiante" class="opcion" value="1" checked="true"></label>
			
		</div>
		<div>
			<input class="dato" autofocus="autofocus" name="usuario" type="text"  placeholder="Apellidos y Nombres" requerid>
		</div>
		<div>
			<input class="dato" name="dni" type="text" maxlength="8" placeholder="N&uacute;mero de DNI" requerid>
		</div>
		<div>
		<input list="eventos" class="dato" placeholder="Seleccionar evento">
			<datalist id="eventos">
			<?php foreach ($eventos as $event_academy){?>
  			<option value="<?php echo $event_academy['id_event_academy']?>"><?php echo $event_academy['theme']?>
  			<?php }?>
  			</datalist>																
		</div>
		<div>
			<button name="btn_inscription" type="submit">Pre-inscribirse</button> 	
		</div>
	</form>
</div>