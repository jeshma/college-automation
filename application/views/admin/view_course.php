<!DOCTYPE html>
<html>
<head>
	<title>course</title>
</head>
<body>


<h1>COURSES</h1>
<?php 
  if(isset($result)){
   ?>

<table border="3px">
<tr>

	<th>name</th>
	<th>description</th>
</tr>
<?php 

 foreach ($result as $key => $value)
 	{?>
  
    <tr>
 			<td><?php echo $value->name ?></td>
 			<td><?php echo $value->description ?></td>
 	</tr>	
 <?php 
  }}?>	
  </table>
 
</body>
</html>