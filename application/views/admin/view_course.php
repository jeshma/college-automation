<!DOCTYPE html>
<html>
<head>
	<title>course</title>
</head>
<body>
<h2>COURCES</h2>
<?php 
  if(isset($result))
   ?>

<table border="3px">
<tr>
	<th>name</th>
	<th>description</th>
</tr>
<?php 
 foreach ($result as $key => $value)?>
  
    <tr>
 			<td><?php echo $value->name ?></td>
 			<td><?php echo $value->discription ?></td>
 	</tr>	
 <?php 
  ?>	
  </table>
 
</body>
</html>