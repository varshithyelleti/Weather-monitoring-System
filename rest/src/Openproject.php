<?php
  $project_name=$_POST['projectname'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $con_var=true;
  $dbname=$project_name;
  $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) 
    {
        $con_var=false;
    }
    if($con_var==true)
    {
        
        $sql = " SHOW TABLES FROM project-4 ";
        $result = mysqli_query($conn,$sql);

        if (!$result) {
            echo "DB Error, could not list tables\n";    
        }
        else
        {
           while ($row = mysql_fetch_row($result)) 
           {
                echo "Table: {$row[0]}\n";
           } 
        }
        
        mysqli_close($conn);
    }
    else
    {
        echo "404 Error in connection";echo "<br>";
        mysqli_close($conn);
    }
    ?>