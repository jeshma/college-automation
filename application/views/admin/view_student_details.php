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
      <?php echo dashboard_menu('students');?>
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
    


<h1>Student Details</h1>
<?php 
  if(isset($result)){
   ?>


<table class="table">
<tr>
  <th>id</th>
	<th>name</th>
	<th>dob</th>
	<th>address</th>
	<th>gender</th>
	<th>father</th>
	<th>mother</th>
	<th>pin</th>
	<th>income</th>
	<th>mail</th>
	<th>community</th>
	<th>cast</th>
	<th>panchayath</th>
	<th>taluk</th>
	<th>district</th>
	<th>mertial_status</th>
	<th>spouse</th>
	<th>institute</th>
	<th>physical</th>


<?php 

 foreach ($result as $key => $value)
 	{?>
  
    <tr>
     <td class="width-80">
               <?php echo $value->id ?>
            </td>
 			<td><?php echo $value->name ?></td>
 			<td><?php echo $value->dob ?></td>
 			<td><?php echo $value->address ?></td>
 			<td><?php echo $value->gender ?></td>
 			<td><?php echo $value->father ?></td>
 			<td><?php echo $value->mother ?></td>
 			<td><?php echo $value->pin ?></td>
 			<td><?php echo $value->income ?></td>
 			<td><?php echo $value->number ?></td>
 			<td><?php echo $value->mail ?></td>
 			<td><?php echo $value->religion_community ?></td>
 			<td><?php echo $value->cast ?></td>
 			<td><?php echo $value->panchayath ?></td>
 			<td><?php echo $value->taluk ?></td>
 			<td><?php echo $value->district ?></td>
 			<td><?php echo $value->martia_status ?></td>
 			<td><?php echo $value->spouse_name_address ?></td>
 			<td><?php echo $value->institution_last_attend ?></td>
 			<td><?php echo $value->physically_handicapped ?></td>
 			
 	</tr>	
 	</tr>
 	
 <?php 
        }}?>

  </table>
 
</body>
</html>