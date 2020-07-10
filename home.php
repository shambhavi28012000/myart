<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
        // put your code here
        session_start();
         if(!isset($_SESSION['username']))
        {
            header('location:index.php');
        }
       
?>
<html>
    <head>
       
        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <body>
         <center>   
        <h1><b style="color: goldenrod; background-color: maroon">Welcome <?php echo $_SESSION['username']; ?></b> </h1> 
        <h2 style="color: white">So here I present you with the amazing artwork of mine.Hope you like it!</h2>
                    
        <img src="MUSIC DAY.jpg" alt="Image" height="300" width="300">
        <img src="MJ.jpg" alt="Image" height="300" width="300">        
        <img src="mom's day ps.jpg" alt="Image" height="300" width="300"><br>
        <img src="sel12.jpg" alt="Image" height="300" width="905"><br>
        <img src="PIU.png" alt="Image" height="300" width="300">        
        <img src="shaily class.jpg" alt="Image" height="300" width="300">
        <img src="gunjan.jpg" alt="Image" height="300" width="300"><br>
        <img src="we.png" alt="Image" height="400" width="905"><br>
        <img src="saloni1.jpg" alt="Image" height="300" width="200">
        <img src="shruti.png" alt="Image" height="300" width="300">
        <img src="shaily bdae1.jpg" alt="Image" height="300" width="300"><br>
        <img src="roomate.jpg" alt="Image" height="400" width="905"><br>
        <img src="TS.png" alt="Image" height="300" width="200">
        <img src="selena gomez.jpg" alt="Image" height="300" width="300">
        <img src="emma new.jpg" alt="Image" height="300" width="300"><br>
        <footer style="background-color: maroon;color: white"><b>Thank you for the visit!<br>
                ~Art By : Shambhavi Sharma</b><br>
                <button style="background-color:red"> <a href="logout.php" style="color:black" ><b>LOGOUT</b></a></button><br>  </footer> 
        
        
    </center>    
    </body>
</html>
