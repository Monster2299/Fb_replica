<?php
if(isset($_POST['submit1'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
}
$connection = mysqli_connect('localhost','root','','fakebook');
if($connection){
    echo "connected and ";
}
$query = "INSERT INTO `details` (`username`, `password`) VALUES ('$username', '$password')";
if($query){
    echo "inserted";
}
?>