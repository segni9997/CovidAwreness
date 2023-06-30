<?php
session_start();
error_reporting(0);
include('../dbConnection.php');
$meassege = "";
if (isset($_POST['upload'])) {

    // fetch data from the html form 
    $heading = $_POST['heading'];

    $image = $_FILES['image']['name'];
    $folder = $_FILES['image']['tmp_name'];
    $description = $_POST['text'];
    $path = "../images/dbimage/" . $image;
    $sql = "INSERT INTO news(heading,uimage, descriptiones) VALUES ('$heading', '$image' , '$description')";
    $qry = mysqli_query($con, $sql);

    if ($qry) {
        echo "<script> alert('uploaded succesfully');</script>";
    } else {
        echo "something wrong try again please";
    }
    // move uploaded file to specified folder
    if (move_uploaded_file($folder, $path)) {
        echo "uploaded file moved successfully ";
    } else {
        $meassege = "there was problem uploading the image";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="images/icon/virus-solid-24.png" type="image/x-icon">
    <link rel="shortcut icon" href="../images/icon/virus-solid-24.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/news.css">
    <title>upload data</title>
</head>

<body>
    <form action="enter_news.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="show_image">
                <img id="preview">
            </div>
            <div class="inputs">
                <input type="text" name="heading" id="heading" placeholder="HEADING" required>
                <textarea name="text" id="text" cols="30" rows="4" placeholder="ABOUT IT....." required></textarea>
            </div>
            <div class="btns">
                <input type="file" name="image" id="" oninput=" preview.src=window.URL.createObjectURL(this.files[0])">
                <input type="submit" value="upload" id="upload" name="upload">

            </div>
        </div>
    </form>


</body>

</html>