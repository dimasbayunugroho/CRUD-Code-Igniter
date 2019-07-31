<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    Form tambah data mahasiswa
			  </div>
			  <div class="card-body">
			  	<?php if(validation_errors()) : ?>
			  	<div class="alert alert-danger" role="alert">
				  <?php echo validation_errors(); ?>
				</div>
				<?php endif; ?>
			    <form action="" method="post">
			    	<div class="form-group">
					    <label for="nim">NIM</label>
					    <input type="text" name="nim" class="form-control">
					    <small class="form-text text-danger"><?php echo form_error('nim') ?></small>
					 </div>
					 <div class="form-group">
					    <label for="nama">Nama Mahasiswa</label>
					    <input type="text" name="nama" class="form-control">
					    <small class="form-text text-danger"><?php echo form_error('nama') ?></small>
					 </div>
					 <div class="form-group">
					    <label for="jurusan">Jurusan</label>
					    <select class="form-control" name="jur">
					    	<?php foreach ($jurusan as $jur): ?>
							      <option value="<?= $jur['jurusan']; ?>"><?= $jur['jurusan']; ?></option>
					     	<?php endforeach; ?>
					    </select>
					 </div>
					 <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
			    </form>
			  </div>
			</div>
		</div>
	</div>
</div>