<?php
// Establish a database connection

class ProcessMethods implements ProcessInterface
{
    public $db = 'FormDB';
    public $host = 'localhost';
    public $cs = 'utf8';
    public $username = 'root';
    public $password = '';
    function Conn()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->cs";
        $pdo = new PDO($dsn, $this->username, $this->password);
        try {
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function Submit($FN, $EM, $P)
    {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->cs";
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $pdo->prepare("INSERT `SignUp` (FullName, Email, Passwords) values ('$FN', '$EM', '$P')");
            $sql->execute();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function Form($N, $W)
    {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->cs";
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $pdo->prepare("INSERT `Form` (`Name`, `Write`) values ('$N', '$W')");
            $sql->execute();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function Post()
    {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->cs";
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $pdo->prepare("SELECT * FROM `Form`");
            $sql->execute();
            if ($sql->rowCount() > 0) {
                while ($user_row = $sql->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <div>
                        <label>
                            <?php print $user_row["Name"] ?>
                        </label>
                        <p>
                            <?php print $user_row["Write"] ?>
                        </p>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div>
                    <label> </label>
                    <p>
                        Looks like noone posted anything :/
                    </p>
                </div>
                <?php
            }



        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}

?>