<?php 
  // connect to database

  $conn = mysqli_connect('localhost', 'collin', 'test1234', 'phpizza');

  if(!$conn){
    echo 'Connection Error: ' . mysqli_connect_error();
  }
  
?>