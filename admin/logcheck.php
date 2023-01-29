<?php session_start(); ?>
<?php
	$username=$_POST["username"];
	$password=$_POST["pass"];	
	include('db.php');
	$sql="select * from user where username='$username' and password='$password'";
	$res=mysql_query($sql);
	if($row=mysql_fetch_array($res))
	{
	$type=$row["usertype"];
	
	$_SESSION["uname"]=$username;
	
	if($type=="admin")
	{
	?>
	<script>
	document.location="ADMIN/home.php";
	</script>
	<?php
	}
	
	else if($type=="staff")
	{
	?>
	<script>
	document.location="STAFF/home.php";
	</script>
	<?php
	}
	
	else if($type=="student")
	{
	?>
	<script>
	document.location="STUDENT/home.php";
	</script>
	<?php
	}
}
	
	else
	{
	?>
	<script>
	alert("Invalid User name Or Password");
	history.back();
	</script>
	<?php
	}
	?>