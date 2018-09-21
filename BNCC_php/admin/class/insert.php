
<?php
$filepath = realpath(dirname(__FILE__));
	
	$conn=oci_connect("BNCC","bncc","localhost/xe");
	if(!$conn)
	{
		$e=oci_error();
		trigger_error(htmlentities($e['message'],ENT_QUOTES),E_USER_ERROR);
	}

	
class insert {
	private $db;
	private $fm;
	
	public function __construct(){
		$this->db = new Database();
		
	}
	
	public function personal_details($data) {
		$Name =  $data['Name'];
		$NID_or_Birth_Reg_No =   $data['NID_or_Birth_Reg_No'];
		$Mobile_NO =   $data['Mobile_NO'];
		$Nationality =  $data['Nationality'];
		$Gender = $data['Gender'];
		$Email =  $data['Email'];
		$Religion =  $data['Religion'];
		$Village =  $data['Village'];
		$Post_Office =   $data['Post_Office'];
		$Police_Station = $data['Police_Station'];
		$House_No =   $data['House_No'];
		$District =  $data['District'];
		$Division =   $data['Division'];
		$dob=   $data['DOB'];
		
		

		$query = "INSERT INTO Personal_Details VALUES('$Name',to_number('$NID_or_Birth_Reg_No'), '$Mobile_NO','$Nationality','$Gender','$Email','$Religion',addr('$Village','$Post_Office','$Police_Station','$House_No','$District','$Division') )";
	
			$a=$_POST['$query'];
			if($_SERVER["REQUEST_METHOD"]== "POST" && empty($a!=true))
			{
				
				$connected_query=oci_parse($conn,$a);
				$r =oci_execute($connected_query);
				if($r)
				{
				echo "</br>";
				print "Query Executed";
				$msg="Done";
							return $msg;
					} else {
						$msg = "fail";
						return $msg;
					}
				
			}
		
	}
}
	?>