<form action="form.php" method="post">
	<li>Transport from: <p><input type="text" name="transportFrom"></p></li>
	
	<li>Transport to: <p><input type="text" name="transportTo"></p></li>
	
	<li>Select aircraft model: 
		<p><select name="selectModel">
		<option value="Airbus A380">Airbus A380</option>
		<option value="Boeing 747">Boeing 747</option>
		</select></p>
	</li>
	
	<li>Choose date: <p><input type="date" name="date"></p></li>
	<!-- <li>Drop files: <p><input type="file" name="dropFiles" accept=".jpg, .png, .doc, .docx, .pdf" multiple></p></li> -->
  	Single cargo info:
	<div id="DynamicExtraFieldsContainer">
     	<div id="addDynamicField">
        	<input type="button" id="addDynamicExtraFieldButton" value="Add new cargo">
      	</div>
       	<div class="DynamicExtraField">
            <br>
            <label for="DynamicExtraField">Cargo name and weight </label> <input value="Delete this cargo" type="button" class="DeleteDynamicExtraField">
            <br>
            <input type="text" name="cargoName[]">
            <input type="number" name="cargoWeight[]" min="0" max="50000">
            <select name="selectCargo[]">
				<option value="Regularcargo">Regular cargo</option>
				<option value="Dangerouscargo">Dangerous cargo</option>
			</select>
        </div>
    </div>
	<p><input type="submit"  value ="Submit"></p>

</form>