<?php
require_once "config.php";

$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];




if (isset($username) && isset($email) && isset($phone) && isset($password) && isset($password_repeat)){
    if($password == $password_repeat){
        $cons = "SELECT * FROM usuarios WHERE email = '" . $_POST['email'] . "'";
        $per = mysqli_query($conn, $cons);
        
        if(mysqli_num_rows($per) == 1){
            header('Location: register.php?error=este%20gmail%20esta%20repetido');
        }else{
            $cad = "INSERT INTO usuarios (id, user_name, email, phone, password) VALUES (NULL,'$username', '$email', '$phone', '$hashed_password')";
  
            mysqli_query($conn, $cad);
    
            header("Location: successful_registration.php");
        }
    }
    else{
        header("Location:register.php?error=La%20contraseña%20no%20es%20la%20misma");
    }
}


?>