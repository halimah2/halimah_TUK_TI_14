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
						<h3 class="box-title">Surat Masuk</h3>
					</div>
					<div class="box-body">
						
						<?php foreach($kategori as $k){ ?>

							<form method="post" action="<?php echo base_url('dashboard/kategori_update') ?>">
								<div class="box-body">
									<div class="form-group">
										<label>Surat Masuk</label>
										<input type="hidden" name="id" value="<?php echo $k->kategori_id; ?>">
										<input type="text" name="surat masuk" class="form-control" placeholder="Masukkan nama kategori .." value="<?php echo $k->kategori_nama; ?>">
										<?php echo form_error('kategori'); ?>
									</div>
								</div>

								<div class="box-footer">
									<input type="submit" class="btn btn-success" value="Update">
								</div>
							</form>

						<?php } ?>

					</div>
				</div>

			</div>
		</div>

	</section>

</div>