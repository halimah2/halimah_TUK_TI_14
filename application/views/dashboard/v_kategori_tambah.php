<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Surat Masuk
			<small>Surat Masuk</small>
		</h1>
	</section>

	<section class="content">

		<div class="row">
			<div class="col-lg-6">
				<a href="<?php echo base_url().'dashboard/kategori'; ?>" class="btn btn-sm btn-primary">Kembali</a>
				
				<br/>
				<br/>

				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">surat masuk</h3>
					</div>
					<div class="box-body">
						
						
						<form method="post" action="<?php echo base_url('dashboard/kategori_aksi') ?>">
							<div class="box-body">
								<div class="form-group">
									<label>surat masuk</label>
									<input type="text" name="kategori" class="form-control" placeholder="Masukan surat masuk ..">
									<?php echo form_error('kategori'); ?>
								</div>
							</div>

							<div class="box-footer">
								<input type="submit" class="btn btn-success" value="Simpan">
							</div>
						</form>

					</div>
				</div>

			</div>
		</div>

	</section>

</div>