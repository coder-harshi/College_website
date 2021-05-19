<?php
  session_start();

  // if(!isset($_POST['sub']))
  //   {
  //     header('location:login.php');
  //   }

  if(isset($_POST['sub'])){
  // print_r($_POST);exit;
  extract ($_POST);
  $password=addslashes($password);
  $userid=addslashes($userid);
  // echo $password;
  //
  // $_SESSION['data']=$userid;
  $_SESSION['id']=$userid;
  // echo $_SESSION['data'];
  // exit();
  include 'classes/db.php';
  $obj=new db();
  $q="select  * from studentinfo  WHERE rollno=(select MAX(rollno) from studentinfo);";
  $row=$obj->show_data($q);
  // print_r($row);

  $qry="select * from studentinfo where rollno='$userid' and password='$password'";
  // echo $qry;exit;
  $count=$obj->checkuser($qry);
  // echo $count;
  // exit();
  if($count>0)

  {
    // echo "hii";
  header("location:thirdpage2.php");
  }
  else {
  ?>
  <script language="javascript">
  alert("invalid user name please click on New Login link")
  </script>
  <?php
  }

  //echo ($_SESSION['data']);
  }
?>
  <!-- <script>
  $(document).ready(function(){
    alert("it's a demo website..jst for the practice purpose...");
  });
  </script>
   -->
  <script>
  $(document).ready(function(){
    alert($row );
  });
  </script>


<style>
body {
 background: url(bg.jpg) no-repeat center center fixed;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;
}

.panel-default {
 opacity: 0.9;
 margin-top:100px;
}
.form-group.last {
 margin-bottom:0px;
}
</style>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container"style="margin-left:0px;">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong class="">Login</strong>

                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="index.php" method="post">
                        <div class="form-group">
                          <div style="margin-left:20px; color:red;"> enter number from 1 to 30 </div>
                            <label for="inputEmail3" class="col-sm-3 control-label">User Id</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  name="userid" id="inputEmail3" placeholder="Enter a number from 1 to 30" required="">
                            </div>
                        <div class="form-group">
                        </div>
                            <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control"  name="password"id="inputPassword3" placeholder="Password" required="">
                            </div>
                        </div>
                                          <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                              <input type="submit" name="sub"  value="login"class="btn btn-success btn-sm">
                                <button type="reset" class="btn btn-default btn-sm">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer"><b>New login-></b>  <a href="database/loginpage.php" class=""><b>Click here</b></a>

                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
