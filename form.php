<!DOCTYPE HTML>
<html lang="pl">
<?php require 'head.php'; ?>

<body onload="currentTime();">
	<div id="container">
	<?php require 'header.php'; ?>
			<div class="content">
				<div id="clock"></div>
				<h2 style="text-align: center";>Yours delivery information.</h2>
				<div class="deliveryForm">
					<?php
						$transportFrom = $_POST['transportFrom'];
						$trasnportTo = $_POST['transportTo'];
						$selectModel = $_POST['selectModel'];
						$date = $_POST['date'];
						$cargoName = $_POST['cargoName'];
						$cargoWeight = $_POST['cargoWeight'];
						$selectCargo = $_POST['selectCargo'];
						echo "<p>Transport from: ", $transportFrom, "</p>"; 
						echo "<p>Transport to: ", $trasnportTo, "</p>";
						echo "<p>Selected aircraft model: ", $selectModel, "</p>";
						echo "<p>Date of delivery: ", $date, "</p>";
						echo "<p>Cargo name: ", $cargoName, "</p>";
						echo "<p>Cargo Weight: ", $cargoWeight, "kg</p>"; 
						echo "<p>Selected cargo type: ", $selectCargo, "</p>";
					?>
					<li><a href="delivery.php">Back to the delivery page</a></li>
				</div>
			</div>
	<?php require 'footer.php'; ?>
	</div>
</body>
</html>