<?php
session_start();
error_reporting(0);
include("dbConnection.php");

if (isset($_POST['send'])) {
    $fname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];
    $postDate=date('y-m-d H:i:s');
    $sql = "INSERT INTO contactus(fullname, email, phoneNumber,msg,postingdate) VALUES('$fname', '$email', '$phone' , '$msg','$postDate')";
    $qry = mysqli_query($con, $sql);
    echo "<script>alert('your messagee sent succesfully);</script>";
    echo "<script>window.location.href ='index.html'</script>";
   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contuct Us</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="images/icon/virus-solid-24.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div class="contactUs">
        <div style="text-align:center">
            <h2>Contact Us</h2>
        </div>
        <div class="insertedData">
            <div class="info">
                <h3>Meassage content: <span>webpages centered <sup>*</sup></span></h3>
                <h3>Email: <span>student@Fourthyear.com</span></h3>
                <h3>phone: <span>+251-983-604-770</span></h3>
                <h3>Address: <span>Dilla,Odaya'a Campus</span></h3>
            </div>
            <form action="contactus.php" method="post">
                <label for="fullname">FULLNAME:</label>
                <input type="text" name="fullname" id="" placeholder="your fullname" required>
                <label for="email">EMAIL:</label>
                <input type="email" name="email" placeholder="your email" id="" required>
                <label for="phone">PHONE NUMBER: </label>
                <input type="text" name="phone" id="" placeholder="your phone number">
                <label for="msg">YOUR MEASSEGE</label>
                <textarea name="msg" id="" cols="61" rows="5" placeholder="write your message please" required></textarea>
                <button name="send" class="btn">SEND</button>

            </form>
        </div>
    </div>
</body>

</html>