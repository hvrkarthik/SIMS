
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
						<h5><i class="black-icons blocks_images"></i> COURSE DETAILS</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
<?php include('val.php'); ?>
<form name="formID" id="formID" method="post" action="course_db.php">
  <table width="200" border="0" align="center">
    <tr>
      <td scope="col"><strong>COURSE NAME</strong></td>
      <td scope="col"><input name="name" type="text" id="name" class="validate[required]"></td>
    </tr>
    <tr>
      <td>DESC</td>
      <td><input name="desc" type="text" id="desc" class="validate[required]"></td>
    </tr>
    <tr>
      <td height="46">FEES</td>
      <td><input name="fees" type="text" id="fees" class="validate[required]"></td>
    </tr>
    <tr>
      <td height="45">&nbsp;</td>
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











