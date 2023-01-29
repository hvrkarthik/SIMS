

<?php include('../session_validator.php'); ?>

<?php
if(isset($_POST['submit']))
{
 include('../dbConnect.php');
 $course = $_POST['course'];
 
 $sub = $_POST['old_sub'];
 $sem=$_POST['sem'];
 if($sub != NULL)
 {
	 foreach ($sub as $val)
	 {
		echo $val;
		$sql = "delete from course_subject where subject_id = $val and course_id = $course and sem=$sem";
		$res = mysql_query($sql);
	 }
}
 
 $sub = $_POST['new_sub'];
 if($sub != NULL)
 {
	 foreach ($sub as $val)
	 {
		$sql = "insert into course_subject values(NULL, '$course','$val','$sem')";
		$res = mysql_query($sql);
	 }
}
?>
<script>
	location.href = "subject2course.php";
</script>
<?php 
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('meta.php');?>
    <link type="text/css" href="css/custom_css/panel.css" rel="stylesheet" />
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="vendors/summernote/summernote.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="vendors/tags/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link type="text/css" href="vendors/select2/css/select2.min.css" rel="stylesheet" />
    <link type="text/css" href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link type="text/css" href="vendors/bootstrapvalidator/dist/css/bootstrapValidator.css" rel="stylesheet" />
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/add_news.css" rel="stylesheet" />
    <!--end of page level css-->
	
	<script language="javascript" src="js/ajax.js"></script>
<script language="javascript">
function getSubject(){
	var url = "getSubject.php?course_id=";
	var course_id = document.getElementById('course').value;
	var sem = document.getElementById('sem').value;
	if(course_id == "") 
	{ 	
		document.getElementById('subject').innerHTML = "<table align=\"center\" width=\"75%\"><tr><td width=\"160\" class=\"hr\" height=\"30\">&nbsp;Select Subjects : </td><td class=\"dr\">&nbsp;Select Courses </td></tr></table>";
		return;
	}
	url += escape(course_id);
	url+="&sem="+escape(sem);
	var div = "subject";
	var i = doAction(url,div);	
}

function checkForm()
{
	var course = document.getElementById('course').value;
		var sem = document.getElementById('sem').value;
	if(course == "" )
	{
		alert('Please select course');
		return false;
	} 
	else if(sem == "" )
	{
		alert('Please select sem');
		return false;
	} 
	else
	{
		return true;
	}
}
</script>
<link href="../images/grid_style.css" rel="stylesheet" type="text/css" />


	
</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    <?php include('header.php');?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <?php include('side_menu.php');?>
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2>Add Subject 2 Course Details</h2>
                
                
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <!--main content-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <i class="fa fa-fw fa-file-text-o"></i> Add Subject 2 Course Details
                                </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" name="course" onsubmit="return checkForm();" action="subject2course.php"  class="form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="title" class="col-md-3 control-label">
                                                        Select Course
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-file-text-o"></i>
                                                            </span>
															
															<select name="course" id="course" onChange="getSubject();" class="form-control">
																<option value="">Select</option>
																<?php
																include('../dbConnect.php');
																$sql = "select * from course";
																$res = mysql_query($sql);
																while($row = mysql_fetch_array($res))
																{
																?>
																	<option value="<?php echo $row['course_id']; ?>"><?php echo $row['name']; ?></option>
																<?php
																}
																?>
															</select>
															
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">
                                                        Select Year
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <select name="sem" id="sem" onChange="getSubject();" class="form-control">
																<option value="11">1A</option>
																<option value="12">1B</option>
																<option value="21">2A</option>
																<option value="22">2B</option>
																
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
											
											<div class="form-group">
                                                    <label class="col-md-3 control-label" for="date">
                                                        Show Subjects :
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class='input-group date datetimepicker4'>
                                                            		<div id="subject">
																		
																			&nbsp;Select Courses 
																		
																	</div>

                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                              </div>
												
												
											
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <input type="submit" name="submit" class="mahesh btn btn-primary" value="Submit"> &nbsp;
                                                        <input type="button" class="btn btn-danger" value="Cancel"> &nbsp;
                                                        <input type="reset" id="add-news-reset-editable" class="btn btn-default" value="Reset">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col-md-6 -->
                <!--row -->
                <!--row ends-->
            </div>
            <!-- /.content -->
        </aside>
        <!-- /.right-side -->
    </div>
    <!-- /.right-side -->
    <!-- ./wrapper -->
    <!-- global js -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of page level js -->


    <!-- begining of page level js -->
    <script src="vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
    <script src="vendors/summernote/summernote.min.js" type="text/javascript"></script>
    <script src="vendors/tags/dist/bootstrap-tagsinput.js" type="text/javascript"></script>
    <script src="vendors/select2/js/select2.full.js" type="text/javascript"></script>
    <script src="vendors/moment/moment.js" type="text/javascript"></script>
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    <script src="js/custom_js/add_news.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <script>
    </script>
</body>

</html>




