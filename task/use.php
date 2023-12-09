<?php
session_start();
include "con.php";
$name=$_SESSION['username'];
$query="select * from USERDETAILS WHERE uname='$name'";
echo $name;
if(!$table=mysqli_query($con,$query))
{
    echo "technical issue";
    exit;
}
$row=mysqli_fetch_assoc($table);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "link.php";  ?>
</head>
<style>
.body{
    background-image: url('');
}
.name{
    text-align:center;
}
.row{
    text-align:center;
}
.image img{
    height:300px;
    border-radius:30px;
}
</style>
<body>

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    
                <div class="col-12 image">
                    <img src="username1.png" alt="image">
                </div>
                </div>
                <div class="row">
                    <div class="col-12 name">
                        <h1 class=""><?php echo $row['uname'];?></h1>
                    </div>
                </div>

            </div>
            <div class="m-2"></div>
            <div class="row">
                <div class="container">

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h3>
                        MOTHER NAME:
                        </h3>
                        <?php echo $row['mother_name'];?>
                </div>
                <div class="col-12 col-lg-6">
                        <h3>
                        FATHER NAME:
                        </h3>
                        <?php echo $row['father_name'];?>
                </div>
                </div>
                </div>
                 <div class="container">

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h3>
                        AADHAR NUMBER:
                        </h3>
                        <?php echo $row['aadhar_number'];?>
                </div>
                <div class="col-12 col-lg-6">
                        <h3>
                        PHONE NUMBER:
                        </h3>
                        <?php echo $row['phone_number'];?>
                </div>
                </div>
                </div>
                 <div class="container">

                <div class="col-12 col-lg-6">
                        <h3>
                        ADDRESS:
                        </h3>
                        <?php echo $row['address'];?>
                </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="edit.php">
                            <button class="btn btn-warning">EDIT YOUR DETAILS</button>
                            </a>
                    </div>
                </div>
                 <div class="row mt-2">
                    <div class="col-12">
                        <a href="login.html">
                            <button class="btn btn-warning w-25">LOG OUT</button>
                            </a>
                    </div>
                </div>
                </div>
        </div>
    </div>
    
</body>
</html>
