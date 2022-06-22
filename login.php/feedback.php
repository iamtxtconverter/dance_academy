<?php
include "header.php"
?>
<div class="col-md-9">
<h1>Feedback</h1>

<table class="table table-bordered table-dark table-striped">
<tr>
<th>sr no</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
<th>Date</th>
</tr>

<?php
$q="select * from tbcontact";
$r=mysqli_query($con,$q);
while($row=mysqli_fetch_array($r))
{
	echo "<tr>
	<td>".$row['id']."</td>
	<td>".$row['name']."</td>
	<td>".$row['phone']."</td>
	<td>".$row['email']."</td>
	<td>".$row['subject']."</td>
	<td>".$row['message']."</td>
	<td>".$row['curdate']."</td>
	
	</tr>";
	
}
?>
</table>
</div>

<?php
include "footer.php";
?>