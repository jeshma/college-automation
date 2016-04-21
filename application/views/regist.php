<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	

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
                <li class="active"><a href="<?php echo base_url('registration')?>">Registration</a></li>
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
	<div class="group">
  <div>
      <label for="name">Name</label>
  	  NAME:<input type="text"name="name" id="name"><br/><br/>
  </div>
  <div>
    <label for="day"></label>
  	<input type="text" name="day" id="day"></input>
  </div>
  <div>
    <label for="address">Address</label>
    ADDRESS:<textarea name="address" id="address"></textarea><br/><br/>
  </div>
  <div>
    <label for="sex">Gender</label>
    GENDER:</font></td><td><input type="radio"name="sex"value="M">M
    <input type="radio"name="sex"value="F">F
  </div>
  <div>
    <label for="father">Father</label>
    FATHER NAME:<input type="text"name="ufather" id="father"><br/><br/>
  </div>
  <div>
    <label for="mother"></label>
MOTHER NAME:<input type="text"name="umother" id="mother"><br/><br/>
  </div>
  <div>
    <label for="pin"></label>
PIN:<input type="text" name="pin" id="pin"><br/><br/>
  </div>
  <div>
    <label for="income"></label>
INCOME:<input type="text" name="income" id="income"><br/><br/>
  </div>
  <div>
    <label for="phone"></label>
NUMBER:<input type="text" name="phone" id="phone"><br/><br/>
  </div>
  <div>
    <label for="mail"></label>
MAIL:<input type="mail" name="mail" id="mail"><br/><br/>
  </div>
  <div>
    <label for="comunity"></label>
RELIGION&COMMUNITY:<input type="text" name="religion" id="community"><br/><br/>
  </div>
  <div>
    <label for="cast"></label>
  CAST:<input type="text"name="ucast"id="cast"><br/><br/>
  </div>
  <div>
    <label for="panchayath"></label>
PANCHAYATH:<input type="text"name="panchayath"id="panchayath">
  </div>
<br/><br/>
<div>
  <label for="taluk"></label>
TALUK:<input type="text"name="taluk"id="taluk"><br/><br/>
</div>
<div>
  <label for="district"></label>
DISTRICT:<input type="text"name="district"id="dist"><br/><br/>
</div>
<div>
  <label for="merital">Marital status</label>
  <select name="marital" id="marital">
    <option value="yes">yes</option>
    <option value="no">no</option>
  </select>
</divi>
<div>
  <label for="spouse_name"></label>
SPOUSE NAME:<input type="text"name="spouse_name"id="spouse_name"><br/><br/>
</div>

di
LAST INSTITUTION:<input type="text"name="NAME" ID="last"><br/><br/>
PHYSICALLY HANDICAPPED:<input type="radio" name="uhand"id="hand">Yes
<input type="radio" name="phand"id="phand">No<br/><br/>
COURSE ID:<input type="text"name="Ucourse"id="cours"><br/><br/>
<input type="checkbox"name="agree"id="uagree">I agree to this<br/><br/>
<input type="submit" name="usubmit" id="submit" value="submit">
<input type="submit" name="ucancel" id="cancel" value="cancel">
</form>
<?php if (isset($error))
 {
	echo $error;
}

if (isset($message)) 

{
	echo $message;
}?>

</div>
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
>>>>>>> 24cea2d2f728f78104c348fc68d4f5404dfde5c5
</html>