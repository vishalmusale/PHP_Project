<?php include 'header.php'; ?>

<div id = "navigation">
		<tr><td><a href = "admin_index.php">Home</a></td><td>&nbsp;&nbsp;&nbsp;</td> 
		<td><a href = "student_list.php">Student List</a></td><td>&nbsp;&nbsp;&nbsp;</td> 
		<td><a href = "groups.php">Groups</a></td><td>&nbsp;&nbsp;&nbsp;</td></tr>
		<td><a href = "campaigns.php">Campaigns</a></td><td>&nbsp;&nbsp;&nbsp;</td></tr>
		</div>

<form align = 'center' action = 'groups_list.php' method="post">
Group By : &nbsp;&nbsp;&nbsp;
<select name = "grp" >
  <option value="blank">--</option>
  <option value="event">Event</option>
  <option value="city">City</option>
  <option value="state">State</option>
  
</select> &nbsp;&nbsp;&nbsp;

<input type="Submit" >
</form>  

<?php include 'footer.php'; ?>