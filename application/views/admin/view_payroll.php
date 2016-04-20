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
<!--      --><?php //echo dashboard_menu('payroll');?>
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
<!--<table>-->
<!--	<caption>--><?php //
//		if(isset($result)){
//		echo $result[0]->name ?><!--</caption>-->
<!--		--><?php //
//		}?>
<!--		<thead>-->
<!--			<tr>-->
<!--				<h2>PAYROLL</h2></h2>-->
<!--			</tr>-->
<!--		</thead>-->
<!--		<tbody>-->
<!--		--><?php //
//		if(isset($payroll))
//		{
//		foreach($payroll as $key => $value){
//
//			}?>
<!---->
<!--			<tr>-->
<!--				<td>--><?php //echo $value->name ?><!--</td>-->
<!--			</tr>-->
<!--		--><?php //} ?>
<!--		</tbody>-->
<!--		--><?php //echo form_open(base_url('dashboard/payroll/add/submit'),['name' => 'addform', 'id' => 'addform']); ?>
<!--		<label for="staffs">staffs:</label>-->
<!--		<input type="text" name="name" id="name"><br>-->
<!--		<label for="date">date:</label>-->
<!--		<input type="text" name="date" id="date"><br>-->
<!--		--><?php //echo form_hidden('id', $id);
//		?>
<!--		<button>add</button>-->
<!--</table>-->
<!--</div>	-->
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
            <?php echo dashboard_menu('dashboard')?>
        </div>
        <!-- End Main Nav -->
        <div class="msg msg-error">
            <p><strong>exams</strong></p>
            <a href="#" class="close">close</a>
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
                        <h2 class="left">Exams</h2>
                    </div>
                    <!-- End Box Head -->
                    <!-- Table -->
<!--                    --><?php //var_dump($payroll)?>
                    <div class="table">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>date</th>
                                <th>time</th>
                                <th>duration</th>
                            </tr>
                            <?php if (isset($payroll) and $payroll != false) {
                                foreach ($payroll as $value) {
                                    echo '<tr>
                                                <td>'.$value->id.'</td>
                                                <td><h3>'.$value->name.'</h3></td>
                                                <td><h3>'.$value->date.'</h3></td>
                                                <td><h3>'.$value->amount.'</h3></td>
                                                <td><h3>'.$value->name.'</h3></td>
                                                <td><a href="'.base_url('dashboard/exam/delete/'.$value->id).'" class="ico del" onclick="return confirm(\' are you sure ?\')" >Delete</a></td>
                                        </tr>';
                                }

                            }?>
                        </table>


                        <!-- Pagging -->

                        <!-- End Pagging -->

                    </div>
                    <!-- Table -->

                </div>
            </div>
            <!-- End Content -->

            <!-- Sidebar -->
            <div id="sidebar">

                <!-- Box -->
                <div class="box">

                    <!-- Box Head -->
                    <div class="box-head">
                        <h2>Add new record</h2>
                    </div>
                    <!-- End Box Head-->

                    <div class="box-content">
                        <a href="#" class="add-button"><span>Add new record</span></a>
                        <div class="cl">&nbsp;</div>


                        <!-- Sort -->
                        <form action="<?php echo base_url('dashboard/payroll/add') ?>" name="addform" id="addform" method="POST">
                            <div class="sort form">
                                <div>
                                    <label for="staff">Staff</label>
                                    <select name="staff" id="staff" class="field" required="">
                                        <option value="" disabled selected >select staff</option>
                                        <?php foreach ($staff as $value) {
                                            echo '<option value="'.$value->id.'">'.$value->name.'</option>';
                                        } ?>
                                    </select>
                                </div>
                                <div>
                                    <label for="date">Date</label>
                                    <input type="text" required="" name="date" id="date" required="" placeholder="yyyy-mm-dd" class="field size5">
                                </div>
                                <div>
                                    <label for="amount">Amount</label >
                                    <input type="text" required="" name="amount" id="amount" class="field size5" />
                                </div>

                                <div class="buttons button-left">
                                    <input type="submit" class="button" value="submit" />
                                </div>
                            </div>
                        </form>
                        <!-- End Sort -->

                    </div>
                </div>
                <!-- End Box -->
            </div>
            <!-- End Sidebar -->

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