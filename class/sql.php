<?php

class Sql extends PDO{

    private $conn;

    public function __construct(){

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "Samu123");

    }

    private function setParams($statments, array $parameters){

            foreach ($parameters as $key => $value) {

                $this->setParam($statments, $key, $value);
               
            }

    }

    private function setParam($statments, $key, $value){

            $statments->bindParam(":{$key}", $value);

    }

    public function execQuery($rawQuery, $params = array())
    {
        $stmt = $this->conn->prepare($rawQuery);
 
        $this->setParams($stmt, $params);
 
        $stmt->execute();
        return $stmt;
    }

    public function select($rawQuery, $params = array()):array
    {

        $stmt = $this->execQuery($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}











?>