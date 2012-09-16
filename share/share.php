<!--
Name: Karthik Muralidharan

Registration No: 09BCE222
-->
<?php session_start(); 
?>

<?php
$con=mysql_connect("localhost:8888", "root", "root");
$username=$_SESSION['user'];

if(!$con)
{
    die('No Connection Established'.mysql_error());
}

mysql_select_db("nota",$con) or die('Database not selected');

mysql_query("DROP TABLE $username");

mysql_query("create table $username as (select distinct journal from entries where uname='$username')");
mysql_query("ALTER TABLE  $username ADD  `sno` INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");


?>
<!DOCTYPE html>

<html>
    <head>
        <title>Nota Bene: The best notepad online for users</title>
        <meta name="description" content="Share, store and view you notes, texts, reminders, dairies into this website"/>
        <meta name="keywords" content="notes,reminders,journals"
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../style.css" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        
    </head>
    <body>
        <?php include 'topbar.php'?>
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
              $option=mysql_query("select * from $username");
              
                
            
            echo "<form name ='journal' action = 'journal_select.php' method = 'POST'>";
            echo "<b>Select Your Journal To See The Notes :  <b> <select name=jselect>";
            while($row=mysql_fetch_array($option))
             {
                 echo "<option value=".$row['sno'].">".$row['journal']."</option>";
             }  
             echo "</select>";
             echo "<input type=submit value=view name=submit />";
             echo "</form>";

             ?>
        
            
        </div>

        <footer>&COPY; Created by Karthik Muralidharan <a href="mailto:mkarthik91@gmail.com" style="text-decoration: none;color: #0080f6">Contact Me</a></footer>
        
        
        
    </body>
</html>

