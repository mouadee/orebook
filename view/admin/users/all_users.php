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
$user = 'محمد يحيى';

// user email
$user_email = "elazzaouimouade@gmail.com";

// last user added
$last_user = "معاذ العزاوي";

// img of the last user 
$last_user_img = "";

// user id
$user_id = "1";
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
      <img src="img/admin.png" alt="admin">
      <h5><?php echo $admin_name;?></h5>
      <small><?php echo $permession;?></small>
    </span>    
    <ul>
      <li>
        <i class="fa fa-home" aria-hidden="true"></i>
        <a href="../admin/index.php">الصفحة الرئيسية</a>
      </li>
      <li>
       <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        <a href="options.html">المنشورات</a>
      </li>
      <li>
        <i class="fa fa-cogs" aria-hidden="true"></i>
        <a href="">إدارة الاعضاء</a>
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
      <img src="img/user.jpg" alt="" class="img-circle">  
    </a> 
  </div>
</nav>

<div class="wrap text-center">
    <table class="table table-striped text-center">
        <tr>
            <td>ر.ت</td>
            <td>الصورة</td>
            <td>اسم العضو</td>
            <td>البريد الالكتروني</td>
            <td>التحكم</td>
        </tr>
        <tr>
            <td><?php echo $user_id;?></td>
            <td><img src="img/user.jpg" class="img-rounded user_thumb"></td>
            <td><?php echo $last_user; ?></td>
            <td><?php echo $user_email; ?></td>
            <td>
                <a href="#" title="تعديل"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <a href="#" title="حذف"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>

        <tr>
            <td><?php echo $user_id;?></td>
            <td><img src="img/user.jpg" class="img-rounded user_thumb"></td>
            <td><?php echo $last_user; ?></td>
            <td><?php echo $user_email; ?></td>
            <td>
                <a href="#" title="تعديل"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <a href="#" title="حذف"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>
        <tr>
            <td><?php echo $user_id;?></td>
            <td><img src="img/user.jpg" class="img-rounded user_thumb"></td>
            <td><?php echo $last_user; ?></td>
            <td><?php echo $user_email; ?></td>
            <td>
                <a href="#" title="تعديل"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <a href="#" title="حذف"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </td>
        </tr>


        
    </table>
  <div aria-label="Page navigation example" class="text-center">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#">السابق</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">التالي</a></li>
    </ul>
</div>
</div>
    

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
