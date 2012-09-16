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
<?php session_start();?>
<html>
    <head>
        <title>Nota Bene: The Best Notepad for University Students</title>
        <meta name="description" content="Share, store and view you notes, texts, reminders, dairies into this website"/>
        <meta name="keywords" content="notes,reminders,journals">
       
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
                  <td class="button" style="border-top-left-radius:4px;border-bottom-left-radius:4px;background-color: #4c74ec;"><a href="home.php">Home</a></td></td>
                  <td class="button"><a href="view/view.php">Latest</a></td>
                  <td class="button"><a href="share/share.php">Journal</a></td>
                  <td class="button"><a href="view/archive.php">Archive</a></td>
                  <td class="button" style="border-top-right-radius:4px;border-bottom-right-radius:4px;"><a href="about.php">About Me</a></td>
            </tr>
        </table>

        <div id="content">
            <figure style="text-align: center;">
               <img src="notebook.png" alt="notebook" /> 
            </figure>
                    
           
                    <h1 style="text-align: center">Welcome To Nota Bene</h1>
                    <p>
                        Nota Bene which is italian for the verb meaning to "Note Well" is a medium for college students to record their notes on the
                        cloud. Let me tell you how this works. <br><br>
                        
                        Nota Bene generates a blog for each student registered here. Each student can maintain a journal. A journal can refer to similar contents
                        or even a subject and also a diary. We kept the default privacy setting for each note as PRIVATE so that you don't accidently share it online.
                        If you do want to share or delete the note that you've created, go to the share section and select the note you want to share or delete.
                        <br><br>
                        Now you can view the latest shared posts by all the members on the latest section. I hope you find this project useful.
                        <br><br>
                       
                    </p>
                        
                    
        </div>
    
        
        <footer>&COPY; Created by Karthik Muralidharan <a href="mailto:mkarthik91@gmail.com" style="text-decoration: none;color: #0080f6">Contact Me</a></footer>
        
        
        
    </body>
</html>

