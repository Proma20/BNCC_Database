

<?php
	Class Database{
	
	 
	 public $link;
	 public $error;
	 
	 public function __construct(){
	  $this->connectDB();
	 }
	 
	private function connectDB(){
	 $link = oci_connect("Shams008","rony7600","localhost/xe");
	 if(!$link){
	   $this->error ="Connection fail".$link->connect_error;
	  return false;
	 }
	 }
	 
	// Select or Read data
	public function select($query){
	  $result = $this->link->query($query) or
	   die($this->link->error.__LINE__);
	  if($result->num_rows > 0){
		return $result;
	  } else {
		return false;
	  }
	 }
	 
	// Insert data
	public function insert($query){
	 /*$insert_row = $this->link->query($query) or
	   die($this->link->error.__LINE__);
	 if($insert_row){
	   return $insert_row;
	 } else {
	   return false;
	  }*/
	  $connected_query=oci_parse($link,$query);
				$r =oci_execute($query);
				if($r){
				return $insert_row;
				print "Query Executed";
				 } else {
				   return false;
				 }
							
							
	 }
	 
	// Update data
	 public function update($query){
	 $update_row = $this->link->query($query) or
	   die($this->link->error.__LINE__);
	 if($update_row){
	  return $update_row;
	 } else {
	  return false;
	  }
	 }
	 
	// Delete data
	 public function delete($query){
	 $delete_row = $this->link->query($query) or
	   die($this->link->error.__LINE__);
	 if($delete_row){
	   return $delete_row;
	 } else {
	   return false;
	  }
	 }
	 
	}
?>