<?php
    include('connection.php');
    if(isset($_POST['un']) && isset($_POST['pwd']))
    {
        $un=$_POST['un'];
        $pwd=$_POST['pwd'];
        $query ="insert into username values('','$un','$pwd')";
        if(mysqli_query($con,$query))
        {
            echo "login succesfull";
        }
    }
    
    
?>

<html>
    <body>
        <form action="" method="POST">
            Signup
            UserName : <input type="text" name="un">
            Password : <input type="password" name="pwd">
            <input type="submit" name="sub">
        </form>
    </body>
</html>