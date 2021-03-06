<!--
Name: Karthik Muralidharan

Registration No: 09BCE222
-->

<!DOCTYPE html>
<?php session_start();
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
                  <td class="button" style="border-top-left-radius:4px;border-bottom-left-radius:4px;"><a href="home.php">Home</a></td></td>
                  <td class="button"><a href="view/view.php">Latest</a></td>
                  <td class="button"><a href="share/share.php">Journal</a></td>
                  <td class="button"><a href="view/archive.php">Archive</a></td>
                  <td class="button" style="border-top-right-radius:4px;border-bottom-right-radius:4px;"><a href="about.php">About Me</a></td>
            </tr>
        </table>
 
        <div id="content">
           
                  
                    
                    <h4>Enter The Fields To Create A New Note:</h4>
                    
                    <form name="new" action="add.php" method="POST">
                        <p>Title:</p>
                        <input type="text" name="title" size="50px" required/>
                        <br/>
                        
                        <p>Journal:</p>
                        <input type="text" name="journal" size="50px" required/>
                        <br/>
                        
                        <p>Note:</p>
                        <textarea name="post" rows="10" cols="100" required/>
                        </textarea>
                        <br/>
                        <br/>
                        Privacy:&nbsp;
                        <select name="select">
                            <option value="0">Private</option>
                            <option value="1">Public</option>
                        </select>
                        
                        <br/>
                        <br/>
                        <input type="submit" value="Submit" name="submit" />
                        <input type="reset" value="Reset" name="reset" />
                    </form>
               
            
        </div>
                                            

                

                
                
        
        <footer>&COPY; Created by Karthik Muralidharan <a href="mailto:mkarthik91@gmail.com" style="text-decoration: none;color: #0080f6">Contact Me</a></footer>
        
        
        
    </body>
</html>


