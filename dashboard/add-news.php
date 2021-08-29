<?php include "header.php"; ?>

<h1>News</h1>
<hr>
<form action="" method="post">
    Title: <input type="text" name="t1" class="form-control">
    <br>
    Description: <input type="text" name="d1" class="form-control">
    <br>
    Date: <input type="date" name="date" class="form-control">
    <br>
    <input type="submit" name="submit" class="btn btn-primary">
</form>
<?php
if(isset($_POST['submit'])){
    extract($_POST);
    include "connection.php";
    $query = $con->prepare("INSERT INTO news (title ,description ,date) VALUES (:t1,:d1,:date) ");
    $query->bindParam(':t1',$t1);
    $query->bindParam(':d1',$d1);
    $query->bindParam(':date',$date);
    $query->execute();


}




?>
<?php include "footer.php"; ?>