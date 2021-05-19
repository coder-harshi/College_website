
<html>

<body>

  <?php include 'thirdpage1.php';
   ?>

   <div class="row"style="background-color:f0f0f0;margin-top:50px">
      <div class="col-lg-offset-1 col-lg-1  col-sm-3 col-xs-3"> <img src="Ecb_logo.png"height="100px" width="100px"/>
      </div>
     <div class="col-lg-4  col-sm-offset-1 col-sm-5  col-xs-offset-1 col-xs-5" style="color:blue;"><h3>Govt. Engineering College Of Bikaner</h3>
     <h6>Higher Education For Dignity and Reliance</h6>
     </div>


   <!-- <div class="col-lg-offset-1 col-lg-2 col-sm-3 col-xs-3"> <img src="Ecb_logo.png"height="100px" width="100px"/></div> -->
<!-- <div class="col-lg-offset-4 col-lg-5 col-sm-9 col-xs-9"style="margin-top:50px;"><a href="#" class="badge badge-warning">Message<span class="badge badge-light">4</span></a>
<a href="#" class="badge badge-warning">Alert<span class="badge badge-light">4</span></a>
<a href="#" class="badge badge-warning">Notice<span class="badge badge-light">4</span></a> -->
</div>
<div class="main"style="background-color:#f0f0f0;">
<div class="container">
<div class="row"style="margin-top:20px;">
<div class="col-lg-offset-1 col-lg-2 col-sm-3 col-xs-4"><img src="img/<?php echo $result['pic'];?>"height="150px", width="150px"/></div>
<div class="col-lg-4 col-sm-offset-1 col-sm-5 col=xs-offset-2 col-xs-10"><h4><?php echo "<b>"."Welcome"."</b>"."   ".$result['sname']." "."!!";?>
</h4></div>
</div>
</div>

<div class="container">
  <!-- Content Header (Page header) -->
  <!-- <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="starter.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section> -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <!-- <div class="col-lg-3 col-xs-6">
        <! small box -->
        <!-- <div class="small-box bg-aqua">
          <div class="inner"> -->
<!--
            <h3> </h3> -->
            <!-- <p><h4>Complaints</h4></p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <! ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>2</h3>
<!-- <sup style="font-size: 20px">%</sup> -->
            <p>Notice</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#notice" class="small-box-footer">Check <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>4</h3>

            <p>Important News</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#imp news" class="small-box-footer">Check <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>4</h3>

            <p>Principal's message </p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#msg" class="small-box-footer">Check<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
<a name="notice">
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-7 col-xs-14" >
      <div class="panel panel-default">
        <h3  class="panel-title">Notice</h3>
        <div class="panel-heading col-xs-14" >
      <label class="col-xs-6 control-label hidden-xs" style="margin-top:5px;">Notice's Subject</label>

      <?php
      $obj=new db();
      $row=$obj->show_data("select  * from notice  WHERE id=(select MAX(id) from notice);");
      foreach ($row as  $result) {
    echo $result['subject'];
 // include 'classes/db.php';


  ?>
</div>
  <div class="panel-body" >
<label class="col-xs-6 control-label  hidden-xs" >News</label>
    <?php
 echo $result['notice'];
}
?>  </div>
</div>
</div>
</a>
<a name="imp notice">
<div class="col-lg-4 col-md-6 col-sm-7 col-xs-14" >
  <div class="panel panel-default">
    <h3  class="panel-title">News</h3>
    <div class="panel-heading col-xs-14" >
  <label class="col-xs-6 control-label hidden-xs" style="margin-top:5px;">Important News</label>

  <?php
  $obj=new db();
  $row=$obj->show_data("select  * from news  WHERE id=(select MAX(id) from news);");
  foreach ($row as  $result) {

echo $result['subject'];
// include 'classes/db.php';


?>
</div>
<div class="panel-body" >
<label class="col-xs-6 control-label  hidden-xs" >News field</label>
<?php
echo $result['news'];
}
?>  </div>
    </div>
  </div>

</a>
</div>
</div>

<?php
include 'link2.php';
 ?>


<div class="fixed-bottom"style="background-color:#EAF0FA;position: fixed;  bottom: 0;width: 100%; text-align:center;"><strong>
Design By:Harshita Agarwal
</strong></div>
</body>
 </html>
