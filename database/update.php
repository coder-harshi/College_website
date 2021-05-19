<?php
extract ($_POST);
include '../classes/db.php';
$obj=new db();
$qry="update studentinfo set sname='$sname',
                             fname='$fname',
                             mname='$mname',
                             email='$email',
                             mobno='$mobno',
                             fmobno='$fmobno',
                             addr='$addr',
                             state='$state',
                             city='$city' where rollno=$roll";
 $res=$obj->update($qry);
 if($res==1)
 {
   ?>
   <script language="javascript">
   alert("Data Update")
   window.location.href = "show.php";
   	</script>

   <?php
   }

   ?>
