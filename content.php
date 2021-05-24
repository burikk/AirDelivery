<form action="form.php" method="post">
	<div>
		<label>
			Transport from: <input type="text" name="transportFrom" required>
		</label>
	</div>

	<div>
		<label>Transport to: <input type="text" name="transportTo" required></label>
	</div>

	<div>
		<label>Select aircraft model:
			<select name="selectModel" id="selectModel" required>
				<option value="Airbus A380">Airbus A380</option>
				<option value="Boeing 747">Boeing 747</option>
			</select>
		</label>
	</div>


	<div><label>Choose date: <input type="date" name="date" id="date" required></label></div>
	<div>
		<div class="input-images"></div>
	</div>
	<p>Single cargo info:</p>
	<div id="DynamicExtraFieldsContainer">
		<div id="addDynamicField">
			<input type="button" id="addDynamicExtraFieldButton" value="Add new cargo">
		</div>
	</div>
	<p><input type="submit" value="Submit"></p>

</form>


<div style="display:none">
	<div class="DynamicExtraField" id="cloneMe">
		<div>
			<input value="Delete this cargo" type="button" class="DeleteDynamicExtraField">
		</div>
		<div>
			<label>Cargo name: <input type="text" name="cargoName[]" required> </label>
		</div>
		<div>
			<label>Weight [kg]: <input type="number" name="cargoWeight[]" min="0" max="35000" required></label>
		</div>
		<div>
			<label>Cargo Type:
				<select name="selectCargo[]" required>
					<option value="Regularcargo">Regular cargo</option>
					<option value="Dangerouscargo">Dangerous cargo</option>
				</select>
			</label>
		</div>
	</div>
</div>
