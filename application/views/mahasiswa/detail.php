<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    Detail Data Mahasiswa
			  </div>
			  <div class="card-body">
			    <h5 class="card-title"><?php echo $mahasiswa['nama']; ?></h5>
			    <h6 class="card-subtitle mb-2 text-muted"><?php echo $mahasiswa['nim']; ?></h6>
			    <p class="card-text"><?php echo $mahasiswa['jur']; ?></p>
			    <a href="<?php echo base_url(); ?>mahasiswa" class="btn btn-primary">kembali</a>
			  </div>
			</div>
		</div>
	</div>
</div>