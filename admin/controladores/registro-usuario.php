<?php
session_start();
require_once('../config.php');
 
if(isset($_POST['submit']))
{
    if(isset($_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['programa']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['programa']))
    {
        $firstName = trim($_POST['nombre']);
        $lastName = trim($_POST['apellido']);
        $program = trim($_POST['programa']);
        $email = trim($_POST['email']);
        $date = date('Y-m-d H:i:s');
 
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $sql = 'select * from users where email = :email';
            $stmt = $pdo->prepare($sql);
            $p = ['email'=>$email];
            $stmt->execute($p);
            
            if($stmt->rowCount() == 0)
            {
                $sql = "insert into users (nombre, apellido, email,programa,created_at,updated_at) values(:vnombre,:vapellido,:email,:programa,:created_at,:updated_at)";
            
                try{
                    $handle = $pdo->prepare($sql);
                    $params = [
                        ':vnombre'=>$firstName,
                        ':vapellido'=>$lastName,
                        ':email'=>$email,
                        ':programa'=>$program,
                        ':created_at'=>$date,
                        ':updated_at'=>$date
                    ];
                    
                    $handle->execute($params);
                    
                    $success = 'Usuario creado correctamente!!';
                    
                }
                catch(PDOException $e){
                    $errors[] = $e->getMessage();
                }
            }
            else
            {
                $valFirstName = $firstName;
                $valLastName = $lastName;
                $valEmail = '';
                $valPorgram = $program;
                
 
                $errors[] = 'el Email ya esta registrado';
            }
        }
        else
        {
            $errors[] = "el Email no es valido";
        }
    }
    else
    {
        if(!isset($_POST['nombre']) || empty($_POST['nombre']))
        {
            $errors[] = 'el nombre es requerido';
        }
        else
        {
            $valFirstName = $_POST['nombre'];
        }
        if(!isset($_POST['apellido']) || empty($_POST['apellido']))
        {
            $errors[] = 'el apellido es requerido';
        }
        else
        {
            $valLastName = $_POST['apellido'];
        }
 
        if(!isset($_POST['email']) || empty($_POST['email']))
        {
            $errors[] = 'Email es requerido';
        }
        else
        {
            $valEmail = $_POST['email'];
        }
        if(!isset($_POST['programa']) || $_POST['programa'] === 'Seleccione un Programa')
        {
            $errors[] = 'Debe Seleccionar un Programa';
        }
        else
        {
            $valPorgram = $_POST['programa'];
        }
    }
 
}
?>
 