<!--
Name: Karthik Muralidharan

Registration No: 09BCE222
-->
<?php
$con=mysql_connect("localhost:8888", "root", "root");
if(!$con)
{
    die('No Connection Established'.mysql_error());
}

mysql_select_db("nota",$con) or die('Database not selected');
?>

<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <title>Nota Bene: The best notepad online for users</title>
        <meta name="description" content="Share, store and view you notes, texts, reminders, dairies into this website"/>
        <meta name="keywords" content="notes,reminders,journals"
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../style.css" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <style type="text/css">
            h4{text-align: center;}
       
        </style>
    </head>
    
    <body>
                <?php  include 'topbar.php';?>

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
                  <td class="button" ><a href="view.php">Latest</a></td>
                  <td class="button"><a href="../share/share.php">Journal</a></td>
                  <td class="button" style="background-color: #4c74ec;"><a href="archive.php">Archive</a></td>
                  <td class="button" style="border-top-right-radius:4px;border-bottom-right-radius:4px;"><a href="../about.php">About Me</a></td>
            </tr>
        </table>
 
        <div id="content">
            <h4>View All Your Posts<br/><br><hr></h4>
            <?php
            $username=$_SESSION['user'];
            $view=  mysql_query("select * from entries where uname='$username' order by date DESC");
            
            while($row = mysql_fetch_array($view))
            {
                echo "<br/>";
                echo "<b>Date Published:</b> ".$row['date']."<br/>";
                echo "<h2>".$row['title']."</h2><br>";
                echo $row['post']."<br/>";
                echo "<b>Journal:</b> ".$row['journal'];
                echo "<br/><br/><hr/>";
            }

            
            
            
            ?>
               
            
        </div>
       
        
        <footer>&COPY; Created by Karthik Muralidharan <a href="mailto:mkarthik91@gmail.com" style="text-decoration: none;color: #0080f6">Contact Me</a></footer>
        
        
        
    </body>
</html>

