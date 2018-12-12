<?php
$id = $_POST['id'];
$back = $_POST['back'];
if($back == 0){
  $back = 1;
}else{
  $back =0;
}
require 'db_connect.php';
$q = "UPDATE products SET back = '$back' WHERE id='$id'";
$r = mysqli_query($db,$q) or die(mysqli_error($db));
if($r ==true){
  echo 1;
}else{
  echo 0;
}


?>
