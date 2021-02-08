<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['username']) || empty($_POST['password'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
$username=$_POST['username'];
$password=$_POST['password'];
// Connect to server/database
$mysqli = mysqli_connect("localhost", "1608839", "Taylorgang00", "db1608839");
if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$db = mysqli_select_db($conn, "test");
//checking user query to database query
// Run SQL query
$res = mysqli_query($mysqli, "SELECT  FROM Login1 WHERE password='$password' AND username='$username'");

$rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: welcome.php"); // Redirecting to other page
 }
 else
 {
 $error = "Username of Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}

?>