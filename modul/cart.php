<div class="panel panel-default">
    <div class="panel-heading">
		<h3>Keranjang</h3>
    </div>
    <div class="panel-body">
	    <div class="table-responsive">
	        <table width="100%" border="1">
	            <thead>
	                <tr>
	                	<th>No</th>
	                	<th>Foto Produk</th>
	                	<th>Nama Produk</th>
	                	<th>Jumlah</th>
	                	<th>Harga</th>
	                	<th>Aksi</th>
	                </tr>
                </thead>
                <tbody>
                	<?php
						$sid = session_id();
						$no = 1;
						// var_dump("SELECT * FROM keranjang, barang WHERE id_session='$sid' AND keranjang.id_product=barang.id_barang");
						// exit;
						$sql = mysql_query("SELECT * FROM keranjang, barang WHERE id_session='$sid' AND keranjang.id_product=barang.id_barang");
						$hitung = mysql_num_rows($sql);
						if ($hitung < 1){
							echo"<script>window.alert('Cart is Empty....');
									window.location=('index.php?modul=produk')</script>";
							}
						else {
							while($tian=mysql_fetch_assoc($sql)){
								$det[] = $tian;
							}
						}
					?>
					<?php foreach ($det as $key => $v): ?>
						<?php $price = $v['harga']*$v['qty']; ?>
	                	<tr>
	                		<td><?php echo $no++ ?></td>
	                		<td><img width="70" src="layout/images/produk/<?php echo $v['image'] ?>" alt=""></td>
	                		<td><?php echo $v['nama_barang'] ?></td>
	                		<td><?php echo $v['qty'] ?></td>
	                		<td><?php echo $price; ?></td>
	                		<td><a href="input.php?input=delete&id=<?php echo $v['id_keranjang']?>">Hapus</a></td>
	                	</tr>
					<?php endforeach ?>
                </tbody>
           	</table>
           	<div align="right">
				<a href="index.php?modul=produk">Belanja Lagi</a> | 
				<a href="index.php?modul=order">Selesai</a>
           	</div>
       	</div>
	</div>
</div>