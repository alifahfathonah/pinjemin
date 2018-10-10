<div class="row">
	<div class="col-md-4">
		<div class="au-card recent-report">
            <div class="au-card-inner">
            	<h4>Profil</h4>
				<hr/>
				<table class="table-striped table">
					<tr>
						<td>NIK</td>
						<td>: <?=$data->row()->nik?></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>: <?=$data->row()->nama_customer?></td>
					</tr>
					<tr>
						<td>Jumlah pinjaman</td>
						<td>: Rp. <?=number_format($pinjaman->row()->jml_acc, 0, ',', '.')?></td>
					</tr>
					<tr>
						<td>Bunga</td>
						<td>: <?=$pinjaman->row()->bunga?> %</td>
					</tr>
					<?php 
					$bunga = $pinjaman->row()->bunga;
					$utang = $pinjaman->row()->jml_acc;
					$lama_angsuran = $pinjaman->row()->lama_angsuran;
					$utang_pokok = $utang/$lama_angsuran;
					$utang_persentase = $utang * ($bunga/100);
					$angsuran_asli = $utang_pokok + $utang_persentase;
					
					?>
					<tr>
						<td>Nominal angsuran</td>
						<td>: <?='Rp. '.number_format($angsuran_asli, 0, ',', '.');?> </td>
					</tr>
				</table>
            </div>
        </div>
		
	</div>
	<div class="col-md-8">
		<div class="au-card recent-report">
            <div class="au-card-inner">
            	<h4>Angsuran</h4>
            	<hr/>
            	<table class="table table-striped">
            		<tr>
            			<td>No</td>
            			<td>Angsuran Ke</td>
            			<td>Denda</td>
            			<td>Nominal Angsuran</td>
            			<td>Tanggal Angsuran</td>
            			<td>
            				<a href="#" id="<?=$id_pinjaman?> - <?=$nik?>" class="tambah_angsuran btn btn-sm btn-info">Bayar</a>
            			</td>
            		</tr>
            		<?php $no=1;foreach($angsuran->result() as $row_angsuran){?>
            		<tr>
            			<td><?=$no++?>.</td>
            			<td><?=$row_angsuran->angsuran_ke?></td>
            			<td><?='Rp. '.number_format($row_angsuran->denda, 0, ',', '.');?> </td>
            			<td><?='Rp. '.number_format($row_angsuran->nominal_angsuran, 0, ',', '.');?></td>
            			<td><?=$row_angsuran->tgl_angsuran?></td>
            			<td>
            				<!-- <a href="#" class="hapus_angsuran btn btn-sm btn-danger" id="<?=$row_angsuran->id_angsuran?>">Hapus</a> -->
            				<a href="<?=base_url()?>admin/cetak_angsuran/<?=$row_angsuran->id_angsuran?>" class="btn btn-sm btn-danger" target="_blank" >Cetak</a>
            			</td>
            		</tr>
            		<?php }?>
            	</table>
            	
            </div>
        </div>
	</div>
</div>

