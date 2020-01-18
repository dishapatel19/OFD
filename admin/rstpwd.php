<?php
    session_start();
    include('../connection.php');
	    $id=$_GET['id'];
		$sql="select * from tbl_admin where admin_id=$id";
		$res=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($res);
    
	
	if(isset($_POST['btnsubmit']))
	{
		$pwd=$_POST['txtpwd'];
		$cnfpwd=$_POST['txtcpwd'];
			if($pwd==$cnfpwd)
			{
				$encpwd=md5($pwd);
                //$sql="update tbl_admin set password='$encpwd' and admin_id='$id'";
				$sql="UPDATE `tbl_admin` SET `password` = '$encpwd' WHERE `tbl_admin`.`admin_id` = $id";
                
				
				$res=mysqli_query($con,$sql);
				if($res)
				{
					echo "<script> alert('Password reset successfully'); </script>";
					header("location:index.php");
				}
				
			}
			else
			{
				echo "<script> alert('Password not match'0); </script>";
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
    <title>Reset password</title>
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
        <div class="container">
            <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-6"> 
                    <div class="rstpwd-content">
                        <div class="rstpwd-logo">
                            <a href="rstpwd.html">
                                <img class="align-content" src="images/logo.png" alt="">
                            </a>
                        </div>
                        <div class="login-form">
                        <form method="post">
                            <div class="form-group">
                                    <label><b>Password</b></label>
                                    <input type="password" name="txtpwd" class="form-control" placeholder="password" required>
                            </div>
                            <div class="form-group">
                                    <label><b>confirm Password</b></label>
                                    <input type="password" name="txtcpwd" class="form-control" placeholder="confirm Password" required>
                            </div>
                                <button type="submit" name="btnsubmit" class="btn btn-primary">Submit</button> 
                        </form>
                        </div>
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
