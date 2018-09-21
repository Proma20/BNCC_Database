<?php
	include_once 'header.php';
	require 'bncc.php';
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['application'])){
		
		$UName = $_POST['UserName'];
		$Pass =   $_POST['Password'];
		$stid = oci_parse($conn, "select USER_NAME, PASSWORD,USER_TYPE from users where USER_NAME = '$UName'");
		$r=oci_execute($stid);
		if($r)
		{
			if(($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
				if($row[1] == $Pass){
					if($row[2]=='cadet')
						header('location:cadet/cadet.php');
					else if ($row[2]=='admin')
					    header('location:admin/admin.php');
					else if ($row[2]=='pc')
						header('location:pc/pc.php');
				}
				else {
					$m = "Username or pass not match";
					
				}
			}
			else{
				 $m = "Username or pass not match";
			}
		}
		
		oci_free_statement($stid);
	}
	


				
?>

<div class="row">
<div class="form-control centre">
	<h2 class="text-center " >LOGIN FOR DATABASE</h2> <br>
	<br> 
	<?php if (isset($m)) {echo $m;} ?>
	<form class="form-horizontal" method="post" action="">
	<table style="width: 80%">
	<tr>
				<th>User Name: </th>
				<td><input class="form-control" data-val="true" data-val-required="The User Name is required." placeholder="User Name"type="text" name="UserName"> <br></td>
			</tr>
			<tr>
				<th>Password: </th>
				<td><input class="form-control" data-val="true" data-val-required="The Password field is required." placeholder="Password" type="password" name="Password"> <br></td>
			</tr>
			
			
			<tr><th></th><td><button class="form-control btn btn-success" type="submit" name="application"><b>LOGIN</b></button></tr>
			<tr><th><br></th></tr>
			<tr><th></th><td><button class="form-control btn btn-primary" type="button" ><a href="register/apply.php" style="color: #F2E823;"><b>REGISTER</b></a></button></tr>
			
	</table>
	</form>
	</div>
</div>

</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>