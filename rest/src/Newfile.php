<?php
  $project_name=$_POST['projectname'];
  $filename=$_POST['filename'];
  $date=$_POST['date'];
  $time=date("h:i:sa");
  $con_var=true;
  $query_var1=null;
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname=$project_name;
    $dbase1="temporary";
    $conn = mysqli_connect($servername, $username, $password, $dbname);


    $conn1 = mysqli_connect($servername, $username, $password,$dbase1);
    $sql3 = "INSERT INTO `tempdetails`(`S.NO`, `PROJECTNAME`, `FILENAME`, `DATE`) VALUES(NULL,'$project_name','$filename','$date')";
    mysqli_query($conn1, $sql3);
    mysqli_close($conn1);



    if (!$conn) {
        $con_var=false;
    }

    $sql1 = "CREATE TABLE `$project_name`.`$filename` ( `S.NO` INT NULL AUTO_INCREMENT , `DATE-TIME` DATETIME NULL , `HUMIDITY` DOUBLE NOT NULL , `TEMPERATURE` DOUBLE NOT NULL , `RAINFALL` DOUBLE NOT NULL , `PRESSURE` DOUBLE NOT NULL , PRIMARY KEY (`S.NO`)) ENGINE = InnoDB;";
    if (mysqli_query($conn, $sql1)) 
      {
        $query_var1=true;
      }
    else 
      {
       $query_var1=false;
      }
    mysqli_close($conn);

    if($con_var==true)
    {
        if($query_var1==true)
        {
            echo'<div style="background-color:white; height:125px;">';
            echo '<b style="background-color:green; height:50px;">SuccessFully Created New File: </b>';
            echo '<p>ProjectName : '.$project_name.'</p>';
            echo '<p>FileName    : '.$filename.'</p>';
            echo '<p>Time        : '.$time.'</p>';
            echo '</div>';
        }
        else
        {
           echo "1.Error in Creating New File " ;
        }
    }
    else
    {
        echo "2.Error in Creating New File " ;  
    }
?>