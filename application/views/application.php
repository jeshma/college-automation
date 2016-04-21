
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
  <body style="padding-top: 80px">

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
                <li class="active"><a href="<?php echo base_url('registration')?>">registration</a></li>
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
			<!-- <form name="application"action=""method="post"> -->
            <div>
                <?php echo form_open(base_url('registration/submit'), ['name' => 'addform', 'id' => 'addform']); ?>
                    <h1>Application</h1>
                    <div class="form-group col-sm-4">
                        <label for="name" class="control-label">name</label>
                        <input type="text" name="name" id="name" class="form-control" required="">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="address">Address</label>
                        <textarea name="address" id="address"  class="form-control" rows="1" cols="10" required=""></textarea>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="guardian">Guardian</label>
                        <br/><br/><input type="text" name="guardian"  id="guardian" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="pin">Pin</label>
                        <input type="text" name="pin" id="pin" class="form-control" required="">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="course">course</label>
                        <input type="text" name="course" id="course" class="form-control" required="">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="firstlang">First Language</label>
                        <input type="text" name="firstlang" id="firstlang" class="form-control" required="">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="secondlang">Second Language</label>
                        <input type="text" name="secondlang" id="secondlang" class="form-control" required="">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="maths">maths</label>
                        <input type="text" name="maths" id="maths" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="english">English</label>
                        <input type="text" name="english" id="english" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="chemistry">Chemistry</label>
                        <input type="text" name="chemistry" id="chemistry" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="physics">Physics</label>
                        <input type="text" name="physics" id="physics" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="electronics">electronics</label>
                        <input type="text" name="electronics" id="electronics" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="zoology">zoology</label>
                        <input type="text" name="zoology" id="zoology" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="botony"></label>
                        <input type="text" name="botony" id="botony" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="bussiness">business</label>
                        <input type="text" name="bussiness" id="bussiness" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="accounting">accounting</label>
                        <input type="text" name="accounting" id="accounting" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="economics">economics</label>
                        <input type="text" name="economics" id="economics" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="politics">politics</label>
                        <input type="text" name="politics" id="politics" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="statistics">statistics</label>
                        <input type="text" name="statistics" id="statistics" class="form-control">
                    </div>
                    <div class="col-sm-12">
                        <input type="submit" name="submit" id="submit" value="submit" class="btn btn-default">
                        <input type="reset" name="cancel" id="cancel" value="reset" class="btn btn-danger">
                    </div>
                </form>
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
</html>