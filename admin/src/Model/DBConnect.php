<?php

namespace App\Model;

use PDO;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=CaseStudyShop;charset=utf8";
        $this->username = 'nvluc0608';
        $this->password = 'Lucnv@12';
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn,$this->username,$this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
}