</!DOCTYPE html>
<html>
<head>
	<?php include ('partials/head.php'); ?>
</head>
<body>
	<?php include ('partials/menu.php'); ?>
        <script type="text/javascript">
            function isi_otomatis(){
                var nama = $("#nama").val();
                $.ajax({
                    url: 'includes/isiotomatis.php',
                    data:"nama="+nama ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#id').val(obj.idkopi);
                    $('#stok').val(obj.stok);
                    $('#harga').val(obj.harga);
     
                });
            }
        </script>
    <div class="container">
	<h2>Transaksi</h2>
	<form action="konfirmasitransaksi.php" method="POST">
		<!-- <label>ID Kopi : </label>
		<div class="kolom">
		<input type="text" id="id" name="idkopi" placeholder="Masukkan ID Kopi" required onchange="isi_otomatis()"><br>
		</div> -->
		<input type="hidden" id="id" name="idkopi">
		<label>Pilih Kopi : </label>
		<div class="kolom">
		<!-- <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Kopi" readonly> -->
    		<select id="nama" name="nama" onchange="isi_otomatis()">
    			<?php $tampil=mysqli_query($dbc,"SELECT * FROM kopi");
    			while($row=mysqli_fetch_array($tampil)){ ?>
    			<option value="<?php echo $row['nama']; ?>"><?php echo $row['nama']; ?></option>
    			<?php } ?>
    		</select>
		</div>
		<label>Stok Tersedia : </label>
		<div class="kolom">
		<input type="text" id="stok" name="stok" placeholder="Stok Tersedia.." readonly><br>
		</div>
		<label>Jumlah : </label>
		<div class="kolom">
		<input type="text" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah.." required><br>
		</div>
		<label>Harga : </label>
		<div class="kolom">
		<input type="text" id="harga" name="harga" placeholder="Harga.." readonly><br>
		</div>
		<label>Uang : </label>
		<div class="kolom">
		<input type="text" id="uang" name="uang" placeholder="Masukkan Uang.." required><br>
		</div>
		<input type="submit" name="submit" value="Lanjutkan" class="simpan">
		<input type="reset" name="reset" value="Reset" class="reset">
	</form>
	</div>
	<!-- <script src="jquery-1.11.3.min.js"></script> -->
</body>
</html>