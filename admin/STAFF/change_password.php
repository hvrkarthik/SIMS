<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar_sims.php');   ?>
<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<h3> STAFF  </h3>
		</ul>
		
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-block">
				  <div class="widget-head">
						<h5><a href="staff.php">Add New </a></h5>
						
				  </div>
					<div class="widget-content">
						<div class="widget-box">

<?php
	if(isset($_POST['submit']))
	{
	$a=$_POST['new_pass'];
	$b=$_POST['c_new_pass'];
	
		include('db.php');
		$sql = "select * from user where username ='".$_SESSION['uname']."' and password='".$_POST['old_pass']."'";
		//echo $sql;
	if($a==$b)
	{
		$res = mysql_query($sql);
		if(mysql_num_rows($res)>0)
		{
			$sql1 = "update user set password = '".$_POST['new_pass']."' where username ='".$_SESSION['uname']."'";
			$res1 = mysql_query($sql1);
			?>
				<script>
					alert('Successfully updated your password');
					document.location="Home.php";
				</script>
			<?php
		} else
		{
			?>
				<script>
					alert('Failed to update your password');
					//document.location="change_password.php";
				</script>
			<?php
		}
	}else
		{
			?>
				<script>
					alert('New Password and Retype Password do not match');
					//document.location="change_password.php";
				</script>
			<?php
		}
	}	
?>


<script type="text/javascript" language="javascript">
//Script to check the user is already exist using AJAX
function checkPassword()
{
	var url = "checkPassword.php?password=";
	var old_pass = document.getElementById("old_pass").value;
	if(old_pass == "") 
	{ 
		document.getElementById('hint').innerHTML = "<input type=\"hidden\" id=\"status\" name=\"status\" value=\"\" />Old password cannot be blank";
		document.getElementById('hint').style.color="red";
		return;
	}
	url += escape(old_pass);
	div="hint";
	doAction(url,div);
}
</script>
<script language="javascript" src="file:///J|/data0/KSOU/KSOU/images/ajax.js"></script>

<style>
/* classes for validator */
	.tfvHighlight
		{font-weight: bold; color: red;}
	.tfvNormal
		{font-weight: normal;	color: black;}
</style>
<script language="JavaScript" src="file:///J|/data0/KSOU/KSOU/images/validator.js"></script>
<script>
// form fields description structure
var a_fields = {
	/*'title': {
		'l': 'Title',  // label
		'r': false,    // required
		'f': 'alpha',  // format (see below)
		't': 't_title',// id of the element to highlight if input not validated
		
		'm': null,     // must match specified form field
		'mn': 2,       // minimum length
		'mx': 10       // maximum length
	},*/
	'old_pass':{'l':'Old Password','r':true,'f':'','t':'t_old_pass'},
	'new_pass':{'l':'New Password','r':true,'f':'','t':'t_new_pass'},
	'c_new_pass':{'l':'Confirm Password','r':true,'f':'','t':'t_c_new_pass','m':'new_pass'},
	'status':{'l':'Old Password','r':true,'f':'','t':'t_old_pass'}
},
	
o_config = {
	'to_disable' : ['Submit', 'Reset'],
	'alert' : 1
}

// validator constructor call
var v = new validator('password', a_fields, o_config);	
</script>	


						
	<form name="password" enctype="multipart/form-data"method="post" onSubmit="return v.exec()">
<table width="80%" align="center">
	<tr>
		<td width="25%" style="font-weight:bold;" height="21" id="t_old_pass">Old Password</td>
		<td width="40%"><input type="password" name="old_pass" id="old_pass" style="width:200px;" onBlur="checkPassword();" /></td>
		<td width="35%" style="font-weight:bold;" height="21"><span id="hint"><input type="hidden" id="status" name="status" value="" /></span></td>
	</tr>
	<tr>
		<td style="font-weight:bold;" height="21" id="t_new_pass">New Password</td>
		<td><input type="password" name="new_pass" id="new_pass" style="width:200px;" /></td>
		<td style="font-weight:bold;" height="21"></td>
	</tr>
	<tr>
		<td style="font-weight:bold;" height="21" id="t_c_new_pass">Retype Password</td>
		<td><input type="password" name="c_new_pass" id="c_new_pass" style="width:200px;" /></td>
		<td style="font-weight:bold;" height="21"></td>
	</tr>
	<tr>
		<td colspan="3"><input type="submit" value="Submit" name="submit" />&nbsp;<input type="reset" name="reset" value="Reset" /></td>
	</tr>
</table>		
</form>		


</div>
					</div>
				</div>
			</div>
		</div>
		
        
	</div>
</div>


 <script src="js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js/jquery.dataTables.js"></script>
   <script type="text/javascript" src="js/DT_bootstrap.js"></script>
   <script src="js/dynamic-table.js"></script>
<?php include('footer.php');   ?>

