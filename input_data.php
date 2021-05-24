<?php

	$transportFrom = $_POST['transportFrom'];
	$transportTo = $_POST['transportTo'];
	$selectModel = $_POST['selectModel'];
	$date = $_POST['date'];
	$cargoName = $_POST['cargoName'];
	$cargoweight = $_POST['cargoWeight'];
	$selectCargo = $_POST['selectCargo'];

	$output = "
	Yours data you can see here<br /><br />
	Transport from: $transportFrom <br /><br />
	Transport to: $transportTo <br /><br />
	Selected aircraft model: $selectModel <br /><br />
	Delivery date: $date <br /><br />";

	//foreach ($cargoName as $item)
		//$output."<li>" . $cargoName . "</li>";
	echo $output;
?>

<!-- for($i=0; $i < count($pola["cargoName"]); ++$i) {
 $przewoz = array( "name" => $pola["cargoName"],
"weight" => $pola["cargoWeight"], //itd
);
} -->