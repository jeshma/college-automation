<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>application view</title>
</head>
<body>

	<h2>EXAM</h2>
	<?php 
		if($result)
			
		{?>
			<table border="2px">
			<head>
				<tr>
					<th>name</th>
					<th>date</th>
					<th>time</th>
					<th>subject</th>
					<th>Status</th>
				</tr>
				
			</head>
			
		<?php 
		 foreach ($result as $key => $value) {?>
		<tr>
			<td><?php echo $value->name ?></td>
			<td><?php echo $value->date ?></td>
			<td><?php echo $value->time ?></td>
			<td><?php echo $value->subject ?></td>
			<td><?php echo $value->status ?></td>
			

			<td><a href="<?php echo base_url('index.php/exam_Controller/accept/'.$value->id) ?>">Select</a></td>
			<td><a href="<?php echo base_url('index.php/exam_Controller/delete/'.$value->id) ?>">Remove</a></td>
			
		</tr>		
		<?php }
		}
	 ?>
	 </table>
</body>
</html>