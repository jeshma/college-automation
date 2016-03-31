<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>add payroll</title>
</head>
<body>
<form action="<?php echo base_url('payroll_Controller/add') ?>" name="addform" id="addform" method="post" >

	staffs:<select name="staffs" id="staffs">
	<?php 

	foreach ($result as $value) 
	{ ?>
	    <option value="<?php echo $value->id ?>"><?php echo $value->name;?></option>"
	    <?php } ?>
	</select> 
<br/>
date: <input type="text" name="date" id="date"><br/>
Amount: <input type="text" name="amount" id="amount"><br/>
<button name="submit">submit</button>
</form>
<?php if (isset($error))
 {
	echo $error;
}

if (isset($message)) 

{
	echo $message;
}

 ?>
</body>
</html>