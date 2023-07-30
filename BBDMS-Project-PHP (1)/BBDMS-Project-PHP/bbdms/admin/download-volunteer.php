<?php 
session_start();
//error_reporting(0);
session_regenerate_id(true);
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
	{	
	header("Location: index.php"); //
	}
	else{?>
<table border="1">
									<thead>
										<tr>
										<th>#</th>
											<th>Name</th>
											<th>Email Id</th>
											<th>Contact Number</th>
											<th>Gender</th>
											<th>City</th>
											<th>DIstrict </th>
											<th>posting date </th>
										</tr>
									</thead>

<?php 
$filename="Volunteer list";
$sql = "SELECT * from  tblvolunteer ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				

echo '  
<tr>  
<td>'.$cnt.'</td> 
<td>'.$complainNumber= $result->name.'</td> 
<td>'.	$MobileNumber= $result->ContactNumber.'</td> 
<td>'.$EmailId= $result->ContactNumber.'</td> 
<td>'.$Gender= $result->Gender.'</td> 
<td>'.$City= $result->City.'</td> 
 <td>'.$District=$result->District.'</td>		
  <td>'.$PostingDate=$result->PostingDate.'</td>	 					
</tr>  
';
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename."-report.xls");
header("Pragma: no-cache");
header("Expires: 0");
			$cnt++;
			}
	}
?>
</table>
<?php } ?>