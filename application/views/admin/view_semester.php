<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>admin-jamia  collage</title>
    <link rel="stylesheet" href="<?php echo base_url('admin/css/style.css')?>" type="text/css" media="all" />
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
            <?php echo dashboard_menu('departments')?>
        </div>
        <!-- End Main Nav -->
        <div class="msg msg-error">
            <p><strong><?php echo $result[0]->name?> (Semester)</strong></p>
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
                        <h2 class="left">Subjects</h2>
                    </div>
                    <!-- End Box Head -->
                    <!-- Table -->
                    <!--                    --><?php //var_dump($result)?>
                    <div class="table">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
<!--                                								<th width="13"><input type="checkbox" class="checkbox" /></th>-->
                                <th>id</th>
                                <th>Subject name</th>
<!--                                								<th width="110" class="ac">Content Control</th>-->
                            </tr>
                            <?php if (isset($current_subject) and $current_subject != false) {
                                foreach ($current_subject as $value) {
                                    echo '<tr>
                                                <td>'.$value->id.'</td>
                                                <td><h3>'.$value->subject_name.'</h3></td>
                                                <td><a href="'.base_url('dashboard/department/course/semester/subject/delete/'.$value->id).'" class="ico del" onclick="return confirm(\' are you sure ?\')" >Delete</a></td>
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
                        <h2>Add new Subject</h2>
                    </div>
                    <!-- End Box Head-->

                    <div class="box-content">
                        <a href="#" class="add-button"><span>Add new subject</span></a>
                        <div class="cl">&nbsp;</div>


                        <!-- Sort -->
                        <form action="<?php echo base_url('dashboard/department/course/subject/add') ?>" name="addform" id="addform" method="POST">


                            <?php /*echo form_hidden('semester_id', $id); */?>
<!--                            <button name="addsubject" id="addsubject">Add subjects</button>-->


                            <div class="sort form">
                                <div>
                                    <select name="subjects" id="subjects" required="" class="field size5"> 
                                        <option value="" disabled="" selected="">subjects</option>
                                        <?php foreach ($subjects as $key => $value): ?>
                                        <option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <?php echo form_hidden('semester_id', $id);?>
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