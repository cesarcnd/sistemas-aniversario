<div>
	<form class="inscription" action="inscription.php" method="post">
		<div>
			<input class="dato" autofocus="autofocus" name="usuario" type="text"  placeholder="Apellidos y Nombres" requerid>
		</div>
		<div>
			<input class="dato" name="dni" type="text" maxlength="8" placeholder="N&uacute;mero de DNI" requerid>
		</div>
		<div>
			<input list="eventos" class="dato">
			<datalist id="eventos">
  			<option value="Gesti&oacute;n del Conocimiento">
  			<option value="Inteligencia de Negocios">
  			<option value="Sistema de Comunicaci&oacute;n">
  			<option value="Desarrollo Wen">
  			<option value="Planeamiento Estrat&eacute;gico de TI">
			</datalist>
		</div>
		<div>
			<button name="btn_inscription" type="submit">Pre-inscribirse</button> 	
		</div>
	</form>
</div>