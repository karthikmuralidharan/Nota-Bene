<?php
session_start();
$username=$_POST['uname'];
$password=$_POST['pwd'];

$con=mysql_connect("localhost:8888", "root", "root");
if(!$con)
{
    die('No Connection Established'.mysql_error());
}
mysql_select_db("nota",$con) or die('Database not selected');

global $username,$password;


$check="select * from members where uname='$username' and pwd='$password'";
$result=  mysql_query($check, $con);
$count= mysql_num_rows($result);

if($count==1)
{
$_SESSION['user']=$username;   
while($row = mysql_fetch_array($result))
            {
                $_SESSION['name']=$row['name'];
            }

echo "<script language=javascript>window.location='../home.php';</script>";
}
else
{
    echo "<script language=javascript>alert('Wrong Username Or Password');</script>";

    echo "<script language=javascript>window.location='../index.php';</script>";

}

?>
