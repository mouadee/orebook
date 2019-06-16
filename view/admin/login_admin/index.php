<?php 
// start connect with the database :
include'../../../controller/connection.php';
include'../../../controller/admin_login.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>تسجيل الدخول</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body dir="rtl">


	<div class="alert-success login">
		<h2>قم بتسجيل الدخول من فضلك</h2>
	</div>

	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" autocomplete="off">
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput">إسم المستخدم</label>
			<span>*</span>
	    <input name="username" type="text" class="form-control" id="formGroupExampleInput" placeholder="أدخل إسم المستخدم">
	  </div>
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput2">كلمة السر</label>
			<span>*</span>
	    <input name="password" type="password" class="form-control" id="formGroupExampleInput2" placeholder="أدخل كلمة السر">
	  </div>
		<input class="btn btn-success login_btn" type="submit" name="login" value="دخول">
	</form>

<script src="js/main.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
