<?php 
// The Name Of The Admin
$admin_name ='معاذ العزاوي';

// permession :
$permession = 'مدير';

// Number of users
$number_of_users ='155';

// Number Of Posts
$number_of_posts = '234';

// Number of visiteurs
$number_of_visiteurs ='342';

// Number Of connected
$number_of_connected = '213';

// the user of website (can be Normal user or admin )
$user = $admin_name;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>لوحة التحكم</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body dir="rtl">

<a href="" class="toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
  <div class="main_sidebar">
    <span>
      <img src="imgs/admin.png" alt="admin">
      <h5><?php echo $admin_name;?></h5>
      <small><?php echo $permession;?></small>
    </span>    
    <ul>
      <li>
        <i class="fa fa-home" aria-hidden="true"></i>
        <a href="index.html">الصفحة الرئيسية</a>
      </li>
      <li>
       <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        <a href="options.html">المنشورات</a>
      </li>
      <li>
        <i class="fa fa-cogs" aria-hidden="true"></i>
        <a href="../users/all_users.php">إدارة الاعضاء</a>
      </li>
      <li>
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <a href="">الرسائل</a>
      </li>
      <li>
        <i class="fa fa-sign-out" aria-hidden="true"></i>
        <a href="">تسجيل الخروج</a>
      </li>
    </ul>
  </div>
  <nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
    <li class="breadcrumb-item"><a href="#">الأعضاء</a></li>
    <li class="breadcrumb-item active" aria-current="page">إدارة الأعضاء</li>
  </ol>
  <div class="user_info inline-block">
    <a href="">
    <i class="fa fa-cogs" aria-hidden="true"></i>
      <span><?php echo $user;?></span>
      <img src="imgs/user.jpg" alt="" class="img-circle">  
    </a> 
  </div>
</nav>
<div class="home_statics text-center">
    <h4 class="heading_title">احصائيات عامة للموقع</h4>


    <div style="background-color: #34495e">
        <h3>المتصلين الان</h3>
        <p class="h6"><?php echo "'" . $number_of_connected . "'";?></p>
    </div>
    <div style="background-color: #00adbc">
        <h3>عدد الاعضاء</h3>
        <p class="h6"><?php echo "'" . $number_of_users . "'";?></p>
    </div>
    <div style="background-color: #f39c12">
        <h3>عدد المقالات</h3>
        <p class="h6"><?php echo "'" . $number_of_posts . "'";?></p>
    </div>
    <div style="background-color: #2ecc71">
        <h3>زيارات الموقع</h3>
        <p class="h6"><?php echo "'" . $number_of_visiteurs . "'";?></p>
    </div>
</div>


<div class="quick_links text-center">
    <h4 class="heading_title">الوصول السريع</h4>
    <a href="../../home/index.php" style="background-color: #c0392b"><h6>استعراض الموقع</h6></a>
    <a href="" style="background-color: #2980b9"><h6>تعديل البيانات</h6></a>
    <a href="" style="background-color: #8e44ad"><h6>عرض الاعضاء</h6></a>
    <a href="" style="background-color: #d35400"><h6>عرض المواضيع</h6></a>
    <a href="" style="background-color: #2c3e50"><h6>الرسائل</h6></a>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
