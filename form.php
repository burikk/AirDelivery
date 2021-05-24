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
					
					require_once __DIR__ . '/incs/functions.php';
					require_once __DIR__ . '/email.php';
					require 'input_data.php';
					
					?>
					<li><a href="delivery.php">Back to the delivery page</a></li>
				</div>
			</div>
	<?php require 'footer.php'; ?>
	</div>
</body>
</html>
