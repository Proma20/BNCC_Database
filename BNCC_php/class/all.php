<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../library/Database.php');
	include_once ($filepath.'/../library/Session.php');

?>
<?php
/**
* Adminlogin class
*/
class All {
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
		
		

		$query = "INSERT INTO Personal_Details  
					VALUES('$Name','$NID_or_Birth_Reg_No','$Mobile_NO','$Nationality','$Gender','$Email','$Religion',addr('$Village','$Post_Office','$Police_Station','$House_No','$District','$Division'), to_date($dob,\"dd-mmm-yyyy\") ";
		
		$addinst= $this->db->insert($query);
				if ($addinst) {
							$msg="Done";
							return $msg;
					} else {
						$msg = "fail";
						return $msg;
					}
	}
	public function guardian($data) {
		$G_NAME =  (  $data['G_NAME']);
		$G_ADDRESS =  (  $data['G_ADDRESS']);
		$G_NID =  (  $data['G_NID']);
		$G_CONTACT_NO =  (  $data['G_CONTACT_NO']);
		$G_RELATION =  (  $data['G_RELATION']);
		$F_NAME =  (  $data['F_NAME']);
		$F_CONTACT_NO =  (  $data['F_CONTACT_NO']);
		$M_NAME =  (  $data['M_NAME']);
		$M_CONTACT_NO =  (  $data['M_CONTACT_NO']);

		$query = "INSERT INTO GUARDIAN (G_NAME,G_ADDRESS,G_NID,G_CONTACT_NO,G_RELATION,F_NAME,F_CONTACT_NO,M_NAME,M_CONTACT_NO) 
					VALUES('$G_NAME','$G_ADDRESS','$G_NID','$G_CONTACT_NO','$G_RELATION','$F_NAME','$F_CONTACT_NO','$M_NAME','$M_CONTACT_NO')";
					$addinst= $this->db->insert($query);
				if ($addinst) {
							$msg="Done";
							return $msg;
					} else {
						$msg = "fail";
						return $msg;
					}
	}
	public function educational_info($data) {
		$BNCC_NO =  (  $data['BNCC_NO']);
		$EXAM_NAME =  (  $data['EXAM_NAME']);
		$BOARD =  (  $data['BOARD']);
		$PASSING_YEAR =  (  $data['PASSING_YEAR']);
		$RESULT =  (  $data['RESULT']);
		$query = "INSERT INTO EDUCATIONAL_INFO (BNCC_NO,EXAM_NAME,BOARD,PASSING_YEAR,RESULT) 
					VALUES('$BNCC_NO','$EXAM_NAME','$BOARD','$PASSING_YEAR','$RESULT')";
					$addinst= $this->db->insert($query);
				if ($addinst) {
							$msg="Done";
							return $msg;
					} else {
						$msg = "fail";
						return $msg;
					}
	}
	public function cadet_info($data) {
		$NID_or_Birth_Reg_No =  (  $data['NID_or_Birth_Reg_No']);
		$BNCC_NO =  (  $data['BNCC_NO']);
		$RETIREMENT_DATE =  (  $data['RETIREMENT_DATE']);
		$RANK =  (  $data['RANK']);
		$WING =  (  $data['WING']);
		$F_NAME =  (  $data['ENROLLMENT_DATE']);
		$F_CONTACT_NO =  (  $data['CADET_DIVISION']);

		$query = "INSERT INTO CADET_INFO (NID_or_Birth_Reg_No,BNCC_NO,RETIREMENT_DATE,RANK,WING,ENROLLMENT_DATE,CADET_DIVISION) 
					VALUES('$NID_or_Birth_Reg_No','$BNCC_NO','$RETIREMENT_DATE','$RANK','$WING','$ENROLLMENT_DATE','$CADET_DIVISION')";
					$addinst= $this->db->insert($query);
				if ($addinst) {
							$msg="Done";
							return $msg;
					} else {
						$msg = "fail";
						return $msg;
					}
	}
	public function med_info($data) {
		$form_no =  (  $data['form_no']);
		$blood_grp =  (  $data['blood_grp']);
		$weight =  (  $data['weight']);
		$height =  (  $data['height']);
		$chest_size =  (  $data['chest_size']);
		$eye_sight =  (  $data['eye_sight']);

		$query = "INSERT INTO med_info (form_no,blood_grp,weight,height,chest_size,eye_sight) 
					VALUES('$form_no','$blood_grp','$weight','$height','$chest_size','$eye_sight')";
					$addinst= $this->db->insert($query);
				if ($addinst) {
							$msg="Done";
							return $msg;
					} else {
						$msg = "fail";
						return $msg;
					}
	}
}
?>