<?php
include "../dance academy.php/connection.php";
?>
<html>

<head>
<title>Dance Academy Admin</title>

<link href="../bootstrap/css/bootstrap.min.css" type="text/css"rel="stylesheet" />
<link href="../bootstrap/css/bootstrap-grid.min.css" type="text/css"rel="stylesheet" />
<link href="../bootstrap/css/bootstrap-reboot.min.css" type="text/css"rel="stylesheet" />
<link href="../project.css" type="text/css" rel="stylesheet"/>

</head>
<body>

<div class="container-fluid">
<div class="row p-3">
<div class="col-md-6 offset-3">

<?php
if(isset($_POST['btnlogin']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$q="select * from admin where username='$username'and
	password='$password'";
	$r=mysqli_query($con,$q);
	if(mysqli_num_rows($r)>0)
	echo
    "<script>window.location.href='adminhome.php';</script>";
else
	echo "<p style='color:red;'>Invaild username or password</p>
<br>";
}
?>

<h1>Dance Academy</h1>
<h3>Admin Login</h3>
<form action="" method="post">
<div class="form-group">
<input type="text" placeholder="Username" name="username" class="form-control"/>
</div>

<div class="form-group">
<input type="password" placeholder="Password" name="password" class="form-control"/>
</div>

<div class="form-group">
<input type="submit" value="Login" name="btnlogin" class="btn btn-success"/>
</div>
</form>
</div>
</div>
</body>
</html>



