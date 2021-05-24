<?php

	// debug($_POST);
	// exit;

	$transportFrom = $_POST['transportFrom'];
	$transportTo = $_POST['transportTo'];
	$selectModel = $_POST['selectModel'];
	$date = $_POST['date'];
	$cargoName = $_POST['cargoName'];
	$cargoWeight = $_POST['cargoWeight'];
	$selectCargo = $_POST['selectCargo'];

	$cargoItems = array();

	for($i = 0; $i < count($cargoName); ++$i){
		$cargoItems[$i] = array(
			"name" => $cargoName[$i],
			"weight" => $cargoWeight[$i],
			"cargo" => $selectCargo[$i],
		);
	}

	$email_params = array(
		"transportFrom" => $transportFrom,
		"transportTo" => $transportTo,
		"date" => $date,
		"selectModel" => $selectModel,
		"cargoItems" => $cargoItems,
	);

	$mail_body = get_email($email_params);

	$headers = array();
	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=iso-8859-1';

	if ($selectModel == "Boeing 747"){
		$target = "boeing@lemonmind.com";
		//$target = "example@gmail.com";
	}else{
		$target = "airbus@lemonmind.com";
		//$target = "example@gmail.com";		
	}

	if (mail($target,"New Transport!", $mail_body, implode("\r\n", $headers))){
		$output = "
		Yours data you can see here<br /><br />
		Transport from: $transportFrom <br /><br />
		Transport to: $transportTo <br /><br />
		Selected aircraft model: $selectModel <br /><br />
		Delivery date: $date <br /><br />";
		$output .= "<table>";
		$output .= "<tr>";
		$output .= "  <th>Nb</th>";
		$output .= "  <th>Name</th>";
		$output .= "  <th>Weight</th>";
		$output .= "  <th>Cargo Type</th>";
		$output .= "</tr>";
		
		for($i = 0; $i < count($cargoItems); ++$i){
			$item = $cargoItems[$i];
      $output .= "<tr>";
      $output .= "  <td>".($i+1)."</td>";
      $output .= "  <td>".$item['name']."</td>";
      $output .= "  <td>".$item['weight']."</td>";
      $output .= "  <td>".$item['cargo']."</td>";
      $output .= "</tr>";
    }

		$output .= "</table>";
	
		echo $output;
	} else {
		echo "<h1>I can't send a mail!</h1>";
	}
