<?php

include('connection.php');

// declaring variable :
if (
    isset(
    $_POST['name'],
    $_POST['autour'],
    $_POST['details'],
    $_POST['language'],
    $_POST['cover'],
    $_POST['type']
    )
) 
{

    $name        = $_POST['name'];
    $autour      = $_POST['autour'];
    $details     = $_POST['details'];
    $language    = $_POST['language'];
    $cover       = $_POST['cover'];
    $type        = $_POST['type'];

    echo'<div class="alert alert-success text-center\">تمت إضافة الكتاب .. في إنتضار الموافقة </div>';
   
    $query = 'INSERT INTO book_dded (name, autour, details, language, cover, type) VALUES (:name, :autour, :details, :language, :cover, :type)';
    $stmt = $con->prepare($query);
    $stmt->execute([
        ':name'     => $name,
        ':autour'   => $autour,
        ':details'  => $details,
        ':language' => $language,
        ':cover'    => $cover,
        ':type'     => $type
    ]);

 }
// elseif (empty($name && $autor && $details && $lang && $cover && $type)) {
    
//          echo"<div class='alert alert-danger text-center'>حدث خطأ المرجو إعادة رفع الكتاب</div>";
    
//     }
//  && $type = ".pdf" || $type = ".docx")

