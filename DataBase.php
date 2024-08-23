<?php 

class DataBase{
    private $host= "localhost";
    private $dbname = "Employe";
    private $root= "root";


public function __construct($db)
{
    $this->conn =$db;
}
    
 public function getconexion(){

     $this->conn = new mysqli($this->$host , $this->$dbname, $this->root)
     
    }




}




?>