<html>
<head>
<title>form</title>
<link href="bootstrap/css/bootstrap.min.css" type="text/css"rel="stylesheet" />
<link href="bootstrap/css/bootstrap-grid.min.css" type="text/css"rel="stylesheet" />
<link href="bootstrap/css/bootstrap-reboot.min.css" type="text/css"rel="stylesheet" />
</head>


<body>
<?php
if(isset($_POST['btnsubmit']))
{
$name=$_POST['fname'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];
$course=$_POST['course'];
$gender=$_POST['gender'];

echo "name is" .$name."<br>";
echo $gender."<br>";
}
?>



<form action="" method="post">
<div class="form-group">
<label for="name">Name</label>
<input type="text" class="form-control" id="name" name="fname"/>
</div>

<div class="form-group">
<label for="phone">Phone no</label>
<input type="tel" class="form-control" id="phone" name="phone"/>
</div>

<div class="form-group">
<label for="address">Address</label>
<textarea class="form-control" id="address" name="address"
></textarea>
</div>

<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" id="email" name="email"/>
</div>

<div class="form-group">
<label for="password">Password</label>
<input type="password" class="form-control" id="password" name="password"/>
</div>

<div class="form group">
<label for="course">course</label>
<select class="form-control" id="course" name="course">
<option value="">-select course-</option>
<option>web designing</option>
<option>php</option>
<option>python</option>
<option>c++</option>
</select>
</div>


<div class="form-group">
<label for="gender">gender</label>
Male<input type="radio" name="gender" id="gender" name="gender"/>
Female<input type="radio" id="gender" name="gender"/>
</div>

<div class="form-group">
<input type="submit" name="btnsubmit"/>
<input type="reset"/>
</div>



</body>
</html>