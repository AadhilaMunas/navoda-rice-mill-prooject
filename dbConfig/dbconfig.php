<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "navoda_rice_mill";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Check if the redirect has already been performed
// if (!isset($_GET['redirected'])) {
//     // Redirect to the same page with a query parameter to indicate the redirect
//     header("Location: ".$_SERVER['PHP_SELF']."?redirected=1");
//     exit();
// }
?>
