
<html>
<head>
	<?php
include 'thirdpage1.php';

?>

</head>
<body>
<div class="container" style="max-width:850px;background-color:#ebeff2;margin-top:52px;" >
<div class="row"style="background-color:#45A0C2;color:white;padding:8px 8px;"><h3>Pay Your Fee</h3>
</div>
	<form class="form-horizontal" role="form">
<div class="row"style="margin-top:10px;">
	   <div class="form-group">
	      <label for="name"style="color:#45A0C2;" class ="control-label col-sm-2"> Name</label>
		<div class="col-sm-3">
	      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo  $result['sname']?>" readonly>
		</div>

	  	    <label for="address" style="color:#45A0C2;"class ="control-label col-sm-2">Email</label>
		<div class="col-sm-3 col-offset-1" >
	      <input type="email" class="form-control" id="address" placeholder="Enter Email"value="<?php echo  $result['email']?>" readonly>

	    </div>
    </div>
  </div>
  <div class="row"style="margin-top:10px;">
  	   <div class="form-group">
  	      <label for="fname" style="color:#45A0C2;" class ="control-label col-sm-2">Father Name</label>
  		<div class="col-sm-3">
  	      <input type="name"/ class="form-control" id="fname" placeholder="Enter Father's name"value="<?php echo  $result['fname']?>" readonly>
  		</div>

  	  	    <label for="address" style="color:#45A0C2;" class ="control-label col-sm-2">Mother name</label>
  		<div class="col-sm-3 col-offset-1">
  	      <input type="address" class="form-control" id="address" placeholder="Enter Mother name"value="<?php echo  $result['mname']?>" readonly>

  	    </div>
      </div>
    </div>

    <div class="row"style="margin-top:10px;">
         <div class="form-group">
            <label for="name" style="color:#45A0C2;" class ="control-label col-sm-2">Enroll no</label>
        <div class="col-sm-3">
            <input type="name" class="form-control" id="name" placeholder="Enter Enroll no">
        </div>

              <label for="address" style="color:#45A0C2;" class ="control-label col-sm-2">Scholar no</label>
        <div class="col-sm-3 col-offset-1">
            <input type="address" class="form-control" id="address" placeholder="Enter Scholar no">

          </div>
        </div>
      </div>


      <div class="row"style="margin-top:10px;">
           <div class="form-group">
              <label for="name" style="color:#45A0C2;" class ="control-label col-sm-2">Semester</label>
          <div class="col-sm-3">
						<select name="semester">
							<option> 1st</option>
<option>2nd</option>
<option>3rd</option>
<option> 4th</option>
<option> 5th</option><option> 6th</option><option> 7th</option><option> 8th</option>

						</select>
          </div>

                <label for="address" style="color:#45A0C2;" class ="control-label col-sm-2">Year</label>
          <div class="col-sm-3 col-offset-1">
              <select name="year">
								<option> 1st</option>
<option>2nd</option>
<option>3rd</option>
<option> 4th</option>
							</select>

            </div>
          </div>
        </div>
        <div class="row"style="margin-top:10px;">
             <div class="form-group">
                <label for="name" style="color:#45A0C2;" class ="control-label col-sm-2">Fee</label>
            <div class="col-sm-3">
                <input type="name" class="form-control" id="name" placeholder="Enter Amount">
            </div>
</div>
</div>
    </form>
    <div class="row"style="margin-top:10px;">

        <div class=" col-sm-offset-2"style="margin-bottom:10px;">
    <div class="btn btn-warning" style="background-color:#45A0C2;">  Submit    </div>
        </div>
    </div>
	</div>


<div class="fixed-bottom"style="background-color:#EAF0FA;position: fixed;  bottom: 0;width: 100%; text-align:center;"><strong>
	Design By:Harshita Agarwal
	</strong></div>

</div>
</body>
</html>
