<?php
    $name = $_POST['name'];
    $text = $_POST['text'];

    // Подключение к базе данных
    $mysql = new mysqli('10.0.2.30', 'f0492679_and', 'kras', 'f0492679_wel');
	// Если есть ошибка соединения, выводим её и убиваем подключение
	if ($mysql->connect_error)
	{
	 die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
    $result = $mysql->query("INSERT INTO `art` (`name`, `text`)
	VALUES('$name', '$text')");

    if ($result == true){
    	echo "Информация занесена в базу данных";
    }else{
    	echo "Информация не занесена в базу данных";
    }

    $mysql->close();

    include('index.html');
?>