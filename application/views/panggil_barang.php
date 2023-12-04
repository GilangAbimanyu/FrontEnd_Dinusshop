<html>
<head>
	<title>Ini adalah laporan barangku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   </head>
<body>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Data
</button>
<table class="table table-border">
		<tr>
		<td><h4>No</h4></td>
		<td><h4>GAMBAR</h4></td>
		<td><h4>KODE</h4></td>
		<td><h4>NAMA BARANG</h4></td>
		<td><h4>HARGA</h4></td>
		<td colspan="2"><h4>ACTION</h4></td>
	</tr>
<?php 
$no=1;
foreach($barangku as $brg): ?>

	<tr>
		
      <td><?php echo $no++ ?></td>
     <td>
			<img src="<?php echo base_url(); ?>image/<?php echo $brg['gambar']; ?>" width="90" height="110">
	  </td>
      <td><?php echo $brg['kode']; ?></td>
	  <td><?php echo $brg['nama_barang']; ?></td>
	  <td><?php echo $brg['harga']; ?></td>
	  
	  <td onclick="javascript : return confirm('Yakin data dihapus ?')">
		<?php echo anchor('stokbarang/hapus_data/'.$brg['kode'],'<div class="btn btn-danger btn-sm">
      	<i class="fa fa-trash-o"></i></div>') ?>
	  	</td>
		<td>
		<?php echo anchor('stokbarang/edit/'.$brg['kode'],'<div class="btn btn-primary btn-sm" >
		<i class="fa fa-edit"></i></div>') ?>
	  </td>

	</tr>
	<?php endforeach; ?> 

	</table>   
	


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<?php echo form_open_multipart('Stokbarang/simpan'); ?>
						<div class="form-group">
							<label>Kode</label>
							<input type="text" class="form-control" name="kode" placeholder="kode">
							
							<label>Nama Barang</label>
							<input type="text" class="form-control" name="nama_barang" placeholder="nama barang">
							
							<label>Harga</label>
							<input type="text" class="form-control" name="harga" placeholder="harga">
				
							<label>Gambar</label>
							<input type="file" class="form-control" name="gambar" placeholder="gambar">
							
						</div>
						<div class="modal-footer">
							<button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					<?php echo form_close(); ?>
			</div>
		</div>
	</div>

</body>   
</html>


