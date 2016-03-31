<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Departments</title>
	<link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
	<table id="depart">
	<caption><h1>departments</h1></caption>
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th></th>
				<th><a class="width-80" href="<?php echo base_url('Admin_Controller/add_department') ?>">add</a></th>
			</tr>
		</thead>
		<tbody>

			<?php 

			if(isset($result) &&$result!=FALSE){

				foreach ($result as $key => $value){
					?>


				<tr>
					  <td class="width-80">
					     <?php echo $value->id ?>
					  </td>
					  <td class="width-33">
					     <a href="<?php echo base_url('Department_Controller/view/'.$value->id); ?>"><?php echo $value->name ?></a>
					  </td>
					  <td class="width-20">
					     <a class="remove" href="<?php echo base_url('Department_Controller/delete/'.$value->id) ?>">Remove</a>
					  </td>
			    </tr>
			<?php } }?>
		</tbody>
	</table>
</body>
</html>