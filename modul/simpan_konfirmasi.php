<?php  
$_POST['tanggal'] = date('Y-m-d', strtotime($_POST['tanggal']));
foreach ($_POST as $key => $value) {
	$field[] = $key;
}
// $pesan = "UPDATE pesanan SET status = 'Lunas' WHERE invoice_no = $_POST[id_pesan]";
// mysql_query($pesan);
$fields = implode(", ", $field);
$post = implode("','", $_POST);
$sql = "INSERT INTO konfirmasi (id_konfirmasi, $fields) 
	VALUES ('NULL', '$post')";
// var_dump($_POST);
// var_dump($sql);
// exit;
mysql_query($sql);


echo "<script>window.alert('Terima Kasih Pesanan Anda Sedang Kami Proses');
    window.location=('index.php?modul=home')</script>";
?>