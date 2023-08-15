<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Surat Masuk
			<small>Surat Masuk</small>
		</h1>
	</section>

	<section class="content">

		<div class="row">
			<div class="col-lg-9">
				
				<a href="<?php echo base_url().'dashboard/kategori_tambah'; ?>" class="btn btn-sm btn-primary">Buat Surat Masuk baru</a>

				<br/>
				<br/>

				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title"></h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th width="1%">NO Surat</th>
									<th>Pengirim</th>
									<th>waktu</th>
									<th>Tempat<th>
									<th>Lampiran<th>
									<th>perihal<th>
									<th style="width: 20%">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$no = 1;
								foreach($kategori as $k){ 
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $k->kategori_nama; ?></td>
										<td><?php echo $k->kategori_slug; ?></td>
										<td>
											<a href="<?php echo base_url().'dashboard/surat_edit/'.$k->kategori_id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> </a>
											<a href="<?php echo base_url().'dashboard/surat_hapus/'.$k->kategori_id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
						

					</div>
				</div>

			</div>
		</div>

	</section>

</div>