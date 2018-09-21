<?php
	ob_start();
	include_once 'library/Database.php';
	include_once 'library/Session.php';
	include_once 'class/all.php';
	$cls = new All ();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['application'])){
		$data = $_POST;
		$done = $cls->account($data);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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
 <p> Data inserted successfully <button type="button" class="btn btn-success"><a href="dashboard.php">Go back to privious page</a></button> </p>
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
				<th>Account Number: </th>
				<td><input class="form-control" type="text" name="ACCOUNT_NUM"> <br></td>
			</tr>
			<tr>
				<th>Account Type:</th>
				<td><input class="form-control" type="text" name="ACCOUNT_TYPE"> <br></td>
			</tr>
			<tr>
				<th>Account Office: </th>
				<td><input class="form-control" type="text" name="ACCOUNT_OFFICE"> <br></td>
			</tr>
			<tr>
				<th>Account Purpose: </th>
				<td><input class="form-control" type="text" name="ACCOUNT_PURPOSE"> <br></td>
			</tr>
			<tr>
				<th>Account In Amount: </th>
				<td><input class="form-control" type="text" name="ACCOUNT_IN_AMOUNT"> <br></td>
			</tr>
			<tr>
				<th>Account Out Amount: </th>
				<td><input class="form-control" type="text" name="ACCOUNT_OUT_AMOUNT"> <br></td>
			</tr>
			<tr>
				<th>Account Source: </th>
				<td><input class="form-control" type="text" name="ACCOUNT_SOURCE"> <br></td>
			</tr>
			<tr>
				<th>Account Dest. Account: </th>
				<td><input class="form-control" type="text" name="ACCOUNT_DEST_ACC"> <br></td>
			</tr>
			<tr>
				<th>Post Office: </th>
				<td><input class="form-control" type="text" name="BALANCE"> <br></td>
			</tr>
			<tr>
				<th>Account Dot: </th>
				<td><input class="form-control" type="text" name="ACCOUNT_DOT"> <br></td>
			</tr>
			<tr>
				<th>Account Details: </th>
				<td><input class="form-control" type="text" name="ACCOUNT_DETAILS"> <br></td>
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