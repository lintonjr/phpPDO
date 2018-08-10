<?php

class Conn implements IConn
{

    private $host;
    private $dbname;
    private $user;
    private $pass;

    public function __construct($host, $dbname, $user, $pass)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect()
    {
        try {
            $conn = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname}",
                $this->user,
                $this->pass);

        } catch (PDOException $e) {
            echo "error! Message: " . $e->getMessage() . " Error Code: " . $e->getCode();
            exit;
        }
    }
}