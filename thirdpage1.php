
<?php
session_start();
if(!isset($_SESSION['id']))
{
  echo '<script> window.location="index.php";</script>';
}
$data=$_SESSION['id'];
include 'classes/db.php';
$obj=new db();
$row=$obj->show_data("select * from studentinfo where rollno='$data';");
// print_r($row);
// exit();
?>


  <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/jsbootstrap.min.js"></script> -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="admin/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="admin/skin-blue.min.css">
   <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>



<div class="navbar navbar-default  navbar-fixed-top" style="background-color:#45A0C2;">
    <div class="container" >
    <div class="navbar-header">
      <a href="thirdpage2.php" class="navbar-brand" style="color:white;">HOME</a>
      <button type="button" class="navbar-toggle"
      data-toggle="collapse" data-target="#menu" >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="menu">
    <ul class="nav navbar-nav">

      <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"style="color:white;">
          <?php
          foreach($row as $result)
          {
  ?>        <!-- The user image in the navbar-->
          <img src="img/<?php echo $result['pic'];?>"  height="30px" width="30px"class="img-circle">

          <!-- hidden-xs hides the username on small devices so only the image appears. -->
          <span class="hidden-xs">
            <?php


            echo $result['sname'];

            }

          ?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- The user image in the menu -->
          <li class="user-header">
            <?php //echo $result['pic'];?>
            <img src="img/<?php echo $result['pic'];?>"  height="100px" width="100px"class="img-circle" alt="User Image">

            <p style="text-align:center; color:black;">
              <?php
            echo $result['sname'];
?>
            </p>
          </li>
          <!-- Menu Body -->

          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="index.php" class="btn btn-default btn-flat" onclick="harshi()">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
      <li ><a href="smaterial.php"><i class="fa fa-book" aria-hidden="true" style="color:white;"></i><span style="color:white;">Study Material</a></span></li>

  <li ><a href="about.php"><i class="fa fa-user-o" aria-hidden="true"style="color:white;"></i>
<span style="color:white;">About</a></span></li>
    <li ><a href="feespay.php"style="color:white;"><i class="fa fa-inr" aria-hidden="true"style="color:white;"></i>Pay fee</a></li>
            <li style="color:white;"><a href="link1.php"><i class="fa fa-external-link" aria-hidden="true" style="color:white;"></i>
    <span style="color:white;">Important Link</a></span></li>
    <li><a href="center.php"><i class="fa fa-graduation-cap" aria-hidden="true" style="color:white;"></i><span  style="color:white;">Student Center</a></span></li>
    <li style="color:white;"><a href="help.php"><i class="fa fa-question-circle" aria-hidden="true"  style="color:white;"></i><span  style="color:white;">Help Center</a></span></li>
    <li style="color:white;"> <a href="admin/starter.php"  style="color:white;">Admin Panel</a></li>
    <!-- <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i><span>Library</a></span></li> -->
    <li class="dropdown" style="color:white;">
    <a class="dropdown-toggle" href="" data-toggle="dropdown" style="color:white;">
      <i class="fa fa-book" aria-hidden="true" style="color:white;"></i>
    Settings
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="">Change Password</a></li>

    <li><a href="index.php">Log out</a></li>
    </ul>
    </li>

</ul>
  </div>
  </div>
  </div>

<script type="javascript">
function harshi(){
  window.location.assign('signout.php')
}
</script>
