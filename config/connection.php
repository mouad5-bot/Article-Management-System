<?php 
class Database 
{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "article";

    public  function connect() 
    {
        $dsn = "mysql:host=$this->host;dbname=$this->dbName";
        $pdo = new PDO($dsn, $this->user, $this->password);
        try{
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
?>