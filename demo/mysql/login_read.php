<?php
// if (isset($_POST['submit']))
{
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    $connection = mysqli_connect('localhost','root','','trial');
    if($connection){
        echo "Connected";
    } else{
        die("Database connection failed.");
    }
    // $query = "INSERT INTO users(username,password) ";
    // $query .= "VALUES ('$username','$password')";

    // $query = "SELECT * from users";

    $query = "SELECT * from users";
    $result = mysqli_query($connection,$query);

    if(!$result){
        die('Query failed.');
    }
}

//     if ($username && $password)
//     {
//         echo $username;
//         echo $password;
//     }
//     else
//     {
//         echo "Missing value. Please check again.";
//     } 
// }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>Document</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
<div class="col-sm-3">
    <form action="login_read.php" method="POST">
        <div class="form group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>

        <br>
        <div class="form group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <br>
        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        <input class="btn btn-primary" type="submit" name="reset" value="Reset">
    </form>
</div>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="col-sm-3">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <pre>
            <?php
               print_r($row); 
            ?>
        </pre>
        <?php
    }
    ?>
    </div>
</div>
</body>
</html>