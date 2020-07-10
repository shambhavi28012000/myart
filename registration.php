<?php     
    session_start();
    header('location:index.php');
    $con=  mysqli_connect('localhost','root');
    mysqli_select_db($con, 'userregistration');
    /* @var $_POST type */
    $name= $_POST['user'];
    $pass= $_POST['password'];
    $s= " SELECT * FROM `usertable` where name = '$name'";
    $result=  mysqli_query($con,$s);
    $num= mysqli_num_rows($result);
    if($num==1)
    {
        echo "USERNAME ALREADY TAKEN!";        
    }
    else
    {
        $reg = "insert into usertable(name,password) values ('$name','$pass')";
        mysqli_query($con, $reg);
        echo "REGISTRATION SUCCESSFUL";
    }
?>