<?php include "header.php"; ?>
<h1>FEES-LIST</h1>
<hr>
<?php
    include "connection.php";
    $query=$con->prepare("SELECT * FROM fees");
    $query->execute();
    $arr = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<table border="2" width="100%">
    <tr>
        <th>Email</th>
        <th>Amount</th>
        <th>Date</th>
    </tr>
<?php
    foreach($arr as $k){
?>
    <tr>
        <td><?php echo $k['email'];?></td>
        <td><?php echo $k['amount'];?></td>
        <td><?php echo $k['date'];?></td>
    </tr>
<?php
    }

?>

</table>




<?php include "footer.php"; ?>