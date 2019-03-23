<?php

$fd = fopen("data.txt", "a");

foreach ($_REQUEST as $key => $value) {
	
	// Сохранение полученных данных в файл 
	fwrite($fd, $key.":".$value."\n");	
}

fclose($fd);

?>