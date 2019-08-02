<?php
  $project_name=$_POST['projectname'];
  $filename=$_POST['filename'];
  $date=$_POST['date'];
  $time=date("h:i:sa");
  $con_var=true;
  $query_var1=null;
  $query_var2=null;
  $servername = "localhost";
  $username = "root";
  $password = "";
    $dbase1="temporary";
    $dbase2="projectfiles";
    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) 
    {
       $conn=false;
    }

    $sql1 = "CREATE DATABASE `$project_name`";
    $sql2 = "CREATE TABLE `$project_name`.`$filename` ( `S.NO` INT NULL AUTO_INCREMENT , `DATE-TIME` DATETIME NULL , `HUMIDITY` DOUBLE NOT NULL , `TEMPERATURE` DOUBLE NOT NULL , `RAINFALL` DOUBLE NOT NULL , `PRESSURE` DOUBLE NOT NULL , PRIMARY KEY (`S.NO`)) ENGINE = InnoDB;";

    $conn1 = mysqli_connect($servername, $username, $password,$dbase1);
    $sql3 = "INSERT INTO `tempdetails`(`S.NO`, `PROJECTNAME`, `FILENAME`, `DATE`) VALUES(NULL,'$project_name','$filename','$date')";
    mysqli_query($conn1, $sql3);
    mysqli_close($conn1);

    $conn2 = mysqli_connect($servername, $username, $password,$dbase2);
    $sql4 = "INSERT INTO `projectnames`(`S.NO`, `DATE`, `PROJECTNAME`) VALUES (NULL,'$date','$project_name')";
    mysqli_query($conn2, $sql4);
    mysqli_close($conn2);

    if (mysqli_query($conn, $sql1)) 
      {
        $query_var1=true;
      }
    else 
      {
       $query_var1=false;
      }
    if (mysqli_query($conn, $sql2)) 
      {
        $query_var2=true;
      }
    else 
      {
       $query_var2=false;
      }

    mysqli_close($conn);

    if($con_var==true)
    {
        if($query_var1==true and $query_var2==true)
        {
            
echo'<div style=" border-radius:10px;background-color:lightcyan; height:125px;">';
   echo '<div style="margin-left:10px;">';         
echo '<p style="padding:2px;font-family: Arial, Helvetica, sans-serif;">'.'<b>'." Project Name    : ".'</b>'.$project_name.'</p>';
echo '<p style="padding:2px;font-family: Arial, Helvetica, sans-serif;">'.'<b>'."   File Name     : ".'</b>'.$filename.'</p>';
echo '<p style="padding:2px;font-family: Arial, Helvetica, sans-serif;">'.'<b>'."Time of Creation : ".'</b>'.$time.'</p>';
echo '</div>';
            echo '</div>';
            
        }
        else
        {
           echo "Error in Creating New Project " ;
        }
    }
    else
    {
        echo "Error in Creating New Project " ;  
    }

?>