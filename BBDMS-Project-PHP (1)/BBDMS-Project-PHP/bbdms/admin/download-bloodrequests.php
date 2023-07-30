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
											<th>Name Of Donar</th>
											<th>Email Id</th>
											<th>Contact Number Of Donar</th>
											<th>Name Of The Requirer</th>
											<th>Email Of The Requirer</th>
											<th>Blood Require For </th>
											<th>Message For Requirer </th>
											<th>posting date </th>
										</tr>
									</thead>

<?php 
$filename="Blood Request Received list";
$sql="SELECT tblbloodrequirer.BloodDonarID,tblbloodrequirer.name,tblbloodrequirer.EmailId,tblbloodrequirer.ContactNumber,tblbloodrequirer.BloodRequirefor,tblbloodrequirer.Message,tblbloodrequirer.ApplyDate,tblblooddonars.id as donid,tblblooddonars.FullName,tblblooddonars.MobileNumber from  tblbloodrequirer join tblblooddonars on tblblooddonars.id=tblbloodrequirer.BloodDonarID where tblblooddonars.FullName like '%$sdata%' || tblblooddonars.MobileNumber like '%$sdata%'";
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
<td>'.$complainNumber= $result->FullName.'</td> 
<td>'.$EmailId= $result->EmailId.'</td> 
<td>'.	$MobileNumber= $result->MobileNumber.'</td> 
<td>'.	$NameofRequirer= $result->name.'</td> 
<td>'.	$emailofRequirer= $result->EmailId.'</td> 
<td>'.	$BloodRequireFor= $result->BloodRequirefor.'</td> 
<td>'.	$Message= $result->Message.'</td> 
 	
<td>'.$BloodGroup=$result->PostingDate.'</td>	  					
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