<?php
$username   = $_POST['username'];
$pass       = $_POST['password'];

include 'koneksi.php';

$user = mysqli_query($db,"select * from users where username='$username' and password='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
    header("location:beranda.php");
}else
{
    header("location:index.php");
}
?>

