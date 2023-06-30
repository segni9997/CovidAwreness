<?php
session_start();
error_reporting(0);
include('dbConnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="images/icon/virus-solid-24.png" type="image/x-icon">
    <link rel="stylesheet" href="css/news.css">
</head>

<body>
    <h3>Recent News about COVID-19</h3>
    <div class="containe">
        <?php
        $sql = "SELECT * FROM news order by image_id desc";

        $result = mysqli_query($con, $sql);
        $count = 0;
        while ($row = mysqli_fetch_array($result)) {

            echo "<div class='row`'>";
            echo "<div class='column'> ";
            echo "<img src ='images/dbimage/" . $row['uimage'] . "'>";
            echo "<h3> " . $row['heading'] . "</h3>";
            echo "<p> " . (htmlspecialchars($row['descriptiones'])) . "</p>";
            echo "</div>";
            echo "</div>";

        }
        
        ?>

    </div>
</body>

</html>