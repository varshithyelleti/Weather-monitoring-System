<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
    <link href="css/style.css" rel="stylesheet">
      
     <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 1px 8px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
 
::-webkit-scrollbar 
         {
             width: 1px;
         }
         

/*
::-webkit-scrollbar-track {
    background: #f1f1f1; 
}

::-webkit-scrollbar-thumb {
    background: #888; 
}
::-webkit-scrollbar-thumb:hover {
    background: #555; 
}*/
        
     </style>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
     <script>
         function display_graph()
         {
             window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Company Revenue by Year"
	},
	axisY: {
		title: "Revenue in USD",
		valueFormatString: "#0,,.",
		suffix: "mn",
		prefix: "$"
	},
	data: [{
		type: "spline",
		markerSize: 5,
		xValueFormatString: "YYYY",
		yValueFormatString: "$#,##0.##",
		xValueType: "dateTime",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
 
chart.render();
 return ;
         }

}
</script>
    <script>

           function Newproject()
          {
              var projectname=document.getElementById('projectname').value;
              var filename=document.getElementById('filename').value;
              var date=document.getElementById('date').value;
              
               if((projectname.length> 0 && projectname.length<=250) &&(filename.length>0 &&  filename.length<=250))
                   {
                       if(date!=0) 
                           {      alert("Successfully Created Project");
                                    
                                  var dataString='projectname='+projectname+'&filename='+filename+'&date='+date;
                                  document.getElementById('projectname').value = '';
                                  document.getElementById('filename').value = '';
                                  document.getElementById('date').value = '';

                                  $.ajax({
                                      type:"POST",
                                      url:"Newproject.php",
                                      data: dataString,
                                      cache:false,
                                      success : function(html){
                                         $('#para').html(html)
                                     }    
                                  });
                                   // document.getElementById("para").innerHTML = "Project Name : ";
                                   // document.getElementById("para").innerHTML =  projectname ;
                                 //viewprojects();
                                  return false;
                           }
                        else
                            {
                                alert("Please Enter the Date ");
                            }
                   }
                else
                   {
                      alert("Please Enter the ProjectName and Filename length between (1-250)");
                   }
              
          }
           function Newfile()
          {
              
              var projectname=document.getElementById('projectname').value;
              var filename=document.getElementById('filename').value;
              var date=document.getElementById('date').value;
               if((projectname.length> 0 && projectname.length<=250) &&(filename.length>0 &&  filename.length<=250))
                   {
                       if(date!=0) 
                           {
                                 var dataString='projectname='+projectname+'&filename='+filename+'&date='+date;
                                  document.getElementById('projectname').value = '';
                                  document.getElementById('filename').value = '';
                                  document.getElementById('date').value = '';
                                  $.ajax({
                                      type:"POST",
                                      url:"Newfile.php",
                                      data: dataString,
                                      cache:false,
                                      success : function(html){
                                         $('#para').html(html)
                                     }    
                                  });
                                  return false;
   
                           }
                        else
                            {
                                alert("Please Enter the Date ");
                            }
                   }
                else
                   {
                      alert("Please Enter the ProjectName and Filename length between (1-250)");
              
                     }
          }
           function Openfile()
          { 
              var projectname=document.getElementById('projectname').value;
              var filename=document.getElementById('filename').value;
              var date=document.getElementById('date').value;
               if((projectname.length> 0 && projectname.length<=250) &&(filename.length>0 &&  filename.length<=250))
                   {
                       if(date!=0) 
                           {
                                 var dataString='projectname='+projectname+'&filename='+filename+'&date='+date;
                                  document.getElementById('projectname').value = '';
                                  document.getElementById('filename').value = '';
                                  document.getElementById('date').value = '';
                                  $.ajax({
                                      type:"POST",
                                      url:"Openfile.php",
                                      data: dataString,
                                      cache:false,
                                      success : function(html){
                                         $('#display_blockfile1').html(html)
                                     }    
                                  });
                                  return false;
                           }
                        else
                            {
                                alert("Please Enter the Date ");
                            }
                   }
                else
                   {
                      alert("Please Enter the ProjectName and Filename length between (1-250)");                     
                   }
              
          }
          function Run()
          {
              var humid_min=document.getElementById('humidity_min').value;
              var humid_max=document.getElementById('humidity_max').value;
              
              var temp_min=document.getElementById('temperature_min').value;
              var temp_max=document.getElementById('temperature_max').value;
              
              var rain_min=document.getElementById('rainfall_min').value;
              var rain_max=document.getElementById('rainfall_max').value;
              
              var pre_min=document.getElementById('pressure_min').value;
              var pre_max=document.getElementById('pressure_max').value;
              
              var dataString='humidity_min='+humid_min+'&humidity_max='+humid_max+'&temperature_min='+temp_min+'&temperature_max='+temp_max+'&rainfall_min='+rain_min+'&rainfall_max='+rain_max+'&pressure_min='+pre_min+'&pressure_max='+pre_max;
              $.ajax({
                  type:"POST",
                  url:"Run.php",
                  data: dataString,
                  cache:false,
                  success : function(html){
                     $('#display_blockfile1').html(html)
                 }    
              });
              return false;
          }
          function viewprojects(value1)
          {  
              var project_val=document.getElementById("anchor_link").text;
              var dataString=value1;
                $.ajax({
                        type:"POST",
                        url:"tables_list.php",
                        data: dataString,
                        cache:false,
                        success : function(html){
                        $('#tables_list').html(html)
                        }    
                    });
                return false;
          }
          function graph()
          {
              $.ajax({
                        type:"POST",
                        url:"graph.html",
                        cache:false,
                        success : function(html){
                        $('#graph_block').html(html)
                        }    
                    });
                return false;
          }
                       
    </script>
      
       
  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-3" style="background-color:#223E4A;border-top-right-radius: 10px;height: 200px; margin:5px 0px 3px 0px;border-bottom-right-radius: 10px;">
            <div style="background-color:#2A3137; text-align:center;border-radius:10px;margin-top:12px;margin-left:75px; padding:6px 0px; width:150px;">
            <h5 style="font-family: Arial, Helvetica, sans-serif;color:White;">Admin panel </h5>
            </div>
		</div>
		<div  style="width:74%;background-color: #C6C6C6; height: 200px; border-radius:10px; margin:5px 3px 3px 7px;">
            <form >
        <div style="margin-top: 15px;margin-left: 75px;">
            <span style="font-family: Arial, Helvetica, sans-serif;padding: 5px; margin: 5px;">ProjectName</span> 
            <input type="text" id="projectname" style="padding: 2px;margin: 5px;width:50%; border-radius: 7px; border:none;text-align: center; "placeholder="Enter the Project Name">
                    <br>
            <span style="font-family: Arial, Helvetica, sans-serif;padding: 5px;margin-left: 5px;margin-right: 30px;" >FileName</span>
            <input type="text" id="filename" style="padding: 2px;margin: 5px;width:50%; border-radius: 7px; border:none;text-align: center;" placeholder="Enter the File Name" >
                    <br>
            <span style="font-family: Arial, Helvetica, sans-serif;padding: 5px;margin-left: 5px;margin-right: 63px;" >Date</span> 
            <input type="date" id="date"style="padding: 2px;margin: 5px;width:50%; border-radius: 7px;border:none;text-align: center;te " >
                    <br> 
        </div>
                
                <div style="margin-left: 39%; margin-top: 13px;">
                    <input style="padding: 5px 25px 5px 25px; border-radius: 20px;"  class="btn btn-primary" type="submit" value="New Project" onclick="return Newproject()" >
                    <input style="padding: 5px 25px 5px 25px; border-radius: 20px;" class="btn btn-primary" type="submit" value="New File" onclick="return Newfile()" >
                    <input style="padding: 5px 25px 5px 25px; border-radius: 20px;" class="btn btn-primary" type="submit" value="Open File" onclick="return Openfile()" > 
                </div>
                 
            </form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
<div class="row" style="background-color:#355763; height: 460px;border-top-right-radius: 10px;border-top-left-radius: 10px; margin-left:;">
    
    <div class="col-md-12" style="background-color:#2A3137;padding:10px 5px 5px 5px; height:50px;border-top-right-radius: 10px;">
            <h5 style="text-align:center;font-family: Arial, Helvetica, sans-serif;color:White; font-size:20px;">Projects</h5>
            
    </div>
    
    <div class="col-md-12">
                         
              <div style=" margin-top:10px;background-color:#2A3137;">
                    <table style="border-color:none; border-radius:20px;margin:2px 0px 8px 0px;" >
                    <thead>
                        <tr>
                            <th>
                               <input type="checkbox" id="checkAll">
                            </th>
                            <th style="margin-top:8px;background-color: 4F4F4F; font-family: Arial, Helvetica, sans-serif;color:White;padding:5px 30px 5px 30px;">
                                Date
                            </th>
                            <th style="margin-top:8px;background-color: 4F4F4F; font-family: Arial, Helvetica, sans-serif;color:White;padding:5px 0px 5px 0px;">
                                ProjectName
                            </th>
                        </tr>
                        </thead></table>
                    
              </div>      
                    
        <div class="container1" style="max-height:280px;overflow-y:scroll; " >
  <!--class="table table-striped"-->  
             <table class="table table-hover table-bordered table-sm">
                 
    <tbody >
        
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbase1="projectfiles";
         
        $conn = mysqli_connect($servername, $username, $password,$dbase1);
        $sql1 = "SELECT * FROM `projectnames` WHERE 1";
        $userObj=mysqli_query($conn, $sql1);
          while($row  = mysqli_fetch_array($userObj)){
              $val=$row['PROJECTNAME']; ?>
                    <tr class="table-danger">
                            <td>
                       <input class="checkbox" type="checkbox" id="<?php echo $row['PROJECTNAME'] ?>" name="id[]">
                            </td>
                            
                            <td>
                              <?php  echo $row['DATE'] ?>
                            </td>
                            <td>
                                <a   style="font-family: Arial, Helvetica, sans-serif;" href="#" onclick="javascript:viewprojects()'<?php  echo $row['PROJECTNAME']; ?>')" ><?php  echo $row['PROJECTNAME']; ?></a>
                            </td>
                    </tr>
        
           <?php 
                    } 
 ?>  
    </tbody>
  </table>
  
       
</div>
    
				</div>
                
                
                
                <div >
                    <button style="border-radius:20px; padding:6px 15px 6px 15px; margin:1px ; margin-left: 90px;" type="button" class="btn btn-danger" id="delete" >Delete Selected </button>
  <!--<button style="border-radius:20px; padding:6px 12px 6px 12px; margin:1px;" type="button" class="btn btn-warning" id="viewing" >View </button>-->
                </div>
                
                
                
			</div>
            
            
			<div class="row" style="background-color: burlywood;height: 500px;">
				<div class="col-md-12">
                    <!--<div class="col-md-12" style="background-color:#2A3137;padding:10px 5px 5px 5px; height:50px;border-top-right-radius: 10px;">
            <h5 style="text-align:center;font-family: Arial, Helvetica, sans-serif;color:White; font-size:20px;"></h5>
            
    </div>-->
        <form  style="margin-top:15px;"id="form2">
            <div style="padding:10px 10px 10px 0px ;margin:2px 10px 0px 0px;">
        <span style="font-family: Arial, Helvetica, sans-serif; font-size:19px;">Humidity : -</span>
            </div>
                        <div class="row">
                            <div class="col-md-6" >
                                 <input style="width:100%;text-align:center;border-radius:5px; padding:5px 3px;margin:1px 1px 1px 1px;" type="number" id="humidity_min"  placeholder="Min-value">
                            </div>
                            <div class="col-md-6" >
                                <input style="width:100%;text-align:center;border-radius:5px; padding:5px 3px;margin:2px 1px 1px 1px;" type="number" id="humidity_max" placeholder="Max-value"><br>
                            </div>
                        </div>
        <div style="padding:10px 10px 10px 0px ;margin:2px 10px 0px 0px;">
        <span style="font-family: Arial, Helvetica, sans-serif; font-size:19px;">Temperature : -</span>
            </div>
                        <div class="row">
                            <div class="col-md-6" >
                                <input style="width:100%;text-align:center;border-radius:5px; padding:5px 3px;margin:1px 1px 1px 1px;" type="number" id="temperature_min"  placeholder="Min-value">
                            </div>
                            <div class="col-md-6" >
                                <input style="width:100%;text-align:center;border-radius:5px; padding:5px 3px;margin:1px 1px 1px 1px;" type="number" id="temperature_max"  placeholder="Max-value"><br>
                            </div>
                        </div>
       <div style="padding:10px 10px 10px 0px ;margin:2px 10px 0px 0px;">
        <span style="font-family: Arial, Helvetica, sans-serif; font-size:19px;">RainFall : -</span>
            </div>
                        <div class="row">
                            <div class="col-md-6" >
                                 <input style="width:100%;text-align:center;border-radius:5px;padding:5px 3px; margin:1px 1px 1px 1px;" type="number" id="rainfall_min"  placeholder="Min-value">
                            </div>
                            <div class="col-md-6" >
                                 <input style="width:100%;text-align:center;border-radius:5px; padding:5px 3px;margin:1px 1px 1px 1px;" type="number" id="rainfall_max"  placeholder="Max-value"><br>
                            </div>
                        </div>
        <div style="padding:10px 10px 10px 0px ;margin:2px 10px 0px 0px;">
        <span style="font-family: Arial, Helvetica, sans-serif; font-size:19px;">Pressure : -</span>
            </div>
                        <div class="row">
                            <div class="col-md-6" >
                                 <input style="width:100%;text-align:center;border-radius:5px;padding:5px 3px; margin:1px 1px 1px 1px;" type="number" id="pressure_min"  placeholder="Min-value">
                            </div>
                            <div class="col-md-6" >
                                <input style="width:100%;text-align:center; border-radius:5px; padding:5px 3px;margin:1px 1px 1px 1px;" type="number" id="pressure_max"  placeholder="Max-value"><br>
                            </div>
                        </div>
                      </form>
                    
                    <input  style="padding:6px 16px 6px 16px;border-radius:20px; margin-left:37%; margin-top:10px;" type="submit" value="Run"  class="btn btn-success" onclick="return Run()">
				</div>
			</div>
            
		</div>
        
		<div class="col-md-9">
            
            <div class="row" >
				<div class="col-md-12">
                    <p id="para">  
                    </p>
				</div>
			</div>
           
            
            <!--class="table table-hover table-bordered table-sm"-->
            <div class="row" >
				<div class="col-md-12">
                <table style="font-family: Arial, Helvetica, sans-serif;color:White;background-color:#564D5B;border-radius:5px;">
                    <thead >
                        <tr>
                            <th style="width:20%;">
                                DATE-TIME	
                            </th>
                            <th style="width:20%;">
                                HUMIDITY(Rh)	
                            </th>
                            <th style="width:20%;" >
                                TEMPERATURE(celius)	
                            </th>
                            <th style="width:20%;" >
                                RAINFALL(mm)	
                            </th>
                            <th  style="width:20%;">
                                PRESSURE(pascal)
                            </th>
                        </tr>
                    </thead>
                </table>
                    
                     
            <div class="row" >
				<div class="col-md-12">
                    <div id="display_blockfile1" style="max-height:500px;overflow-y:scroll;" >
                        
                    </div>
                </div>
            </div> 
                    <form style="margin-left:75%" method="get" action="graph.html">         
       <a href="graph.php"  target="_blank" ><button style="border-radius:20px;font-size:18px; padding:5px 12px 5px 12px; margin:1px;margin-top:10px;" type="button" class="btn btn-warning" id="viewing" >Graph</button></a>  
                       <a href="graph.php"  target="_blank" ><button style="border-radius:20px;font-size:18px; padding:5px 12px 5px 12px; margin:1px;margin-top:10px;" type="button" class="btn btn-warning" id="viewing" >Print</button></a>
                        <a href="graph.php"  target="_blank" ><button style="border-radius:20px;font-size:18px; padding:5px 12px 5px 12px; margin:1px;margin-top:10px;" type="button" class="btn btn-warning" id="viewing" >Send</button></a>  
                    </form>
                 
            <div class="row" >
				<div class="col-md-12">
                    <div id="chartContainer" style="height:270px;width: 100%;;margin-top:10px;" >

                    </div>
                </div>
            </div>
             <!--
                    <tbody>
                        <tr >
                            <td>
                                1
                            </td>
                            <td>
                                TB - Monthly
                            </td>
                            <td>
                                01/04/2012
                            </td>
                            <td>
                                Default
                            </td>
                            <td>
                                Default
                            </td>
                            <td>
                                Default
                            </td>
                        </tr>
                        
                        <tr class="table-active">
                            <td>
                                1
                            </td>
                            <td>
                                TB - Monthly
                            </td>
                            <td>
                                01/04/2012
                            </td>
                            <td>
                                Approved
                            </td>
                        </tr>
                        <tr class="table-success">
                            <td>
                                2
                            </td>
                            <td>
                                TB - Monthly
                            </td>
                            <td>
                                02/04/2012
                            </td>
                            <td>
                                Declined
                            </td>
                        </tr>
                        <tr class="table-warning">
                            <td>
                                3
                            </td>
                            <td>
                                TB - Monthly
                            </td>
                            <td>
                                03/04/2012
                            </td>
                            <td>
                                Pending
                            </td>
                        </tr>
                        <tr class="table-danger">
                            <td>
                                4
                            </td>
                            <td>
                                TB - Monthly
                            </td>
                            <td>
                                04/04/2012
                            </td>
                            <td>
                                Call in to confirm
                            </td>
                        </tr> 
                    </tbody>
			     </table>--> 
                </div>
            </div>
        </div>		
     
		<!--<div class="col-md-2" >
			<div class="row" style="background-color:#ff7b25; height: 380px;">
				<div class="col-md-12">
                    <form id="form2">
                        Humidity : 
                        <div class="row">
                            <div class="col-md-6" >
                                 <input style="width:100%;border-radius:5px; margin:2px 1px 2px 1px;" type="number" id="humidity_min"  placeholder="Min-value">
                            </div>
                            <div class="col-md-6" >
                                <input style="width:100%;border-radius:5px; margin:2px 1px 2px 1px;" type="number" id="humidity_max" placeholder="Max-value"><br>
                            </div>
                        </div>
                        Temperature : 
                        <div class="row">
                            <div class="col-md-6" >
                                <input style="width:100%;border-radius:5px; margin:2px 1px 2px 1px;" type="number" id="temperature_min"  placeholder="Min-value">
                            </div>
                            <div class="col-md-6" >
                                <input style="width:100%;border-radius:5px; margin:2px 1px 2px 1px;" type="number" id="temperature_max"  placeholder="Max-value"><br>
                            </div>
                        </div>
                        RainFall :
                        <div class="row">
                            <div class="col-md-6" >
                                 <input style="width:100%;border-radius:5px; margin:2px 1px 2px 1px;" type="number" id="rainfall_min"  placeholder="Min-value">
                            </div>
                            <div class="col-md-6" >
                                 <input style="width:100%;border-radius:5px; margin:2px 1px 2px 1px;" type="number" id="rainfall_max"  placeholder="Max-value"><br>
                            </div>
                        </div>
                        Pressure : 
                        <div class="row">
                            <div class="col-md-6" >
                                 <input style="width:100%;border-radius:5px; margin:2px 1px 2px 1px;" type="number" id="pressure_min"  placeholder="Min-value">
                            </div>
                            <div class="col-md-6" >
                                <input style="width:100%; border-radius:5px; margin:2px 1px 2px 1px;" type="number" id="pressure_max"  placeholder="Max-value"><br>
                            </div>
                        </div>
                      </form>
    <input  style="padding:6px 16px 6px 16px;border-radius:20px; margin-left:37%; margin-top:10px;" type="submit" value="Run"  class="btn btn-success" onclick="return Run()">
				</div>
			</div>
            
			<div class="row" style="background-color: brown; height: 500px;">
				<div class="col-md-12">
				</div>
			</div>
		</div>-->
        
	</div>
</div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
  
  $(document).ready(function(){
      $('#checkAll').click(function(){
         if(this.checked){
             $('.checkbox').each(function(){
                this.checked = true;
             });   
         }else{
            $('.checkbox').each(function(){
                this.checked = false;
             });
         } 
      });


    $('#delete').click(function(){
       var dataArr  = new Array();
       if($('input:checkbox:checked').length > 0){
          $('input:checkbox:checked').each(function(){
              dataArr.push($(this).attr('id'));
              $(this).closest('tr').remove();
          });
          sendResponse(dataArr)
       }else{
         alert('No record selected ');
       }

    });  


    function sendResponse(dataArr){
        $.ajax({
            type    : 'post',
            ....     : 'projects_list.php',
            data    : {'data' : dataArr},
            success : function(response){
                        alert(response);
                      },
            error   : function(errResponse){
                      alert(errResponse);
                      }                     
        });
    }

  });
</script>
      <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  </body>
</html>