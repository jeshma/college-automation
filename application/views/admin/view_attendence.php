<!DOCTYPE html>
<html>
<head>
	<title>attendence</title>
</head>
<body>
<h2>Attendence</h2>
<?php 
	
		if(isset($result))
			
		{?>
            <table border="2px">
		<tr>
		     <th>Name</th>
		     <th>Attendence</th>
		</tr> 
		<?php 
		 foreach ($result as $key => $value) {?>
		<tr>
			<td><?php echo $value->staff_id ?></td>
			<td><?php echo $value->attendance ?></td>
						
		</tr>
<?php }
		}
	 ?>			   
</table>	
</body>
</html>