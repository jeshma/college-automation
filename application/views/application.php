<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>application</title>
	<link rel="stylesheet" href="">
</head>
<body>
<!-- <form name="application"action=""method="post"> -->
<?php echo form_open(base_url('index.php/Home_Controller/add_application'), ['name' => 'addform', 'id' => 'addform']); 
	echo validation_errors();
?>
<h1>Application</h1><br/><br/>
NAME:<input type="text"name="name"ID="name"><br/><br/>
ADDRESS:<textarea name="address" id="address"></textarea><br/><br/>

<br/><br/>guardian:<input type="text"name="guardian"ID="guardian"><br/><br/>
pin:<input type="tell" name="pin" id="pin"><br/><br/>
course:<input type="text"name="course"id="course"><br/><br/>
first langauge:<input type="text"name="firstlang"id="firstlang"><br/><br/>
second langauge:<input type="text"name="secondlang"id="secondlang"><br/><br/>
maths<input type="text"name="maths"id="maths"><br/><br/>
english:<input type="text"name="english"id="english"><br/><br/>
chemistry:<input type="text"name="chemistry"id="chemistry"><br/><br/>
physics:<input type="text"name="physics"id="physics"><br/><br/>
electronics:<input type="text"name="electronics"id="electronics"><br/><br/>
zoology:<input type="text"name="zoology"id="zoology"><br/><br/>
botony:<input type="text"name="botony"id="botony"><br/><br/>
bussiness:<input type="text"name="bussiness"id="bussiness"><br/><br/>
accounting:<input type="text"name="accounting"id="accounting"><br/><br/>
economics:<input type="text"name="economics"id="economics"><br/><br/>
politics:<input type="text"name="politics"id="politics"><br/><br/>
statistics:<input type="text"name="statistics"id="statistics"><br/><br/>
<input type="submit" name="usubmit" id="submit" value="submit">
<input type="submit" name="ucancel" id="cancel" value="cancel">

</form>
</body>
</html>
