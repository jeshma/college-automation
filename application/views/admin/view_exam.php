<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>admin-jamia  collage</title>
    <link rel="stylesheet" href="<?php echo base_url('admin/css/style.css')?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url('admin/css/jquery.timepicker.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('admin/css/jquery.timepicker.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('admin/css/jquery-ui.min.css');?>">

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
                Welcome <a href="<?php echo base_url('logout'); ?>"><strong>Logout</strong></a>
            </div>
        </div>
        <!-- End Logo + Top Nav -->

        <!-- Main Nav -->
        <div id="navigation">
            <?php echo dashboard_menu('exam')?>
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
                    <div class="table">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>Department</th>
                                <th>date</th>
                                <th>time</th>
                                <th>duration</th>
                            </tr>
                            <?php if (isset($result) and $result != false) {
                                foreach ($result as $value) {
                                    echo '<tr>
                                                <td>'.$value->id.'</td>
                                                <td><h3>'.$value->name.'</h3></td>
                                                <td><h3>'.$value->department_name.'</h3></td>
                                                <td><h3>'.$value->date.'</h3></td>
                                                <td><h3>'.$value->time.'</h3></td>
                                                <td><h3>'.$value->duration.'</h3></td>
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
                        <h2>Add new staffs</h2>
                    </div>
                    <!-- End Box Head-->

                    <div class="box-content">
                        <a href="#" class="add-button"><span>Add new staffs</span></a>
                        <div class="cl">&nbsp;</div>


                        <!-- Sort -->
                        <form action="<?php echo base_url('dashboard/exam/add') ?>" name="addform" id="addform" method="POST">
                            <div class="sort form">
                                <div>
                                    <label for="name">Name</label>
                                    <input type="text" required="" name="name" id="name" required="" class="field size5">
                                </div>
                                <div>
                                    <label for="date">date</label>
                                    <input type="text" required="" name="date" id="date" placeholder="yyyy-mm-dd" class="field size5">
                                </div>
                                <div>
                                    <label for="time">Time</label required="">
                                    <input type="text" required="" name="time" id="time" class="field size5" placeholder="hh:mm"/>
                                </div>
                                <div>
                                    <label for="duration">Duration</label>
                                    <select name="duration" id="duration" class="field">
                                        <option value="1:00">1:00 hr</option>
                                        <option value="1:30">1:30 hr</option>
                                        <option value="1:45">1:45 hr</option>
                                        <option value="2:00">2:00 hr</option>
                                        <option value="2:15">2:15 hr</option>
                                        <option value="2:30">2:30 hr</option>
                                        <option value="2:45">2:45 hr</option>
                                        <option value="3:00">3:00 hr</option>
                                        <option value="3:15">3:15 hr</option>
                                        <option value="3:30">3:30 hr</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="department">Department</label>
                                    <select name="departments" id="departments" class="field">
                                        <option value="" disabled selected>select department</option>
                                        <?php foreach ($departments as $value) {
                                            echo '<option value="'.$value->id.'">'.$value->name.'</option>';
                                        } ?>
                                    </select>
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