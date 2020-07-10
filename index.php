<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>User login and registration</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="newcss.css">
       
    </head>
    <body>
    <center><h1 style="color:goldenrod;background-color: maroon ; margin: 20px;font-style:oblique">SAM'S VECTOR CREATION</h1></center>
        <div style="background-color: black; color:goldenrod;margin:150px;padding:20px">
            <div class="row">
                <div class="col-md-6">
                    <h2>LOGIN HERE</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div> 
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div> 
                         <button type="submit" style="color:goldenrod;background-color: black" ><b>LOGIN</b></button>
                            
                    </form>
                </div>
                <div class="col-md-6">
                    <h2>REGISTER HERE</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div> 
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div> 
                        <button type="submit" style="color:goldenrod;background-color: black" ><b>REGISTER</b></button>
                            
                    </form>
                </div>
            </div>
        </div>    
        <?php
        // put your code here
        
        ?>
    </body>
</html>
