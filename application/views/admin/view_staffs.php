<!DOCTYPE html>
<html>
<head>
	<title>staffs</title>
</head>
<body>
<h2>Staffs</h2>
<?php
     if($result)
     	{?>
     <table border="2px">
     	
     	
     		<tr>
               <thead>
     			<th>name</th>
     			<th>address</th>
     		</tr>
     		<?php
     			if (isset($result) &&$result!=FALSE)
     			 {
     				foreach ($result as $key => $value){?>

     				<tr>
                              <td><?php echo $value->name ?></td>
                              <td><?php echo $value->address  ?></td>
     					<td><?php echo $value->departments_id ?></td>
                              <td><a href="<?php echo base_url('Admin_Controller/staffsdele/'.$value->id) ?>">Remove</a></td>
     				</tr>
                         </thead>

     			<?php
               }
     		}
     	}

     			?>	
      </table>
</body>
</html>