<?php include "header.php"; ?>

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-100"> 
		<p>
			<form action="" method="post">
        Name: <input type="text" name="n1" class="form-control">
        <br>
        Class: <input type="text" name="c1" class="form-control">
        <br>
        Mobile: <input type="text" name="m1" class="form-control">
        <br>
        City: <input type="text" name="k1" class="form-control">
        <br>
        Password: <input type="password" name="p1" class="form-control">
        <br>
        <input type="submit" name="submit" class="btn btn-primary">
      
      </form>
		</p>
        
      <?php
        if(isset($_POST['submit'])){
          extract($_POST);
          $roll = random_int(100,999);
          $host="localhost";
          $username="root";
          $password="";
          $db="school";
          $connection = new PDO("mysql:host=$host;dbname=$db",$username,$password);

          $q = $connection->query("select * from students where mobile='$m1'");

          if($q->rowCount()==0)
          {
            $query = "insert into students values('','$n1','$roll','$c1','$m1','$k1','$p1')";
            $connection->exec($query);
            
            echo "Inserted Successfull";
          }
          else
          {
            echo "User already registerted.";
          }
         
        }
      
      ?>
       
      </div>
     
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<?php include "footer.php"; ?>