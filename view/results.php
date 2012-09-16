<!--
Name: Karthik Muralidharan

Registration No: 09BCE222
-->

<!DOCTYPE html>
<?php 
$c=mysql_connect("localhost:8888","root","root") or die(mysql_error());
$db=mysql_select_db("nota",$c);

session_start();
?>
<html>
    <head>
        <title>Nota Bene: The best notepad online for users</title>
        <meta name="description" content="Share, store and view you notes, texts, reminders, dairies into this website"/>
        <meta name="keywords" content="notes,reminders,journals">
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../style.css" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <?php include 'topbar.php';?>
        <br/>
        
            <header id="header">
                <table>
                    <tr>
                      
                        <td>
                            <h1>Nota Bene</h1>
                            <h3>The Online Notebook</h3>
                        </td>    
                        
                    </tr> 
                    
                </table>
            
            
            
            </header>
       
        
        <table id="navigation">
            <tr>
                  <td class="button" style="border-top-left-radius:4px;border-bottom-left-radius:4px;"><a href="../home.php">Home</a></td></td>
                  <td class="button"><a href="view.php">Latest</a></td>
                  <td class="button"><a href="../share/share.php">Journal</a></td>
                  <td class="button"><a href="archive.php">Archive</a></td>
                  <td class="button" style="border-top-right-radius:4px;border-bottom-right-radius:4px;"><a href="../about.php">About Me</a></td>
            </tr>
        </table>
 
        <div id="content">
           
                  
                    
            <h4 style="text-align: center;">Here Are Your results:</h4><br>
            <hr/>
   <?php                 
   $username=$_SESSION['user'];
   $title=$_POST['title'];
$jour=$_POST['journal'];
$dat=$_POST['post'];

if($title !="" && $jour!="" && $dat!="")
{
$query="select * from entries where title like '%$title%' and  journal like '%$jour%' and post like '%$dat%' and uname='$username'";
$result=mysql_query($query);
}
if($title !="" && $jour!="")
{
$query="select * from entries where title like '%$title%' and  journal like '%$jour%' and uname='$username'";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{
echo "<br/>";
                echo "<b>Date Published:</b> ".$row['date']."<br/>";
                echo "<h2>".$row['title']."</h2><br>";
                echo "<p>".$row['post']."</p><br/>";
                echo "<b>Journal:</b> ".$row['journal'];
                echo "<br/><br/><hr/>";
                
}
mysql_close($c);
}

if($jour!="" && $dat!="" )
{
$query="select * from entries where  journal like '%$jour%' and post like '%$dat%' and uname='$username'";
$result=mysql_query($query);

while($row=mysql_fetch_assoc($result))
{
echo "<br/>";
                echo "<b>Date Published:</b> ".$row['date']."<br/>";
                echo "<h2>".$row['title']."</h2><br>";
                echo "<p>".$row['post']."</p><br/>";
                echo "<b>Journal:</b> ".$row['journal'];
                echo "<br/><br/><hr/>";}

mysql_close($c);
}
if($title !="" && $dat!="" )
{
$query="select * from entries where title like '%$title%' and post like '%$dat%' and uname='$username'";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{
echo "<br/>";
                echo "<b>Date Published:</b> ".$row['date']."<br/>";
                echo "<h2>".$row['title']."</h2><br>";
                echo "<p>".$row['post']."</p><br/>";
                echo "<b>Journal:</b> ".$row['journal'];
                echo "<br/><br/><hr/>";}

mysql_close($c);
}
if($title !="" && $jour=="" && $dat=="" )
{ 

$query="select * from entries where title like '%$title%' and uname='$username'";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{
echo "<br/>";
                echo "<b>Date Published:</b> ".$row['date']."<br/>";
                echo "<h2>".$row['title']."</h2><br>";
                echo "<p>".$row['post']."</p><br/>";
                echo "<b>Journal:</b> ".$row['journal'];
                echo "<br/><br/><hr/>";}

mysql_close($c);
}
if($jour!="" && $title =="" && $dat==""  )
{
$query="select * from entries where journal like '%$jour%' and uname='$username'" ;
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{
echo "<br/>";
                echo "<b>Date Published:</b> ".$row['date']."<br/>";
                echo "<h2>".$row['title']."</h2>";
                echo "<p>".$row['post']."</p><br/>";
                echo "<b>Journal:</b> ".$row['journal'];
                echo "<br/><br/><hr/>";}

mysql_close($c);
}
if($dat!="" && $jour=="" && $title =="")
{
$query="select * from entries where post like '%$dat%' and uname='$username'";
$result=   mysql_query($query);
while($row=mysql_fetch_assoc($result))
{
echo "<br/>";
                echo "<b>Date Published:</b> ".$row['date']."<br/>";
                echo "<h2>".$row['title']."</h2>";
                echo "<p>".$row['post']."</p><br/>";
                echo "<b>Journal:</b> ".$row['journal'];
                echo "<br/><br/><hr/>";}

mysql_close($c);
}
?>
               
            
        </div>
                                            

                

                
                
        
        <footer>&COPY; Created by Karthik Muralidharan <a href="mailto:mkarthik91@gmail.com" style="text-decoration: none;color: #0080f6">Contact Me</a></footer>
        
        
        
    </body>
</html>

