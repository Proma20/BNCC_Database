<?php
	ob_start();
	
	include_once '../library/Database.php';
	require '../bncc.php';
	
	
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['application'])){
		$UName = $_POST['UserName'];
		$Pass =   $_POST['Password'];
		$Name = $_POST['Name'];
		$NID =  $_POST['NID_or_Birth_Reg_No'];
		$Mobile_NO =  $_POST['Mobile_NO'];
		$Nation= $_POST['Nationality'];
		$Gender = $_POST['Gender'];
		$Email = $_POST['Email'];
		$Religion =  $_POST['Religion'];
		$Village =  $_POST['Village'];
		$Post_Office=   $_POST['Post_Office'];
		$Police_Station = $_POST['Police_Station'];
		$House_No=   $_POST['House_No'];
		$Dist=  $_POST['District'];
		$Div =  $_POST['Division'];
		$dob=   $_POST['DOB'];
		
	
			
		$query=oci_parse($conn, "insert into personal_details(NAME,NID_OR_BIRTH_REG_NO,NATIONALITY,GENDER,EMAIL,RELIGION,ADDRESS,DOB) 
		values ('$Name','$NID','$Nation','$Gender','$Email','$Religion',
		addr('$Village','$Post_Office','$Police_Station','$House_No','$Dist','$Div'),
		to_date('$dob','yyyy-mm-dd'))" );
		$r =oci_execute($query);
		
		
			
	}
?>
<!DOCTYPE html>
<html lang="en">
<head><title>BNCC Database Login</title></head>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
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
		<p style="font-size:36px;""color:blue;"><b>welcome to Bangladesh National Cadet corps</b></p>
	</div>
	
	<div class="col-lg-2">
		<img src="../images/flag.gif"style="height:125px;" />
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
				<td><input class="form-control" type="password" name="Password"> <br></td>
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
				<th>Date of Birth: *</th>
				<td><input class="form-control" type="date" name="DOB"> <br></td>
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