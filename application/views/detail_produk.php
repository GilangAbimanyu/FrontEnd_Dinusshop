<htmL>
<head>
<title>CRUD Data Produk</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</script>
<style>
	.footer{
		width: 100%;
		float: inherit;
		text-align: center; 
		background-color:#134293;
		color:white;
	}	
	.gridbox{
		margin-bottom: 50px;
	}
	.tab-content{
		margin-bottom: 60px;
	}
	</style>
</head>
<h1>Detail Produk</h1>

<body>
    <div class="content">
        <?php
        foreach ($barangku as $brg) {
        ?>
            <a href="">
                <div class="gridbox">
                    <left><img src="<?php echo base_url(); ?>image/<?php echo $brg['gambar']; ?>" width="300px" height="300px"></a></left>
                </div>
                <div class="tab-content">
                    <left>
                        <label>Kode : </label><?= $brg['kode']; ?><br>
                        <label>Nama : </label><?= $brg['nama_barang']; ?><br>
                        <label>Harga : </label><?= $brg['harga']; ?><br>
                        <label>Stok Barang: Tersedia</label><br>
						<h1>Deskripsi Produk:</h1>
						<label>Nama : </label><?= $brg['nama_barang']; ?><br>
                        <?php echo anchor('Stokbarang/detail', '<div class="btn btn-danger">Back</div>') ?>
                    </left>
                </div>
            </a>
        <?php
        }
        ?>
    </div>
    <div class="footer">
<h3>Dibuat oleh: A11.2019.11753 - Gilang Abimanyu</h3>
</div>
</body>