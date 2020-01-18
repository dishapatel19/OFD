<?php
		 include('../connection.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>View Employee</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
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
                        <h1>List of Employees</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">List of Employees</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

        <div class="container">

			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>E-mail</th>
                        <th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql="select * from tbl_systemuser where role_id='2'";
						$query=mysqli_query($con,$sql);
						$i=1;
						while($row=mysqli_fetch_assoc($query))
						{
							$id=$row['user_id'];
						?>
						<tr>
							<td><?php echo $i++;?></td>
                            <td><?php echo $row['fname'];?></td>
							<td><?php echo $row['email'];?></td>
							<td><?php if($row['status']==0) echo "<span class='badge badge-danger'>Not Avalible</span>"; else echo "<span class='badge badge-success'>Avalible</span>"; ?></td>

							<td>
								<a class="btn btn-success" href="viewemp.php?id=<?php echo $id;?>">
									<i class="fa fa-plus"></i>
								</a>
					
							</td>
						</tr>
						<?php
						}//end while loop
					?>
				</tbody>
			</table>
		</div>  
           


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

		
	
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