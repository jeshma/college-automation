
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>admin-jamia  collage</title>
    <link rel="stylesheet" href="<?php echo base_url('admin/css/style.css')?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url('admin/css/jquery.timepicker.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('admin/css/jquery.timepicker.min.css');?>">

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
            <?php echo dashboard_menu('applications')?>
        </div>
        <!-- End Main Nav -->
        <div class="msg msg-error">
            <p><a href="<?php echo base_url('dashboard/applications') ?>"><strong>Applications</strong></a>  |  <a href="<?php echo base_url('dashboard/applications/selected') ?>"><strong>Selected</strong></a> | <a href="<?php echo base_url('dashboard/applications/approved') ?>"><strong>Approved</strong></a></p>
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
            <div id="content" >

                <!-- Box -->
                <div class="box" >
                    <!-- Box Head -->
                    <div class="box-head" >
                        <h2 class="left">Selected Applications</h2>
                    </div>
                    <!-- End Box Head -->
                    <!-- Table -->
                    <div class="table">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th>name</th>
                                <th>address</th>
                                <th>guardian_name</th>
                                <th>pin</th>
                                <th>course</th>
                                <th>first_lang</th>
                                <th>second_lang</th>
                                <th>maths</th>
                                <th>english</th>
                                <th>chemistry</th>
                                <th>electronics</th>
                                <th>zoology</th>
                                <th>botony</th>
                                <th>bussiness</th>
                                <th>accounting</th>
                                <th>economics</th>
                                <th>politics</th>
                                <th>statistics</th>
                                <th>Status</th>
                            </tr>
                            <?php if (isset($result) and $result != false) {
                                foreach ($result as $value) {
                                    echo '<tr>
                                           <td>'.$value->name.'</td>
                                            <td>'.$value->address.' </td>
                                            <td>'.$value->guardian_name.' </td>
                                            <td>'.$value->pin.' </td>
                                            <td>'.$value->course.' </td>
                                            <td>'.$value->firstlang.' </td>
                                            <td>'.$value->secondlang.' </td>
                                            <td>'.$value->maths.' </td>
                                            <td>'.$value->english.' </td>
                                            <td>'.$value->chemistry.' </td>
                                            <td>'.$value->electronics.' </td>
                                            <td>'.$value->zoology.' </td>
                                            <td>'.$value->botony.' </td>
                                            <td>'.$value->bussiness.' </td>
                                            <td>'.$value->accounting.' </td>
                                            <td>'.$value->economics.' </td>
                                            <td>'.$value->politics.' </td>
                                            <td>'.$value->statistics.' </td>
                                            <td>'.$value->status.' </td>
                                            <td><a href="'.base_url('dashboard/applications/reject/'.$value->id).'" class="ico del" onclick="return confirm(\' are you sure ?\')" >reject</a></td>
                                            <td><a href="'.base_url('dashboard/applications/approve/'.$value->id) .'">approve</a></td>
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