<?php

$mysqli = new mysqli("localhost","root","1234","wed_mysql");

if ($mysqli -> connect_errno) {
  echo "Lỗi!!! " . $mysqli -> connect_error;
  exit();
}
function config(){
  $mysqli = new mysqli("localhost","root","1234","wed_mysql");
  if ($mysqli -> connect_errno) {
  echo "Lỗi!!! " . $mysqli -> connect_error;
  exit();
  }
  return $mysqli;
}
?>
