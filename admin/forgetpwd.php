<?php
    session_start();
    include('../connection.php');
    if(isset($_POST['btnsubmit']))
    {
        $email=$_POST['txtemail'];
            $sql="select * from tbl_admin where email='$email'";
            $res=mysqli_query($con,$sql);
            $num=mysqli_num_rows($res);
            $row=mysqli_fetch_assoc($res);
            
            if($num==1)
            {
            
                $to=$email;
                $subject= "Reset password";
                $message= "
                hello $row[admin_name],
                <br>
                You requested to reset your password,
                <br>
                please click the link to reset your password
                <br>
                <br>
                <a href='http://localhost/OFD/admin/rstpwd.php?id=$row[admin_id]'>Click Here</a>
                ";
                        //$headers="From:jigarvakil9200@gmail.com"."\r\n";
                        //mail($to,$subject,$message,$headers);
                    //echo $message;
                require '../PHPMailer-master/PHPMailerAutoload.php';
                $mail = new PHPMailer();

                        //Enable SMTP debugging.
                $mail->SMTPDebug = 0;
                        //Set PHPMailer to use SMTP.
                $mail->isSMTP();
                        //Set SMTP host name
                $mail->Host = "smtp.gmail.com";
                $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
                );
                        //Set this to true if SMTP host requires authentication to send email
                $mail->SMTPAuth = TRUE;
                        //Provide username and password
                $mail->Username = "fooddelivery.official@gmail.com";
                $mail->Password = "fds201920";
                        //If SMTP requires TLS encryption then set it
                $mail->SMTPSecure = "false";
                $mail->Port = 587;
                        //Set TCP port to connect to

                $mail->From = "fooddelivery.official@gmail.com";
                $mail->FromName = "FDS Support";

                $mail->addAddress($to);

                $mail->isHTML(true);

                $mail->Subject = $subject;
                $mail->Body = $message;
                    //$mail->AltBody = "This is the plain text version of the email content";
                if($mail->send())
                {
                header("location:index.php");    
            }
            else
            {
                $msg="mail not sent";
            }
           
        }
        else
        {
            header("location:forgetpwd.php?msg=Email incorrect");
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
    <title>forget password</title>
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
                    <form method="post">
                        <div class="form-group">
                            <label>Email ad qdress</label>
                            <input name="txtemail" type="email" class="form-control" placeholder="Email" required>
                        </div>
                            <button name="btnsubmit" type="submit" class="btn btn-primary btn-flat m-b-15">Submit</button>

                    </form>
                    <div class="text-center">
                    <span class="text-danger font-weight-bold"><?php if(isset($_GET['msg'])) echo $_GET['msg']; ?></span>
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
