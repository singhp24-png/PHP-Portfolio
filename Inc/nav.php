<nav>
<?php
session_start();
?>
  <a href="index.php">Home</a>
  <a href="all_about_me.php">About</a>
  <a href="my_projects.php">My Projects</a>
  <a href="singh_p_candyshop.php">Candy Form</a>
  <?php 
  if(isset($_SESSION['login']))
  {
      echo '<a href="singh_p_logout.php">Logout</a>';
  }
  
  else {
      echo '<a href="singh_p_login.php">Login</a>';
  }
  
  ?>
  <a href="singh_p_post.php">Discussion</a>
  <br><br>
</nav>