<?php
	ob_start();
	include_once 'library/Database.php';
	include_once 'library/Session.php';
	include_once 'connection.php';
	//include_once 'class/all.php';
	//include_once 'class/insert.php';
	//$cls = new All ();
	//$cls = new INSERT();
	$conn=oci_connect("BNCC","bncc","localhost/xe");
	if(!$conn)
	{
		$e=oci_error();
		trigger_error(htmlentities($e['message'],ENT_QUOTES),E_USER_ERROR);
	}
	
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['application'])){
		//$data = $_POST;
		//$done = $cls->personal_details($_POST);
		$Namea = $_POST['Name'];
		$NID_or_Birth_Reg_Noa =   $_POST['NID_or_Birth_Reg_No'];
		$Mobile_NOa =  $_POST['Mobile_NO'];
		$Nationalitya = $_POST['Nationality'];
		$Gendera = $_POST['Gender'];
		$Emaila = $_POST['Email'];
		$Religiona =  $_POST['Religion'];
		$Villagea =  $_POST['Village'];
		$Post_Officea =   $_POST['Post_Office'];
		$Police_Stationa = $_POST['Police_Station'];
		$House_Noa =   $_POST['House_No'];
		$Districta =  $_POST['District'];
		$Divisiona =  $_POST['Division'];
		$doba=   $_POST['DOB'];
	$query ="INSERT INTO Personal_Details VALUES ($Namea,to_number($NID_or_Birth_Reg_Noa),$Nationalitya,$Gendera,$Emaila,$Religiona,addr($Villagea,$Post_Officea,$Police_Stationa,$House_Noa,$Districta,$Divisiona), to_date($doba,'DD-MMM-YYYY'))";
			
		$connected_query=oci_parse($conn, $query );
		$r =oci_execute($connected_query);
				if($r)
				{
				$done="Done";
					} else {
						$done = "fail";
					}
				
		
			
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BNCC DATABASE</title>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap-grid.css" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap-reboot.css" type="text/css" />
</head>
<body>
<div class="container-fluid" style="width: 90%;">
<div class="row" style="background-color: green;">
	<div class="col-lg-2">
		<img class="navbar-brand logotext" src="images/bncc-logo2.png"/>
	</div>
	<div class="col-lg-8">
		
		<p style="font-size: 180%;">welcome to Bangladesh National Cadet corps.</p>
		
	</div>
	<div class="col-lg-2">
		<img src="images/flag.gif" />
	</div>
</div>
<?php
	if(isset($done) && $done = "Done"){
?>
 <p> Data inserted successfully <button type="button" class="btn btn-success"><a href="guardian.php">Go to next Page</a></button> </p>
<?php
	}
	else {
?>
<p> Data not inserted!!! </p>
<?php
	}
?>
<div class="row">
<div class="form-control centre">
	<h2 class="text-center " >Fillup your details</h2> <br>
	<br> 
	<form class="form-horizontal" method="post" action="">
	<table style="width: 80%">
	<tr>
				<th>User Name: *</th>
				<td><input class="form-control" type="text" name="UserName"> <br></td>
			</tr>
			<tr>
				<th>PASSWORD: *</th>
				<td><input class="form-control" type="text" name="Password"> <br></td>
			</tr>
			<tr>
				<th>Name: *</th>
				<td><input class="form-control" type="text" name="Name"> <br></td>
			</tr>
			<tr>
				<th>National ID or Birth Certificate No: *</th>
				<td><input class="form-control" type="text" name="NID_or_Birth_Reg_No"> <br></td>
			</tr>
			<tr>
				<th>Mobile No: </th>
				<td><input class="form-control" type="text" name="Mobile_NO"> <br></td>
			</tr>
			<tr>
				<th>Nationality: *</th>
				<td><input class="form-control" type="text" name="Nationality"> <br></td>
			</tr>
			<tr>
				<th>Gender: *</th>
				<td>
					<select class="form-control" name="Gender" >
						<option disabled selected value>Select one</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				<br></td>
			</tr>
			<tr>
				<th>Email: </th>
				<td><input class="form-control" type="email" name="Email"> <br></td>
			</tr>
			<tr>
				<th>Religion: *</th>
				<td><input class="form-control" type="text" name="Religion"> <br></td>
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
					<select class="form-control" name="Gender" >
						<option disabled selected value>Select one</option>
						<option value="Male">Dhaka</option>
						<option value="Female">Rajshahi</option>
						<option value="Male">Chittagong</option>
						<option value="Female">Khulna</option>
						<option value="Male">Mymensing</option>
						<option value="Female">Barishal</option>
						<option value="Male">Rangpur</option>
						<option value="Female">Sylhet</option>
					</select>
				<br></td>
			</tr>
			
			<tr>
				<th>Date of Birth: *</th>
				<td><input class="form-control" type="date" name="DOB"> <br></td>
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