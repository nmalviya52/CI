<!DOCTYPE html>
<html lang="en">
<head>
	<title>Progress U0000pdate</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale =1">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   

</head>

<body background="/ap/banner.png">

 
<div class="container"  >

 
<div class="page-header" style="font-family:'Trebuchet MS', Helvetica, sans-serif; color:white" > 
	  <h1 >Project Progress</h1>  

</div> 
<TABLE>
<tr>
<td class="col-sm-3 well well-sm" style="background:#cfd2da; border-radius:30px;padding-left:30px;font-family:'Trebuchet MS', Helvetica, sans-serif; color:white" ><h3><span class="glyphicon glyphicon-th-list"></span>Project Name</h3></td>

	<td class="col-sm-3 well well-sm" style="background:#cfd2da; border-radius:30px;padding-left:30px;font-family:'Trebuchet MS', Helvetica, sans-serif; color:white" ><h3><span class="glyphicon glyphicon-th-list"></span>Customer Name</h3></td>

	<td class="col-sm-3 well well-sm" style="background:#cfd2da; border-radius:30px;padding-left:30px;font-family:'Trebuchet MS', Helvetica, sans-serif; color:white" ><h3><span class="glyphicon glyphicon-th-list"></span>Vendor Name</h3></td>

	<td class="col-sm-3 well well-sm" style="background:#cfd2da; border-radius:30px; padding-left:30px;font-family:'Trebuchet MS', Helvetica, sans-serif; color:white"  ><h3><span class="glyphicon glyphicon-tasks"></span>Project Report</h3></td>
	<td class="col-sm-3 well well-sm" style="background:#cfd2da; border-radius:30px; padding-left:30px;font-family:'Trebuchet MS', Helvetica, sans-serif; color:white"  ><h3><span class="glyphicon glyphicon-tasks"></span>Change</h3></td>
	
</tr>
 

</body> 
</html>



<?php

	 
	 echo "<tr>";
	for($i=0; $i<sizeof($tab); $i++)
	{
		echo '<td class="col-sm-3 well well-sm" style="background:#cfd2da; border-radius:5px;padding-left:30px;font-family:"Trebuchet MS", Helvetica, sans-serif; color:white "  >' .$tab[$i]['Proj_Name'].'
	</td>';
		echo '<td class="col-sm-3 well well-sm" style="background:#cfd2da; border-radius:5px;padding-left:30px;font-family:"Trebuchet MS", Helvetica, sans-serif; color:white"  >'.$tab[$i]['Cust_Name'].'
	</td>'; 
		echo '<td class="col-sm-3 well well-sm" style="background:#cfd2da; border-radius:5px;padding-left:30px;font-family:"Trebuchet MS", Helvetica, sans-serif; color:white" >'.$tab[$i]['Vend_Name'].'
	</td>';
		echo '<td class="col-sm-3 well well-sm " style="background:#cfd2da; border-radius:5px;padding-left:30px;font-family:"Trebuchet MS", Helvetica, sans-serif; color:white"><p id="p'.$i.'" value="'.$tab[$i]['Status'].'" ></p>	
		<div class="demo-wrapper html5-progress-bar">
		<div class="progress-bar-wrapper">
			<progress id="prog'.$i.'" value="0" max="100" ></progress>
			<span id = "per'.$i.'" class="progress-value"></span>
		</div>
		</div></td>';
		echo '<td class="col-sm-3 well well-sm" style="background:#cfd2da; border-radius:5px;padding-left:30px;font-family:"Trebuchet MS", Helvetica, sans-serif; color:white" ><a href="#" role="button" class="btn-primary">Change</a>
	</td>';
 echo '</tr>';
	}

?>
</TABLE>
<script type="text/javascript">
<?php 
	for($i=0; $i<sizeof($tab); $i++){
		echo "var x = 0;";
		echo "function pb".$i."(){
    	var req = ".$tab[$i]['Status'].";
    	x = x + 1;
    	if(x <= ".$tab[$i]['Status'].") {
    		document.getElementById('prog".$i."').value = x;
    		document.getElementById('per".$i."').innerHTML = x + '%';
    	}
    }
    setInterval(pb".$i.",100);";
		
	}
	
?>
</script>