<?php 
	// if(isset($_GET['submit'])){
	// 	echo $_GET['email'] . '<br />';
	// 	echo $_GET['title'] . '<br />';
	// 	echo $_GET['ingredients'] . '<br />';
	// }
	if(isset($_POST['submit'])){
		// echo htmlspecialchars($_POST['email'] . '<br />');
		// echo htmlspecialchars($_POST['title'] . '<br />');
    // echo htmlspecialchars($_POST['ingredients'] . '<br />');
    
    //check email 
    if(empty($_POST['email'])){
      echo 'an email is required <br />';
    } else {
      $email = $_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'email must be a valid email address <br />';
      }
      // echo htmlspecialchars($_POST['email']) . '<br />';
    }

    //check title 
    if(empty($_POST['title'])){
      echo 'a title is required <br />';
    } else {
      $title = $_POST['title'];
      if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
        echo 'Title must be letters and spaces only <br />';
      } 
    }

    //check ingredients 
    if(empty($_POST['ingredients'])){
      echo 'an ingredient is required <br />';
    } else {
      $ingredients = $_POST['ingredients'];
      if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
        echo 'Ingredients must be letters and spaces, separated by commas only <br />';
    }
  }
}
?>


<!DOCTYPE html>
<html>
  <?php include 'templates/header.php'; ?>
  
  <section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="add.php" method="POST" class="white">
      <label for="email">Your Email:</label>
      <input type="text" name="email">
      <label for="title">Pizza Title:</label>
      <input type="text" name="title">
      <label for="ingredients">Ingredients (comma separated):</label>
      <input type="text" name="ingredients">
      <div class="center">
        <input type="submit" value="submit" name="submit" class="btn brand z-depth-0">
      </div>
    </form>
  </section>

  <?php include 'templates/footer.php'; ?>
</html>