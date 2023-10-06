<?php
include 'config.php';
if(isset($_POST['add_students'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $query = "INSERT INTO `hocsinh`(`name`, `email`, `address`) VALUES ('$name','$email','$address')";
    $result = mysqli_query($conn , $query);

    if($result){
        header('location:index.php');
    }
}
?>