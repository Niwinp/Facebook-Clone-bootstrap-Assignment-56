<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $pst = $_POST['postname'];
	 
	 
	 $sql = "INSERT INTO `fbposts`(`fbpost`) VALUES ('$pst')";
	 if (mysqli_query($conn, $sql)) {
		echo file_get_contents("http://localhost/fbassnphpdb/home.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>