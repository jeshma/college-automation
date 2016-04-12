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
                <li><a href="<?php echo base_url('registration') ?>">Registration</a></li>
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

    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="slider">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="slider_area">
            <!-- Start super slider -->
            <div id="slides">
              <ul class="slides-container">
                <li>
                  <img src="<?php echo base_url('home/img/slider/2.jpg') ?>" alt="img">
                   <div class="slider_caption">
                    <h2>Largest & Beautiful College</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <a class="slider_btn" href="#">Know More</a>
                  </div>
                  </li>
                <!-- Start single slider-->
                <li>
                  <img src="<?php echo base_url('home/img/slider/3.jpg')?>" alt="img">
                   <div class="slider_caption slider_right_caption">
                    <h2>Better Education Environment</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                    <a class="slider_btn" href="#">Know More</a>
                  </div>
                </li>
                <!-- Start single slider-->
                <li>
                  <img src="<?php echo base_url('home/img/slider/4.jpg')?>" alt="img">
                   <div class="slider_caption">
                    <h2>Find out you in better way</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                    <a class="slider_btn" href="#">Know More</a>
                  </div>
                </li>
              </ul>
              <nav class="slides-navigation">
                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
    <section id="aboutUs">
      <div class="container">
        <div class="row">
        <!-- Start about us area -->
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="aboutus_area wow fadeInLeft">
            <h2 class="titile">About Us</h2>
            <p>JAMIA NADWIYYA was established in 1964 by kerala nadvathul mujahideen,a registered society for religious and socio-cultural
     development of the muslims in kerala. With student strength of 2500 during the academic year 2007-'08, JNC has grown into a
     large campus spread over 27 acres of land and sufficient infrastructural facilities.a rich blend qualified and experienced
     academicians and researchers drawn from various disciplines handle the session for the student under going the undergraduate
     and postgraduate programmeat JNC. The programme equip the students withthrough knowledge of qurAn, hadith, litrature and
     historyand culture of muslims. Excellence innovation of are the key concern while designing the curriculim. In addition to
     import to knowledge,develop,specialized skill and foster attitudes essential forthe gorwth of students, Life at JNC moulds
     its student as good muslims who pracice the islamic way of life..</p>

          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="newsfeed_area wow fadeInRight">
            <ul class="nav nav-tabs feed_tabs" id="myTab2">
              <li class="active"><a href="#news" data-toggle="tab">News</a></li>
              <li><a href="#notice" data-toggle="tab">Notice</a></li>
              <li><a href="#events" data-toggle="tab">Events</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Start news tab content -->
              <div class="tab-pane fade in active" id="news">
                <ul class="news_tab">
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="<?php echo base_url('home/img/news.jpg') ?>" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Jamia Nadwiyya Edavanna was established in 1964 by Kerala Nadvathul Mujahideen (KNM)</a>
                       <span class="feed_date">27.02.15</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="<?php echo base_url('home/img/news.jpg')?>" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">VISION To evolve into a premier Arabic university</a>
                       <span class="feed_date">28.02.15</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="<?php echo base_url('home/img/news.jpg')?>" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Development of innovative teaching methods of Arabic</a>
                       <span class="feed_date">28.02.15</span>
                      </div>
                    </div>
                  </li>
                </ul>
                <a class="see_all" href="#">See All</a>
              </div>
              <!-- Start notice tab content -->
              <div class="tab-pane fade " id="notice">
                <div class="single_notice_pane">
                  <ul class="news_tab">
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="<?php echo base_url('home/img/news.jpg') ?>" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">DUse of modern technology in the development of teaching and research</a>
                         <span class="feed_date">27.02.15</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="<?php echo base_url('home/img/notice.jpg') ?>" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Organizing seminars, conferences and workshops for development of Arabic language and literature</a>
                         <span class="feed_date">28.02.15</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="<?php echo base_url('home/img/notice.jpg') ?>" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Popularization of the great classical works in Arabic through the Internet</a>
                         <span class="feed_date">28.02.15</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="news_tab">
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="<?php echo base_url('home/img/notice.jpg') ?>" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Development of modern research methodology in Arabic</a>
                         <span class="feed_date">27.02.15</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="<?php echo base_url('home/img/notice.jpg') ?>" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Conducting of processing and frontiers of Arabic extensive survey,</a>
                         <span class="feed_date">28.02.15</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="<?php echo base_url('home/img/notice.jpg') ?>" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Use of modern technology in the development of teaching and research</a>
                         <span class="feed_date">28.02.15</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Start events tab content -->
              <div class="tab-pane fade " id="events">
                <ul class="news_tab">
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="<?php echo base_url('home/img/news.jpg') ?>" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Development of innovative teaching methods of Arabic</a>
                       <span class="feed_date">27.02.15</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="<?php echo base_url('home/img/news.jpg') ?>" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Development of modern research methodology in Arabic</a>
                       <span class="feed_date">28.02.15</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="<?php echo base_url('home/img/news.jpg') ?>" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Conducting international level training camps and seminars</a>
                       <span class="feed_date">28.02.15</span>
                      </div>
                    </div>
                  </li>
                </ul>
                <a class="see_all" href="#">See All</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--=========== END ABOUT US SECTION ================-->

    <!--=========== BEGIN WHY US SECTION ================-->
    <section id="whyUs">
      <!-- Start why us top -->
      <div class="row">
        <div class="col-lg-12 col-sm-12">
          <div class="whyus_top">
            <div class="container">
              <!-- Why us top titile -->
              <div class="row">
                <div class="col-lg-12 col-md-12">
                  <div class="title_area">
                    <h2 class="title_two">Why Us</h2>
                    <span></span>
                  </div>
                </div>
              </div>
              <!-- End Why us top titile -->
              <!-- Start Why us top content  -->
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-desktop"></span>
                    </div>
                    <h3>Technology</h3>
                    <p>Development of modern research methodology in Arabic</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-users"></span>
                    </div>
                    <h3>Best Tutor</h3>
                    <p>To undertake research studies, consultancy and training programs related to theological and secular subjects.</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-flask"></span>
                    </div>
                    <h3>Practical Training</h3>
                    <p>To collaborate with other institutions for education, evaluation, research and extension work.</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-support"></span>
                    </div>
                    <h3>Support</h3>
                    <p>Popularization of the great classical works in Arabic through the Internet</p>
                  </div>
                </div>
              </div>
              <!-- End Why us top content  -->
            </div>
          </div>
        </div>
      </div>
      <!-- End why us top -->

      <!-- Start why us bottom -->
      <div class="row">
        <div class="col-lg-12 col-sm-12">
          <div class="whyus_bottom">
            <div class="slider_overlay"></div>
            <div class="container">
              <div class="skills">
                <!-- START SINGLE SKILL-->
                <div class="col-lg-3 col-md-3 col-sm-3">
                 <div class="single_skill wow fadeInUp">
                   <div id="myStat" data-dimension="150" data-text="35%" data-info="" data-width="10" data-fontsize="25" data-percent="35" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div>
                    <h4>Repeate Learners</h4>
                  </div>
                </div>
                <!-- START SINGLE SKILL-->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_skill wow fadeInUp">
                    <div id="myStathalf2" data-dimension="150" data-text="90%" data-info="" data-width="10" data-fontsize="25" data-percent="90" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div>
                    <h4>Success Rate</h4>
                  </div>
                </div>
                <!-- START SINGLE SKILL-->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_skill wow fadeInUp">
                    <div id="myStat2" data-dimension="150" data-text="100%" data-info="" data-width="10" data-fontsize="25" data-percent="100" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div>
                    <h4>Student Engagement</h4>
                  </div>
                </div>
                <!-- START SINGLE SKILL-->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_skill wow fadeInUp">
                    <div id="myStat3" data-dimension="150" data-text="85%" data-info="" data-width="10" data-fontsize="25" data-percent="65" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div>
                    <h4>Certified Courses</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End why us bottom -->
    </section>
    <!--=========== END WHY US SECTION ================-->

    <!--=========== BEGIN OUR COURSES SECTION ================-->
    <section id="ourCourses">
      <div class="container">
       <!-- Our courses titile -->
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="title_area">
              <h2 class="title_two">Our Courses</h2>
              <span></span>
            </div>
          </div>
        </div>
        <!-- End Our courses titile -->
        <!-- Start Our courses content -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourCourse_content">
              <ul class="course_nav">
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="<?php echo base_url('home/img/course-1.jpg') ?>" />
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">BCA</a></h3>

                    <p class="singCourse_price"><span>19000</span> Per Semster</p>
                    <p>Bachelor of Computer Application is a 3 years under-graduate degree course in the field of Computer Application. Some students use online or distance education programs to earn this degree.</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="<?php echo base_url('home/img/author.jpg') ?>" alt="img">
                      <p>Richard Remus, Teacher</p>

                    <p> the Department of Computer Science offers under graduate and post-graduate programmes in Computer Science. </p>

                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="<?php echo base_url('home/img/course-2.jpg') ?>" />
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">BCOM</a></h3>
                    <p class="singCourse_price"><span>9000</span> Per Semester</p>
                    <p>A Bachelor of Commerce is a 3 years under-graduate degree course in the field of Commerce. Some students use online or distance education programs to earn this degree..</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="<?php echo base_url('home/img/author.jpg') ?>" alt="img">
                      <p>Richard Remus, Teacher</p>

                    <h3 class="singCourse_title"><a href="#">Bsc physics</a></h3>
                    <p>Cureently the department priovides facilities for academic instructions at the undergraduate and post-graduate levels</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="<?php echo base_url('home/img/course-1.jpg') ?>" />
                    </div>
                    <div class="singCourse_content">

                    <h3 class="singCourse_title"><a href="#">BBA</a></h3>
                    <p class="singCourse_price"><span>10000</span> Per Semester</p>
                    <p>The Bachelor of Business Administration is a 3 years under-graduate degree course in the fieldcommerce and business administration.Some students use online or distance education programs to earn this degree..</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="<?php echo base_url('home/img/author.jpg') ?>" alt="img">
                      <p>Richard Remus, Teacher</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="<?php echo base_url('home/img/course-2.jpg') ?>" />
                      <div class="mask">
                        <a href="#" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">BA</a></h3>
                    <p class="singCourse_price"><span>9000</span> Per Semester</p>
                    <p>B.A. Communicative English - Stands for Bachelor of Arts in Communicative English. Typically, a B.A. is a three year course,English is the study of literature, linguistics and philosophy of the English language.</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="<?php echo base_url('home/img/author.jpg') ?>" alt="img">
                      <p>Richard Remus, Teacher</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="<?php echo base_url('home/img/course-1.jpg') ?>" />
                      <div class="mask">
                        <a href="#" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">MSC</a></h3>
                    <p class="singCourse_price"><span>18000</span> Per Semster</p>
                    <p>A Master of Science degree is a type of master's degree.The degree is usually contrasted with the Master of Arts degree. The Master of Science degree is typically granted for studies in sciences, engineering, and medicine, and is usually for programs that are more focused on scientific and mathematical subjects.</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="<?php echo base_url('home/img/author.jpg') ?>" alt="img">
                      <p>Richard Remus, Teacher</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="<?php echo base_url('home/img/course-1.jpg') ?>" />
                      <div class="mask">
                        <a href="#" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">MCOM</a></h3>
                    <p class="singCourse_price"><span>15000</span> Per Semster</p>
                    <p>Master of Commerce is a postgraduate Masters Degree focusing on commerce-, accounting-, management- and economics-related subjects. Like the undergraduate Bachelor of Commerce, the degree is offered in Commonwealths nations.</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="<?php echo base_url('home/img/author.jpg') ?>" alt="img">
                      <p>Richard Remus, Teacher</p>
                    </div>
                  </div>
                </li>

                    <h3 class="singCourse_title"><a href="#">Ba arabic</a></h3>
                    <p>The Arabic Department has a tradition as old as the College itself.</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Our courses content -->
      </div>
    </section>
    <!--=========== END OUR COURSES SECTION ================-->

    <!--=========== BEGIN OUR TUTORS SECTION ================-->
    <!-- <section id="ourTutors">
     <div class="container">
      Our courses titile
       <div class="row">
         <div class="col-lg-12 col-md-12">
           <div class="title_area">
             <h2 class="title_two">Our Tutors</h2>
             <span></span>
           </div>
         </div>
       </div>
       End Our courses titile

       Start Our courses content
       <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
           <div class="ourTutors_content">
             Start Tutors nav
             <ul class="tutors_nav">
               <li>
                 <div class="single_tutors">
                   <div class="tutors_thumb">
                     <img src="img/author.jpg" />
                   </div>
                   <div class="singTutors_content">
                     <h3 class="tutors_name">Jame Burns</h3>
                     <span>Technology Teacher</span>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                   </div>
                   <div class="singTutors_social">
                     <ul class="tutors_socnav">
                       <li><a class="fa fa-facebook" href="#"></a></li>
                       <li><a class="fa fa-twitter" href="#"></a></li>
                       <li><a class="fa fa-instagram" href="#"></a></li>
                       <li><a class="fa fa-google-plus" href="#"></a></li>
                     </ul>
                   </div>
                 </div>
               </li>
               <li>
                 <div class="single_tutors">
                   <div class="tutors_thumb">
                     <img src="img/course-1.jpg" />
                   </div>
                   <div class="singTutors_content">
                     <h3 class="tutors_name">Jame Burns</h3>
                     <span>Technology Teacher</span>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                   </div>
                   <div class="singTutors_social">
                     <ul class="tutors_socnav">
                       <li><a class="fa fa-facebook" href="#"></a></li>
                       <li><a class="fa fa-twitter" href="#"></a></li>
                       <li><a class="fa fa-instagram" href="#"></a></li>
                       <li><a class="fa fa-google-plus" href="#"></a></li>
                     </ul>
                   </div>
                 </div>
               </li>
               <li>
                 <div class="single_tutors">
                   <div class="tutors_thumb">
                     <img src="img/author.jpg" />
                   </div>
                   <div class="singTutors_content">
                     <h3 class="tutors_name">Jame Burns</h3>
                     <span>Technology Teacher</span>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                   </div>
                   <div class="singTutors_social">
                     <ul class="tutors_socnav">
                       <li><a class="fa fa-facebook" href="#"></a></li>
                       <li><a class="fa fa-twitter" href="#"></a></li>
                       <li><a class="fa fa-instagram" href="#"></a></li>
                       <li><a class="fa fa-google-plus" href="#"></a></li>
                     </ul>
                   </div>
                 </div>
               </li>
               <li>
                 <div class="single_tutors">
                   <div class="tutors_thumb">
                     <img src="img/course-1.jpg" />
                   </div>
                   <div class="singTutors_content">
                     <h3 class="tutors_name">Jame Burns</h3>
                     <span>Technology Teacher</span>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                   </div>
                   <div class="singTutors_social">
                     <ul class="tutors_socnav">
                       <li><a class="fa fa-facebook" href="#"></a></li>
                       <li><a class="fa fa-twitter" href="#"></a></li>
                       <li><a class="fa fa-instagram" href="#"></a></li>
                       <li><a class="fa fa-google-plus" href="#"></a></li>
                     </ul>
                   </div>
                 </div>
               </li>
               <li>
                 <div class="single_tutors">
                   <div class="tutors_thumb">
                     <img src="img/author.jpg" />
                   </div>
                   <div class="singTutors_content">
                     <h3 class="tutors_name">Jame Burns</h3>
                     <span>Technology Teacher</span>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                   </div>
                   <div class="singTutors_social">
                     <ul class="tutors_socnav">
                       <li><a class="fa fa-facebook" href="#"></a></li>
                       <li><a class="fa fa-twitter" href="#"></a></li>
                       <li><a class="fa fa-instagram" href="#"></a></li>
                       <li><a class="fa fa-google-plus" href="#"></a></li>
                     </ul>
                   </div>
                 </div>
               </li>
               <li>
                 <div class="single_tutors">
                   <div class="tutors_thumb">
                     <img src="img/course-1.jpg" />
                   </div>
                   <div class="singTutors_content">
                     <h3 class="tutors_name">Jame Burns</h3>
                     <span>Technology Teacher</span>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                   </div>
                   <div class="singTutors_social">
                     <ul class="tutors_socnav">
                       <li><a class="fa fa-facebook" href="#"></a></li>
                       <li><a class="fa fa-twitter" href="#"></a></li>
                       <li><a class="fa fa-instagram" href="#"></a></li>
                       <li><a class="fa fa-google-plus" href="#"></a></li>
                     </ul>
                   </div>
                 </div>
               </li>
             </ul>
           </div>
         </div>
       </div>
       End Our courses content
     </div>
    </section> -->
    <!--=========== END OUR TUTORS SECTION ================-->

    <!--=========== BEGIN STUDENTS TESTIMONIAL SECTION ================-->
    <!-- <section id="studentsTestimonial">
      <div class="container">
       Our courses titile
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="title_area">
              <h2 class="title_two">What our Student says</h2>
              <span></span>
            </div>
          </div>
        </div>
        End Our courses titile

        Start Our courses content
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="studentsTestimonial_content">
              <div class="row">
                start single student testimonial
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <div class="stsTestimonial_msgbox">
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    </div>
                    <img class="stsTesti_img" src="<?php echo  base_url('home/img/author.jpg') ?>" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Johnathan Doe</h3>
                      <span>Ex. Student</span>
                      <p>Software Department</p>
                    </div>
                  </div>
                </div>
                End single student testimonial
                start single student testimonial
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <div class="stsTestimonial_msgbox">
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book.scrambled it to make a type specimen book</p>
                    </div>
                    <img class="stsTesti_img" src="<?php echo  base_url('home/img/author.jpg') ?>" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Johnathan Doe</h3>
                      <span>Ex. Student</span>
                      <p>Software Department</p>
                    </div>
                  </div>
                </div>
                End single student testimonial
                start single student testimonial
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <div class="stsTestimonial_msgbox">
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    </div>
                    <img class="stsTesti_img" src="<?php echo  base_url('home/img/author.jpg') ?>" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Johnathan Doe</h3>
                      <span>Ex. Student</span>
                      <p>Software Department</p>
                    </div>
                  </div>
                </div>
                End single student testimonial
              </div>
            </div>
          </div>
        </div>
        End Our courses content
      </div>
    </section> -->
    <!--=========== END STUDENTS TESTIMONIAL SECTION ================-->

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