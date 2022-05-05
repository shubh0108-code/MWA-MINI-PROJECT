<?php 
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];

$conn=new mysqli('localhost','root','','test');
if($conn->connect_error){
    die("Connect Failed : " .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstname,lastname,gender,number,email,password) 
    values(?,?,?,?,?,?)");
    $stmt->bind_param("sssiss",$firstname,$lastname,$gender,$number,$email,$password);
    $stmt->execute();
    echo"registration successful";
    $stmt->close();
    $conn->close();
}
?>