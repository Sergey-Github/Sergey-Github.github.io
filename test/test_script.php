<?php
	$server_protocol = $_SERVER['SERVER_PROTOCOL'];
	if(substr($server_protocol, 0, 4)==="HTTP") {

		foreach ($_REQUEST as $key => $value) {
			echo htmlspecialchars($key) . ":" . htmlspecialchars($value);

			// Вывод на веб-странице
			echo "<br/>"; 
			
			// Вывод без тегов
			// echo "\n";

		}

	}

?>