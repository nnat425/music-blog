<?php
$servername = "127.0.0.1";
$username = "music_user";
$password = "password";
$dbname = "music_blog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" );
}

if (isset($_POST['music'])){
  $title = $_POST['title'];
  $description = $_POST['description'];
  $link = $_POST['link'];
  $query = "INSERT INTO posts(title,link,description)VALUES('$title','$link','$description')";
  $result = mysqli_query($conn, $query);
  header("Location:index.php");
  exit();
}


  // if($result) {
  //   echo "Successfully updated database";
  // }
  // else {
  //   die('Error: '.mysqli_error($conn));
  // }

?>

<?php
mysqli_close($conn);
?>


<form method="POST" action="index.php">
  <br>
  Title
  <br>
  <input type="text" name="title">
  <br>
  <br>
  Link
  <br>
  <input type="text" name="link">
  <br>
  <br>
  Description
  <br>
  <textarea rows="10" cols="50" maxlength="100" name="description">
  </textarea>
  <br>
  <input type="submit" name='music' value="Send Message">
</form>




