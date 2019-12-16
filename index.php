<?php 
  // connect to database

  $conn = mysqli_connect('localhost', 'collin', 'test1234', 'phpizza');

  if(!$conn){
    echo 'Database not connected' . mysqli_connect_error();
  }


?>

<!DOCTYPE html>
<html lang="en">
  <?php include 'templates/header.php'; ?>
  
  <?php include 'templates/footer.php'; ?>
</html>