<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("location:index.php");
    }

    if(isset($_POST['btns']))
    {
          $name= $_POST['fname'];
          $email= $_POST['email'];
          $mno= $_POST['mno'];

         

         $to=$email;
         $subject= "Employee Registration";
         $message="
         
         Hello $name,

         Your registration for Employee(Delivery Person) 
         Click the Link Below to register with system
         <a href='http://localhost/OFD/employee/addemployee.php'>Click Here</a>   

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
         header("location:emp1.php");
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
    <?php
        include_once("include/up_link.php");
    ?>
    <title>Add employe</title>
</head>

<body>


    <!-- Left Panel -->
    <?php
        include_once("include/side_menu.php");
    ?>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php
            include_once("include/header.php");
        ?>
       <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Employees</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Employees</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

          
    
<div class="container">

<div class='col-md-8'>
  <h2>Registration form</h2><hr style="border: 2px solid #0086AD;">
  <form method='post'>
    <div class="form-group">
      <label><b>Name:</b></label>
      <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname">
    </div>
    <div class="form-group">
      <label><b>Mobile No.:</b></label></label>
      <input type="text" class="form-control" id="mno" placeholder="Enter your mobile number" name="mno">
    </div>
    <div class="form-group">
      <label><b>Email:</b></label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  
    </div>
    
    <button type="submit" name="btns" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>       


        </div> <!-- .content -->
    </div><!-- /#right-panel -->


    <!-- Right Panel -->
    <?php
        include_once("include/down_link.php");
    ?>
    
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
