<?php 

class Login_model {
    private $dbh; // databse handler
    private $stmt;

    public function __construct(){
        // data source
        $dsn = 'mysql:host=localhost;dbname=db_parkir';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAll(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM users');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cekUser($email){
        $this->stmt = $this->dbh->prepare("SELECT * FROM users WHERE email = '$email'");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>