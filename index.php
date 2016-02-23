<html>
<body>

<h1>My music blog</h1>

<?php
echo "Hello World!";
?>

<?php
$servername = "localhost:8001";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Not connected";
}
echo "Connected successfully";
?>

</body>
</html>