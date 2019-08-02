
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
$dbase=$_POST['value1'];
  $connection  = mysqli_connect( $servername,$username,$password); 
$result=mysqli_query($connection ,  "SELECT TABLE_NAME FROM information_schema.tables WHERE table_schema ='$dbase'");
     echo "enter int eg file"  ;
     $count=1;
        while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>";
                echo $count;
                echo "</td>";
                  echo "enter int eg file"  ;  
                echo "<td>";
                echo $row['TABLE_NAME'];
                echo "</td>";
                $count+=1;
          }
   
           
/*SELECT TABLE_NAME FROM information_schema.tables WHERE table_schema ='project-95';*/
/*"DELETE FROM `projectnames` WHERE `projectnames`.`S.NO` = 29"*/

?>