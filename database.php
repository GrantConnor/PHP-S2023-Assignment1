<?php
// creates a database for the pizza orders
class Database{
    private $connection(){
        public function __construct(){
        $this->connection = mysqli_connect('172.31.22.43',
        'Grant200282230', 'fhKeRptmwX', 'Georgian College');

        if(mysqli_connect_error()){
            die("Database could not connect" . mysqli_connect_error() 
            . mysqli_connect_error());
            }
        }
    }
    //creates data for the table 
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
    
    // removes any unnecessary items
    public function sanitizer($var){
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return;
    }
}
database = new Database();