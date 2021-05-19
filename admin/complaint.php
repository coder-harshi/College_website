<style>
table{
  width :100px;

}
tr:nth -child (even){
  background-color: #f2f2f2;
  border: 1px solid black;
}
</style>
<html>
<?php
include 'first.php';
?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Dashboard
       <small>Control panel</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="starter.php"><i class="fa fa-dashboard"></i> Home</a></li>
       <li class="active">Dashboard</li>
     </ol>
   </section>
   <section class="content">
     <div class="row">
       <div class="container">
         <div class="row">
           <div class="col-md-14">
             <?php

        $obj=new db();
             //print_r($_POST);
      $qry = "select * from complaint";
             $row = $obj->show_data($qry);

?>
<div style="overflow-x:auto;">
    <table border='1px'  class='table table-bordered'  style="border:1px solid black; width:100%;">
<?php
      echo "<tr ><th>Id </th>
                <th>student name</th>
                <th>Email</th>
                <th>complaint</th>

            </tr>";
      foreach($row as $result)
      {
        ?>
        <tr>
      <td> <?php echo $result['id'];?></td>
      <td> <?php echo $result['sname'];?></td>
        <td> <?php echo $result['email'];?></td>
        <td> <?php echo $result['complaint'];?></td>



          <td><a href="delete.php?id=<?php echo $result['id'];?>">Check</a></td>
          <?php
      }


      ?>
</table>
</div>
      </div>
      </div>
      </div>
</div>
</section>
</div>


<?php
include 'footer.php';
 ?>

</html>
