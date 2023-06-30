<?php

include('../dbConnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="images/icon/virus-solid-24.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/73d3408756.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/sdmin.css">
</head>
<body>
    <div class="side-bar ">
        <div class="home-content">
            <i class='bx bx-menu'></i>
        </div>
        <a href="#" class="logo-box">
            <i class='bx bxs-virus' style='color:#f9b203'></i>
            <div class="logo-name">
                <h3>COVID<span>-19</span></h3>
            </div>
        </a>
        <!-- lists -->
        <ul class="sidebar-list">
            <!-- non drop downlist -->
            <li>
                <div class="title">
                    <a href="admindashboard.php" class="link">
                        <i class='bx bx-grid-alt' style='color:#f9b203'></i>
                        <span class="jobs"">Dashboard</span>
                    </a>
                </div>
               
            </li>
     
            <li>
                <div class="title">
                    <a href="enter_news.php" class="link">
                        <i class='bx bx-upload' style='color:#f9b203'></i>
                        <span class="jobs"">Upload news</span>
                                        </a>
                 </div>  
            </li>
            </li>
            <li>
                <div class="title">
                    <a href="news.php" class="link">
                        <i class='bx bx-upload' style='color:#f9b203'></i>
                        <span class="jobs"">Uploaded news</span>
                                        </a>
                </div>
            </li>
           
 
            <li>
                <div class="title">
                    <a href="fetchconact.php" class="link">
                        <i class='bx bx-comment-detail' style='color:#f9b203'></i>
                        <span class="jobs"">Contact</span>
                                  </a>
                 </div>

            </li>
            <div class="title logout">
                    <a href="loginpage.php" class="link">
                        <i class='bx bxs-arrow-from-right' style='color:#f9b203'></i>
                        <span class="jobs"">Logout</span>
                                  </a>
                 </div>
        
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
        </div>
        <div class="service">
            <div class="box1">
               
                <div class="card">
                    <h5>uploded news</h5>
                    <i class='bx bxs-first-aid' style='color:#ffc209'></i>
                    <div class="pra">
                        <p>
                            <a href="news.php">
                                <?php
                                $sql = "SELECT *FROM news ";
                                $result = mysqli_query($con, $sql);
                                $number_of_rows = mysqli_num_rows($result);

                                ?>
                                Total case:<span class="yellow"> [ <?php echo htmlentities($number_of_rows); ?> ] <span>
                            </a>
                        </p>                    
                    </div>
                </div>

                <div class="card">
                    <h5>upload News</h5>
                    <i class='bx bxs-first-aid' style='color:#ffc209'></i>

                    <div class="pra">
                        <p>
                            <a href="enter_news.php">

                                <span class="yellow"> [go to upload] <span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <h5>Message</h5>
                    <i class='bx bxs-first-aid' style='color:#ffc209'></i>
                    <div class="pra">
                        <p>
                            <a href="fetchconact.php">
                                <?php
                                $sql = "SELECT *FROM contactus ";
                                $result = mysqli_query($con, $sql);
                                $number_of_rows = mysqli_num_rows($result);

                                ?>
                                Total case:<span class="yellow"> [ <?php echo htmlentities($number_of_rows); ?> ] <span>
                            </a>
                            <a href="replied.php">
                                <?php
                                $sql = "SELECT *FROM contactus where IsRead=1 ";
                                $result = mysqli_query($con, $sql);
                                $number_of_rows = mysqli_num_rows($result);

                                ?>
                                <br>
                                read:<span class="yellow"> [ <?php echo htmlentities($number_of_rows); ?> ] <span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <h5>Global coraona case</h5>
                    <i class='bx bxs-first-aid' style='color:#ffc209'></i>

                    <div class="pra">
                        <p>
                            <a href="https://covid19.who.int/">

                                <span class="yellow"> go to status <span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <script src="../js/main.js"></script>
</body>

</html>