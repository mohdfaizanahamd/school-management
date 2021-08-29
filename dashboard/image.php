<?php include "header.php"; ?>

<h1>Upload Banner</h1>
<hr>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image" required />
        <br>
    <input type="submit" name="submit" class="btn btn-primary">
</form>
<?php
if(isset($_POST['submit'])){
    $name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $folder = "uploads/";
    $merge = $folder.$name;
    move_uploaded_file($tmp_name,$merge);
    echo "Uploaded Successfully";
   


}




?>
<?php include "footer.php"; ?>