<?php
include "header.php"
?>
<div class="col-md-9">
<h1>Registrations</h1>

<table class="table table-bordered table-dark table-striped">
<tr>
<th>sr no</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Address</th>
<th>Age</th>
<th>Date</th>
</tr>

<?php
$q="select * from registration";
$r=mysqli_query($con,$q);
while($row=mysqli_fetch_array($r))
{
	echo "<tr>
	<td>".$row['id']."</td>
	<td>".$row['name']."</td>
	<td>".$row['phone']."</td>
	<td>".$row['email']."</td>
	<td>".$row['address']."</td>
	<td>".$row['age']."</td>
	<td>".$row['curdate']."</td>
	
	</tr>";
	
}
?>
</table>
</div>

<?php
include "footer.php";
?>