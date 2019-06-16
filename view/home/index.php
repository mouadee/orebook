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
        <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i>الرئيسية<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
				<a class="nav-link" href="../categories/index.php"><i class="fa fa-sort" aria-hidden="true"></i>التصنيفات</a>
      </li>
			<li class="nav-item">
				<a class="nav-link" href="#"><i class="fa fa-fire" aria-hidden="true"></i>أحدث الكتب</a>
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
	<button class="btn btn-primary" type="submit" name="button"><a href="../login/index.php">تسجيل الدخول</a></button>
	<button class="btn btn-success" type="submit" name="button"><a href="../signup/index.php">إنشاء حساب</a></button>
</div>

<div class="alert-success new-book">
	<h2>أحدث الكتب</h2>
</div>

<section class="book-new">
  <div class="card" style="width: 16rem;">
    <img class="card-img-top" src="imgs/eyCDT9.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">إسم الكتاب</h4>
      <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي  ة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
      <a href="../book_page/index.php" class="btn btn-primary">المشاهدة</a>
    </div>
  </div>

  <div class="card" style="width: 16rem;">
    <img class="card-img-top" src="imgs/eyCDT9.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">إسم الكتاب</h4>
      <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي  ة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
      <a href="#" class="btn btn-primary">المشاهدة</a>
    </div>
  </div>

  <div class="card" style="width: 16rem;">
    <img class="card-img-top" src="imgs/eyCDT9.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">إسم الكتاب</h4>
      <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي  ة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
      <a href="#" class="btn btn-primary">المشاهدة</a>
    </div>
  </div>

  <div class="card" style="width: 16rem;">
    <img class="card-img-top" src="imgs/eyCDT9.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">إسم الكتاب</h4>
      <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي  ة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
      <a href="#" class="btn btn-primary">المشاهدة</a>
    </div>
  </div>
</section>


<div class="alert-danger new-book">
	<h2>كتب علمية</h2>
</div>

<section class="book-new">
  <div class="card" style="width: 16rem;">
    <img class="card-img-top" src="imgs/eyCDT9.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">إسم الكتاب</h4>
      <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي  ة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
      <a href="#" class="btn btn-primary">المشاهدة</a>
    </div>
  </div>

  <div class="card" style="width: 16rem;">
    <img class="card-img-top" src="imgs/eyCDT9.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">إسم الكتاب</h4>
      <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي  ة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
      <a href="#" class="btn btn-primary">المشاهدة</a>
    </div>
  </div>

  <div class="card" style="width: 16rem;">
    <img class="card-img-top" src="imgs/eyCDT9.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">إسم الكتاب</h4>
      <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي  ة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
      <a href="#" class="btn btn-primary">المشاهدة</a>
    </div>
  </div>

  <div class="card" style="width: 16rem;">
    <img class="card-img-top" src="imgs/eyCDT9.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">إسم الكتاب</h4>
      <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي  ة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
      <a href="#" class="btn btn-primary">المشاهدة</a>
    </div>
  </div>
</section>


<div class="alert-primary new-book">
	<h2>معاجم</h2>
</div>

<section class="book-new">
  <div class="card" style="width: 16rem;">
    <img class="card-img-top" src="imgs/eyCDT9.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">إسم الكتاب</h4>
      <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي  ة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
      <a href="#" class="btn btn-primary">المشاهدة</a>
    </div>
  </div>

  <div class="card" style="width: 16rem;">
    <img class="card-img-top" src="imgs/eyCDT9.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">إسم الكتاب</h4>
      <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي  ة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
      <a href="#" class="btn btn-primary">المشاهدة</a>
    </div>
  </div>

  <div class="card" style="width: 16rem;">
    <img class="card-img-top" src="imgs/eyCDT9.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">إسم الكتاب</h4>
      <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي  ة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
      <a href="#" class="btn btn-primary">المشاهدة</a>
    </div>
  </div>

  <div class="card" style="width: 16rem;">
    <img class="card-img-top" src="imgs/eyCDT9.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">إسم الكتاب</h4>
      <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي  ة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
      <a href="#" class="btn btn-primary">المشاهدة</a>
    </div>
  </div>
</section>


<div class="alert-warning new-book">
	<h2>كتب فلسفية</h2>
</div>

<section class="book-new">
  <div class="card" style="width: 16rem;">
    <img class="card-img-top" src="imgs/eyCDT9.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">إسم الكتاب</h4>
      <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي  ة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
      <a href="#" class="btn btn-primary">المشاهدة</a>
    </div>
  </div>

  <div class="card" style="width: 16rem;">
    <img class="card-img-top" src="imgs/eyCDT9.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">إسم الكتاب</h4>
      <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي  ة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
      <a href="#" class="btn btn-primary">المشاهدة</a>
    </div>
  </div>

  <div class="card" style="width: 16rem;">
    <img class="card-img-top" src="imgs/eyCDT9.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">إسم الكتاب</h4>
      <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي  ة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
      <a href="#" class="btn btn-primary">المشاهدة</a>
    </div>
  </div>

  <div class="card" style="width: 16rem;">
    <img class="card-img-top" src="imgs/eyCDT9.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">إسم الكتاب</h4>
      <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي  ة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
      <a href="#" class="btn btn-primary">المشاهدة</a>
    </div>
  </div>
</section>


<footer class="footer">
  <div class="card-header">
    اوريبوك
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>اوريبوك هو موقع عربي لطلاب مغاربة من حركة طلابية اجتمعو ليأسسو هذا الفضاء للتبادل و قراءة الكتب</p>
    </blockquote>
  </div>
</footer>

<script src="home/js/bootstrap.min.js"></script>
<script src="home/js/main.js"></script>
</body>
</html>
