<html>
<head>
<?php
include 'thirdpage1.php';
 ?>

</head>
<body>
  <!-- <div class="se"> -->

  <?php
  include 'link.php';
   ?>

  <div class="container">

<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
  <div class="panel-body">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="slide-1.jpg" alt="">
      <div class="carousel-caption">
        Class
      </div>
    </div>
    <div class="item">
      <img src="slide-2.jpg" alt="">
      <div class="carousel-caption">
        Symphony
      </div>
    </div>

     <div class="item">
      <img src="slide-3.jpg" alt="">
      <div class="carousel-caption">
Conference

             </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
</div>
</div>
</div>
</div>

<?php
include 'link2.php';
?>
<div class="fixed-bottom"style="background-color:#EAF0FA;position: fixed;  bottom: 0;width: 100%; text-align:center;"><strong>
Design By:Harshita Agarwal
</strong></div>


</div>
</body>
</html>
