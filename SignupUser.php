<?php
require_once 'Configuration.php';
class SignupUser
{

    private $conn;
    private $uName;
    private $uEmail;
    private $uPwd;
    private $uCpf;
    private $uAdress;
    private $uState;
    private $uPhone;


    //Getters
    public function getName(){
        return $this->uName;
    }

    public function getEmail(){
        return $this->uEmail;
    }

    public function getPdw(){
        return $this->uPwd;
    }

    public function getCpf(){
        return $this->uCpf;
    }

    public function getAdress(){
        return $this->uAdress;
    }

    public function getState(){
        return $this->uState;
    }

    public function getPhone(){
        return $this->uPhone;
    }

    //#######  Setters  #######
    public function setName($name){
        return $this->uName = $name;
    }

    public function setEmail($email){
        return $this->uEmail = $email;
    }

    public function setPwd($pwd){
        return $this->uPwd = $pwd;
    }

    public function setCpf($cpf){
        return $this->uCpf = $cpf;
    }

    public function setAdress($adress){
        return $this->uAdress = $adress;
    }

    public function setState($state){
        return $this->uState = $state;
    }

    public function setPhone($phone){
        return $this->uPhone = $phone;
    }
    

    //The method Constructor instance the class Configuration in the var $conn
    public function __construct(){
        $database = new Configuration();
        $this->conn = $database->connect();
    }

    public function setUser(){
        try {

            $name = $this->getName();
            $email = $this->getEmail();
            $pwd = $this->getPdw();
            $cpf = $this->getCpf();
            $adress = $this->getAdress();
            $state = $this->getState();
            $phone = $this->getPhone();

            $query = "INSERT INTO Users (userName, userEmail, userPassword, userCpf, userAdress, userState, userPhone) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $email);
            $stmt->bindParam(3, $pwd);
            $stmt->bindParam(4, $cpf);
            $stmt->bindParam(5, $adress);
            $stmt->bindParam(6, $state);
            $stmt->bindParam(7, $phone);
            $stmt->execute();

            $resultCheck = null;
            if ($stmt == false) {
                $resultCheck = false;
            } else {
                $resultCheck = true;
            }

            return $resultCheck;
        } catch (Exception $e) {
            echo "Erro! " . $e->getMessage() . "<br><br>  <h1><b>:(</b></h1>";
        }
    }
}

