<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar_sims.php');   ?>
<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<h3> LOGIN  </h3>
		</ul>
		
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-block">
				  <div class="widget-head">
						<h5><a href="#">Add New </a></h5>
						
				  </div>
					<div class="widget-content">
						<div class="widget-box">
<table class="data-tbl-boxy table">
<thead>
  <tr>
    <th scope="col">USER NAME </th>
    <th scope="col">PASSWORD</th>
    <th scope="col">USER TYPE</th>
	 <th scope="col">HINT Q</th>
	 <th scope="col">HINT A</th>

  </tr>
  </thead>
  <tbody>
 <?php
 
 $con=mysql_connect('localhost','root','');
 mysql_select_db('sims',$con);
 
 $sql="select * from login";
 $res=mysql_query($sql);

 
 while($row=mysql_fetch_array($res))
 {
 ?>
  <tr>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['password']; ?></td>
    <td><?php echo $row['usertype']; ?></td>
	<td><?php echo $row['hint_q']; ?></td>
	<td><?php echo $row['hint_a']; ?></td>
     </tr>
  <?php
  }
  ?>
  
  </tbody>
</table>
</div>
					</div>
				</div>
			</div>
		</div>
		
        
	</div>
</div>
<?php include('footer.php');   ?>


