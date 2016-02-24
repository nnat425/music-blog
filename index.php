<html>
<body>

  <h1>My music blog</h1>

  <?php
  echo "Hello World!";
  ?>

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
  echo "Connected successfully";
  ?>

  <?php
  mysqli_close($conn);
  ?>


  <form method="POST" action="index.php">
    <br>
    Name
    <br>
    <input type="text" name="title">
    <br>
    <br>
    Email
    <br>
    <input type="text" name="link">
    <br>
    <br>
    Description
    <br>
    <textarea rows="10" cols="50" maxlength="100" name="description">
    </textarea>
    <br>
    <input type="submit" value="Send Message">
  </form>





</body>
</html>