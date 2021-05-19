<?php
if(isset($_POST['update']))
{
  print_r($_POST);

}
$roll=$_GET['id'];
include '../classes/db.php';
$obj=new db();
$qry="select * from studentinfo where rollno=$roll";
$res=$obj->show_where($qry);
?>

 <form method="post"action="update.php">
   <?php
foreach($res as $result)
{
  ?>
  <input type="hidden" name="roll" value="<?php echo $result['rollno'];?>">
  Student Name<input type="text" name="sname" value="<?php echo $result['sname'];?>"><br>
  </li>Father Name  <input type="text" name="fname" value="<?php echo $result['fname'];?>"><br>
  Mother Name<input type="text" name="mname" value="<?php echo $result['mname'];?>"><br>
  Email<input type="email" name="email" value="<?php echo $result['email'];?>"><br>

  Mobno<input type="text" name="mobno" value="<?php echo $result['mobno'];?>"><br>
Fmobno<input type="text" name="fmobno" value="<?php echo $result['fmobno'];?>"><br>
Address  <input type="text" name="addr" value="<?php echo $result['addr'];?>"><br>
State  <input type="text" name="state" value="<?php echo $result['state'];?>"><br>
  City<input type="text" name="city" value="<?php echo $result['city'];?>"><br>
<?php
}
?>
<input type="submit" name="update"value="update">
</form>
