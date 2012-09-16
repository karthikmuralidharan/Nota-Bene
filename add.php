<?php 

session_start();

$con=mysql_connect("localhost:8888", "root", "root");
if(!$con)
{
    die('No Connection Established'.mysql_error());
}

mysql_select_db("nota",$con) or die('Database not selected');

$title=$_POST['title'];
$journal=$_POST['journal'];
$post=$_POST['post'];
$username=$_SESSION['user'];
$select=$_POST['select'];

$insert="insert into entries (`id` ,`uname` ,`title` ,`post` ,`journal` ,`date` ,`share`) values(NULL,'$username','$title','$post','$journal',CURRENT_TIMESTAMP,'$select')";
if(mysql_query($insert))
{
        echo "<script language=javascript>alert('Your Post Has Been Successfully added')</script>";
        echo "<script language=javascript>window.location='new.php'</script>";
        
}
else
{
        echo "<script language=javascript>alert('There Was An Error Submitting Your Post. PLease Try Again.')</script>";
                echo "<script language=javascript>window.location='new.php'</script>";

}


?>
