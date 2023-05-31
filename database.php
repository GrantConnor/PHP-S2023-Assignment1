<?php

class Database{
    private $connection(){
        $this->connection = mysqli_connect('172.31.22.43',
        'Grant200282230', 'fhKeRptmwX', 'Georgian College');

        if(mysqli_connect_error()){
            die("Database could not connect" . mysqli_connect_error() 
            . mysqli_connect_error());
        }
    }
    public function create($delivery, $names, $size, $toppings){
        $sql = "INSERT INTO pizzaOrder (delivery, names, size, toppings) VALUES
        ('$delivery', '$names', '$size', '$toppings')";

        $res = mysqli_query($this->connection, $sql);

        if($res){
            return true;
        }
        else{
            return false;
        }
    }
    public function sanitizer($var){
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return;
    }
}
database = new Database();