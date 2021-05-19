
<script src="../jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <div class="container">
   <div class="row">
     <div class="col-md-14">
       <?php
include '../classes/db.php';
       $obj = new db();
       //print_r($_POST);
$qry = "select * from studentinfo";
       $row = $obj->show_data($qry);?>
<div style="overflow:auto;">
  <?php
echo "<table border='1px' class='table table-bordered' >";
echo "<tr><th>Id </th>
          <th>student name</th>
          <th>father name</th>
          <th>Mother name</th>
          <th>Email</th>
          <th>mobno</th>
          <th>fmobno</th>

          <th>address</th>
          <th>state</th>
          <th>city</th>
          <th>Edit</th>
          <th>Delete</th>
      </tr>";
foreach($row as $result)
{
  ?>
  <tr>
<td> <?php echo $result['rollno'];?></td>
<td> <?php echo $result['sname'];?></td>
  <td> <?php echo $result['fname'];?></td>
  <td> <?php echo $result['mname'];?></td>
  <td> <?php echo $result['email'];?></td>
  <td> <?php echo $result['mobno'];?></td>
    <td> <?php echo $result['fmobno'];?></td>
    <td> <?php echo $result['addr'];?></td>
    <td> <?php echo $result['state'];?></td>
    <td> <?php echo $result['city'];?></td>

    <td><a href="edit.php?id=<?php echo $result['rollno'];?>">edit</a></td>
    <td><a href="delete.php?id=<?php echo $result['rollno'];?>">delete</a></td>
    <?php
}
echo "</table>";
?>
</div>
</div>
</div>
<!-- <script>
$(document).ready(function(){
  alert("stored value of database are shown here you can edit or as well as Delete any row ");
});
</script> -->
