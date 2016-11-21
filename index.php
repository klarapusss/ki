<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("a.dropdown").click(function(){
        $(".advance").toggle();
    });
});
</script>
</head>
<style type="text/css">
	body{
	background-image: url('img/background.jpg');
	background-size: cover;
	background-position: left top;
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
							<div class="col2"><input type="text" name=""></div>
						</div>
						<div class="row">
							<div class="col1">Jenis</div>
							<div class="col2">
								<select>
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
								<select>
									<option></option>
									<option></option>
									<option></option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col1">Jenis</div>
							<div class="col2"><input type="text" name=""></div>
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
							<div class="col2"><input type="text" name=""></div>
						</div>
						<div class="row">
							<div class="col1">Nomor</div>
							<div class="col2"><input type="text" name=""></div>
						</div>
						<div class="row">
							<div class="col1">Nomor</div>
							<div class="col2"><input type="text" name=""></div>
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