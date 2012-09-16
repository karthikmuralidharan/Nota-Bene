<?php

$con=mysql_connect("localhost:8888", "root", "root");
if(!$con)
{
    die('No Connection Established'.mysql_error());
}

mysql_select_db("nota",$con) or die('Database not selected');

$user=$_POST['uname'];
$pass=$_POST['pwd'];
$name=$_POST['name'];
$email=$_POST['email'];

$check="select * from members where uname='$user'";
$existresult=  mysql_query($check, $con);
$count=  mysql_num_rows($existresult);
$add="insert into members values('$name','$user','$pass','$email')";

if($count==0)
{
    if(!mysql_query($add, $con))
    {
        
        echo "<script language=javascript>alert('Please enter a valid username')</script>";
        
        
    }
    else
    {
        
	

        echo "<script language=javascript>alert('Congratulations!! You are now a member of Nota Bene.')</script>";
        echo "<script language=javascript>window.location='../index.php'</script>";
        
  
    }
}
else
{
        echo "<script language=javascript>alert('This Username Already Exists. Try Another One.')</script>";
        echo "<script language=javascript>window.location='../signup.php'</script>";
        
}
?>
