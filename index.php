<?php
require 'common.php';
if(isset($_SESSION['email'])){
    header('location:lession.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Violinshala | Home</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="description" content="Violinshala provide you a complete violin tutorial in 12 stages">
        <meta name="keywords" content="HTML, CSS, PHP, Bootstrap">
    </head>
    <body>
        <?php 
        include 'header.php';
        ?>
        

        <div id="content">
            <div id="banner">
            <div class="alert alert-warning text-center">
                <strong>Warning! This website is made by the developer as his project work for HackOctober-Fest. The students who are interested to learn violin should not take this website seriously.</strong>
            </div>
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>Music Make Life Live</h1>
                            <p>Want to be a part of this? </p><br>
                            <a href="lession.php" type="button" class="btn btn-danger btn-lg active">Enroll Now</a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
