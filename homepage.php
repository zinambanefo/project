<?php
include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <div class="top">
        <div class="navbar">
            <a href="#" class="active"><i class="home"></i>Home</a>
            <a href="searchhome.php"><i class="search"></i> Search</a>
            <a href="#"><i class="quick rec"></i> Quick Rec</a>
            <a href="#"><i class="watchlists"></i>Watchlists</a>
            <a href="#"><i class="Change Preferences"></i> Change Preferences</a>
            <b class="welcome">Welcome, <?php echo $login_session; ?></b>
            <a href="logout.php"><i class="Logout"></i>Logout</a>
        </div>
    </div>
    <div class="space"></div>
    <div class='filmbox'>
    <?php 
    $conn = mysqli_connect("localhost", "root", "", "FindAFeature");
    if($conn-> connect_error) {
        die("Connection failed:" . $conn-> connect_error);
    }

    $sql = "SELECT film_id, poster, film_title, Director, Genre FROM Films ";
    $result = $conn-> query($sql);

    if($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()){
            echo "<div class='films'><img class='poster' src='" . $row["poster"] . "'><h2>" . $row["film_title"] . "</h2><p class='title'>" . $row["Director"]."</p><p class='title'>"
            . $row["Genre"] . "</p><div class='btns'><a href='#' name='like" . $row['film_id'] . "'><button type='button'>Like</button></a><a href='#' name='dislike" . $row['film_id']. "'><button type='button'>Dislike</button></a>
            <a href='#' name='moreinfo" . $row['film_id'] . "'><button type='button'>More Info</button></a></div></div>";
        };
    }
    else{
        echo "0 result";
    };
    $conn-> close();
    ?>



    </div>
</body>
</html>