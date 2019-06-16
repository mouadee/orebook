  <?php
// Declaring variale :

// book cover
$img_book = "book";

// The Title Of The Book
$book_title = " الموت في البندقية";

// The Description of the book
$book_description = 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن ا يوجد م إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.';

// The writer Of The Book
$editeur = "توماس مان";

// Type Of The Document :
$document_type = '(pdf.)';

// Capacité Or Document Volume :
$document_volume = '1.85 ' . $prefix = 'ميجا';

// book language :
$language = "العربية";

// page Numbers
$page_numbers = '92';

// name of the comment publication [can be(admin, user)]
$publicat_comment = 'محمد الراشد';

// Time publishing comment
$time_publishing_comment  = '15';

// Classment of comment
$classment = '24';

// viewers book :
$views = '12';
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
	<button class="btn btn-primary" type="submit" name="button"><i class="fa fa-sign-in" aria-hidden="true" style="color:#FFF;"></i> تسجيل الدخول</button>
	<button class="btn btn-success" type="submit" name="button"><i class="fa fa-user-plus" aria-hidden="true" style="color:#FFF;"></i> إنشاء حساب</button>
</div>

<div class="book_infos alert alert-secondary">
  <h2><i class="fa fa-file-text-o" aria-hidden="true" style="color:green"></i><?php echo $book_title;?></h2>
  <img src="imgs/book.jpg" alt="img_book">
  <b><i class="fa fa-user-circle" aria-hidden="true"></i><?php echo " تأليف : " . $editeur ?></b>
  <p><?php echo $book_description;?></p>
  <span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><?php echo " نوع ملف الكتاب : " . $document_type;?></span> <br>
  <span><i class="fa fa-file-text-o" aria-hidden="true"></i><?php echo " عدد الصفحات : " . $page_numbers;?></span> <br>
  <span class="volume"><i class="fa fa-download" aria-hidden="true"></i><?php echo " حجم الكتاب : " . $document_volume;?></span> <br>
  <span><i class="fa fa-language" aria-hidden="true"></i><?php echo " اللغة : " . $language;?></span><br>
  <span> <i class="fa fa-eye" aria-hidden="true"></i><?php echo " عدد المشاهدات : " . $views;?></span>
  
  <button class="btn btn-primary" type="submit" name="read"><i class="fa fa-file-text-o" aria-hidden="true"></i> قراءة</button>
	<button class="btn btn-success" type="submit" name="download"><i class="fa fa-cloud-download" aria-hidden="true"></i> تحميل</button>
  <a href="#"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> الإبلاغ عن مشكل</a>
</div>

<div class="comment" style"clear:both">
  <div class="alert alert-success" role="alert">
  <span>التعليقات</span>
  </div>
  <div class="pub_comment">
    <img src="https://api.adorable.io/avatars/285/dd@adorable.png" alt="avatar">
    <div class="alert alert-danger name_commt" role="alert">
      <g><?php echo $publicat_comment; ?></g><br>
      <small>ناشر</small>
    </div>
  </div>
  <div class="form-group comment_write">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="يمكنك التعليق هنا ... "></textarea>
    <button class="btn btn-success" type="submit" name="button"><i class="fa fa-paper-plane" aria-hidden="true"></i> أنشر</button>
  </div>
</div>

<div class="all_comment">
  <div class="comment_pub">
  <a href=""><i class="fa fa-chevron-up up" aria-hidden="true" style="color:green;"></i></a>
  <span class="classment"><?php echo $classment;?></span>
  <a href=""><i class="fa fa-chevron-down down" aria-hidden="true" style="color:green;"></i></a>
    <img src="https://api.adorable.io/avatars/285/dd@adorable.png" alt="avatar">
    <div class="alert alert-danger name_commt" role="alert">
      <g><?php echo $publicat_comment; ?></g><br>
      <small>ناشر</small>
    </div>
    <div class="comment_content">
    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أوإلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء
    </p>
    </div>
  </div>
  <div class="date_publishing">
  <i class="fa fa-clock-o clock" aria-hidden="true"></i>
    <?php echo "نشر منذ : " . $time_publishing_comment . 'دقيقة'; ?>
  </div>
  <button type="button" class="btn btn-info replay"><i class="fa fa-reply" aria-hidden="true"></i> رد على هذا التعليق</button>
</div> 
<br><br><br><br><br><br><br><br><br><br>


<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
