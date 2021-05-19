

<?php
	session_start();
	if(isset($_POST['sub']))
	{
		extract ($_POST);

		$target = "../img/";
		$success=1;
		if($sname==''){
			$_SESSION['ename']="Enter your name";
			$success=0;
		}else if (!preg_match("/^[a-z ]*$/",$sname)) {
			$_SESSION['ename']="Enter your name properly";
			$success=0;
		}
		// student name
		if($fname==''){
			$_SESSION['uname']="Enter this field";
			$success=0;

		}
		else if(!preg_match("/^[a-z ]*$/",$fname)) {
			$_SESSION['uname']="Enter this field properly";
			$success=0;
		}
		// for father name
		if($mname==''){
			$_SESSION['smname']="Enter this field";
			$success=0;

		}
		//for mother name

		else if(!preg_match("/^[a-z ]*$/",$mname)) {
			$_SESSION['smname']="Enter this field properly";
			$success=0;
		}

		if($email==''){
			$_SESSION['uemail']="enter this field";
			$success=0;

		}
		elseif(!preg_match("/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/",$email)){
			$_SESSION['uemail']="enter email properly  ";
		}
		//for email
		if($mobno==''){
			$_SESSION['umob']="enter this field properly"	;
$success=0;

			}
			elseif(!preg_match("/^[0-9]*$/",$fmobno)){
				$_SESSION['umob']="enter mobile number properly";
				$success=0;
			}
//for mobile no
			if($fmobno==''){
				$_SESSION['fmob']="enter this field";
			$success=0;

			}
			elseif(!preg_match("/^[0-9]*$/",$fmobno)){
				$_SESSION['fmob']="enter mobile number properly";
				$success=0;
			}
			if($addr==''){
				$_SESSION['add']="enter this field";
$success=0;

						}

// for address field
if($state==''){
	$_SESSION['st']="enter this field";
$success=0;

			}
			if($city==''){
				$_SESSION['ci']="enter this field";
			$success=0;

						}
						if($password==''){
							$_SESSION['pwd']="enter this field";
			$success=0;

									}


		if($success)
		{
			if(isset($_FILES['file']))
			{
				$filename = $_FILES['file']['name'];
				$tmp =  $_FILES['file']['tmp_name'];


				move_uploaded_file($tmp, $target.$filename);
				$pic = $target.$filename;


			}
			// trim($_POST);
		// 	include '../classes/validation.php';
		// 	$obj2=new val();
		// $data=	$obj2->  test_input($_POST);
			include '../classes/db.php';
		// $val=	trim($_POST);
			// echo $fmobno;
			$obj=new db();
		 $qry="insert into studentinfo(sname,fname,mname,email,mobno,fmobno,addr,state,city,pic,password)
		values('$sname','$fname','$mname','$email','$mobno','$fmobno','$addr','$state','$city','$pic','$password');";
		$obj->insert($qry);
	}

}
 ?>
 <style>
 span{
	 color: red;
 }
 </style>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="../bootstrap.min.js"></script>
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../jquery.min.js"></script>
</head>
<body>
	<div class="navbar navbar-default  navbar-fixed-top" style="background-color:45A0C2;color:white;">
			<div class="navbar-header">
				<a href="../index.php" class="navbar-brand"  style="color:white;"><h6><b>USER LOGIN PANEL</b></h6></a>

			</div>


		<a href="show.php" style="color:white;"><b>SEE DATA</b></a>
				<!-- <li><a href="#"></a></li>
					<li><a href="#">Messages</a></li> -->



</div>

<div class="container" style="max-width:850px;background:#ebeff2;color:#5BC0DE;margin-top:52px;" >
<div class="row"style="background-color:#5BC0DE;color:white;padding:8px 8px;"><h3>STUDENT REGISTERATION FORM</h3>
</div>

	<form method="post"  action="loginpage.php" class="form-horizontal" role="form"enctype="multipart/form-data" >
<div class="row"style="margin-top:10px;">
	   <div class="form-group">
	      <label for="name"style="color:#5BC0DE;" class ="control-label col-sm-2">Student name</label>
<div class="col-sm-3">

	      <input type="name" class="form-control" id="name" placeholder="Enter Student name" name="sname" >
				<span>
					<?php
					if(isset($_SESSION['ename'])){
						echo $_SESSION['ename'];
						unset($_SESSION['ename']);
					}
					?>
				</span>
    </div>
	  	    <label for="address" style="color:#5BC0DE;"class ="control-label col-sm-2">Father Name</label>
		<div class="col-sm-3 col-offset-1" >
	      <input type="address" class="form-control" id="address" placeholder="Enter Father name" name="fname" >
<span>
	<?php if(isset($_SESSION['uname'])){
		echo $_SESSION['uname'];
		unset($_SESSION['uname']);
	}
	?>
</span>
	    </div>
    </div>
  </div>
  <div class="row"style="margin-top:10px;">
  	   <div class="form-group">
  	      <label for="fname" style="color:#5BC0DE;" class ="control-label col-sm-2">Mother's Name</label>
  		<div class="col-sm-3">
  	      <input type="name" class="form-control" id="fname" placeholder="Enter Mother's name" name="mname" >
<span>
	<?php if(isset($_SESSION['smname'])){
		echo $_SESSION['smname'];
		unset($_SESSION['smname']);
	}
	?>
</span>
			</div>

  	  	    <label for="address" style="color:#5BC0DE;" class ="control-label col-sm-2">Email</label>
  		<div class="col-sm-3 col-offset-1">
  	      <input type="text" class="form-control" id="address"name="email"  >
					<span>
						<?php
						if(isset($_SESSION['uemail'])){
							echo $_SESSION['uemail'];
							unset($_SESSION['uemail']);
						}
						?>
					</span>
  	    </div>
      </div>
    </div>

    <div class="row"style="margin-top:10px;">
         <div class="form-group">
            <label for="text" style="color:#5BC0DE;" class ="control-label col-sm-2">Contact</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="text" placeholder="Enter contact no" name="mobno"  >
						<span>
							<?php
							if(isset($_SESSION['umob'])){
								echo $_SESSION['umob'];
								unset($_SESSION['umob']);
							}
							?>
						</span>
		    </div>

              <label for="address" style="color:#5BC0DE;" class ="control-label col-sm-2">mob2</label>
        <div class="col-sm-3 col-offset-1">
            <input type="text" class="form-control" id="address" placeholder="Enter father's contact" name="fmobno" >
						<span>
							<?php
							if(isset($_SESSION['fmob'])){
								echo $_SESSION['fmob'];
								unset($_SESSION['fmob']);
							}
							?>
						</span>
          </div>
        </div>
      </div>


      <div class="row"style="margin-top:10px;">
           <div class="form-group">
              <label for="name" style="color:#5BC0DE;" class ="control-label col-sm-2">Address</label>
          <div class="col-sm-6">
              <input type="address" class="form-control" id="name" placeholder="Enter Address"name="addr" >
							<span>
								<?php
								if(isset($_SESSION['add'])){
									echo $_SESSION['add'];
									unset($_SESSION['add']);
								}
								?>
							</span>
				  </div>
</div>
          </div>

        <div class="row"style="margin-top:10px;">
             <div class="form-group">
                <label for="name" style="color:#5BC0DE;" class ="control-label col-sm-2">State</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="name" placeholder="State"name="state" >
								<span>
									<?php
									if(isset($_SESSION['st'])){
										echo $_SESSION['st'];
										unset($_SESSION['st']);
									}
									?>
								</span>
				    </div>

          <label for="name" style="color:#5BC0DE;" class ="control-label col-sm-2">District</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" id="name" placeholder="District"name="city" >
					<span>
						<?php
						if(isset($_SESSION['ci'])){
							echo $_SESSION['ci'];
							unset($_SESSION['ci']);
						}
						?>
					</span>
			</div>
</div>
</div>
<div class="row"style="margin-top:10px;">
		 <div class="form-group">
				<label for="name" style="color:#5BC0DE;" class ="control-label col-sm-2">Choose your password</label>
		<div class="col-sm-3">
				<input type="password" class="form-control" id="name" placeholder="Enter password "name="password" >
				<span>
					<?php
					if(isset($_SESSION['pwd'])){
						echo $_SESSION['pwd'];
						unset($_SESSION['pwd']);
					}
					?>
				</span>
		</div>

</div>
</div>
<div class="row"style="margin-top:10px;">
<div class="form-group">
<label class="control-label col-sm-3">Choose Pic</label>
<div class="col-sm-7">
<input type="file" class="form-control" name="file" >
</div>
</div>
</div>
      <div class="row"style="margin-top:10px;">

        <div class=" col-sm-offset-2"style="margin-bottom:10px;color:orange;">
     <input type="submit" name="sub" value="submit">
        </div>
    </div>
	</form>
    </div>

</body>
</html>


<?php

 ?>
