<!DOCTYPE html>
<html lang="en">
<head>
	  <title>Detail Akun</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
</head>
<body>
	<nav class="navbar">
		<p>header</p>
	</nav>

	<div class="container text-left">    
	  	<h2>Detail Akun</h2>
		<p>Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</p>
	  	<div class="container-profil">		  
  			<?php echo form_open_multipart('#/#'); ?>
			<div class="row-content">	
				<div class="form-group">
					<div class="col-sm-4">
					<div class="wel">
						<img src="<?php echo base_url();?>assets/images/profil.png" class="profil-img-responsive">
					</div>
					<div class="wel">
						<label class="input-custom"><input type="file" class="form-control" name="gambar" placeholder="gambar"></label>
					</div>
					</div>
				</div>
       		 	<div class="col-sm-3">
					<div class="wel">
						<div class="wel-box">
						<li>Username</li>
						<li>Nama</li>
						<li>Email</li>
						<li>No.Telp</li>
						<li>Jenis Kelamin</li>
						<li>Tanggal Lahir</li>
						<li>Alamat</li>
						</div>
					</div>
          		</div>
        	<div class="col-sm-3">
        	  <div class="wel">
				  <div class="wel-box-right">
            <input type="text" class="form-control form" name="username" placeholder="username">
            <input type="text" class="form-control form" name="nama" placeholder="nama">
            <input type="text" class="form-control form" name="email" placeholder="email">
            <input type="text" class="form-control form" name="no-telp" placeholder="no-telp">
			<div class="radcheck">
				<label class="radio-inline"><input type="radio" name="optradio">Perempuan</label>
				<label class="radio-inline"><input type="radio" name="optradio">Laki-laki</label>
				<label class="radio-inline"><input type="radio" name="optradio">Lainnya</label>
			</div>
			<div class="redcheck">
<!--tanggal-->
<!--				<div class="custom-select">-->
				<select name="tgl">
				<option selected="selected">Hari</option>
				<?php
				for($a=1; $a<=31; $a+=1){
					echo"<option value=$a> $a </option>";
				}
				?>
				</select>
<!--				</div>-->
<!--bulan-->
				<select name="bln" class="select-detacc">
				<option selected="selected">Bulan</option>
				<?php
				$bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
				$jlh_bln=count($bulan);
				for($c=0; $c<$jlh_bln; $c+=1){
					echo"<option value=$bulan[$c]> $bulan[$c] </option>";
				}
				?>
				</select>
<!--tahun-->
				<select name="thn" class="select-detacc">
				<option selected="selected">Tahun</option>
				<?php
					$now=date('Y');
//					echo "<select name=’tahun’>";
					for ($a=1950;$a<=$now;$a++)
					{
						 echo "<option value='$a'>$a</option>";
					}
//					echo "</select>";
					?>
					</select>
			</div>
			<div class="form-group form">
			  <textarea class="form-control" rows="5" id="comment"></textarea>
			</div>
			 </div>	
			  </div>	
          </div>
        </div>
			<button type="submit" class="btn save-detail">Simpan</button>
      	</div>
		<?php echo form_close(); ?>
		</div>
	<br>

	<footer class="container-fluid text-center">
	  <p>Footer Text</p>
	</footer>

</body>
</html>
