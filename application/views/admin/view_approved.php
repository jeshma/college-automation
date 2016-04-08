<!DOCTYPE html>
<html>
<head>
	<title>Approved</title>
</head>
<body>
<h2>APPROVED APPLICATIONS</h2>
<?php
if ($result != null) {?>

	<table border="2px">
		<caption></caption>
		<thead>
			<tr>
				<th>name</th>
				<th>address</th>
				<th>guardian_name</th>
				<th>pin</th>
				<th>course</th>
				<th>first_lang</th>
				<th>second_lang</th>
				<th>maths</th>
				<th>english</th>
				<th>chemistry</th>
				<th>electronics</th>
				<th>zoology</th>
				<th>botony</th>
				<th>bussiness</th>
				<th>accounting</th>
				<th>economics</th>
				<th>politics</th>
				<th>statistics</th>
				<th>Status</th>

			</tr>
		</thead>
		<tbody>
		<?php
			foreach ($result as $key => $value) {?>
				
			<tr>
				<td><?php echo $value->name ?></td>
				<td><?php echo $value->address ?></td>
			    <td><?php echo $value->guardian_name ?></td>
			    <td><?php echo $value->pin ?></td>
			    <td><?php echo $value->course ?></td>
			    <td><?php echo $value->firstlang ?></td>
			    <td><?php echo $value->secondlang ?></td>
			    <td><?php echo $value->maths ?></td>
			    <td><?php echo $value->english ?></td>
			    <td><?php echo $value->chemistry ?></td>
			    <td><?php echo $value->electronics ?></td>
			    <td><?php echo $value->zoology ?></td>
			    <td><?php echo $value->botony ?></td>
			    <td><?php echo $value->bussiness ?></td>
			    <td><?php echo $value->accounting ?></td>
			    <td><?php echo $value->economics ?></td>
			    <td><?php echo $value->politics ?></td>
			    <td><?php echo $value->statistics ?></td>
			    <td><?php echo $value->status ?></td>

			
		
		</tr>		
		<?php }
		}
	 ?>
		</tbody>
	</table>

</body>
</html>