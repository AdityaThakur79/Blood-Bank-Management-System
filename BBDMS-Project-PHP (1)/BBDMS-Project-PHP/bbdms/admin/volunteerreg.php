<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

 ?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>BBDMS | Volunteer Registeration </title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

	
					<div class="col-md-12">



<h3> Volunteer Registered</h3>
<hr />
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Volunteers</div>
							<a href="download-volunteer.php" style="font-size:16px;margin-left:20px;margin-top:20px;" class="btn btn-info">Download Volunteer List</a>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
							<div class="panel-body">
							
								<table border="1" class="table table-responsive">
                                    <thead>
                                         <tr>
                                         	<th>V_ID</th>
                                          <th>Name of Volunteer</th>
                                          <th>Email Id</th>
                                          <th>Conatact Number</th>
                                          <th>City</th>
                                          <th>District</th>
                                          <th>Apply Date</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                       
                                        <tr><?php
                                          
$sql="SELECT tblvolunteer.v_id,tblvolunteer.name,tblvolunteer.EmailId,tblvolunteer.ContactNumber,tblvolunteer.City,tblvolunteer.District,tblvolunteer.PostingDate from tblvolunteer";
 

$query = $dbh -> prepare($sql);
// $query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                            <td><?php echo htmlentities($row->v_id);?></td>
                                            <td><?php  echo htmlentities($row->name);?></td>
                                            <td><?php  echo htmlentities($row->EmailId);?></td>
                                        <td><?php  echo htmlentities($row->ContactNumber);?></td>
                                             
                                          <td><?php  echo htmlentities($row->City);?></td>
                                          <td><?php  echo htmlentities($row->District);?></td>
                                          
                     
              
                               
                                            <td>
                                              <?php  echo htmlentities($row->PostingDate);?>  
                                            </td>
                                        </tr>
                                    <?php $cnt=$cnt+1;}}?>
                            
                             
                                    </tbody>
                                </table>

						

							</div>
						</div>

					

					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php }?>
