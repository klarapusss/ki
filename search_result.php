<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("a.dropdown-box").click(function(){
        $(".advance").toggle();
    });
});


</script>
</head>

<body>
<div id="content">
	
	<div class="head">
		<div class="head-left left">
			<div class="left logo"><img class="logo" src="img/logo.jpg"></div>
			<h4>e-Status Kekayaan Intelektual</h4>
			<h5>Direktorat Jenderal Kekayaan Intelektual</h5>
		</div>
		<div class="head-right">
			<form action="" method="post">
				<input type="text" class="search-box" placeholder="Keyword Pencarian...">
				<a href="#" class="dropdown-box"></a>
				<input type="button" class="submit-box" value="">
				<div class="advance hide">
					<div class="popup">
						<div class="row">
							<a href=""><img src="img/close.jpg" class="close"></a>
						</div>
						<div class="row">
							<div class="col1">Nama</div>
							<div class="col2"><input type="text" class="popup-text" name=""></div>
						</div>
						<div class="row">
							<div class="col1">Jenis</div>
							<div class="col2">
								<select class="popup-select">
									<option></option>
									<option></option>
									<option></option>
									<option></option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col1">Type</div>
							<div class="col2">
								<select class="popup-select">
									<option></option>
									<option></option>
									<option></option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col1">Jenis</div>
							<div class="col2"><input type="text" class="popup-text" name=""></div>
						</div>
						<div class="row">
							<div class="col1">Status</div>
							<div class="col2">
								<input type="checkbox" name="status" value="Diberi"> Ditolak
								<input type="checkbox" name="status" value="Diberi"> Batal
								<input type="checkbox" name="status" value="Diberi"> Berakhir
								<input type="checkbox" name="status" value="Diberi"> Diberi
								<input type="checkbox" name="status" value="Diberi"> Dalam Proses
							</div>
						</div>
						<div class="row">
							<div class="col1">Nomor</div>
							<div class="col2"><input type="text" class="popup-text" name=""></div>
						</div>
						<div class="row">
							<div class="col1">Nomor</div>
							<div class="col2"><input type="text" class="popup-text" name=""></div>
						</div>
						<div class="row">
							<div class="col1">Nomor</div>
							<div class="col2"><input type="text" class="popup-text" name=""></div>
						</div>
						<div class="row"><input type="button" name="" class="cari"></div>
					</div>	
				</div>
			</form>
		</div>
	</div>
	<div class="sidebar left">
		<div class="permohonan">
			<h4>JENIS PERMOHONAN :</h4>
			<select class="sidebar-select">
				<option value="Paten">Paten</option>
				<option value="Merek">Merek</option>
				<option value="Desain Industri">Desain Industri</option>
			</select>
		</div>
		<div class="kategori">
			<h4>KATEGORI :</h4>
			<select class="sidebar-select">
				<option value="Semua Jenis Paten">Semua Jenis Paten</option>
				<option value="Paten">Paten</option>
				<option value="Paten Sederhana">Paten Sederhana</option>
			</select>
		</div>	
		<div class="sortir">
			<h4>SORTIR :</h4>
			<select class="sidebar-select" class="sorting" name="sorting">
				<option value="Nomor permohonan">NOMOR PERMOHONAN</option>
				<option value=""></option>
				<option value=""></option>
				<option value=""></option>
				<option value=""></option>
				<option value=""></option>
			</select>
			<select class="sidebar-select">
				<option value="ASC">ASC</option>
				<option value="DESC">DESC</option>
			</select>
		</div>
		<div class="kategori">
			<h4>STATUS :</h4>
			<select class="sidebar-select">
				<option value="Ditolak">Ditolak</option>
				<option value="Diberi">Diberi</option>
				<option value="Batal">Batal</option>
				<option value="Dalam Proses">Dalam Proses</option>
				<option value="Berakhir">Berakhir</option>	
			</select>
		</div>
		<input type="submit" class="btn-filter btn" value="Filter">	
		<div class="jumlah">
			<h4>JUMLAH PERMOHONAN</h4>
			<span><b>Paten : </b></span><span style="color: #E25050;">120.456</span><br>
			<span><b>Merek : </b></span><span style="color: #2e84c9;">1.040.190</span><br>
			<span><b>Desain Industri : </b></span><span style="color: #246e07;">43.734</span>
		</div>
	</div>

	<div class="isi">
		<div class="hasil">
			<h6>Hasil Pencarian <span style="color: #E25050;">969</span> item</h6>
			<h6>Indonesia <span style="color: #E25050;">100</span>
				Korea <span style="color: #E25050;"100></span>
				Jepang <span style="color: #E25050;">100</span>
			</h6>
			<a href="" class="block">Pencarian Terstruktur Paten</a>
		</div>

		<div class="detail">
			<div class="isidetail" style="background-image: url('img/no-image.png');""></div>
			<div class="isidetail2">
				<a href="detail.php" class="judul block">metoda penentuan anisotropi elektrik suatu contoh inti dari formulasi bawah tanah</a>
				<a href="" class="status">Berakhir</a>
				<h5>17 Agustus 2016</h5>
			</div>
			<div class="show-detail">
				<p>IPC : </p>
				<p>Nomor Permohonan : 123 456 789</p>
				<p>Nomor Paten : </p>
				<p>Tanggal Penerimaan : </p>
				<p>Tanggal Pengumuman : </p>
				<p>Tanggal Pendaftaran : </p>
				<p>Tanggal Kadarluarsa</p>
				<p>Nama Investor : </p>
				<a href="detail.php">DETAIL</a>
			</div>
		</div>		
		<div class="detail">
			<div class="isidetail" style="background-image: url('img/no-image.png');""></div>
			<div class="isidetail2">
				<a href="detail.php" class="judul block">metoda penentuan anisotropi elektrik suatu contoh inti dari formulasi bawah tanah</a>
				<a href="" class="status">Berakhir</a>
				<h5>17 Agustus 2016</h5>
			</div>
			<div class="show-detail">
				<p>IPC : </p>
				<p>Nomor Permohonan : 123 456 789</p>
				<p>Nomor Paten : </p>
				<p>Tanggal Penerimaan : </p>
				<p>Tanggal Pengumuman : </p>
				<p>Tanggal Pendaftaran : </p>
				<p>Tanggal Kadarluarsa</p>
				<p>Nama Investor : </p>
				<a href="detail.php">DETAIL</a>
			</div>
		</div>		
		<div class="detail">
			<div class="isidetail" style="background-image: url('img/no-image.png');""></div>
			<div class="isidetail2">
				<a href="detail.php" class="judul block">metoda penentuan anisotropi elektrik suatu contoh inti dari formulasi bawah tanah</a>
				<a href="" class="status">Berakhir</a>
				<h5>17 Agustus 2016</h5>
			</div>
			<div class="show-detail">
				<p>IPC : </p>
				<p>Nomor Permohonan : 123 456 789</p>
				<p>Nomor Paten : </p>
				<p>Tanggal Penerimaan : </p>
				<p>Tanggal Pengumuman : </p>
				<p>Tanggal Pendaftaran : </p>
				<p>Tanggal Kadarluarsa</p>
				<p>Nama Investor : </p>
				<a href="detail.php">DETAIL</a>
			</div>
		</div>		
		<div class="detail">
			<div class="isidetail" style="background-image: url('img/no-image.png');""></div>
			<div class="isidetail2">
				<a href="detail.php" class="judul block">metoda penentuan anisotropi elektrik suatu contoh inti dari formulasi bawah tanah</a>
				<a href="" class="status">Berakhir</a>
				<h5>17 Agustus 2016</h5>
			</div>
			<div class="show-detail">
				<p>IPC : </p>
				<p>Nomor Permohonan : 123 456 789</p>
				<p>Nomor Paten : </p>
				<p>Tanggal Penerimaan : </p>
				<p>Tanggal Pengumuman : </p>
				<p>Tanggal Pendaftaran : </p>
				<p>Tanggal Kadarluarsa</p>
				<p>Nama Investor : </p>
				<a href="detail.php">DETAIL</a>
			</div>
		</div>		
		
		
	</div>	
</div>

</body>


<div id="footer">
<div class="foot-left">Hak Cipta &copy; 2016 DJKI, Direktorat Jendral Kekayaan Intelektual</div>
	<div class="foot-right">
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Tentang Kami</a></li>
			<li><a href="">Disclaimer</a></li>
			<li><a href="">Login</a></li>
		</ul>
	</div>
</div>
