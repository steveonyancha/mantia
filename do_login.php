<?php session_start();
include 'database/config.php';

// declare post fields
if(isset($_POST['submit'])){
$post_username = trim($_POST['username']);
$post_password = trim($_POST['password']);

//$post_autologin = $_POST['autologin'];

$result = mysqli_query($link,"SELECT * FROM tbuser WHERE (email = '" .addslashes($post_username) . "') and (password = '" .$post_password. "')");

if (!$result) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}
if($row=mysqli_fetch_array($result)){

$_SESSION['username'] = $row['fname'];
$_SESSION['priv'] = $row['priv'];
// Autologin Requested?

echo "OK";
}
else
{
echo '<div id="error_notification">Invalid username and password.</div>';
}

}
?>
