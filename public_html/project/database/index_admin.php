<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(!empty(trim($_POST["event1"]))){
        $event1 = trim($_POST["event1"]);
        $query = "UPDATE homepage SET content='$event1' WHERE section='event1'";
        if (mysqli_query($conn, $query)) {
            $message = "value changed.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
       	else {
		    $message = "value not changed.";
        	echo "<script type='text/javascript'>alert('$message');</script>";
	    }
    }

    if(!empty(trim($_POST["event2"]))){
        $event2 = trim($_POST["event2"]);
        $query = "UPDATE homepage SET content='$event2' WHERE section='event2'";

        if (mysqli_query($conn, $query)) {
            $message = "value changed.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
       	else {
		    $message = "value not changed.";
        	echo "<script type='text/javascript'>alert('$message');</script>";
	    }
    }

    if(!empty(trim($_POST["event3"]))){
        $event3 = trim($_POST["event3"]);
        $query = "UPDATE homepage SET content='$event3' WHERE section='event3'";

        if (mysqli_query($conn, $query)) {
            $message = "value changed.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
       	else {
		    $message = "value not changed.";
        	echo "<script type='text/javascript'>alert('$message');</script>";
	    }
    }

    if(!empty(trim($_POST["event4"]))){
        $event4 = trim($_POST["event4"]);
        $query = "UPDATE homepage SET content='$event4' WHERE section='event4'";

        if (mysqli_query($conn, $query)) {
            $message = "value changed.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
       	else {
		    $message = "value not changed.";
        	echo "<script type='text/javascript'>alert('$message');</script>";
	    }
    }

    if(!empty(trim($_POST["news1"]))){
        $news1 = trim($_POST["news1"]);
        $query = "UPDATE homepage SET content='$news1' WHERE section='news1'";
        if (mysqli_query($conn, $query)) {
            $message = "value changed.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
       	else {
		    $message = "value not changed.";
        	echo "<script type='text/javascript'>alert('$message');</script>";
	    }
    }

    if(!empty(trim($_POST["news2"]))){
        $news2 = trim($_POST["news2"]);
        $query = "UPDATE homepage SET content='$news2' WHERE section='news2'";
        if (mysqli_query($conn, $query)) {
            $message = "value changed.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
       	else {
		    $message = "value not changed.";
        	echo "<script type='text/javascript'>alert('$message');</script>";
	    }
    }

    if(!empty(trim($_POST["news3"]))){
        $news3 = trim($_POST["news3"]);
        $query = "UPDATE homepage SET content='$news3' WHERE section='news3'";
        if (mysqli_query($conn, $query)) {
            $message = "value changed.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
       	else {
		    $message = "value not changed.";
        	echo "<script type='text/javascript'>alert('$message');</script>";
	    }
    }

    if(!empty(trim($_POST["news4"]))){
        $news4 = trim($_POST["news4"]);
        $query = "UPDATE homepage SET content='$news4' WHERE section='news4'";
        if (mysqli_query($conn, $query)) {
            $message = "value changed.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
       	else {
		    $message = "value not changed.";
        	echo "<script type='text/javascript'>alert('$message');</script>";
	    }
    }

    if(!empty(trim($_POST["posting1"]))){
        $posting1 = trim($_POST["posting1"]);
        $query = "UPDATE homepage SET content='$posting1' WHERE section='posting1'";
        if (mysqli_query($conn, $query)) {
            $message = "value changed.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
       	else {
		    $message = "value not changed.";
        	echo "<script type='text/javascript'>alert('$message');</script>";
	    }
    }

    if(!empty(trim($_POST["posting2"]))){
        $posting2 = trim($_POST["posting2"]);
        $query = "UPDATE homepage SET content='$posting2' WHERE section='posting2'";
        if (mysqli_query($conn, $query)) {
            $message = "value changed.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
       	else {
		    $message = "value not changed.";
        	echo "<script type='text/javascript'>alert('$message');</script>";
	    }
    }

    if(!empty(trim($_POST["posting3"]))){
        $posting3 = trim($_POST["posting3"]);
        $query = "UPDATE homepage SET content='$posting3' WHERE section='posting3'";
        if (mysqli_query($conn, $query)) {
            $message = "value changed.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
       	else {
		    $message = "value not changed.";
        	echo "<script type='text/javascript'>alert('$message');</script>";
	    }
    }

    if(!empty(trim($_POST["posting4"]))){
        $posting4 = trim($_POST["posting4"]);
        $query = "UPDATE homepage SET content='$posting4' WHERE section='posting4'";
        if (mysqli_query($conn, $query)) {
            $message = "value changed.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
       	else {
		    $message = "value not changed.";
        	echo "<script type='text/javascript'>alert('$message');</script>";
	    }
    }

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
	<a href="../html/index.php" class="btn btn-danger">Take me back to the Landing Page</a><br><br>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label>EVENT ONE</label>
            <input type="text" name="event1" class="form-control" value="<?php echo $event1; ?>">
        </div>   
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit Event 1">
        </div>
	<br>
	</form>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label>EVENT TWO</label>
        <input type="text" name="event2" class="form-control" value="<?php echo $event2; ?>">
    </div>   
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit Event 2">
    </div>
<br>
</form>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label>EVENT THREE</label>
        <input type="text" name="event3" class="form-control" value="<?php echo $event3; ?>">
    </div>   
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit Event 3">
    </div>
<br>
</form>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label>EVENT FOUR</label>
        <input type="text" name="event4" class="form-control" value="<?php echo $event4; ?>">
    </div>   
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit Event 4">
    </div>
<br>
</form>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label>NEWS 1</label>
        <input type="text" name="news1" class="form-control" value="<?php echo $news1; ?>">
    </div>   
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit News 1">
    </div>
<br>
</form>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label>NEWS 2</label>
        <input type="text" name="news2" class="form-control" value="<?php echo $news2; ?>">
    </div>   
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit News 2">
    </div>
<br>
</form>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label>NEWS 3</label>
        <input type="text" name="news3" class="form-control" value="<?php echo $news3; ?>">
    </div>   
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit News 3">
    </div>
<br>
</form>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label>NEWS 4</label>
        <input type="text" name="news4" class="form-control" value="<?php echo $news4; ?>">
    </div>   
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit News 4">
    </div>
<br>
</form>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label>POSTING 1</label>
        <input type="text" name="posting1" class="form-control" value="<?php echo $posting1; ?>">
    </div>   
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit Posting 1">
    </div>
<br>
</form>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label>POSTING 2</label>
        <input type="text" name="posting2" class="form-control" value="<?php echo $posting2; ?>">
    </div>   
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit Posting 2">
    </div>
<br>
</form>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label>POSTING 3</label>
        <input type="text" name="posting3" class="form-control" value="<?php echo $posting3; ?>">
    </div>   
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit Posting 3">
    </div>
<br>
</form>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label>POSTING 4</label>
        <input type="text" name="posting4" class="form-control" value="<?php echo $posting4; ?>">
    </div>   
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit Posting 4">
    </div>
<br>
</form>


</body>
</html>
