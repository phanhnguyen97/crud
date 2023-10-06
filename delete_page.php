<?php 
include 'config.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    } 

$query = "DELETE FROM `hocsinh` WHERE `id`= '$id' ";
$result = mysqli_query($conn,$query);
if(!$result){
    die('query failed'.mysqli_error($conn));
}
else{
    header('location:index.php');
}

?>