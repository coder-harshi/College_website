<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
    include 'thirdpage1.php';
    ?>
</head>
<body>
<div class="container" style="background-color:#E6E6FA; margin-top:50px;" >
<div class="row">
<div class="col-lg-offset-2 col-lg-6 ">
<center> <h3><strong> STUDENT   WALFARE   FORM
</h3></center></strong></div>
<div class="col-lg-offset-2 col-lg-2" style="color:red;">
All fields are  mandatory
</div>
</div>
<form class="form-horizontal" role="form" method="post" action="center.php">
<div class="row">
  <div class="form-group">
     <label for="name" class ="control-label col-sm-2"> Name</label>
 <div class="col-sm-3">
     <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo  $result['sname']?>" readonly>
 </div>
 <label for="address" class ="control-label col-sm-2">Email</label>
 <div class="col-sm-3 col-offset-1" >
     <input type="email" class="form-control" id="address" name="email" placeholder="Enter Email"value="<?php echo  $result['email']?>" readonly>
</div>
 </div>
</div>
<div class="row">
  <div class="form-group">
     <label for="name" class ="control-label col-sm-2"> Complaint</label>

<textarea  name="complaint"rows="6" cols="70">

</textarea>

 </div>
</div>

<div class="row">
<div class="col-lg-offset-2">
  <input type="submit"  name="sub" value="Send">
</div>

</div>
</div>
</form>
<div class="panel-footer"style="text-align:center;"><strong>
Design By:Harshita Agarwal
</strong></div>


</div>
  </body>
</html>
<?php
if(isset($_POST['sub'])){
extract ($_POST);
$obj=new db();
$qry="insert into complaint (sname,email, complaint) values('$name','$email','$complaint');";
$obj->insert($qry);
// echo $qry;
 // $q=("select * from studentinfo where sname='$result['sname']' AND email='$result['email']';");
 // $obj->show_data($q);
// echo $obj;
}

?>
