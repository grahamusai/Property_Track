<?php 
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' AND email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Username or Email has already been taken');</script>";
    }
    else {
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user ('$username', '$email', '$password'";
            mysqli_query($conn, $query);
            echo 
            "<script> alert('Registration Successful');</script>";
        }
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
    
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="confirmpassword" placeholder="Confirm Password">
        <input type="submit" value="Login">
    </form>
    <a href="login.php">Login</a>

</body>
</html>




