<?php 

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>تسجيل حساب جديد</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body dir="rtl">
	<div class="alert-success login">
		<h2>قم بإنشاء حساب من فضلك</h2>
	</div>

	<div class="obligue">
		<p class="lead">الحقول التي تحتوي على<span>(*)</span>هي حقول إجبارية</p>
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

		<div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput2">أعد إدخال كلمة السر</label>
			<span>*</span>
	    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="أعد إدخال كلمة السر من فضلك">
	  </div>

		<div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput2">العنوان</label>
			<span>*</span>
	    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="أدخل عنوان مسكنك">
	  </div>
		<div class="col-auto">
      <label class="mr-sm-2" for="inlineFormCustomSelect">إختر التخصص</label>
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
        <option selected>إختر...</option>
        <option value="1">علوم فزيائية</option>
        <option value="2">الكيمياء</option>
        <option value="3">علوم الحياة</option>
        <option value="3">علوم الأرض</option>
        <option value="3">القانون الفرنسي</option>
      </select>
    </div>
		<input class="btn btn-success login_btn" type="submit" name="login" value="تسجيل">
	</form>

<script src="js/main.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
