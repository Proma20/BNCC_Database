<?php
	ob_start();
	
	include_once '../library/Database.php';
	require '../bncc.php';
	
	
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['application'])){
		$GName = $_POST['G_NAME'];
		$GNID =   $_POST['G_NID'];
		$GNO = $_POST['G_CONTACT_NO'];
		$GRel =  $_POST['G_RELATION'];
		$FName =  $_POST['F_NAME'];
		$FNo= $_POST['F_CONTACT_NO'];
		$MName = $_POST['M_NAME'];
		$MNo = $_POST['M_CONTACT_NO'];
		
		$Village =  $_POST['Village'];
		$Post_Office=   $_POST['Post_Office'];
		$Police_Station = $_POST['Police_Station'];
		$House_No=   $_POST['House_No'];
		$Dist=  $_POST['District'];
		$Div =  $_POST['Division'];
		
		$query=oci_parse($conn, "INSERT INTO GUARDIAN(G_ADDRESS ,G_NAME,G_NID ,G_CONTACT_NO,G_RELATION, F_NAME , F_CONTACT_NO,M_NAME ,M_CONTACT_NO ) VALUES(addr('$Village','$Post_Office','$Police_Station','$House_No','$Dist','$Div'),'$GName','$GNID','$GNO','$GRel','$FName','$FNo','$MName','$MNo')");
		$r =oci_execute($query);
			
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GUARDIAN</title>
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../css/bootstrap-grid.css" type="text/css" />
	<link rel="stylesheet" href="../css/bootstrap-reboot.css" type="text/css" />
</head>
<body>
<div class="container-fluid" style="width: 90%;">
<div class="row" style="background-color: green;">
	<div class="col-lg-2">
		<img class="navbar-brand logotext" src="../images/bncc-logo2.png"/>
	</div>
	<div class="col-lg-8">
		
		<p style="font-size: 180%;">welcome to Bangladesh National Cadet corps.</p>
		
	</div>
	<div class="col-lg-2">
		<img src="../images/flag.gif" />
	</div>
</div>


<div class="row">
<div class="form-control centre">
	<h2 class="text-center " >Fillup your Guardian details</h2> <br>
	<br> 
	<form class="form-horizontal" method="post" action="">
	<table style="width: 80%">
			<tr>
				<th>Guardian Name :</th>
				<td><input class="form-control" type="text" name="G_NAME"> <br></td>
			</tr>
			
			<tr>
				<th>Guardian NID : </th>
				<td><input class="form-control" type="text" name="G_NID"> <br></td>
			</tr>
			<tr>
				<th>Guardian Contact No. :</th>
				<td><input class="form-control" type="text" name="G_CONTACT_NO"> <br></td>
			</tr>
			<tr>
				<th>House No.: </th>
				<td><input class="form-control" type="text" name="House_No"> <br></td>
			</tr>
			<tr>
				<th>Village/Area: *</th>
				<td><input class="form-control" type="text" name="Village"> <br></td>
			</tr>
			<tr>
				<th>Post Office: *</th>
				<td><input class="form-control" type="text" name="Post_Office"> <br></td>
			</tr>
			<tr>
				<th>Police Station: *</th>
				<td><input class="form-control" type="text" name="Police_Station"> <br></td>
			</tr>
			
			<tr>
				<th>District: *</th>
				<td><input class="form-control" type="text" name="District"> <br></td>
			</tr>
			<tr>
				<th>Division: *</th>
				<td>
					<select class="form-control" name="Division" >
						<option disabled selected value>Select one</option>
						<option value="Dhaka">Dhaka</option>
						<option value="Rajshahi">Rajshahi</option>
						<option value="Chittagong">Chittagong</option>
						<option value="Khulna">Khulna</option>
						<option value="Mymensing">Mymensing</option>
						<option value="Barishal">Barishal</option>
						<option value="Rangpur">Rangpur</option>
						<option value="Sylhet">Sylhet</option>
					</select>
				<br></td>
			</tr>
			<tr>
				<th>Relation With Guardian : </th>
				<td><input class="form-control" type="text" name="G_RELATION"> <br></td>
			</tr>
			<tr>
				<th>Father's Name :</th>
				<td><input class="form-control" type="text" name="F_NAME"> <br></td>
			</tr>
			<tr>
				<th>Father's Contact No. : </th>
				<td><input class="form-control" type="text" name="F_CONTACT_NO"> <br></td>
			</tr>
			<tr>
				<th>Mother's Name :</th>
				<td><input class="form-control" type="text" name="M_NAME"> <br></td>
			</tr>
			<tr>
				<th>Mother's Contact No. : </th>
				<td><input class="form-control" type="text" name="M_CONTACT_NO"> <br></td>
			</tr>
			<tr><th></th><td><button class="form-control btn btn-primary" type="submit" name="application">SUBMIT</button></tr>
	</table>
	</form>
	</div>
</div>

</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>