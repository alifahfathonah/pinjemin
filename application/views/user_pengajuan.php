<div class="row">
	<div class="col-md-4">
		<div class="au-card recent-report">
            <div class="au-card-inner">
            	<h4>Ajukan Pinjaman</h4>
				<hr/>
				<div class="form-group">
					<label>Nominal Pinjaman (max: Rp. 6000.000)</label>
					<input type="text" name="nik" class="form-control" value="">
				</div>
				<div class="form-group">
					<label>Lama Angsuran</label>
					<input type="text" name="nama" class="form-control" value="">
				</div>
				<button type="submit" class="btn btn-primary">Ajukan</button>
            </div>
        </div>
		
	</div>
	<div class="col-md-8">
		<div class="au-card recent-report">
            <div class="au-card-inner">
            	<h4>Riwayat Pengajuan</h4>
            	<hr/>
            	<table class="table table-striped">
            		<tr>
            			<td>No</td>
            			<td>Nominal</td>
            			<td>Lama Angsuran</td>
            			<td>Nominal yang di ACC</td>
            			<td>Status Pengajuan</td>
            			<td>Catatan</td>
            			
            		</tr>
            		<?php
            		$no = 1;
            			foreach($data_file->result() as $row_file){
            		?>
            		<tr>
            			<td><?=$no++?>.</td>
            			<td><?=$row_file->jml_pengajuan?></td>
            			<td><?=$row_file->lama_angsuran?></td>
            			<td><?=$row_file->jml_acc?></td>
            			<td><?=$row_file->status?></td>
            			<td><?=$row_file->catatan?></td>
            		</tr>
            		<?php
            			}
            		?>
            	</table>
            	
            </div>
        </div>
	</div>
</div>

