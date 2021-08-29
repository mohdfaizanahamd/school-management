<?php
    $id=$_GET['id'];
    include "connection.php";
    $query = $con->prepare('DELETE FROM students WHERE id = :id');
    $query->bindParam(':id',$id);
    $query->execute();
    header("location:../student-registration.php");


?>