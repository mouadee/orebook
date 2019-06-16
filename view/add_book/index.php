<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>أوريبوك</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body dir="rtl">

	<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">أوريبوك</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../home/index.php"><i class="fa fa-home" aria-hidden="true"></i>الرئيسية<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
				<a class="nav-link" href="#"><i class="fa fa-sort" aria-hidden="true"></i>التصنيفات</a>
      </li>
			<li class="nav-item">
				<a class="nav-link" href="../latest/index.php"><i class="fa fa-fire" aria-hidden="true"></i>أحدث الكتب</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-cloud-upload" aria-hidden="true"></i>نشر كتاب</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="إبحث عن كتاب" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">إبحث</button>
    </form>
  </div>
</nav>

<div class="users">
	<button class="btn btn-primary" type="submit" name="button">تسجيل الدخول</button>
	<button class="btn btn-success" type="submit" name="button">إنشاء حساب</button>
</div>

<form class="adding" method="POST">

<?php
include('../../controller/connection.php');
include('../../controller/add_book.php');
 ?>

  <div class="form-group">
    <label>إسم الكتاب</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="أدخل إسم الكتاب">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">اسم الكاتب</label>
    <input name="autour" type="text" class="form-control" id="exampleInputPassword1" placeholder="أدخل إسم الكاتب">
    <small id="emailHelp" class="form-text text-muted">أدخل إسم الكاتب إن كنت تعرفه</small>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">أضف وصف للكتاب</label>
    <textarea name="details" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="">لغة الكتاب</label>
      <select name="language" class="form-control">
      <option>العربية</option>
      <option>الأنجليزية</option>
      <option>الفرنسية</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">أضف غلاف الكتاب</label>
    <input name="cover" type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">أضف الكتاب</label>
    <small id="emailHelp" class="form-text text-muted">الصيغ المقبولة للكتاب هي <span>: (.doc) (.pdf)</span></small>
    <input name="type" type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>

  <button name="add" type="submit" class="btn btn-primary">أضف</button>
</form>


<script src="home/js/main.js"></script>
<script src="home/js/bootstrap.min.js"></script>
<!-- <script src="home/js/dropzone.js"></script> -->
</body>
</html>
