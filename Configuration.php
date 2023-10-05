<?php
class Configuration
{   
    private $host = "localhost";
    private $db_name = "teste";
    private $username = "Nicolas";
    private $password = "848620Nicolas#";
    public $config;

    public function connect()
    {
        $this->config = null;
        try
        {
            $this->config = new PDO(
                                "mysql:host={$this->host};dbname={$this->db_name}",
                                $this->username,
                                $this->password
                                );
            $this->config->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
            print("Erro!: " . $e->getMessage() . "<br>");
            die();
        }
        return $this->config;
    }
    
}

?>