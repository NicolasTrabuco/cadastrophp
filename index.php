<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
try{
include "SignupUser.php";
require_once('Configuration.php');

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $cpf = $_POST['cpf'];
        $adress = $_POST['adress'];
        $state = $_POST['state'];
        $phone = $_POST['phone'];

        $user = new SignupUser();
        $user->setName($name);
        $user->setEmail($email);
        $user->setPwd($pwd);
        $user->setCpf($cpf);
        $user->setAdress($adress);
        $user->setState($state);
        $user->setPhone($phone);

        
        $result = $user->setUser();

        if($result == false){
            echo "cu";
        }else{
            echo "pinto";
        }
        var_dump($user);

    }
}catch(Exception $e){
    echo $e->getMessage();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
</body>
</html>