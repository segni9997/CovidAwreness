<?php
session_start();
include('../dbConnection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/73d3408756.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="images/icon/virus-solid-24.png" type="image/x-icon">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>All users</title>
</head>

<body class="body">
    <div class="overlay">
        <div class="headername">
            <h2>Contact<span>-detail</span></h2>
        </div>
        <div class="backarrow">

        </div>
        <div class="table">
            <table>
                <thead>
                    <tr id='headRow'>

                        <th>#</th>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Message</th>
                        <th>Remark</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM contactus where AdminRemark='' order by contact_id desc";
                    $res = mysqli_query($con, $sql);
                    $count = 1;
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                    <tr>
                        <td><?php echo $count ?></td>
                        <td><?php echo $row['contact_id']?></td>
                        <td> <?php echo $row['fullname'] ?></td>
                        <td> <?php echo $row['email'] ?></td>
                        <td> <?php echo $row['phoneNumber'] ?></td>
                        <td> <?php echo $row['msg'] ?></td>
                       <td> <a href="update-contact.php?id=<?php echo $row['contact_id']?>"><i class="fa fa-pencil-square-o" aria-hidden="true"
                                    style="color:#fb9032"></i></a> 
                          
                        </td>

                    </tr>
                    <?php
                        $count = $count + 1;
                    } ?>

                </tbody>
            </table>
        </div>
    </div>
  
</body>

</html>