<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('click', '.verifikasi_file', function(e){
			e.preventDefault();
			var id = $(this).attr('id');
			$('#modal_verifikasi_file').modal();
			$('#id_file').val(id);
			$(document).on('submit', '#form_verifikasi_file', function(e){
				e.preventDefault();
				var data = $('#form_verifikasi_file').serialize();
				$('#notif_verifikasi').html('Loading...');
				$.ajax({
					url: '<?=base_url()?>admin/verifikasi_file',
					type: 'POST',
					dataType: 'JSON',
					data: data,
					success: function(msg){
						if(msg.status == 'success'){
	                        $('#notif_verifikasi').html(msg.textnya);
	                        location.reload();
	                    }else{
	                        $('#notif_verifikasi').html(msg.textnya);
	                    }
					}
				});
			});
		});

		$(document).on('click', '.verifikasi_pengajuan', function(e){
			e.preventDefault();
			var id = $(this).attr('id');
			$('#modal_verifikasi_angsuran').modal();
			$('#id_pinjaman').val(id);			
			
			$(document).on('submit', '#form_verifikasi_pengajuan', function(e){
				var data = $('#form_verifikasi_pengajuan').serialize();
				$('#notif_verifikasi_pengajuan').html('Loading...');
				$.ajax({
					url: '<?=base_url()?>admin/verifikasi_pengajuan',
					type: 'POST',
					dataType: 'JSON',
					data: data,
					success: function(msg){
						if(msg.status == 'success'){
	                        $('#notif_verifikasi_pengajuan').html(msg.textnya);
	                        location.reload();
	                    }else{
	                        $('#notif_verifikasi_pengajuan').html(msg.textnya);
	                    }
					}
				});
			});
			
		});

		$(document).on('click', '.tambah_angsuran', function(e){
			e.preventDefault();
			var id = $(this).attr('id');
			$('#modal_bayar_angsuran').modal();
		});

		$(document).on('submit', '#form_angsuran', function(e){
			e.preventDefault();
			var data = $('#form_angsuran').serialize();
			$('#notif_angsuran').html('Loading...');
			$.ajax({
				url: '<?=base_url()?>admin/simpan_bayar_angsuran',
				type: 'POST',
				dataType: 'JSON',
				data: data,
				success: function(msg){
					if(msg.status == 'success'){
                        $('#notif_angsuran').html(msg.textnya);
                        location.reload();
                    }else{
                        $('#notif_angsuran').html(msg.textnya);
                    }
				}
			});
		});
	});
</script>

<!-- modal medium -->
<div class="modal fade" id="modal_bayar_angsuran" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Bayar Angsuran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>            
            <form id="form_angsuran">
            <div class="modal-body">
            	<div class="form-group">
            		<input type="hidden" name="nik" id="nik" value="<?=$nik?>">
            		<input type="hidden" name="id_pinjaman" id="id_pinjaman" value="<?=$id_pinjaman?>">
            		<label>Angsuran Ke</label>
	                <input type="number" name="angsuran_ke" id="angsuran_ke" class="form-control">
	            </div>

            	<div class="form-group">
	                <label>Denda: *isi dengan angka 0 jika tidak ada</label>
	                <input type="number" name="denda" id="denda" class="form-control">
	            </div>
	            <div class="form-group">
	                <label>Nominal Angsuran</label>
	                <input type="number" name="nominal_angsuran" id="nominal_angsuran" class="form-control">
	            </div>
	            <!-- <div class="form-group">
	                <label>Bukti:</label>
	                <input type="text" name="denda" id="denda" class="form-control">
	            </div> -->
                <div id="notif_angsuran"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        	</form>
        </div>
    </div>
</div>
<!-- end modal medium -->

<!-- modal medium -->
<div class="modal fade" id="modal_verifikasi_file" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">verifikasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>            
            <form id="form_verifikasi_file">
            <div class="modal-body">
            	<div class="form-group">
            		<input type="hidden" name="id_file" id="id_file">
            		<label>Status Verifikasi</label>
	                <select name="verifikasi" id="verifikasi" class="form-control" required>
	                	<option value="">--pilih--</option>
	                	<option value="ter-verifikasi">ter-verifikasi</option>
	                	<option value="ditolak">ditolak</option>
	                </select>
	            </div>

            	<div class="form-group">
	                <label>Catatan:</label>
	                <textarea name="catatan_file" class="form-control"></textarea>
	            </div>
                <div id="notif_verifikasi"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary btn_verifikasi">verifikasi</button>
            </div>
        	</form>
        </div>
    </div>
</div>
<!-- end modal medium -->

<!-- modal medium -->
<div class="modal fade" id="modal_verifikasi_angsuran" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">verifikasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>            
            <form id="form_verifikasi_pengajuan">
            <div class="modal-body">
            	<div class="form-group">
            		<input type="hidden" name="id_pinjaman" id="id_pinjaman">
            		<label>Status Verifikasi</label>
	                <select name="verifikasi" id="verifikasi" class="form-control" required>
	                	<option value="">--pilih--</option>
	                	<option value="ter-verifikasi">ter-verifikasi</option>
	                	<option value="ditolak">ditolak</option>
	                </select>
	            </div>
	            <div class="form-group">
	            	<label>Jumlah yang disetujui</label> 
	                <input type="number" name="jml_acc" class="form-control" placeholder="contoh: 6000000" />
	            </div>
	            <div class="form-group">
	            	<label>Bunga (%) : *tidak menggunakan koma tapi menggunakan titik</label> 
	                <input type="text" name="bunga" class="form-control" placeholder="contoh: 1.5" />
	            </div>
            	<div class="form-group">
	                <label>Catatan:</label>
	                <textarea name="catatan_file" class="form-control"></textarea>
	            </div>
                <div id="notif_verifikasi_pengajuan"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary btn_verifikasi">verifikasi</button>
            </div>
        	</form>
        </div>
    </div>
</div>
<!-- end modal medium -->