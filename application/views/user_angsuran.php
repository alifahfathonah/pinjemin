<div class="row">
	<div class="col-md-12">
		<div class="au-card recent-report">
            <div class="au-card-inner">
            	<h4>Riwayat Angsuran</h4>
				<hr/>
				<table class="table table-striped">
					<tr>
						<td>Nominal yang diajukan</td>
						<td>: Rp. <?=number_format($data_ajuan->row()->jml_pengajuan,0, ',', '.')?></td>
					</tr>
					<tr>
						<td>Nominal yang di ACC</td>
						<td>: Rp. <?=number_format($data_ajuan->row()->jml_acc,0, ',', '.')?></td>
					</tr>
					<tr>
						<td>Lama Angsuran</td>
						<td>: <?=$data_ajuan->row()->lama_angsuran?> <?=$data_ajuan->row()->lama_angsuran_dalam?></td>
					</tr>
					<tr>
						<td>Bunga</td>
						<td>: <?=$data_ajuan->row()->bunga?> %</td>
					</tr>
					<tr>
						<td>Angsuran per <?=$data_ajuan->row()->lama_angsuran_dalam?></td>
						<td>: 
							<?php 
							$bunga = $data_ajuan->row()->bunga;
							$utang = $data_ajuan->row()->jml_acc;
							$lama_angsuran = $data_ajuan->row()->lama_angsuran;
							$utang_pokok = $utang/$lama_angsuran;
							$utang_persentase = $utang * ($bunga/100);
							$angsuran_asli = $utang_pokok + $utang_persentase;
							echo 'Rp. '.number_format($angsuran_asli, 0, ',', '.');
							?>
						</td>
					</tr>
				</table>
				<hr/>
				<table class="table-striped table">
            		<tr>
            			<th>No.</th>
            			<th>Nominal</th>
            			<th>Angsuran Ke</th>
            			<th>Denda</th>
            			<th>Tanggal Bayar</th>
            		</tr>
            		<?php $no = 1; foreach($data_angsuran->result() as $row_angsuran){?>
            		<tr>
            			<td><?=$no++?>.</td>
            			<td>Rp. <?=number_format($row_angsuran->nominal_angsuran, 0, ',', '.')?></td>
            			<td><?=$row_angsuran->angsuran_ke?></td>
            			<td>Rp. <?=number_format($row_angsuran->denda, 0, ',', '.')?></td>
            			<td><?=$row_angsuran->tgl_angsuran?></td>
            		</tr>
            		<?php }?>
            	</table>
            </div>
        </div>
		
	</div>
	
</div>



