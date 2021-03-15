<?php

$dbhost = "localhost";
$dbuser = "cs307-group14";
$dbpass = "BLvQX5smuRVJAWYU";
$dbname = "cs307-group14-DB";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang = "en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" type = "text/css" href = "../css/format.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> McGill School of Computer Science </title>
</head>

<body>
    <!--------------------------------------------HEADER ONE--------------------------------------------------------------------->
    <div class="header_one">
        <a href="index.html">
            <img class="header_logo" src="../media/header_one.png">
        </a>
    </div>

    <!--------------------------------------------HEADER TWO--------------------------------------------------------------------->
    <div class="header_two">
        <ul class="main-nav">
        <li>
            <a href="future_students/future_students.html" class="nav-links">Future Students</a>
        </li>
        <li>
            <a href="current_students/current_students.html" class="nav-links">Current Students</a>
        </li>
        <li>
            <a href="faculty_staff/faculty.html" class="nav-links">Faculty & Staff</a>
        </li>

        <li>
            <a href="contact.html" class="nav-links">Contact</a>
        </li>
        <li>
            <a href="more/learn_more.html" class="nav-links">Learn More</a>
        </li>
        </ul>
    </div>

    <br><br><br>

    <!--------------------------------------------BANNER--------------------------------------------------------------------->
    <div class="row">
        <div class="column_left">
            <p style="color: #EE1B2F; font-size: 4vw;"> #ICodeLikeAGirl </p>
            <br>
            <p style="font-weight: 300; font-size: 2.5vw"> 
                The School of Computer Science is dedicated to actively supporting an inclusive culture of computing at McGill University!
            </p>
        </div>
        <div class="column_right">
            <a href='#'><img class="landing_img1" src="../media/landing_page1.jpg" alt="logo-header"></a>
        </div>
    </div>
    
    <br><br><br>

    <!--------------------------------------------search bar w/ google integrated--------------------------------------------------------------------->
    <div class="search-bar">
        <form action="https://google.com/search?q=McGill:" method="get">
        <input type="text" placeholder="Search for courses, programs, professors, and more..." name="q" id="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    </div> 

    <br><br><br>

    <!--------------------------------------------EVENTS BAR--------------------------------------------------------------------->
    <p style="margin-left: 5%; font-size: 2.5vw;">EVENTS@CS</p>
    <div class="events">
        <br>
        <div class="event_posting">
            <?php 
                $query = "SELECT content FROM homepage WHERE section = 'event1'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                echo $row['content'];	
            ?>
	    </div>
        <div class="event_posting">
            <?php 
                $query = "SELECT content FROM homepage WHERE section = 'event2'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                echo $row['content'];	
		    ?>
        </div>
        <div class="event_posting">
            <?php 
                $query = "SELECT content FROM homepage WHERE section = 'event3'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                echo $row['content'];	
            ?>
        </div>
        <div class="event_posting">
            <?php 
                $query = "SELECT content FROM homepage WHERE section = 'event4'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                echo $row['content'];	
            ?>
        </div>
        <br><br><br>
        <a class="events_view_more" href="#">View More Events</a>
    </div>
    
    <br><br><br><br>

    <!--------------------------------------------NEWS BAR--------------------------------------------------------------------->
    <p style="margin-left: 5%; font-size: 2.5vw;">NEWS@CS</p>
    <div class="events">
        <br>
        <div class="event_posting">
            <?php 
                $query = "SELECT content FROM homepage WHERE section = 'news1'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                echo $row['content'];	
            ?>
        </div>
        <div class="event_posting">
            <?php 
                $query = "SELECT content FROM homepage WHERE section = 'news2'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                echo $row['content'];	
            ?>
        </div>
        <div class="event_posting">
            <?php 
                $query = "SELECT content FROM homepage WHERE section = 'news3'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                echo $row['content'];	
            ?>
        </div>
        <div class="event_posting">
            <?php 
                $query = "SELECT content FROM homepage WHERE section = 'news4'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                echo $row['content'];	
            ?>
        </div>
        <br><br><br>
        <a class="events_view_more" href="more/news/news.html">View More News</a>
    </div>

    <br><br><br><br>

    <!--------------------------------------------POSTINGS BAR--------------------------------------------------------------------->
    <p style="margin-left: 5%; font-size: 2.5vw;">POSTINGS@CS</p>
    <div class="events">
        <br>
        <div class="event_posting">
            <?php 
                $query = "SELECT content FROM homepage WHERE section = 'posting1'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                echo $row['content'];	
            ?>
        </div>
        <div class="event_posting">
            <?php 
                $query = "SELECT content FROM homepage WHERE section = 'posting2'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                echo $row['content'];	
            ?>
        </div>
        <div class="event_posting">
            <?php 
                $query = "SELECT content FROM homepage WHERE section = 'posting3'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                echo $row['content'];	
            ?>
        </div>
        <div class="event_posting">
            <?php 
                $query = "SELECT content FROM homepage WHERE section = 'posting4'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                echo $row['content'];	
            ?>
        </div>
        <br><br><br>
        <a class="events_view_more" href="more/employment/faculty.html">View More Postings</a>
    </div>

    <br><br><br>    

    <!--------------------------------------------FOOTER MENU--------------------------------------------------------------------->
    <div class="footer">
        <a href="index.html">
            <img class="footer_logo" src="../media/footer.png" alt="footer_logo">
        </a>
        <p>
            Copyright &#169 2020 McGill University.<br>
            All content related requests should be sent to Thomas & Helena
        </p>
    </div>
    
<script>
</script>
    
</body>
</html>

