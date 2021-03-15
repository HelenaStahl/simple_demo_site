<?php

session_start(); 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: edit.php");
  exit;
}
require_once "config.php";

$username = $password = "";
$username_err = $password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){

	    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	    $result = mysqli_query($conn,$query) or die(mysql_error());
	    $rows = mysqli_num_rows($result);

	    if ($rows==1){
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["username"] = $username;
            header("location: edit.php");
        }
        else {
		    $message = "Incorrect username or password....";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
     
    }
    else{    
	    $message = "Oops! Something went wrong with the form you are submitting. You did not enter a username or password.";
	    echo "<script type='text/javascript'>alert('$message');</script>";
    }
    
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> SOCS Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2> SOCS ADMIN LOGIN </h2>
        <br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>

        </form>
    </div>    
</body>
</html>