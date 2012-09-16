<?php
session_start();
$username=$_SESSION['user'];

$con=mysql_connect("localhost:8888", "root", "root");
if(!$con)
{
    die('No Connection Established'.mysql_error());
}

mysql_select_db("nota",$con) or die('Database not selected');

mysql_query("DROP TABLE $username");
unset($_SESSION['user']);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Nota Bene: The Best Notepad for University Students</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">
            #loginTable
            {
                
                font-family:  open sans;
                font-size: 12px;
                font-weight: bold;
                    
                width: 400px;
                height: 240px;
                margin-top: 120px;
                margin-left: auto;
                margin-right: auto;
                
                background-color: white; 
                
                border: solid 6px #0080f6;
                border-radius: 10px;                             
                -moz-box-shadow: 0 0 5px #888;
                -webkit-box-shadow: 0 0 5px#888;
                box-shadow: 0 0 5px #888;
                
            }
            
            
            
            body{
                background-color: whitesmoke;
            }
            
            thead
            {
                font-size: 16px;
            }
            
            input{
                height: 30px;

            }
            
           
        </style>
    </head>
    <body>
        
        <form action="memcheck.php" name="login" method="POST">
            <table id="loginTable" cellspacing="10px">
            
            <thead>
                
                <tr>
                    
                    <th colspan="2"><h1>Nota Bene</h1></th>
                        
                </tr>
            </thead>    
            <tr>
                
                <td style="text-align: center">Username</td> 
                <td><input type="text" name="uname" size="40px" required/></td>
            </tr>
            <tr>
                <td style="text-align: center">Password</td> 
                <td><input type="password" name="pwd" size="40px" /></td>
            </tr>
            <tr>
                    <td colspan="2" style="text-align: center">
                        <button type="submit">Login</button>
                    </td>
                </tr>
            <tfoot>
                <tr>
                    <td></td>
                    <td style="padding-left: 30px;">
                        <a href="../signup.php">Click Here To Signup</a>  
                        <br/>
                       
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                         <?php
                        echo '';
                        echo "You have Succesfully Logged Out";
                       session_destroy();
 
                        
                        ?>
                        
                    </td>
                </tr>
            </tfoot>
        </table>
        </form>
        
    </body>
</html>