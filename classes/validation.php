<?php
class Val{
// define variables and set to empty values
// public function __construct()
// {
//
//   if(!isset($_POST['sub']))
//   {
//     header('location:login.php');
//   }
//

function test_input($val) {
// implode(" ",$data);
  $data = trim($val);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
}
 ?>
