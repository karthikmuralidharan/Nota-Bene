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
            /*tr:hover
            {
                background-color: burlywood;
            }*/
        </style>
    </head>
    <body>
        <form action="log/newmember.php" method="POST" name="signup">
            <table id="loginTable" cellspacing="10px">
            
            <thead>
                
                <tr>
                    
                    <th colspan="2"><h1>Sign Up</h1></th>
                </tr>
            </thead>    
            <tr>
                <td style="text-align: center">Full Name</td> 
                <td><input type="text" name="name" size="40px" required/></td>
            </tr>
            <tr>
                <td style="text-align: center">Username</td> 
                <td><input type="text" name="uname" size="40px" required/></td>
            </tr>
            <tr>
                <td style="text-align: center">Password</td> 
                <td><input type="password" name="pwd" size="40px" required/></td>
            </tr>
            
            <tr>
                <td style="text-align: center">E-Mail ID</td> 
                <td><input type="email" name="email" size="40px" required/></td>
            </tr>
            
            
            <tfoot>
                <tr>
                    <tr>
                    <td colspan="2" style="text-align: center">
                        <button type="submit">Submit</button>
                    </td>
                </tr>
            </tfoot>
        </table>
        </form>
        
    </body>
</html>
