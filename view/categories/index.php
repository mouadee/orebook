<?php

include('../../controller/connection.php');

 ?>
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
				<a class="nav-link" href="../categories/index.php"><i class="fa fa-sort" aria-hidden="true"></i>التصنيفات</a>
      </li>
			<li class="nav-item">
				<a class="nav-link" href="../latest/index.php"><i class="fa fa-fire" aria-hidden="true"></i>أحدث الكتب</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="../add_book/index.php"><i class="fa fa-cloud-upload" aria-hidden="true"></i>نشر كتاب</a>
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

<h2 style="text-align:center;">مرحبا بك(ي)هنا تجد جميع الكتب مقسمة الى تصنيفات</h2>


<script src="home/js/main.js"></script>
<script src="home/js/bootstrap.min.js"></script>
<!-- <script src="home/js/dropzone.js"></script> -->
</body>
</html>
