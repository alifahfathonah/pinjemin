<div class="row">
	<div class="col-md-4">
		<div class="au-card recent-report">
            <div class="au-card-inner">
            	<h4>Ajukan Pinjaman</h4>
			<hr/>
                  <form id="form_pinjaman">
      			<div class="form-group">
      				<label>Nominal Pinjaman</label>
      				<input type="number" name="nominal" class="form-control" value="">
      			</div>
                        <div class="form-group">
                              <label>Lama Angsuran dalam</label>
                              <select name="lama_angsuran_dalam" class="form-control">
                                    <option value="">--pilih--</option>
                                    <option value="bulan">bulan</option>
                                    <option value="minggu">minggu</option>
                              </select>
                        </div>
      			<div class="form-group">
      				<label>Lama Angsurann</label>
      				<input type="number" name="lama_angsuran" class="form-control" placeholder="contoh: 12">
      			</div>
      			<button type="submit" class="btn btn-primary">Ajukan</button>
                        <div id="notif_pinjaman"></div>
                  </form>
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
                              <td>Status Pengajuan</td>
            			<td>Nominal yang di ACC</td>            			
            			<td>Catatan</td>
            			<td>Aksi</td>
            		</tr>
            		<?php
            		$no = 1;
            			foreach($data_file->result() as $row_file){
            		?>
            		<tr>
            			<td><?=$no++?>.</td>
            			<td>Rp. <?=number_format($row_file->jml_pengajuan,0, ',', '.')?></td>
            			<td><?=$row_file->lama_angsuran.' '.$row_file->lama_angsuran_dalam?> </td>         			
            			<td><?=$row_file->status_pinjaman?></td>
                              <td>Rp. <?=number_format($row_file->jml_acc,0, ',', '.')?></td>
            			<td><?=$row_file->catatan?></td>
                              <td>
                                    <?php if($row_file->status_pinjaman == 'ter-verifikasi'){?>
                                          <a href="<?=base_url()?>user/angsuran/<?=$row_file->id_pinjaman?>">Angsur</a>
                                    <?php }else{ echo '-';}?>
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

