<div class="row">
	<div class="col-md-12">
		<div class="au-card recent-report">
            <div class="au-card-inner">
            	<h4>Customer</h4>
				<hr/>
				<table class="table table-striped">
					<tr>
						<td>NIK</td>
						<td><?=$data->row()->nik?></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><?=$data->row()->nama_customer?></td>
					</tr>
				</table>

				<hr/>
				<br/>
				<table class="table table-striped">
					<tr>
						<td>No.</td>
						<td>Jumlah Pengajuan</td>
						<td>Lama Angsuran</td>
						<td>Jumlah di ACC</td>
						<td>Bunga</td>
						<td>Status</td>
						<td>Catatan</td>
						<td></td>
					</tr>
					<?php $no = 1;foreach($data_pinjaman->result() as $row_pinjaman){?>
					<tr>
						<td><?=$no++?>.</td>
						<td>Rp. <?=number_format($row_pinjaman->jml_pengajuan, 0, ',', '.')?></td>
						<td><?=$row_pinjaman->lama_angsuran?> <?=$row_pinjaman->lama_angsuran_dalam?></td>
						
						<td>
							Rp. <?=number_format($row_pinjaman->jml_acc, 0, ',', '.')?>
						</td>
						<td>
							<?=$row_pinjaman->bunga?>
						</td>
						<td>
							<?=$row_pinjaman->status_pinjaman?>
						</td>
						<td>
							<?=$row_pinjaman->catatan?>
						</td>
						<td>
							
							<?php  if($row_pinjaman->status_pinjaman == 'ter-verifikasi'){?>
							<a href="<?=base_url()?>admin/angsuran_verifikasi/<?=$row_pinjaman->id_pinjaman?>/<?=$row_pinjaman->id_customer?>" class="btn btn-sm btn-warning">Angsuran</a>
							<?php }else{ ?>
							<a href="#" id="<?=$row_pinjaman->id_pinjaman?>" class="btn btn-sm btn-danger verifikasi_pengajuan">Verifikasi</a>
							<?php }?>
						</td>
					</tr>
					<?php }?>
				</table>
            </div>
        </div>
		
	</div>
</div>

