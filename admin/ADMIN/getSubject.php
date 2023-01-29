<?php
	include("../dbConnect.php");
	$course_id = $_GET['course_id'];
	$sem = $_GET['sem'];
		$query = "SELECT s.subject_id, s.name from subject s, course_subject cs where s.subject_id = cs.subject_id and cs.course_id = $course_id and cs.sem=$sem";

	$str ="<table align=\"center\" width=\"140%\"><tr height=\"30\"><td width=\"160\" class=\"hr\">&nbsp;Assigned Subject : </td><td class=\"dr\">";

	$result = mysql_query($query);
	$i=1;
	while($row = mysql_fetch_array($result)){
		$str .= "<input type=\"checkbox\" name=\"old_sub[]\" value=\"". $row['subject_id']."\" /> ". $row['name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		if($i%2==0) { $str .="<br>"; }
		$i++;
	}
		$str .= "</td><td><em>Note :</em> Select the subject to <strong>remove</strong> form the list.</td></tr><tr><td colspan=\"3\"><hr width=\"50%\" align=\"left\"></td></tr><tr height=\"30\"><td class=\"hr\">&nbsp;Unassigned Subjects : </td><td class=\"dr\">";
	
 $query = "select subject_id, name from subject where subject_id not in(select distinct subject_id from course_subject where course_id = $course_id and sem=$sem)";
	//echo $query;
	$result = mysql_query($query);
	$i=1;
	while($row = mysql_fetch_array($result))
	{
		$str .= "<input type=\"checkbox\" name=\"new_sub[]\" value=\"".$row['subject_id']."\" /> ". $row['name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		if($i%2==0) { $str .="<br>"; }
		$i++;
	}
	$str .= "</td><td><em>Note :</em> Select the subject to <strong>add</strong> into list.</td></tr></table>";
	echo $str;
mysql_close();

