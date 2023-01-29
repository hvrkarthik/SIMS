<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar_sims.php');   ?>
<body>



<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<li><a href="#">Home</a><span class="divider">&raquo;</span></li>
			<li><a href="#">Library</a><span class="divider">&raquo;</span></li>
			<li class="active">Data</li>
		</ul>
		<div class="row-fluid">
			<div class="span12">
				<div class="nonboxy-widget">
					<div class="widget-head">
						<h5><i class="black-icons blocks_images"></i> STUDENT MARKS</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
<?php include('val.php'); ?>
<form name="formID" id="formID" method="post" action="student_marks_db.php">
  <table width="200" border="0" align="center">
    <tr>
      <td>ES_ID</td>
      <td><input name="es_id" type="text" id="es_id" class="validate[required]"></td>
    </tr>
    <tr>
      <td>STUD_ID</td>
      <td><input name="stud_id" type="text" id="stud_id" class="validate[required]"></td>
    </tr>
    <tr>
      <td>MARKS</td>
      <td><input name="marks" type="text" id="marks" class="validate[required]"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit">
      <input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
</form>

						</div>
					</div>
				</div>
			</div>
		</div>

<?php include('footer.php');   ?>

