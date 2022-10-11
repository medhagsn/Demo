<?php
$name = "Peter";
$value = 1000;
$expire = time() + (60*60*24*7);
setcookie($name,$value,$expire);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_COOKIE["Peter"])){
            $somename = $_COOKIE["Peter"];
            echo $somename;
        } else {
            $somename = "";
        }

    ?>
</body>
</html>