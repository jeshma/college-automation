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
    </nav>
	<?php if (isset($result)): ?>
		<?php foreach ($result as $key => $value): ?>
			<h3><?php echo $value->name ?></h3> 
		<?php endforeach ?>
	<?php endif ?>
	<form action="<?php echo base_url('Semester_Subject_Controller/add') ?>" name="addform" id="addform" method="post">
		<select name="subjects" id="subjects" required="">
		<option value="" disabled="" selected="">subjects</option>
		<?php foreach ($subjects as $key => $value): ?>
			<option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
		<?php endforeach ?>
		</select>
		<?php echo form_hidden('semester_id', $id); ?>
		<button name="addsubject" id="addsubject">Add subjects</button>
    
	</form>
	<?php if ($current_subject != false): ?>
		<?php foreach ($current_subject as $key => $value): ?>
					<div><?php echo $value->subject_name ?></div>
				<?php endforeach ?>		
	<?php endif ?>
	<?php if (isset($message)): ?>
		<?php echo $message; ?>
	<?php endif ?>
  <td class="width-20">
          <a class="remove" href="<?php echo base_url('Semester_Controller/delete/'.$value->id) ?>">Remove</a>
        </td>
	</body>

</html>