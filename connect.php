<?php



class Database
{

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db ="mybook_db";

    function connect(){

        $connection = mysqli_connect($this->host,$this->username,$this->password,$this->db);
        return $connection;
    }

    function read(){
        $conn = $this->connect();

    }

    function save(){

        
    }
}









$query ="select * from users";

$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($result))
{

    echo "<pre>";
    print_r($row);
    echo "</pre>";
}

?>