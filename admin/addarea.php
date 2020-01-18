<?php
	 include('../connection.php');
	if(isset($_POST['btns']))
	{
		$aname=$_POST['txtan'];
		$pin=$_POST['pin'];
		$sql="insert into tbl_area(area,pincode)values('$aname','$pin')";
        mysqli_query($con,$sql);
        echo"inserted";
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
    <?php
        include_once("include/up_link.php");
    ?>
    <title>Add Area</title>
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
                        <h1>Add Area</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Area</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

          
    
<div class="container">

<div class='col-md-8'>
  <h2>Add Area</h2><hr style="border: 2px solid #0086AD;">
  <form method='post'>
    <div class="form-group">
      <label><b>Area Name:</b></label>
      <input type="text" class="form-control" id="txta" placeholder="Enter Area" name="txtan">
    </div>
    <div class="form-group">
      <label><b>Pincode:</b></label></label>
      <input type="text" class="form-control" id="pno" placeholder="Enter Area Pincode" name="pin">
    </div>
    
    <button type="submit" name="btns" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>       
</body>
</html>