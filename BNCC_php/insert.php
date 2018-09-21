
<?php
	
	$conn=oci_connect("BNCC","bncc","localhost/xe");
	if(!$conn)
	{
		$e=oci_error();
		trigger_error(htmlentities($e['message'],ENT_QUOTES),E_USER_ERROR);
	}

	
class INSERT 
{
	private $conn= '';
	private $statement = '';

	public function __construct(){
		$this->conn=oci_connect("BNCC","bncc","localhost/xe");
	if(!$this->conn)
	{
		$e=oci_error();
		trigger_error(htmlentities($e['message'],ENT_QUOTES),E_USER_ERROR);
	}
	}
	
	
	public function personal_details($data) 
	{
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
		
		

		$query = "INSERT INTO Personal_Details VALUES('"$Name"','"$NID_or_Birth_Reg_No"','"$Mobile_NO"','"$Nationality"','"$Gender"','"$Email"','"$Religion"',addr('"$Village"','"$Post_Office"','"$Police_Station"','"$House_No"','"$District"','"$Division"'), to_date('"$dob"','dd-mmm-yyyy')) ";
	
			
			
				
		$this->statement=oci_parse($this->conn,$query);
		$r =oci_execute($this->statement);
		if($r)
		{
			$msg="Done";
			return $msg;
		} 
		else 
		{
			$msg = "fail";
			return $msg;
		}
		
			
			
		
	}
}
?>