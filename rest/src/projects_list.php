<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
$connection  = mysqli_connect( $servername,$username,$password , 'projectfiles'); 

if(isset($_POST['data'])){
	$dataArr = $_POST['data'] ; 

	foreach($dataArr as $id)
    {
		mysqli_query($connection , "DELETE FROM `projectnames` WHERE `projectnames`.`PROJECTNAME` = '$id'");
	}
    
    $conn  = mysqli_connect( $servername,$username,$password);
    foreach($dataArr as $id)
    {
		mysqli_query($conn , "DROP DATABASE `$id`");
        
	}
    
    mysqli_close($conn);
	echo 'record deleted successfully';
}
              
/*SELECT TABLE_NAME FROM information_schema.tables WHERE table_schema ='project-95';*/
/*"DELETE FROM `projectnames` WHERE `projectnames`.`S.NO` = 29"*/

?>