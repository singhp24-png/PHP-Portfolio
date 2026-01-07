<?php 

session_start();
  
?>



<!-- Author: P Singh, Last Updated 3/30/2023 -->
<html>
<?php include('Inc/head.php');
require('singh_p_opendb.php');?>
<body>
<?php include('Inc/nav.php')?>

<header class = "center"> <h1>Discussion Post</h1></header>
<?php 
if (isset($_SESSION['login'])) { 

    if (isset($_POST['title'])) {
        $userID= $_POST['userID'];
        $postSubject = htmlspecialchars($_POST['title']);
        $postText = htmlspecialchars($_POST['textfield']);
        
        $sql = "INSERT INTO `post` (userID, postSubject, postText) VALUES ( ?, ?, ?)";
        $stmt = $conn ->prepare($sql);
        $stmt -> bind_param("iss", $userID, $postSubject, $postText);
        $stmt->execute();
        echo "Post Created!"; 
    }
    
    $sql = "SELECT * from post order by postID desc";
    $result = $conn->query($sql);
    
    while($row = $result->fetch_assoc())
    {
        echo "<h2> ".$row['postSubject']."</h2>";
        echo "<br>";
        echo $row['postText'];
        echo "<br><br>";
    }
        
    ?>
<h2>Add New Post</h2>
<form method="post" action="singh_p_post.php">
<h3> Title: <input type="text" name="title" size = "50"  maxlength="200"></h3>
<h3>Post:<textarea name="textfield" cols=200 rows=3 maxlength="250"></textarea></h3>
<input type="hidden" name="userID"
value=<?php echo $_SESSION['login']?>>
<input type="reset" value="Clear">
<input type="submit" name="submit">
</form>
</body>
</html>

<?php 
}
else{
    echo '<h3> Please login to post discussion posts.</h3>';
}
?>