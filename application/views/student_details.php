<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Application Form</title>
	<link rel="stylesheet" href="">
</head>
<body>
<form action="<?php echo base_url('Student_Details_Controller/add') ?>" name="addform" id="addform" method="post">
	Name:<input type="text" name="name" id="name"><br>
	DOB:<select name="day" >
		<option value="1995">1995</option>
		<option value="1996">1996</option>
		<option value="1997">1997</option>
		<option value="1998">1998</option>
	</select>
	<select name="day" >
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
	</select>
	<select name="day" >
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
	</select><br>
	Address:<textarea name="address"></textarea><br>
	Gender:<input type="radio" name="gender" value="male">Male
	<input type="radio" name="gender" value="female">Female<br>
	father name:<input type="text" name="father" id="father"><br>
	mother name:<input type="text" name="mother" id="mother"><br>
	pin code:<input type="text" name="pin" id="pin"><br>
	income:<input type="text" name="income" id="income"><br>
	Phone no:<input type="text" name="phone" id="phone"><br>
	Mail Id:<input type="text" name="mail" id="mail"><br>
	religion community :<input type="text" name="community" id="community"><br>
	Cast:<input type="text" name="cast" id="cast"><br>
	Panchayath:<input type="text" name="panchayath" id="panchayath"><br>
	Taluk  : <input type="text" name="taluk" id="taluk"><br>            
    District : <input type="text" name="district" id="district"><br>
    Martial status: <input type="text" name="martial_status" id="martial_status"><br>
    Spouse name address :  <input type="text" name="spouse" id="spouse"><br>
    Institution last attend :<input type="text" name="institute" id="institute"><br>
    Physically_handicapped <input type="text" name="physical" id="physical"><br>
    select course : <select name="course" id="course">
		<?php foreach ($course as $value) {
			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
		} ?>
		</select><br>
   
    	    <button>submit</button>   
    	    <?php if (isset($error)) {
	echo $error;
}
if (isset($message)) {
	echo $message;
}

 ?>



</body>
</html>