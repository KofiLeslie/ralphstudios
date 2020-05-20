<?php

session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'ralph_studios';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    
    $sql = $con->prepare("SELECT * FROM login WHERE userName ='".$uname."' AND Password = '".$pass."' LIMIT 1");
    $sql->execute();
    $sql->store_result();
    if ($sql->num_rows > 0) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        header('Location: gallery_show/index.php');
        exit();
    }else {
        echo "Incorrect Login Credentials";
        exit();
    }
    
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    body{
        margin: 0 auto;
	background-image: url("images/bg.jpg");
	background-repeat: no-repeat;
	background-size: 100% 720px;
    }
}
    </style>
</head>
<body>
    <div class="container">
        <img src="images/logo.png" alt="">
        <form method="POST" action="#">
            <div class="form-input">
                <input type="text" name="username" placeholder="Enter Your User Name" required>
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="Enter Your Password" required>
            </div>
            <input type="submit" name="submit" value="LOGIN" class="btn-login">
        </form>
    </div>
</body>
</html>