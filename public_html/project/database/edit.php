<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOCS ADMIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Welcome, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>, to the SOCS Admin page.</h1>
    </div>
    <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a><br><br>
    <a href="index_admin.php" class="btn btn-danger"> Click here to view and edit the landing page as an Admin. </a>
</body>
</html>
