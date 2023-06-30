<?php
session_start();
include("../dbConnection.php");
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['pword'];

    $sql = " SELECT * FROM adminlogin WHERE admin_email='" . $email . "' and admin_pass ='" . $password . "' limit 1";
    $query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($query);

    if ($count > 0) {

        header("location:admindashboard.php");
        exit();
    } else {
        echo "<script>
                 alert('email or password is not correct. please type correctly')
                   </script>";
       
        echo "<script>window.location.href ='loginpage.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page </title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="container">

        <div class="hole">
            <form action="loginpage.php" method="post">
                <div class="formpage">

                    <div class="head">
                        <h3>Admin<span>-Login</span></h3>
                    </div>
                    <div class="inputs">
                        <label for="email" class="label">Email:</label>
                        <input type="email" name="email" id="" class="input" required>
                        <label for="pword" class="label">password:</label>
                        <input type="password" name="pword" id="" required><br><br>

                    </div>
                    <div class="login">
                        <input type="submit" name="login" value="LOGIN">
                    </div>

                </div>


            </form>
        </div>

    </div>

</body>

</html>