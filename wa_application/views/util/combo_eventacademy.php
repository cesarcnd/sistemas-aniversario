<div>
	<input list="eventos" class="dato">
	<datalist id="eventos" name="combo_eventacademy">
	<?php foreach ($eventos as $evento){?>
    	<option value="<?php echo $evento['id_event_academy']?>"><?php echo $evento['theme']?></option>
    <?php }?>
	</datalist>
</div>

