<?php include "header.php"; ?>


<h1>Students List</h1>
<hr>
<?php
    include "connection.php";
    $query=$con->prepare("select * from students ");
    $query->execute();
    $arr = $query->fetchAll(PDO::FETCH_ASSOC);
     
        
    
?>
<table border="2" width="100%">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Roll_No</th>
        <th>Class</th>
        <th>Mobile</th>
        <th>City</th>
        
    </tr>
    <?php
         
foreach($arr as $row){
    
        
    ?>

    <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['roll_no'];?></td>
    <td><?php echo $row['class'];?></td>
    <td><?php echo $row['mobile'];?></td>
    <td><?php echo $row['city'];?></td>
        
    
    
    </tr>


<?php

        }

?>




</table>







<?php include "footer.php"; ?>