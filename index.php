<?php include_once "head.php";?>


<style type="text/css">
	body{
	background-color: #467ea7;
}
</style>
<body>
<div id="container">
	<div id="index">
		<a href="">
			<img class="index-logo" src="img/logo.jpg">
			<h2>LAYANAN DATA DAN INFORMASI KEKAYAAN INTELEKTUAL</h2>
			<h3>DIREKTORAT JENDRAL KEKAYAAN INTELEKTUAL</h3>
		</a>		
		<div class="search">
			<form action="" method="post">
				<select class="jenis">
					<option class="jenis" value="Paten">Paten</option>
					<option class="jenis" value="Merek">Merek</option>
					<option class="jenis" value="Desain Industri">Desain Industri</option>
					<option class="jenis" value="Hak Cipta">Hak Cipta</option>
				</select>
				<input type="text" class="search-text" placeholder="Keyword Pencarian...">
				<a href="#" class="dropdown"></a>
				<input type="button" class="btn submit" value="">
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
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col1">Type</div>
							<div class="col2">
								<select class="popup-select">
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
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
								<input type="checkbox" class="popup-check" name="status" value="Ditolak"> Ditolak
								<input type="checkbox" class="popup-check" name="status" value="Batal"> Batal
								<input type="checkbox" class="popup-check" name="status" value="Berakhir"> Berakhir
								<input type="checkbox" class="popup-check" name="status" value="Diberi"> Diberi
								<input type="checkbox" class="popup-check" name="status" value="Dalam Proses"> Dalam Proses
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
</div>
</body>
<footer>
	<div class="hakcipta" style="float: left; color: yellow;">Hak Cipta &copy; 2016 DJKI, Direktorat Jendral Kekayaan Intelektual</div>
	<div class="menu">
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Tentang Kami</a></li>
			<li><a href="">Disclaimer</a></li>
			<li><a href="">Login</a></li>
		</ul>
	</div>
</footer>