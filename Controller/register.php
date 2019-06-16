<?

include('connection.php');

// set All Variable Of The Input :
if (
    isset(
        $_POST['username'],
        $_POST['password'],
        $_POST['repassword'],
        $_POST['adress'],
        $_POST['choice']
    )
)
{
    $username = $_POST['username'];
    $password  = $_POST['password'];
    $repassword  = $_POST['repassword'];
    $adress = $_POST['adress'];
    $choice = $_POST['choice'];
    //  = array(
	// 		$_POST['physics']   => $physics,
	// 		'science_life'      => $science_life,
	// 		'science_earth'     => $science_earth,
	// 		'chimie'            => $chimie,
	// 		'droit_fr'          => $droit_fr);
    $query = 'INSERT INTO users (username, password, repassword, adress, choice) VALUES (:username, :password, :repassword, :adress, :choice)';
    $stmt = $con->prepare($query);
    $stmt->execute([
			':username' 		=> $username,
			':password'			=> $password,
			':repassword'		=> $repassword,
            ':adress'			=> $adress,
            ':choice'           => $choice
            ]);
    if ($stmt->rowCount() < 0) {
    
        echo '<div class="alert alert-success" role="alert">قم بتفعيل حسابك من بريدك الإلكتروني</div>';

    }
}
