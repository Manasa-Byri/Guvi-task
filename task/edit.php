<?php
session_start();
include "con.php";
$uname=$_SESSION['username'];
$query="select * from USERDETAILS WHERE uname='$uname'";

if(!$table=mysqli_query($con,$query))
{
    echo "technical issue";
    exit;
}


$row=mysqli_fetch_assoc($table);
$name=$row['uname'];
$mother_name=$row['mother_name'];
$father_name=$row['father_name'];
$aadhar=$row['aadhar_number'];
$phone=$row['phone_number'];
$address=$row['address'];




if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name=$_POST['name'];
    $mother_name=$_POST['mothername'];
    $father_name=$_POST['fathername'];
    $aadhar=$_POST['aadhar'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
   
    // user
    $query="update USERDETAILS set father_name='$father_name',mother_name='$mother_name',aadhar_number='$aadhar',phone_number='$phone',address='$address' where uname='$uname'";
    mysqli_query($con,$query);
    header('location:user.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
    
    .formrow{
        margin-top:10px;
        width:50vw;
    }
    .col{
        /* width:80vh; */
    }
    /* .container-fluid{
        display: flex;
        justify-content:center;
    } */
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
               
            </div>
        </div>
    </div>
    <form action="edit.php" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 ">
                <div class="form-floating">
                    <input type="text" name="mothername" placeholder="" value="<?php echo $mother_name;?>" class="form-control">
                    <label for="">MOTHER NAME</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-10">
                <div class="form-floating">
                    <input type="text" name="fathername" placeholder="" value="<?php echo $father_name;?>" class="form-control">
                    <label for="">FATHER NAME</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-10 ">
                <div class="form-floating">
                    <input type="text" name="email" placeholder="" value="<?php echo $email;?>" class="form-control">
                    <label for="">EMAIL:</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-10 ">
                <div class="form-floating">
                    <input type="text" name="aadhar" placeholder="" value="<?php echo $aadhar;?>" class="form-control">
                    <label for="">aadhar:</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-10 ">
                <div class="form-floating">
                    <input type="text" name="address" placeholder="" value="<?php echo $address;?>" class="form-control">
                    <label for="">address number:</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-10">
                <div class="form-floating">
                    <input type="text" name="phone" placeholder="" value="<?php echo $phone;?>" class="form-control">
                    <label for="">phone number:</label>
                </div>
            </div>
        </div>
        

        <div class="row">
            
            <button class="btn btn-success">change</button>
            
        </div>
        

        </div>
    </form>
  
</body>
</html>
