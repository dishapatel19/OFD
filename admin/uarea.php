<?php
	 include('../connection.php');
	$id=$_GET['id'];
		$result=mysqli_query($con,"select * from tbl_area where area_id=".$id);
        $row=mysqli_fetch_assoc($result);
        
	if(isset($_POST['btns']))
	{
		$aname=$_POST['aname'];
		$pin=$_POST['pin'];
      //  $query="UPDATE tbl_area SET area='$aname' and pincode='$pin' WHERE area_id=".$id;
        $query="UPDATE `tbl_area` SET `area` = '$aname', `pincode` = '$pin' WHERE `tbl_area`.`area_id` = $id";
		mysqli_query($con,$query);
		header("location:viewarea.php");
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
    <title>Sufee Admin - HTML5 Admin Template</title>
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
                        <h1>Update</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Area and Pincode</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

          
        <form method='post'>
    <div class="form-group">
      <label><b>Area Name:</b></label>
      <input type="text" class="form-control" value="<?= $row['area'] ?>" id="txta" name="aname">
    </div>
    <div class="form-group">
      <label><b>Pincode:</b></label></label>
      <input type="text" class="form-control" id="pno" value="<?= $row['pincode'] ?>"  name="pin">
    </div>
    
    <button type="submit" name="btns" class="btn btn-primary">Submit</button>
    </div>
  </form>


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
