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

	<form action="../home/index.php" method="post">
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput">إسم المستخدم</label>
			<span>*</span>
	    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="أدخل إسم المستجدم">
	  </div>
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput2">كلمة السر</label>
			<span>*</span>
	    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="أدخل كلمة السر">
	  </div>
		<input class="btn btn-success login_btn" type="submit" name="login" value="دخول">
	</form>

<script src="js/main.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
