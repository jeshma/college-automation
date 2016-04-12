<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
     <title>College Automation System : Home</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="<?php echo base_url('home/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="<?php echo base_url('home/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="<?php echo base_url('home/css/superslides.css')?>">
    <!-- Slick slider css file -->
    <link href="<?php echo base_url('home/css/slick.css')?>" rel="stylesheet">
    <!-- Circle counter cdn css file -->
<!--    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>-->
    <link rel='stylesheet prefetch' href='<?php echo base_url('home/css/themes/circliful.css')?>'>
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="<?php echo base_url('home/css/animate.css')?>">
    <!-- preloader -->
    <link rel="stylesheet" href="<?php echo base_url('home/css/queryLoader.css') ?>" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="<?php echo base_url('home/css/jquery.tosrus.all.css')?>" />
    <!-- Default Theme css file -->
    <link id="switcher" href="<?php echo base_url('home/css/themes/default-theme.css') ?>" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="<?php echo base_url('home/style.css')?>" rel="stylesheet">

    <!-- Google fonts -->
   <!--  <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>     -->

  </head>
  <body>

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.html">College <span>Automation System</span></a>
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->

            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="<?php echo base_url('index')?>">Home</a></li>
                <li><a href="<?php echo base_url('scholarship') ?>">Scholarship</a></li>
                <li><a href="<?php echo base_url('login') ?>">Login</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
      </div>
      <!-- END MENU -->
    </header>
    <!--=========== END HEADER SECTION ================-->
			<div>
				
				<form name="register"action="" method="post">
	<h2>APPLICATION FORM</h2>
	<BR/>
	<br/>
	
	NAME:<input type="text"name="NAME"ID="NAME"><br/><br/>
	DOB:<select name="day">
<option namevalue="1">1</option>
<option namevalue="2">2</option>
<option namevalue="3">3</option>
<option namevalue="4">4</option>
<option namevalue="5">5</option>
<option namevalue="6">6</option>
<option namevalue="7">7</option>
<option namevalue="8">8</option>
<option namevalue="9">9</option>
<option namevalue="10">10</option>
<option namevalue="11">11</option>
<option namevalue="12">12</option>
<option namevalue="13">13</option>
<option namevalue="14">14</option>
<option namevalue="15">15</option>
<option namevalue="16">16</option>
<option namevalue="17">17</option>
<option namevalue="18">18</option>
<option namevalue="19">19</option>
<option namevalue="20">20</option>
<option namevalue="21">21</option>
<option namevalue="22">22</option>
<option namevalue="23">23</option>
<option namevalue="24">24</option>
<option namevalue="25">25</option>
<option namevalue="26">26</option>
<option namevalue="27">27</option>
<option namevalue="28">28</option>
<option namevalue="29">29</option>
<option namevalue="30">30</option>
<option namevalue="31">31</option>
</select>
<select name="Month">
<option namevalue="1">1</option>
<option namevalue="2">2</option>
<option namevalue="3">3</option>
<option namevalue="4">4</option>
<option namevalue="5">5</option>
<option namevalue="6">6</option>
<option namevalue="7">7</option>
<option namevalue="8">8</option>
<option namevalue="9">9</option>
<option namevalue="10">10</option>
<option namevalue="11">11</option>
<option namevalue="12">12</option>
</select>
<select name="year">
<option namevalue="1990">1990</option>
<option namevalue="1991">1991</option>
<option namevalue="1992">1992</option>
<option namevalue="1993">1993</option>
<option namevalue="1994">1994</option>
<option namevalue="1995">1995</option>
<option namevalue="1996">1996</option>
<option namevalue="1997">1997</option>
<option namevalue="1998">1998</option>
<option namevalue="1999">1999</option>
<option namevalue="2000">2000</option>
</select>
<br/><br/>

ADDRESS:<textarea name="address" id="SADDRES"></textarea><br/><br/>
GENDER:</font></td><td><input type="radio"name="sex"value="M">M
<input type="radio"name="sex"value="F">F
<BR/><br/>
FATHER NAME:<input type="text"name="ufather" id="father"><br/><br/>
MOTHER NAME:<input type="text"name="umother" id="mother"><br/><br/>
PIN:<input type="tell" name="num" id="pin"><br/><br/>
INCOME:<input type="tell" name="in" id="income"><br/><br/>
NUMBER:<input type="tell" name="num" id="number"><br/><br/>
MAIL:<input type="mail" name="ma" id="mail"><br/><br/>
RELIGION&COMMUNITY:<input type="text" name="RELIGION" id="community"><br/><br/>
CAST:<input type="text"name="ucast"id="cast"><br/><br/>
PANCHAYATH:<input type="text"name="upanchayath"id="panchayath">
<br/><br/>
TALUK:<input type="text"name="uyaluk"id="taluk"><br/><br/>
DISTRICT:<input type="text"name="udistrict"id="dist"><br/><br/>
MARTIAL STATUS:<input type="radio" name="umartial"id="martial">Yes
<input type="radio" name="um"id="mart">No<br/><br/>
SPOUSE NAME:<input type="text"name="NAME"id="sname"><br/><br/>

LAST INSTITUTION:<input type="text"name="NAME" ID="last"><br/><br/>
PHYSICALLY HANDICAPPED:<input type="radio" name="uhand"id="hand">Yes
<input type="radio" name="phand"id="phand">No<br/><br/>
COURSE ID:<input type="text"name="Ucourse"id="cours"><br/><br/>
<input type="checkbox"name="agree"id="uagree">I agree to this<br/><br/>
<input type="submit" name="usubmit" id="submit" value="next">
<input type="submit" name="ucancel" id="cancel" value="cancel">
</form>

			</div>

    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>About Us</h3>
                <p>Jamia Nadwiyya Edavanna was established in 1964 by Kerala Nadvathul Mujahideen (KNM), a registered society for the religious and socio-cultural development of the muslims in Kerala. With a student strength of 2500 during the academic year 2007-’08, </p>J
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Community</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#">Our Tutors</a></li>
                  <li><a href="#">Our Students</a></li>
                  <li><a href="#">Our Team</a></li>
                  <li><a href="#">Forum</a></li>
                  <li><a href="#">News &amp; Media</a></li>
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Others</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#">Link 1</a></li>
                  <li><a href="#">Link 2</a></li>
                  <li><a href="#">Link 3</a></li>
                  <li><a href="#">Link 4</a></li>
                  <li><a href="#">Link 5</a></li>
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer top area -->

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> Copyright &copy; All Rights Reserved</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
                <p>Designed by students</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================-->



    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="<?php echo base_url('js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('js/jquery-ui.min.js')?>"></script>
    <script src="<?php echo base_url('js/jquery-1.11.1.min.js')?>"></script>

<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="<?php echo base_url('js/jquery-1.11.1.min.js') ?>"></script>
    <!-- Preloader js file -->
    <script src="<?php echo base_url('home/js/queryloader2.min.js') ?>" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="<?php echo base_url('home/js/wow.min.js') ?>"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url('home/js/bootstrap.min.js')?>"></script>
    <!-- slick slider -->
    <script src="<?php echo base_url('home/js/slick.min.js')?>"></script>
    <!-- superslides slider -->
    <script src="<?php echo base_url('home/js/jquery.easing.1.3.js')?>"></script>
    <script src="<?php echo base_url('home/js/jquery.animate-enhanced.min.js')?>"></script>
    <script src="<?php echo base_url('home/js/jquery.superslides.min.js') ?>" type="text/javascript" charset="utf-8"></script>
    <!-- for circle counter -->
<!--    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>-->
<!--    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>-->
    <script type="text/javascript" language="javascript" src="<?php echo base_url('js/jquery.circliful.min.js')?>"></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url('js/jquery.tosrus.min.all.js')?>"></script>

    <!-- <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>-->
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url('js/circle.js') ?>"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url('js/jquery.tosrus.min.all.js') ?>"></script>

    <!-- Custom js-->
    <script src="<?php echo base_url('home/js/custom.js') ?>"></script>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->


  </body>
</html>