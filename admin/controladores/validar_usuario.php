<?php
session_start();
require_once('config.php');
 
if(isset($_POST['submit']))
{
	if(isset($_POST['email']) && !empty($_POST['email']))
	{
		
		$email = trim($_POST['email']);
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$sql = "select * from users where email = :email ";
			$handle = $pdo->prepare($sql);
			$params = ['email'=>$email];
			$handle->execute($params);
			if($handle->rowCount() > 0)
			{
				$getRow = $handle->fetch(PDO::FETCH_ASSOC);
				$_SESSION = $getRow;
				header('location:home.php');
				exit();
			}
			else
			{
				$errors[] = "Error Email no Encontrado";
			}
			
		}
		else
		{
			$errors[] = "Email no valido";	
		}
 
	}
	else
	{
		$errors[] = "El email es requerido";	
	}
 
}
?>