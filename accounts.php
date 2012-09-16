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
<?php session_start();
$username=$_SESSION['user'];
$view=  mysql_query("select * from members where uname='$username'");
            $posts= mysql_query("select * from entries where uname='$username'");
            $count=  mysql_num_rows($posts);
$view2=  mysql_query("select * from entries where uname='$username' and share=1");
$shared_count=mysql_num_rows($view2);
$view3=  mysql_query("select * from entries where uname='$username' and share=0");
$unshared_count=mysql_num_rows($view3);
?>
<html>
    <head>
        <title>Nota Bene: The best notepad online for users</title>
        <meta name="description" content="Share, store and view you notes, texts, reminders, dairies into this website"/>
        <meta name="keywords" content="notes,reminders,journals"
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    </head>
    <body>
                <?php        include 'topbar.php';?>

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
                  <td class="button" style="border-top-left-radius:4px;border-bottom-left-radius:4px;"><a href="home.php">Home</a></td></td>
                  <td class="button"><a href="view/view.php">Latest</a></td>
                  <td class="button"><a href="share/share.php">Journal</a></td>
                  <td class="button"><a href="view/archive.php">Archive</a></td>
                  <td class="button" style="border-top-right-radius:4px;border-bottom-right-radius:4px;"><a href="about.php">About Me</a></td>
            </tr>
        </table>
 
        <div id="content" style="max-height: auto; min-height: 400px;">
               
         <?php echo "<h2>Here are your account details:</h2><br><br>";
         while($row = mysql_fetch_array($view))
            {
             echo "<b>Name:  </b>  ".$row['name'];
             echo "<br><br><b>Username:  </b>  ".$row['uname'];
             echo "<br><br><b>E-Mail ID: </b>   ".$row['email'];
             echo "<br><br><b>Total Posts:  </b>    ".$count;
             echo "<br><br><b>Shared Posts:  </b>    ".$shared_count;
             echo "<br><br><b>Private Posts:  </b>    ".$unshared_count;
            }
         ?>
            
            
                   
        </div>
  
        <footer>
            &COPY; Created by Karthik Muralidharan <a href="mailto:mkarthik91@gmail.com" style="text-decoration: none;color: #0080f6">Contact Me</a>
        </footer>

        
        
    </body>
</html>

