<!--
To change this template, choose Tools | Templates
and open the template in the editor.
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
                  <td class="button"><a href="../view/view.php">Latest</a></td>
                  <td class="button" style="background-color: #4c74ec;"><a href="share.php">Journal</a></td>
                  <td class="button"><a href="../view/archive.php">Archive</a></td>
                  <td class="button" style="border-top-right-radius:4px;border-bottom-right-radius:4px;"><a href="../about.php">About Me</a></td>
            </tr>
        </table>
 
        <div id="content">
            
            <?php
            $jselect=$_POST['jselect'];
            $username=$_SESSION['user'];

            $input=mysql_query("select journal from $username where sno='$jselect'");
            while ($row=  mysql_fetch_array($input))
            {
                $journal=$row['journal'];
            }    
            
            echo "<h4>Your Posts from journal<i> ".$journal."</i><br/><br><hr></h4>";
            
            $view=  mysql_query("select * from entries where uname='$username' and journal='$journal' order by date DESC");
            
            while($row = mysql_fetch_array($view))
            {
                echo "<br/>";
                echo "<b>Date Published:</b> ".$row['date']."<br/>";
                echo "<h2>".$row['title']."</h2><br>";
                echo "<p>".$row['post']."</p>";
                echo "<br/><hr/>";
            }

            
            
            ?>
               
            
        </div>
       
        
        <footer>&COPY; Created by Karthik Muralidharan <a href="mailto:mkarthik91@gmail.com" style="text-decoration: none;color: #0080f6">Contact Me</a></footer>
        
        
        
    </body>
</html>

