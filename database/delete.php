
<?php
$roll=$_GET['id'];
extract($_POST);
include '../classes/db.php';
$obj=new db();
$qry="delete  from studentinfo  where rollno=$roll";
$res=$obj->delete($qry);
if($res==1)
 {
  ?>
  <script language="javascript">
   alert("Do you want to delete your data")
   window.location.href = "show.php";
   	</script>
<?php
   }
      ?>
