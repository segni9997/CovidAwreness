<?php 
session_start();
include("../dbConnection.php");
if(isset($_POST['update'])){
    $remark=$_POST['remark'];
    $isread=1;
    $updateDate=date('y-m-d H:i:s');
    $update="UPDATE contactus  SET AdminRemark='$remark',IsRead='$isread',Updatedate='$updateDate' WHERE contact_id='".$_POST['id']."'";
    $updateqry=mysqli_query($con,$update);
    if($updateqry)
    {
        echo "<script>alert('updated succesfully');</script>";
        echo "<script>window.location.href ='fetchconact.php'</script>";
    }
    

}


$sql_select= "SELECT * FROM  contactus WHERE contact_id='".$_G0ET['id']."' ";
$qry=mysqli_query($con,$sql_select);
$row=mysqli_fetch_array($qry);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/news.css">

    <title>update-contact</title>
</head>

<body>
    <form action="" method="post">
        <div class="all">
            <input type="hidden" name="id" value="<?php echo $row['contact_id'] ?>">
            <label for="fullname">FULLNAME:</label>
            <input type="text" name="fullname" id="" value="<?php echo $row['fullname'] ?>" readonly><br>

            <label for="email">EMAIL:</label>
            <input type="email" name="email" id="" value="<?php echo $row['email'] ?>" readonly> <br>
            <label for="phone">PHONE NUMBER: </label>
            <input type="text" name="phone" id="" value="<?php echo $row['phoneNumber'] ?>" readonly><br><br>
            <label for="mesg">YOUR MEASSEGE</label><br>
            <textarea name="mesg" id="" cols="40" rows="5" placeholder="<?php echo $row['msg'] ?>"
                readonly></textarea><br>
            <label for="remark">Your Answer</label>
            <textarea name="remark" id="" cols="40" rows="5" placeholder="<?php echo $row['AdminRemark'] ?>"></textarea>


            <button name="update" class="btn">update</button>
        </div>
    </form>
</body>

</html>