<?php include "header.php"; ?>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper">
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear"> 
      <!-- ################################################################################################ -->
      <figure id="slide-1"><a class="view" href="#"><img src="images/demo/slider/1.png" alt=""></a>
      </figure>
        

       
  

        
        
        
        
        
            

      
      <!-- ################################################################################################ -->
     
      <!-- ################################################################################################ --> 
    </div>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 


       
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-100"> 
 
      <?php
    include "dashboard/connection.php";
    $id = $_GET['id'];
    $query=$con->prepare("Select * from news where id='$id'");
    $query->execute();
    $arr = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($arr as $k)
    {
        ?>
        <p>
            <b><?php echo $k['title']; ?> | Date : <?php echo $k['date']; ?>
            <hr>
            <?php echo $k['description']; ?>
        </p>
        <?php
    }
?>
        <!-- Right Column -->
       
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