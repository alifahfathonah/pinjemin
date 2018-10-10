<div class="row">
	<div class="col-md-4">
		<div class="au-card recent-report">
            <div class="au-card-inner">
            	<h4>Profil</h4>
				<hr/>
				<table class="table table-striped">
					<tr>
						<td>NIK</td>
						<td>
							<input type="text" name="nik" class="form-control" value="<?=$data->row()->nik?>">
						</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>
							<input type="text" name="nama" class="form-control" value="<?=$data->row()->nama_customer?>">
						</td>
					</tr>					
					<tr>
						<td>Tempat Lahir</td>
						<td>
							<input type="text" name="tempat_lahir" class="form-control" value="<?=$data->row()->tempat_lahir?>">
						</td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>
							<input type="text" name="tgl_lahir" class="form-control" value="<?=$data->row()->tgl_lahir?>">
						</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>
							<input type="text" name="jk" class="form-control" value="<?=$data->row()->jenis_kelamin?>">
						</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>
							<input type="text" name="email" class="form-control" value="<?=$data->row()->email?>">
						</td>
					</tr><tr>
						<td>Nomor HP</td>
						<td>
							<input type="text" name="no_hp" class="form-control" value="<?=$data->row()->no_hp?>">
						</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>
							<input type="text" name="ala,at" class="form-control" value="<?=$data->row()->alamat?>">
						</td>
					</tr>
				</table>
            </div>
        </div>
		
	</div>
	<div class="col-md-8">
		<div class="au-card recent-report">
            <div class="au-card-inner">
            	<h4>File Pendukung</h4>
            	<hr/>
            	<table class="table table-striped">
            		<tr>
            			<td>No</td>
            			<td>Jenis</td>
            			<td>File</td>
            			<td>Status</td>
            			<td>Catatan</td>
            			<td>
            				Aksi
            			</td>
            		</tr>
            		<?php
            		$no = 1;
            			foreach($data_file->result() as $row_file){
            		?>
            		<tr>
            			<td><?=$no++?>.</td>
            			<td><?=$row_file->type_file?></td>
            			<td><a href="<?=base_url()?>assets/file_upload/<?=$row_file->nama_file?>" target="_blank">Lihat</a></td>
            			<td><?=$row_file->status_verifikasi?></td>
            			<td><?=$row_file->catatan_verifikasi?></td>
            			<td>
            				<button type="button" class="btn btn-danger btn-sm verifikasi_file" id="<?=$row_file->id_file?>" >verifikasi</button>
            			</td>
            		</tr>
            		<?php
            			}
            		?>
            	</table>
            	
            </div>
        </div>
	</div>
</div>

