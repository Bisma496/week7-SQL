
<?php
// Connect to NJIT MySQL database

$servername = "sql1.njit.edu";
$username = "bt336";
$password = "REPLACE_WITH_YOUR_MYSQL_PASSWORD";
$dbname = "bt336";

$con = mysqli_connect(
    $servername,
    $username,
    $password,
    $dbname
);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL.";
} else {
    echo "CONNECTED";
}

mysqli_close($con);
?>
