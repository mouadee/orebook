<?php
session_start();
// set All Variable Of The Input :
if (isset($_POST['username'],$_POST['password'])) {
	$username = $_POST['username'];
    $password = $_POST['password'];

    // $query = 'SELECT (username, password, privilige) FROM users WHERE privilige = 1';
    // $stmt = $con->prepare($query);
    // $stmt->execute();

    // Check if user exist in database

	$stmt = $con->prepare(
    "SELECT 
    username, password 
    FROM 
        users 
    WHERE 
        username = :username
    AND 
        password = :password
    ");

    $stmt->execute([
    ':username' => $username,
    ':password' => $password
]);

$row = $stmt->fetch();

$count = $stmt->rowCount();

// if $count > 0 the databases countain information about this admin
if ($count > 0) {
    
            $_SESSION['user'] = $username; // Register Session Name
        
            header('Location: ../admin/index.php'); // Redirect to Dashboard Page
    
            exit();
    
        }

elseif ($count < 0){

    echo "users does not found !";
}
}