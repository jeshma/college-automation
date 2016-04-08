<!DOCTYPE html>
<html>
<head>
	<title>student</title>
	<link rel="stylesheet" href="../../../css/style.css">
</head>
<body>


<h1>Student Details</h1>
<?php 
  if(isset($result)){
   ?>

<table border="3px">
<tr>

	<th>name</th>
	<th>dob</th>
	<th>address</th>
	<th>gender</th>
	<th>father</th>
	<th>mother</th>
	<th>pin</th>
	<th>income</th>
	<th>mail</th>
	<th>community</th>
	<th>cast</th>
	<th>panchayath</th>
	<th>taluk</th>
	<th>district</th>
	<th>mertial</th>
	<th>spouse</th>
	<th>institute</th>
	<th>course</th>
	<th>physical</th>


<?php 

 foreach ($result as $key => $value)
 	{?>
  
    <tr>
 			<td><?php echo $value->name ?></td>
 			<td><?php echo $value->dob ?></td>
 			<td><?php echo $value->address ?></td>
 			<td><?php echo $value->gender ?></td>
 			<td><?php echo $value->father ?></td>
 			<td><?php echo $value->mother ?></td>
 			<td><?php echo $value->pin ?></td>
 			<td><?php echo $value->income ?></td>
 			<td><?php echo $value->phone ?></td>
 			<td><?php echo $value->mail ?></td>
 			<td><?php echo $value->community ?></td>
 			<td><?php echo $value->cast ?></td>
 			<td><?php echo $value->panchayath ?></td>
 			<td><?php echo $value->taluk ?></td>
 			<td><?php echo $value->district ?></td>
 			<td><?php echo $value->mertia ?></td>
 			<td><?php echo $value->spouse ?></td>
 			<td><?php echo $value->institute ?></td>
 			<td><?php echo $value->course ?></td>
 			<td><?php echo $value->physical ?></td>
 			
 	</tr>	
 	
 <?php 
        }}?>

  </table>
 
</body>
</html>