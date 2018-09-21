<html>

<body>
    <?php 
	//session_start();
    $conn=oci_connect("BNCC","bncc","localhost/xe");
    if(!$conn)
	{
		$e=oci_error();
		trigger_error(htmlentities($e['message'],ENT_QUOTES),E_USER_ERROR);
	}

?>
 
</body>
</html>