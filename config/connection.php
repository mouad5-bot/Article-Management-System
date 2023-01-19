<?php 
class Database 
{
    private static $host = "localhost";
    private static $user = "root";
    private static $pwd = "";
    private static $dbName = "article";

    public static function connect() {
        $dsn = 'mysql:host=' . self::$host . ';dbname=' . self::$dbName;
        $pdo = new PDO($dsn, self::$user, self::$pwd);
        try{
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    // public function __construct($host, $user, $password, $dbname) 
    // {
    //     $this->host = $host;
    //     $this->user = $user;
    //     $this->password = $password;
    //     $this->dbname = $dbname;
    //     $this->dbh = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
    // }
}
?>