<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--	<meta charset="utf-8">-->
<!--	<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--	<title>Application Form</title>-->
<!--	<link rel="stylesheet" href="">-->
<!--</head>-->
<!--<body>-->
<!--<form action="--><?php //echo base_url('Student_Details_Controller/add') ?><!--" name="addform" id="addform" method="post">-->
<!--	Name:<input type="text" name="name" id="name">-->
<!--	DOB:<select name="day" >-->
<!--		<option value="1995">1995</option>-->
<!--		<option value="1996">1996</option>-->
<!--		<option value="1997">1997</option>-->
<!--		<option value="1998">1998</option>-->
<!--	</select>-->
<!--	<select name="day" >-->
<!--		<option value="1">1</option>-->
<!--		<option value="2">2</option>-->
<!--		<option value="3">3</option>-->
<!--		<option value="4">4</option>-->
<!--	</select>-->
<!--	<select name="day" >-->
<!--		<option value="1">1</option>-->
<!--		<option value="2">2</option>-->
<!--		<option value="3">3</option>-->
<!--		<option value="4">4</option>-->
<!--	</select><br>-->
<!--	Address:<textarea name="address"></textarea><br>-->
<!--	Gender:<input type="radio" name="gender" value="male">Male-->
<!--	<input type="radio" name="gender" value="female">Female<br>-->
<!--	father name:<input type="text" name="father" id="father"><br>-->
<!--	mother name:<input type="text" name="mother" id="mother"><br>-->
<!--	pin code:<input type="text" name="pin" id="pin"><br>-->
<!--	income:<input type="text" name="income" id="income"><br>-->
<!--	Phone no:<input type="text" name="phone" id="phone"><br>-->
<!--	Mail Id:<input type="text" name="mail" id="mail"><br>-->
<!--	religion community :<input type="text" name="community" id="community"><br>-->
<!--	Cast:<input type="text" name="cast" id="cast"><br>-->
<!--	Panchayath:<input type="text" name="panchayath" id="panchayath"><br>-->
<!--	Taluk  : <input type="text" name="taluk" id="taluk"><br>            -->
<!--    District : <input type="text" name="district" id="district"><br>-->
<!--    Martial status: <input type="text" name="martial_status" id="martial_status"><br>-->
<!--    Spouse name address :  <input type="text" name="spouse" id="spouse"><br>-->
<!--    Institution last attend :<input type="text" name="institute" id="institute"><br>-->
<!--    Physically_handicapped <input type="text" name="physical" id="physical"><br>-->
<!--    select course : <select name="course" id="course">-->
<!--		--><?php //foreach ($course as $value) {
//			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
//		} ?>
<!--		</select><br>-->
<!--   -->
<!--    	    <button>submit</button>   -->
<!--    	    --><?php //if (isset($error)) {
//	echo $error;
//}
//if (isset($message)) {
//	echo $message;
//}
//
// ?>
<!---->
<!---->
<!---->
<!--</body>-->
<!--</html>-->

<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--  <meta charset="UTF-8">-->
<!--  <meta name="keywords" content="web design, web development, web site development, web site design, web design development, e-commerce, ecommerce, interactive, new media, development, Manjeri, hove, Manjeri web design, Manjeri ecommerce, Manjeri e-commerce, Manjeri web development, malappuram, content management, cms, web site, web sites, psybo, psybo technologies, psybotechnologies">-->
<!--  <meta name="description" content="Psybo technologies is a small web design &amp; development agency based in Manjeri, Malappuram, INDIA. We've made a reputation for building websites that look great and are easy-to-use.">-->
<!--  <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--  <link rel="icon" href="--><?php //echo base_url('img/ico.png');?><!--" type="image/png" sizes="47x54">-->
<!--  <title>Jamia Collage</title>-->
<!--  <link rel="stylesheet" href="--><?php //echo base_url('css/styleapp.css');?><!--">-->
<!--  <script type="text/javascript" src="--><?php //echo base_url('js/appjs.js');?><!--"></script>-->
<!--  <style>-->
<!--      #img{-->
<!--          width: 10px;-->
<!--          height: 10px;-->
<!--      }-->
<!--  </style>-->
<!--</head>-->
<!--<body>-->
<!--  <div class="page-wrapper">-->
<!--    <div class="left-wrapper">-->
<!--      --><?php //echo dashboard_menu('students');?>
<!--    </div>-->
<!--  -->
<!--    <nav class="top-wrapper">-->
<!--      <div class="sidebar-top">-->
<!--        <button class="humburger pull-left">-->
<!--          <i class="fa fa-bars fa-2x center-block"></i>-->
<!--        </button>-->
<!--        <ul class="menu-top pull-right">-->
<!--          <li><a href="#"><i class="fa fa-envelope-o fa-lg"></i></a></li>-->
<!--          <li><a href="#"><i class="fa fa-bell-o fa-lg"></i></a></li>-->
<!--          <li><a href="#"><i class="fa fa-cog fa-lg"></i></a></li>-->
<!--          <li>-->
<!--            <a href="--><?php //echo base_url('dashboard/logout');?><!--">logout</a>-->
<!--          </li>-->
<!--        </ul>-->
<!--      </div>-->
<!--    </nav>-->
<!--    -->
<!---->
<!---->
<!--<h1>Student Details</h1>-->
<?php //
//  if(isset($students)){
//   ?>
<!---->
<!---->
<!--<table class="table">-->
<!--<tr>-->
<!--  <th>id</th>-->
<!--	<th>name</th>-->
<!--	<th>dob</th>-->
<!--	<th>address</th>-->
<!--	<th>gender</th>-->
<!--	<th>father</th>-->
<!--	<th>mother</th>-->
<!--	<th>pin</th>-->
<!--	<th>income</th>-->
<!--	<th>mail</th>-->
<!--	<th>community</th>-->
<!--	<th>cast</th>-->
<!--	<th>panchayath</th>-->
<!--	<th>taluk</th>-->
<!--	<th>district</th>-->
<!--	<th>mertial_status</th>-->
<!--	<th>spouse</th>-->
<!--	<th>institute</th>-->
<!--	<th>physical</th>-->
<!---->
<!---->
<?php //
//
// foreach ($students as $key => $value)
// 	{?>
<!--  -->
<!--    <tr>-->
<!--     <td class="width-80">-->
<!--               --><?php //echo $value->id ?>
<!--            </td>-->
<!-- 			<td>--><?php //echo $value->name ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->dob ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->address ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->gender ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->father ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->mother ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->pin ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->income ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->number ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->mail ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->religion_community ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->cast ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->panchayath ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->taluk ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->district ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->martia_status ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->spouse_name_address ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->institution_last_attend ?><!--</td>-->
<!-- 			<td>--><?php //echo $value->physically_handicapped ?><!--</td>-->
<!-- 			-->
<!-- 	</tr>	-->
<!-- 	</tr>-->
<!-- 	-->
<!-- --><?php //
//        }}?>
<!---->
<!--  </table>-->
<!-- -->
<!--</body>-->
<!--</html>-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>admin-jamia  collage</title>
    <link rel="stylesheet" href="<?php echo base_url('admin/css/style.css')?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url('admin/css/jquery.timepicker.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('admin/css/jquery.timepicker.min.css');?>">

    <script type="text/javascript" src="<?php echo base_url('js/appjs.js');?>"></script>

    <script src="<?php echo base_url('js/date_picker.js')?>"></script>
    <script src="<?php echo base_url('js/jquery2.min.js')?>"></script>
    <script src="<?php echo base_url('js/jquery-ui2.min.js')?>"></script>

    <script src="<?php echo base_url('js/jquery.timepicker.js')?>"></script>
    <script src="<?php echo base_url('js/jquery.timepicker.min.js')?>"></script>

    <script type="text/javascript">
        $(function() {
            // $( "#startdate" ).datepicker();
            $('#date').datepicker({ dateFormat: 'yy-mm-dd' }).val();
        });


        $(document).ready(function(){
            $('#time').timepicker();
            $('#time').on('click', function(){
                $('#spanExample').timepicker('show');
            });
        });

    </script>

</head>
<body>
<!-- Header -->
<div id="header">
    <div class="shell">
        <!-- Logo + Top Nav -->
        <div id="top">
            <h1><a href="#">Jamia Collage</a></h1>
            <div id="top-navigation">
                Welcome <a href="#"><strong>Administrator</strong></a>
            </div>
        </div>
        <!-- End Logo + Top Nav -->

        <!-- Main Nav -->
        <div id="navigation">
            <?php echo dashboard_menu('students')?>
        </div>
        <!-- End Main Nav -->
        <div class="msg msg-error">
            <p><strong><a href="<?php echo base_url('dashboard/students/add') ?>">add students</a></strong></p>
        </div>
    </div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
    <div class="shell">

        <!-- Small Nav -->
        <div class="small-nav">
            <a href="#">Dashboard</a>
            <span>&gt;</span>
            <!--			--><?php //echo uri_string()?>
        </div>
        <br />
        <!-- Main -->
        <div id="main">
            <div class="cl">&nbsp;</div>

            <!-- Content -->
            <div id="content">
                <!-- Box -->
                <div class="box">
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2 class="left">Student details</h2>
                    </div>

                    <?php if (isset($applicant) and $applicant != false) {  ?>
                        <form action="<?php echo base_url('dashboard/students/add/submit') ?>" name="addform" id="addform" method="POST">
                            <div class="sort form">
                                <div>
                                    <label for="name">Name</label>
                                    <input type="text" required="" name="name" id="name" required="" class="field size5" value="<?php echo $applicant[0]->name;?>">
                                </div>
                                <div>
                                    <label for="course">Course</label>
                                    <select name="course" id="course" class="field" required="" >
                                        <option value="" disabled selected >select course</option>
                                        <?php foreach ($course as $value) {
                                            echo '<option value="'.$value->id.'">'.$value->name.'</option>';
                                        } ?>
                                    </select>
                                </div>
                                <div>
                                    <label for="dob">D O B</label>
                                    <input class="field size5" type="text" name="date" id="date" required="" value="<?php echo $applicant[0]->dob;?>"/>
                                </div>
                                <div>
                                    <label for="address">Address</label>
                                        <textarea name="address" required="" class="field size5"><?php echo $applicant[0]->dob;?></textarea>
                                </div>
                                <div>
                                    <label for="gender">Gender</label>
                                <input class="field size5" type="radio" name="gender" value="male">Male
                                    <input class="field size5" type="radio" name="gender" value="female">Female
                                </div>
                                <div>
                                    <label for="father">Father</label>
                                <input class="field size5" type="text" name="father" id="father">
                                </div>
                                <div>
                                    <label for="mother">Mother</label>
                                    <input class="field size5" type="text" name="mother" id="mother">
                                </div>
                                <div>
                                    <label for="pin">Pin code</label>
                                    <input class="field size5" type="text" name="pin" id="pin" required="" >
                                </div>
                                <div>
                                    <label for="income">Income</label>
                                    <input class="field size5" type="text" name="income" id="income">
                                </div>
                                <div>
                                    <label for="phone">Phone</label>
                                    <input class="field size5" type="text" name="phone" id="phone" >
                                </div>
                                <div>
                                    <label for="mail">Mail</label>
                                    <input class="field size5" type="text" name="mail" id="mail">
                                </div>
                                <div>
                                    <label for="community">Community</label>
                                    <input class="field size5" type="text" name="community" id="community">
                                </div>
                                <div>
                                    <label for="cast">Cast</label>
                                    <input class="field size5" type="text" name="cast" id="cast">
                                </div>
                                <div>
                                    <label for="panchayath">Panchayath</label>
                                    <input class="field size5" type="text" name="panchayath" id="panchayath">
                                </div>
                                <div>
                                    <label for="taluk">taluk</label>
                                     <input class="field size5" type="text" name="taluk" id="taluk">
                                </div>
                                <div>
                                    <label for="district">District</label>
                                     <input class="field size5" type="text" name="district" id="district">
                                </div>
                                <div>
                                    <label for="marital_status">Marital status</label>
    <!--                                 <input class="field size5" type="text" name="martial_status" id="martial_status">-->
                                    <select class="field size5" name="marital_status" id="marital_status">
                                        <option value="married">married</option>
                                        <option value="un-married">un-married</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="institute">Last studied institute</label>
                                    <input class="field size5" type="text" name="institute" id="institute">
                                </div>
                                <div>
                                    <label for="physical">Physical handicapped</label>
                                    <select class="field size5" name="physical" id="physical">
                                        <option value="yes">yes</option>
                                        <option value="no">no</option>
                                    </select>
                                </div>
                               <!--  <div>
                                    <label for="course">Course</label>
                                     <select name="course" id="course" required="" class="field size5">
                                         <option value=""disabled selected>select course</option>
                                        <?php foreach ($course as $value) {
                                            echo '<option value="'.$value->id.'">'.$value->name.'</option>';
                                        } ?>
                                    </select>
                                </div> -->

                                </div>
                                <div class="buttons button-left">
                                    <input type="submit" class="button" value="submit" />
                                </div>
                            </div>
                        </form>
                    <?php  } else { ?>

                        <form action="<?php echo base_url('dashboard/students/add/submit') ?>" name="addform" id="addform" method="POST">
                            <div class="sort form">
                                <div>
                                    <label for="name">Name</label>
                                    <input type="text" required="" name="name" id="name" required="" class="field size5">
                                </div>
                                <div>
                                    <label for="course">Course</label>
                                    <select name="course" id="course" class="field" required="" >
                                        <option value="" disabled selected >select course</option>
                                        <?php foreach ($course as $value) {
                                            echo '<option value="'.$value->id.'">'.$value->name.'</option>';
                                        } ?>
                                    </select>
                                </div>
                                <div>
                                    <label for="dob">D O B</label>
                                    <input class="field size5" type="text" name="date" id="date" required="" />
                                </div>
                                <div>
                                    <label for="address">Address</label>
                                        <textarea name="address" required="" class="field size5"></textarea>
                                </div>
                                <div>
                                    <label for="gender">Gender</label>
                                <input class="field size5" type="radio" name="gender" value="male">Male
                                    <input class="field size5" type="radio" name="gender" value="female">Female
                                </div>
                                <div>
                                    <label for="father">Father</label>
                                <input class="field size5" type="text" name="father" id="father">
                                </div>
                                <div>
                                    <label for="mother">Mother</label>
                                    <input class="field size5" type="text" name="mother" id="mother">
                                </div>
                                <div>
                                    <label for="pin">Pin code</label>
                                    <input class="field size5" type="text" name="pin" id="pin" required="" >
                                </div>
                                <div>
                                    <label for="income">Income</label>
                                    <input class="field size5" type="text" name="income" id="income">
                                </div>
                                <div>
                                    <label for="phone">Phone</label>
                                    <input class="field size5" type="text" name="phone" id="phone" >
                                </div>
                                <div>
                                    <label for="mail">Mail</label>
                                    <input class="field size5" type="text" name="mail" id="mail">
                                </div>
                                <div>
                                    <label for="community">Community</label>
                                    <input class="field size5" type="text" name="community" id="community">
                                </div>
                                <div>
                                    <label for="cast">Cast</label>
                                    <input class="field size5" type="text" name="cast" id="cast">
                                </div>
                                <div>
                                    <label for="panchayath">Panchayath</label>
                                    <input class="field size5" type="text" name="panchayath" id="panchayath">
                                </div>
                                <div>
                                    <label for="taluk">taluk</label>
                                     <input class="field size5" type="text" name="taluk" id="taluk">
                                </div>
                                <div>
                                    <label for="district">District</label>
                                     <input class="field size5" type="text" name="district" id="district">
                                </div>
                                <div>
                                    <label for="marital_status">Marital status</label>
    <!--                                 <input class="field size5" type="text" name="martial_status" id="martial_status">-->
                                    <select class="field size5" name="marital_status" id="marital_status">
                                        <option value="married">married</option>
                                        <option value="un-married">un-married</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="institute">Last studied institute</label>
                                    <input class="field size5" type="text" name="institute" id="institute">
                                </div>
                                <div>
                                    <label for="physical">Physical handicapped</label>
                                    <select class="field size5" name="physical" id="physical">
                                        <option value="yes">yes</option>
                                        <option value="no">no</option>
                                    </select>
                                </div>
                                
                                </div>
                                <div class="buttons button-left">
                                    <input type="submit" class="button" value="submit" />
                                </div>
                            </div>
                        </form>
                       <?php } ?>     
                </div>
            </div>
            <!-- End Content -->

            <div class="cl">&nbsp;</div>
        </div>
        <!-- Main -->
    </div>
</div>

<?php if (isset($message)) {
    echo $message;
}?>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
    <div class="shell">
        <span class="left">&copy; 2016 - Me</span>
		<span class="right">
			Design by <a href="" target="_blank" title="The Sweetest CSS Templates WorldWide"></a>
		</span>
    </div>
</div>
<!-- End Footer -->

</body>
</html>