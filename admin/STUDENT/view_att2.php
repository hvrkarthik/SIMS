<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<script>

function getAttendance()
{
	//alert(document.getElementById('subject').value);
	if(document.getElementById('month').value == "") 
	{ 	
		document.getElementById('result').innerHTML = "<strong>Select Year</strong>";
		return;
	} else
	{
		document.atten.submit();
	}
}

</script>
</head>

<body onload="window.print();">
<?php
include('db.php');
	$course_id=$_POST['course_id'];
$sem=$_POST['sem'];
$cs_id=$_POST['cs_id'];



$sql = "select * from course_subject cs, subject s,course c where cs.course_id=c.course_id and cs.subject_id=s.subject_id and cs.cs_id='$cs_id'";
//echo $sql;
$res = mysql_query($sql);
$row1 = mysql_fetch_array($res);
$subject_id=$row1['subject_id'];

$mon = date('m');
$year = date('Y');

if(isset($_POST['month'])) $mon = $_POST['month'];
if(isset($_POST['year'])) $year = $_POST['year'];
//echo $subject_id." ".$mon." ".$year;
?>
<form name="atten" action="view_att2.php" method="post">
<table align="center">
			<tr>
				<td><strong>&nbsp;Month :</strong></td>
				<td><select name="month" id="month" onchange="getAttendance();">
					<option value="01" <?php if($mon == "01") echo "selected=\"selected\"" ?>>January</option>
					<option value="02" <?php if($mon == "02") echo "selected=\"selected\"" ?>>February</option>
					<option value="03" <?php if($mon == "03") echo "selected=\"selected\"" ?>>March</option>
					<option value="04" <?php if($mon == "04") echo "selected=\"selected\"" ?>>April</option>
					<option value="05" <?php if($mon == "05") echo "selected=\"selected\"" ?>>May</option>
					<option value="06" <?php if($mon == "06") echo "selected=\"selected\"" ?>>June</option>
					<option value="07" <?php if($mon == "07") echo "selected=\"selected\"" ?>>July</option>
					<option value="08" <?php if($mon == "08") echo "selected=\"selected\"" ?>>August</option>
					<option value="09" <?php if($mon == "09") echo "selected=\"selected\"" ?>>September</option>
					<option value="10" <?php if($mon == "10") echo "selected=\"selected\"" ?>>October</option>
					<option value="11" <?php if($mon == "11") echo "selected=\"selected\"" ?>>November</option>
					<option value="12" <?php if($mon == "12") echo "selected=\"selected\"" ?>>December</option>
					</select>
				</td>
				<td><strong>&nbsp;Select Year:</strong></td>
				<td><select name="year" id="year" onchange="getAttendance();">
					<option value="2010" <?php if($year == "2010") echo "selected=\"selected\"" ?>>2010</option>
					<option value="2011" <?php if($year == "2011") echo "selected=\"selected\"" ?>>2011</option>
					<option value="2012" <?php if($year == "2012") echo "selected=\"selected\"" ?>>2012</option>
					<option value="2013" <?php if($year == "2013") echo "selected=\"selected\"" ?>>2013</option>
					<option value="2014" <?php if($year == "2014") echo "selected=\"selected\"" ?>>2014</option>
					<option value="2015" <?php if($year == "2015") echo "selected=\"selected\"" ?>>2015</option>
					<option value="2016" <?php if($year == "2016") echo "selected=\"selected\"" ?>>2016</option>
					<option value="2017" <?php if($year == "2017") echo "selected=\"selected\"" ?>>2017</option>
					<option value="2018" <?php if($year == "2018") echo "selected=\"selected\"" ?>>2018</option>
					<option value="2019" <?php if($year == "2019") echo "selected=\"selected\"" ?>>2019</option>
					<option value="2020" <?php if($year == "2020") echo "selected=\"selected\"" ?>>2020</option>
					<option value="2021" <?php if($year == "2021") echo "selected=\"selected\"" ?>>2021</option>
					<option value="2022" <?php if($year == "2022") echo "selected=\"selected\"" ?>>2022</option>
					<option value="2023" <?php if($year == "2023") echo "selected=\"selected\"" ?>>2023</option>
					<option value="2024" <?php if($year == "2024") echo "selected=\"selected\"" ?>>2024</option>
					<option value="2025" <?php if($year == "2025") echo "selected=\"selected\"" ?>>2025</option>
					</select>
					</td>
			</tr>
</table>
</form>

<div id="result">
<?php
//include('../db.php');
$sino = 1;
?>
<table border="1" width="100%">
<tr bgcolor="#8084B4">
	<td><font color="#FFFFFF"><strong>Si. No.</strong></font></td>
	<td><font color="#FFFFFF"><strong>Name</strong></font></td>
	<?php 
		$days = getDays($mon,$year);
		for($i=1;$i<=$days;$i++){
			?><td><font color="#FFFFFF"><strong><?php if($i<=9) {echo "0"; }echo $i;?></strong></font></td><?php
		}
	?>
</tr>
<?php
 $sql1 = "select * from student_master st,student_subject ss where st.course_id='$course_id' and st.semester ='$sem' and st.stud_id=ss.stud_id and ss.subject_id='$subject_id' and st.usn='$uname'";
			//echo $sql1;
			$res1 = mysql_query($sql1);
			while($row1 = mysql_fetch_array($res1))
			{
		
if($sino%2==1)
?>
<tr <?php if($sino%2==0) echo 'bgcolor="#E4EEE5"';?>>
	<td><?php echo $sino++;?></td>
	<td>
		<?php echo $row1['fname']; ?> / <?php echo $row1['usn']; ?>
	</td>
	<?php 
		$sql2 = "select * from attendance a,course_subject cs where a.stud_id = ".$row1['stud_id']." and cs.course_id='$course_id' and cs.semester ='$sem' and a.cs_id='$cs_id' and a.date like '$year-$mon-%' order by a.date asc";
		$res2 =mysql_query($sql2);
		$row2 = mysql_fetch_array($res2);
		for($i=1;$i<=$days;$i++){
			if(getDateDay($row2['date'])== $i)
			{
				if($row2['status'] == 'P')
					$str = "<font color=\"green\">P</font>";
				else
					$str = "<font color=\"red\">A</font>";
				echo "<td align=\"center\">$str</td>";
				$row2 = mysql_fetch_array($res2);
			} else
			{
				echo "<td align=\"center\">--</td>";
			}
		}
	?>
</tr>
<?php
} //While loop closes on line no 141
?>
</table>

</div>

</body>
</html>

<?php
//Function to get the no of days of a selected month and year...
function getDays($m,$y)
{
	if(($m==1)||($m==3)||($m==5)||($m==7)||($m==8)||($m==10)||($m==12))
        return 31;
    else if(($m==4)||($m==6)||($m==9)||($m==11))
        return 30;
    else if(($y%4==0)){
         if(($y%100==0)&&($y%400!=0)) // As all the centuries are not leap ears except divisible by 400
             return 28;
         else
             return 29;
    }else
		return 28;
}
?>

<?php 
//--------------------------------------------------------------------------------------------------------------------------------------------
//Function
//Function to return only date field from date
function getDateDay($x){
	$day = (int)substr($x,8,2);
	return $day;
}
//--------------------------------------------------------------------------------------------------------------------------------------------
?>