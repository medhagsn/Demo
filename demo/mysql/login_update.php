<?php include "db.php";
$query = "SELECT * from users";
    $result = mysqli_query($connection,$query);

    if(!$result){
        die('Query failed.');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>Update Login Credentials</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="col-sm-3">
      <form action="login_update.php" method="post">
        
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <select name="" id="">
                <?php
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row ['id'];
                    echo "<option value='$id'>$id</option>";
                }
                ?>
                <option value="">1</option>
            </select>
        </div>
        <br>
        <input class="btn btn-primary" type="submit" name="submit" value="Update">

      </form>
    </div>
</div>
</body>
</html>