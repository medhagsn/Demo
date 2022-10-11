<?php
    if(isset($_POST['submit']))
    {
        $name = array("Edward","Peter","");
        $minimum = 4;
        $maximum = 8;

        $username= $_POST['username'];
        $password = $_POST['password'];

     if (strlen($username) < $minimum)
     {
        echo "Username has to be longer than 4";
     }
     
     if (strlen($username) > $maximum)
     {
        echo "Username cannot be longer than eight";
     }
     if(!in_array ($username, $name))
     {
        echo " Sorry you are not allowed.";
     }
        else
        {
            echo "<br>";
            echo " Welcome";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form_process.php" method="post">
        <input type="text" name="username" placeholder="Enter Username"> <br>
        <input type="password" name="password" placeholder="Enter Password"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>