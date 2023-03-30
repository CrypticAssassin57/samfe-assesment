<?php
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "baro bank";



    // creating a connection
    $conn = new mysqli('localhost','root','','baro bank')
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert inti registration(username,email,password) values(?,?,?)")
        $stmt->bind_param("sss",$username,$email,$password);
        $stmt->execute();
        echo"registration successfully"
        $stmt->close();
        $conn->close();
    }
?>
