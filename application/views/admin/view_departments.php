<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Departments</title>
</head>
<body>
	<table border="1px">
		<caption><h1>departments</h1></caption>
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>Remove</th>
			</tr>
		</thead>
		<tbody>

			<?php 

			if(isset($result) &&$result!=FALSE){

				foreach ($result as $key => $value){
					?>


				<tr>
					<td><?php echo $value->id ?></td>
					<td><a href="<?php echo base_url('Department_Controller/view/'.$value->id); ?>"><?php echo $value->name ?></a></td>
					<td><a href="<?php echo base_url('Department_Controller/delete/'.$value->id) ?>">Remove</a></td>
			
				</tr>
			<?php } }?>
		</tbody>
	</table>
</body>
</html>