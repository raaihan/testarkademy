<!DOCTYPE html>
<html>
	<head>
		<title>BELAJAR JSON</title>
	</head>
	<body>
		<?php
				$var = array(
						"Name" => "Raihan Hafidz Wahyudi",
						"address" => "Jl moh hatta junrejo, Kota Batu",
						"Hobbies" => array(
							"Makan","Minum"),
						"is_married" => false,
					"School" => array(
						"HighSchool" => "SMK PGRI 3 Malang"),
					"Skills" => array(
						"Skil"),
					);
		$output = json_encode($var);
		echo $output;
		?>
	</body>
</html>