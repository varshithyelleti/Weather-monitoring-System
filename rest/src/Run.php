<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbase1="temporary";

    $h_high=$_POST['humidity_max'];
    $h_low=$_POST['humidity_min'];
    $t_high=$_POST['temperature_max'];
    $t_low=$_POST['temperature_min'];
    $r_high=$_POST['rainfall_max'];
    $r_low=$_POST['rainfall_min'];
    $p_high=$_POST['pressure_max'];
    $p_low=$_POST['pressure_min'];
     
    $conn1 = mysqli_connect($servername, $username, $password,$dbase1);
    $sql1 = "SELECT * FROM `tempdetails` WHERE `S.NO`=(SELECT max(`S.NO`) FROM `tempdetails`);";
    $result=mysqli_query($conn1, $sql1);
    $temp_row=mysqli_fetch_array($result);
    $project_name=$temp_row['PROJECTNAME'];
    $filename=$temp_row['FILENAME'];
    $date=$temp_row['DATE'];
    mysqli_close($conn1);
    $myfile =fopen("data.txt","r");
 $conn2 = mysqli_connect($servername, $username, $password,$project_name);
$t1=false;
$t2=false;
$t3=false;
$t4=false;
    while(!feof($myfile))
    {
           
        $line=fgets($myfile);
        if($line==NULL)
        {
            break;
        }
            $x = preg_split("/[\s,]+/", $line);
            $time=date("h:i:sa");
            $main=$time;
            $sql2 = "INSERT INTO `$filename`(`S.NO`, `DATE-TIME`, `HUMIDITY`, `TEMPERATURE`, `RAINFALL`, `PRESSURE`) VALUES (NULL,'$main','$x[0]','$x[1]','$x[2]','$x[3]')";
            $result=mysqli_query($conn2, $sql2);
     echo '<table >' ; 
        echo '<tbody>';
        echo '<tr >';  
        
        echo '<td  class="table-success" style="width:20%;">';
            echo '<p>'.$main.'</p>';
        echo '</td>';
        
        if($x[0]>$h_high or $x[0]<$h_low)
        {
            echo '<td class="table-danger" style="width:20%;">';
            echo '<p>'.$x[0].'</p>';
            echo '</td>';
            $t1=true;
        }
        elseif($x[0]<=$h_high and  $x[0]>=$h_low)
        {
            echo '<td class="table-success" style="width:20%;">';
            echo '<p>'.$x[0].'</p>';
            echo '</td>';
        }
        
        
        if($x[1]>$t_high or $x[1]<$t_low)
        {
            echo '<td class="table-danger" style="width:20%;">';
            echo '<p>'.$x[1].'</p>';
            echo '</td>';
            $t2=true;
        }
        elseif($x[1]<=$t_high and  $x[1]>=$t_low)
        {
            echo '<td class="table-success" style="width:20%;" >';
            echo '<p>'.$x[1].'</p>';
            echo '</td>';
        }
        
         if($x[2]>$r_high or $x[2]<$r_low)
         {
             echo '<td class="table-danger" style="width:20%;">';
             echo '<p>'.$x[2].'</p>';
             echo '</td>';
             $t3=true;
         }
        elseif($x[2]<=$r_high and  $x[2]>=$r_low)
        {
            echo '<td class="table-success" style="width:20%;" >';
            echo '<p>'.$x[2].'</p>';
            echo '</td>';
        }
        
        
         if($x[3]>$p_high or $x[3]<$p_low)
         {
            echo '<td class="table-danger" style="width:20%;">';
            echo '<p>'.$x[3].'</p>';
            echo '</td>';
            $t4=true;
         }
        elseif($x[3]<=$p_high and  $x[3]>=$p_low)
        {
            echo '<td class="table-success"  style="width:20%;">';
            echo '<p>'.$x[3].'</p>';
            echo '</td>';
        }
      sleep(1);
        echo '</tr>';
         echo '</tbody>';
        echo '</table>';
if($t1==true and $t2==true and $t3==true and $t4==true)
{
    echo "<script type='text/javascript'>
                var nodemailer = require('nodemailer');

                var transporter = nodemailer.createTransport({
                  service: 'gmail',
                  auth: {
                    user: 'varshith17291@gmail.com',
                    pass: 'cosmoseye9271'
                  }
                });

                var mailOptions = {
                  from: 'varshith17291@gmail.com',
                  to: 'varshith17291@gmail.com',
                  subject: 'Sending Email using Node.js',
                  text: 'That was easy!'
                };

                transporter.sendMail(mailOptions, function(error, info){
                  if (error) {
                    console.log(error);
                  } else {
                    console.log('Email sent: ' + info.response);
                  }
                });
            </script>";
    $t1=false;
    $t2=false;
    $t3=false;
    $t4=false;
    
}
   else
   {
       $t1=false;
       $t2=false;
       $t3=false;
       $t4=false; 
   }
    }
mysqli_close($conn2);
    fclose($myfile);

?>