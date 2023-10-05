<?php


require_once "SignupUser.php";

$method = new SignupUser();

class UserDatas extends SignupUser{

    public function encryptData(){
        //Criptografar o cpf e a senha
    }

}



?>