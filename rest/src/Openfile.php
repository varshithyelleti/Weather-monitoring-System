 <?php
            $project_name=$_POST['projectname'];
              $filename=$_POST['filename'];
              $con_var=true;
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname=$project_name;
            $conn = mysqli_connect($servername, $username, $password, $dbname);
                if (!$conn) 
                {
                    $con_var=false;
                }
        $sql1 = "SELECT `S.NO`, `DATE-TIME`, `HUMIDITY`, `TEMPERATURE`, `RAINFALL`, `PRESSURE` FROM `$filename`";
        echo'<div style="background-color:white; height:125px;">';
        echo '<b style="background-color:green; height:50px;">SuccessFully Created New File: </b>';
        echo '<p>ProjectName : '.$project_name.'</p>';
        echo '<p>FileName    : '.$filename.'</p>';
        echo '<p>Time        : '.$time.'</p>';
        echo '</div>';
        $userObj=mysqli_query($conn, $sql1)
          while($row  = mysqli_fetch_array($userObj)){ ?>
              <tr>
                <td><?php  echo $row['S.NO'] ?></td>
                <td><?php  echo $row['DATE-TIME'] ?></td>
                <td><?php  echo $row['HUMIDITY'] ?></td>
                <td><?php  echo $row['TEMPERATURE'] ?></td>
                <td><?php  echo $row['RAINFALL'] ?></td>
                <td><?php  echo $row['PRESSURE'] ?></td>
              </tr>
                <br>
           <?php } 
        mysqli_close($conn);
    ?>




  
   
 
  
 