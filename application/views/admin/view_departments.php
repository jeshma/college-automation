<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="web design, web development, web site development, web site design, web design development, e-commerce, ecommerce, interactive, new media, development, Manjeri, hove, Manjeri web design, Manjeri ecommerce, Manjeri e-commerce, Manjeri web development, malappuram, content management, cms, web site, web sites, psybo, psybo technologies, psybotechnologies">
  <meta name="description" content="Psybo technologies is a small web design &amp; development agency based in Manjeri, Malappuram, INDIA. We've made a reputation for building websites that look great and are easy-to-use.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo base_url('img/ico.png');?>" type="image/png" sizes="47x54">
  <title><?php echo ucfirst($currentPage); ?> - Psybo Technologies</title>
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
      <?php echo dashboard_menu('portfolios');?>
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
   <table id="depart" class="table">
  <caption><h1>departments</h1></caption>
    <thead class="header">
      <tr>
        <th>id</th>
        <th>name</th>
        <th></th>
        <th><a class="width-80" href="<?php echo base_url('Admin_Controller/add_department') ?>">add</a></th>
      </tr>
    </thead>
    <tbody>
      <?php 
      if(isset($result) &&$result!=FALSE){
        foreach ($result as $key => $value){
          ?>
        <tr>
            <td class="width-80">
               <?php echo $value->id ?>
            </td>
            <td class="width-33">
               <a href="<?php echo base_url('Department_Controller/view/'.$value->id); ?>"><?php echo $value->name ?></a>
            </td>
            <td class="width-20">
               <a class="remove" href="<?php echo base_url('Department_Controller/delete/'.$value->id) ?>">Remove</a>
            </td>
          </tr>
      <?php } }?>
    </tbody>
  </table>
  </div>
</body>
</html>