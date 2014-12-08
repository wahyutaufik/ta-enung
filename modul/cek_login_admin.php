<?php 

$username = $_POST['username'];
$password = $_POST['password'];
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$login    = mysql_query("SELECT username FROM admin WHERE username='$username' and password='$password'");

$data     = mysql_fetch_array($login);
$jumlahdata = mysql_num_rows($login);

if($jumlahdata > 0){
	$_SESSION['username'] = $data['username'];
	echo '<script>document.location=
		"index.php?modul=dashboard&message=admin-success";
	</script>';
    // header("Location:index.php?modul=dashboard&message=admin-success");
} else {
	echo '<script>document.location=
		"index.php?modul=login_admin&message=failed";
	</script>';
    // header("Location:index.php?modul=login_admin&message=failed");
}
?>