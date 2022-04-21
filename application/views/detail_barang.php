<div class="container-fluid">

<div class="card">
  		<div class="card-header">
   			Detail Produk
  		</div>
  	<div class="card-body mt-5">

  		<?php foreach($barang as $brg): ?>
    	<div class="row">
    		<div class="col-md-4">
    			<img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class ="card-img-top">
    		</div>

    		<div class="col-md-8 mt-5">
    			<table class="table">
    				<tr>
    					<td>Nama Toko</td>
    					<td><strong><?php echo $brg->nama_brg ?></strong></td>
    				</tr>

    				<tr>
    					<td>Deskripsi</td>
    					<td><strong><?php echo $brg->keterangan ?></strong></td>
    				</tr>

    				<tr>
    					<td>Kategori</td>
    					<td><strong><?php echo $brg->kategori ?></strong></td>
    				</tr>

    				<tr>
    					<td>Alamat</td>
    					<td><strong><?php echo $brg->stok ?></strong></td> 
    				</tr>

    				<tr>
    					<td>Detail Peta</td>
    					<td><strong><div class="btn btn-sm btn-primary">
    						<?php echo $brg->harga ?>
    					</div></strong></td>
    				</tr>

    			</table>


    			

    			<?php echo anchor('dashboard/index/','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
    		</div>

    	</div>
    	<?php  endforeach; ?>

  	</div>
</div>
	
</div>