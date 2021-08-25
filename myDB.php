<?php
$servername = "localhost";
$username = "root";
$password = "sigma^2";
$dbname = "STAT3005";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo 'Connected successfully';
?>

<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";
?>

</body>
</html>
