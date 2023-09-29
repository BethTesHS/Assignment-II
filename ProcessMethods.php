<?php
// Establish a database connection

class ProcessMethods implements ProcessInterface {
    public $db = 'TableDB';
    public $host = '127.0.0.1';
    public $cs = 'utf8';
    public $username = 'root';
    public $password = 'newpassword';
    function Conn() {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->cs";
        $pdo = new PDO($dsn, $this->username, $this->password);
        try {
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function Submit($FN, $EM, $P) {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->cs";
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $pdo->prepare("INSERT `Table` (FullName, Email, Passwords) values ('$FN', '$EM', '$P')");
            $sql->execute();
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}

?>