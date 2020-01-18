<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("location:index.php");
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
    <title>Admin resto</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
        include_once("include/up_link.php");
    ?>
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
            include_once("include/header.php")
        ?>
       <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Manage Restaurants</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Restaurants</li>
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
      <label><b>Restro Name:</b></label>
      <input type="text" class="form-control" id="rname" placeholder="Enter Restro name" name="rname">
    </div>
    <div class="form-group">
      <label><b>Contact Number:</b></label></label>
      <input type="text" class="form-control" id="mno" placeholder="Enter Restro contact  number" name="mno">
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
        include_once("include/down_link.php")
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
