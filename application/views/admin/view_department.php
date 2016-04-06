<!doctype html>
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
      <?php echo dashboard_menu('departments');?>
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
    </nav><!-- 	<form action="<?php //echo base_url('Course_Controller/add') ?>" name="addform" id="addform" method="post"> -->	
 		<?php echo form_open(base_url('Course_Controller/add'),['name' => 'addform', 'id' => 'addform']); ?>
		<h2>Course Description</h2>
 		<?php echo validation_errors(); ?>
 		<div class="left">
	 		<div class="group">
				<label for="course">Add Course</label>
				<input type="text" name="course" id="course"><br>
	 		</div>
 		</div>
 		<div class="right">
	 		<div class="group">
				<label for="description">Description</label>
				<input type="text" name="description" id="description"><br>
	 		</div>
 		</div>
		<?php echo form_hidden('id', $id);?>
 		<div class="group">
			<button class="btn-bg">Add</button>
 		</div>
	</form>
	<table id="course" class="table">
		<caption><?php //echo $result[0]->name ?></caption>
		<?php 
		if(isset($result) and $result != FALSE){?>
		<?php 
		}?>
		<thead>
			<tr>
				<th>name</th>
			</tr>
		</thead>
		<tbody>
		<?php 

		if(isset($course) and $course != FALSE)
		{
		foreach ($course as $key => $value){
		 ?>
			<tr>
				<td class="width-80">
					<a href="<?php echo base_url('Course_Controller/view/'.$value->id) ?>"><?php echo $value->name ?></a>
				</td>
				<td class="width-20">
					<a class="remove" href="<?php echo base_url('Course_Controller/delete/'.$value->id) ?>">remove</a>
				</td>
			</tr>

		<?php } } ?>
		</tbody>
	</table>
	</div>
	<?php if (isset($error)) {
	echo $error;
}
if (isset($message)) {
	echo $message;
}
?>
</body>
</html>