<?php include "header.php"; ?>
<h1>News-List</h1>
<hr>
<?php
    include "connection.php";
    $query=$con->prepare("Select * from news order by id DESC");
    $query->execute();
    $arr = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<table border="2" width="100%">
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Date</th>
    </tr>
<?php
    foreach($arr as $k)
    {
?>
    <tr>
        <td><?php echo $k['title'];?></td>
        <td><?php echo $k['description'];?></td>
        <td><?php echo $k['date'];?></td>
    
    </tr>
<?php

    }

?>
</table>
<?php include "footer.php"; ?>