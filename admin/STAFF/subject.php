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
						<h5><i class="black-icons blocks_images"></i> SUBJECT</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
<?php include('val.php'); ?>
<form name="formID" id="formID" method="post" action="subject_db.php">
  <table width="200" border="0" align="center">
    <tr>
      <td>SUB_NAME</td>
      <td><input name="sub_name" type="text" id="sub_name" class="validate[required]"></td>
    </tr>
    <tr>
      <td>DESC</td>
      <td><input name="desc" type="text" id="desc" class="validate[required]"></td>
    </tr>
    <tr>
      <td>NO_OF_HOURS</td>
      <td><input name="no_of_hours" type="text" id="no_of_hours" class="validate[required]"></td>
    </tr>
    
	<tr>
      <td>CREDITS</td>
      <td><input name="credits" type="text" id="credits" class="validate[required]"></td>
    </tr>
    

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
