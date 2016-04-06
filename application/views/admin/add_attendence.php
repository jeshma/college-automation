<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="web design, web development, web site development, web site design, web design development, e-commerce, ecommerce, interactive, new media, development, Manjeri, hove, Manjeri web design, Manjeri ecommerce, Manjeri e-commerce, Manjeri web development, malappuram, content management, cms, web site, web sites, psybo, psybo technologies, psybotechnologies">
  <meta name="description" content="Psybo technologies is a small web design &amp; development agency based in Manjeri, Malappuram, INDIA. We've made a reputation for building websites that look great and are easy-to-use.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo base_url('img/ico.png');?>" type="image/png" sizes="47x54">
  <title>Jamia Collage</title>
  <link rel="stylesheet" href="<?php echo base_url('css/styleapp.css');?>">
  <script type="text/javascript" src="<?php echo base_url('js/appjs.js');?>"></script>
  <style>
      #img{
          width: 10px;
          height: 10px;
      }
  </style>
</head>
<body>
  <div class="page-wrapper">
    <div class="left-wrapper">
      <?php echo dashboard_menu('attendence');?>
    </div>
  
    <nav class="top-wrapper">
      <div class="sidebar-top">
        <button class="humburger pull-left">
          <i class="fa fa-bars fa-2x center-block"></i>
        </button>
        <ul class="menu-top pull-right">
          <li><a href="#"><i class="fa fa-envelope-o fa-lg"></i></a></li>
          <li><a href="#"><i class="fa fa-bell-o fa-lg"></i></a></li>
          <li><a href="#"><i class="fa fa-cog fa-lg"></i></a></li>
          <li>
            <a href="<?php echo base_url('dashboard/logout');?>">logout</a>
          </li>
        </ul>
      </div>
    </nav>
<!-- <form name="attendance" action="add_attendence" method="post" accept-charset="utf-8"> -->
	<h3>add attendence</h3>
	<!-- select department : <select name="department" id="department">
		<option value="1">dep1</option>
		<option value="2">dep2</option>
		<option value="3">dep3</option>
	</select><br> -->
	<?php echo form_open(base_url('Attendence_Controller/add_attendence'),['id' => 'attendence','name' => 'attendence' ]) ?>
<!-- 	<?php //echo validation_error(); ?>
	 -->	<label for="staff">Select Staff :</label> 
	<select name="staff" id="staff">
		<?php foreach ($staffs as $value) {
			echo '<option value="'.$value->id.'">'.$value->name.'</option>';
		} ?>
	</select><br>
	<label for="attendence">Attendence :</label>	
	<input type="text" id="attendence" name="attendence">
	<input type="submit" value="submit" id="submit">
	</form>
	<?php if (isset($error)) {
	echo $error;
}
if (isset($message)) {
	echo $message;
}

 ?>
 </div>
</body>
</html>