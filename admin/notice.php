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
      <div class="box box-info">
        <div class="box-header">
          <i class="fa fa-newspaper-o" aria-hidden="true"></i>
          <h3 class="box-title">Student Notice</h3>
          <!-- tools box -->
          <div class="pull-right box-tools">
            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
          <!-- /. tools -->
        </div>
        <div class="row">
        	<div class="col-md-6 col-md-offset-2">

        	<div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Student Notice</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" method="post" action="notice.php"enctype="multipart/form-data">
        	<div class="form-group">
        		<label class="col-sm-4 control-label">Enter Subject</label>
        		<div class="col-sm-5">
        		 <div class="input-group">


        		<input type="text" name="subject" placeholder="Enter Subject" class="form-control">

        		</div>
        		</div>


        	</div>
        	<div class="form-group">
        		<label class="col-sm-4 control-label">Enter Notice</label>
        		<div class="col-sm-5">
        		 <div class="input-group">

<!--
        		<input type="password" class="form-control"> -->
<textarea cols="45" rows="7" width="80px;" height="80px;" name="notice">
</textarea>
        		</div>
        		</div>


        	</div>
          <!-- <div class="form-group">
        <label class="col-sm-4 control-label">Add files</label>
        <input type="file" name="mfile[]" multiple>



          </div> -->
    <input type="submit" name="sub" value="send">
        </form>
          </div>
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
  <?php
  if(isset($_POST['sub'])){
  extract ($_POST);
  // print_r($_POST);
  // exit();
  // echo $news;
  // echo $subject;
  // echo $file;
  // $t="img/";
  // $imgname=$_FILES['mfile']['name'];
  // $tmpname=$_FILES['mfile']['tmp_name'];
  // for ($i=0; $i < count($imgname); $i++) {
  // $target=$t.$imgname[$i];
  //  //echo $target;
  // //exit();
  // move_uploaded_file($tmpname[$i],$target);

//include 'class/class.php';
  $obj=new db;
  $qry="insert into notice values(null,'$subject','$notice');";
  $obj->insert($qry);
}
   ?>
