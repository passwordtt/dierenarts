<?php
  
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "dierenarts";

    $conn = new mysqli($host,$username,$password,$db) or die($conn -> connect_error);
    

?>