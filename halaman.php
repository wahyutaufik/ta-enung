<?php

error_reporting(0);
$modul = $_GET['modul'];
if (!isset($modul))$modul = 'home';
switch($modul)
{
	/*--module--*/
	case 'home'             : include 'modul/home.php'; break;
	case 'dashboard'        : include 'modul/dashboard.php'; break;
	case 'detail_produk'    : include 'modul/details.php'; break;
	case 'produk'           : include 'modul/katalog.php'; break;
	case 'kontak'           : include 'modul/kontak.php'; break;
	case 'ttg_kami'         : include 'modul/ttg_kami.php'; break;
	case 'cart'             : include 'modul/cart.php'; break;
	case 'order'            : include 'modul/order.php'; break;
	case 'conf_pdf'         : include 'modul/struk.php'; break;
	case 'konfirmasi'       : include 'modul/konfirmasi.php'; break;
	case 'simpan_konfirmasi': include 'modul/simpan_konfirmasi.php'; break;
	case 'list-pesanan'     : include 'pesanan/tampil_pesanan.php'; break;
	case 'lihat-pesanan'    : include 'pesanan/lihat-pesanan.php'; break;
	case 'list-konfirmasi'  : include 'konfirmasi/tampil_konfirmasi.php'; break;
	case 'lihat-konfirmasi' : include 'konfirmasi/lihat-konfirmasi.php'; break;
	case 'login'            : include 'modul/login.php'; break;
	case 'cek_login'        : include 'modul/cek_login.php'; break;
	case 'login_admin'      : include 'modul/login_admin.php'; break;
	case 'logout'           : include 'modul/logout.php'; break;
	case 'cek_login'        : include 'modul/cek_login.php'; break;
	case 'cek_login_admin'  : include 'modul/cek_login_admin.php'; break;
	case 'list-barang'      : include 'barang/tampil_barang.php'; break;
	case 'tambah-barang'    : include 'barang/input_barang.php'; break;
	case 'simpan-barang'    : include 'barang/simpan_barang.php'; break;
	case 'hapus-barang'     : include 'barang/hapus_barang.php'; break;
	case 'edit-barang'      : include 'barang/edit_barang.php'; break;
	case 'update-barang'    : include 'barang/update_barang.php'; break;
	case 'list-kategori'    : include 'kategori/tampil_kategori.php'; break;
	case 'tambah-kategori'  : include 'kategori/input_kategori.php'; break;
	case 'simpan-kategori'  : include 'kategori/simpan_kategori.php'; break;
	case 'hapus-kategori'   : include 'kategori/hapus_kategori.php'; break;
	case 'edit-kategori'    : include 'kategori/edit_kategori.php'; break;
	case 'update-kategori'  : include 'kategori/update_kategori.php'; break;
	case 'list-admin'       : include 'admin/tampil_admin.php'; break;
	case 'tambah-admin'     : include 'admin/input_admin.php'; break;
	case 'simpan-admin'     : include 'admin/simpan_admin.php'; break;
	case 'hapus-admin'      : include 'admin/hapus_admin.php'; break;
	case 'edit-admin'       : include 'admin/edit_admin.php'; break;
	case 'update-admin'     : include 'admin/update_admin.php'; break;
	
	
}