<?php
    session_start();
    include('../connection.php');
    if(isset($_POST['BtnLogin'])){
        $email=$_POST['txtemail'];
        $pwd=$_POST['txtpwd'];
        $encpwd=md5($pwd);
        $sql="select * from tbl_admin where email='$email' and password='$encpwd'";
        $res=mysqli_query($con,$sql);
        $num=mysqli_num_rows($res);
        $row=mysqli_fetch_assoc($res);
        
        if($num==1){
            $_SESSION['user']=$row['admin_id'];
            header("location:dashboard.php");
        }
        else{
            header("location:index.php?msg=Username or password incorrect");
        }
    }
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                <h1>   </h1>
                    <form method="post">
                        <div class="form-group">
                            <i class="fa fa-user-circle" style="margin-left:210px;font-size:80px;color:steel blue;"></i><br><hr style="border: 2px solid #0086AD;">
                            <i class="fa fa-envelope icon"></i>&nbsp;&nbsp;<label><b>Email address</b></label>
                                <input type="email" name="txtemail" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <i class="fa fa-lock" aria-hidden="true"></i>&nbsp;&nbsp;<label><b>Password</b></label>
                                <input type="password" name="txtpwd" class="form-control" required placeholder="Password">
                        </div>
                            <button type="submit" name="BtnLogin" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                <div class="text-center">
                                <br>
                                        <a href="forgetpwd.php" class="text-danger">  Forgotten Password?</a>
                                        <div>
                                            <?php
                                                if(isset($_GET['msg'])){
                                                    echo "<span class='text-danger font-weight-bold'>$_GET[msg]</span>";
                                                }
                                            ?>
                                        </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>

</body>
</html>
