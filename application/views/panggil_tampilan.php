<html>
<head>
	<title>Tampilan</title>
<style>
	.header{
	background-color: aqua;
	height: 120px;
	float: left;
	width: 100%;	
	}
	.col-gb {
		width:120px;
		height: 80%;
		overflow: hidden;
		float: left;
	}
	.col-gb img{
		margin-top:20px;
		margin-left:20px;
		width: 100px;
	}
	.col-txt{
		width: 80%;
		float: left;
		text-align: center;
	}
	.content{
		background-color: #F2EFEF;
		float: left;
		width: 100%;
		overflow: hidden;
		padding-left: 70px;
	}
	.data{
		background-color:white;
		width: 25%;
		float: left;
		margin: 30px 30px;
		height: 300px;
		
	}
	.data img{
		width: 80%;
		height: 150px;
		float: left;
		margin-left: 40px;
		margin-top: 20px;
		
	}
	.data label{
		
margin-left: 120px;
	}
	.footer{
		width: 100%;
		float: inherit;
		text-align: center; 
		background-color:#134293;
		color:white;
	}	
</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="header">
	<div class="col-gb"><img src="<?php echo base_url(); ?>assets/image/logo.jpg"></div>
	<div class="col-txt">
		<div class="top"><h1>UJIAN SEMESTER GENAP</h1></div>
		<div class="bottom"><h4>Menjual Segala Furnitur</h4></p></div>
	</div>
	
</div>
<div class="content">
<?php
foreach($barangku as $brg){
?>
<div class="data">
	<img src="<?php echo base_url(); ?>image/<?php echo $brg['gambar']; ?>" >
	<label><center><?=$brg['nama_barang'];?></center></label><br/>
	<label><center><?php echo $brg['harga']; ?></center></label>
	<br>
	<label><center><?php echo anchor('stokbarang/detail_produk/'.$brg['kode'],'<div class="btn btn-primary btn-sm" >
		Detail Produk</div>') ?></center></label>
	</div>
<?php
	}
?>
<div class="footer">
<h3>Dibuat oleh: A11.2019.11753 - Gilang Abimanyu</h3>
</div>
</div>
</body>
</html>