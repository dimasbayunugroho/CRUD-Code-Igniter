<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    Form ubah data mahasiswa
			  </div>
			  <div class="card-body">
			  	<?php if(validation_errors()) : ?>
			  	<div class="alert alert-danger" role="alert">
				  <?php echo validation_errors(); ?>
				</div>
				<?php endif; ?>
			    <form action="" method="post">
			    	<div class="form-group">
					    <input type="hidden" name="nim" class="form-control" value="<?php echo $mahasiswa['nim'] ?>">
					    <small class="form-text text-danger"><?php echo form_error('nim') ?></small>
					 </div>
					 <div class="form-group">
					    <label for="nama">Nama Mahasiswa</label>
					    <input type="text" name="nama" class="form-control" value="<?php echo $mahasiswa['nama'] ?>">
					    <small class="form-text text-danger"><?php echo form_error('nama') ?></small>
					 </div>
					 <div class="form-group">
					    <label for="jurusan">Jurusan</label>
					    <select class="form-control" name="jur">
					    	<?php foreach ($jurusan as $juru): ?>
					    		<?php if($juru['jurusan'] == $mahasiswa['jur']) : ?>
							      <option value="<?= $juru['jurusan']; ?>" selected><?= $juru['jurusan']; ?></option>
							      <?php else : ?>
							      <option value="<?= $juru['jurusan']; ?>"><?= $juru['jurusan']; ?></option>
							     <?php endif; ?>
					     	<?php endforeach; ?>
					    </select>
					 </div>
					 <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
			    </form>
			  </div>
			</div>
		</div>
	</div>
</div>