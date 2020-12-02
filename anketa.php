<?php
    $text1 = $_POST['1'];
    $text2 = $_POST['2'];
	$text3 = $_POST['3'];
    $text4 = $_POST['4'];
	$text5 = $_POST['5'];
    $text6 = $_POST['6'];
	$text7 = $_POST['7'];
    $text8 = $_POST['8'];


    // Подключение к базе данных
    $mysql = new mysqli('10.0.2.30', 'f0492679_and', 'kras', 'f0492679_wel');
	// Если есть ошибка соединения, выводим её и убиваем подключение
	if ($mysql->connect_error)
	{
	 die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
    $result = $mysql->query("INSERT INTO `anket` (`1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`)
	VALUES('$text1', '$text2', '$text3', '$text4', '$text5', '$text6', '$text7', '$text8')");

    if ($result == true){
    	echo "Информация занесена в базу данных";
    }else{
    	echo "Информация не занесена в базу данных";
    }

    $mysql->close();

    include('index.html');
?>