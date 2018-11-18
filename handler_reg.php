<?php
	session_start();
	include("db_connect.php");
	include("functions.php");
	//Проверка введенных данных
	$error = array();

	$surname = clear_string($_POST['reg_surname']); 

	$name = clear_string($_POST['reg_name']); 
	$email = clear_string($_POST['reg_email']); 

	$phone = clear_string($_POST['reg_phone']);  

	if (strlen($surname) < 3 or strlen($surname) > 20) $error[] = "Укажите Фамилию от 3 до 20 символов!";
	if (strlen($name) < 3 or strlen($name) > 15) $error[] = "Укажите Имя от 3 до 15 символов!";
	if (!preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i",trim($email))) $error[] = "Укажите корректный email!";
	if (!$phone) $error[] = "Укажите номер телефона!";

	if (count($error))
	{

		echo implode('<br />',$error);
	}
	else
	{   
		if($_FILES['file']['type'] != 'text/plain')
		{
			echo "Данный файл не является текстовым!";
			exit();
		}
		//Указываем куда грузить файл
		$upfile = 'uploads/' .$_FILES['file']['name'];
		//Проверка действительно ли файл был загружен.
		if(is_uploaded_file($_FILES['file']['tmp_name']))
		{
			if(! move_uploaded_file($_FILES['file']['tmp_name'], $upfile))
			{
				echo'Файл не был загружен!';
				exit();
			}
		}
		else
		{
			echo "Возможно атака через загрузку файла";
			exit();
		}
		echo "Файл загружен!";	
		$uploadname = $_FILES['file']['name'];
		$query=mysqli_query($link,"INSERT INTO rezume (file_name,path,surname,users_name,email,phone) VALUES ('$uploadname','$upfile',
			'".$surname."',
			'".$name."',
			'".$email."',
	        '".$phone."')"); //составляем запрос на запись в базу имя и путь к файлу		
		echo 'Резюме добавлено в таблицу';
	}        
?>