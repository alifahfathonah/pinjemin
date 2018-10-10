<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('click', '.tambah_file', function(e){
			e.preventDefault();
			$('#modal_user_tambah_file').modal();
		});

        $(document).on('submit', '#form_file', function(e){
            e.preventDefault();
            $('#notif_file').html('Loading...');
            var data = new FormData(document.getElementById('form_file'));
            $.ajax({
                url : '<?=base_url()?>user/tambah_file',
                type : 'POST',
                data : data,
                processData: false, 
                contentType: false, 
                dataType: "JSON",
                success: function(msg){
                    if(msg.status == 'success'){
                        $('#notif_file').html(msg.textnya);
                        location.reload();
                    }else{
                        $('#notif_file').html(msg.textnya);
                    }
                }
            });
        });
	});

    
</script>
<!-- modal medium -->
<div class="modal fade" id="modal_user_tambah_file" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Tambah File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_file">
            <div class="modal-body">                
                <div class="form-group">
                	<label>Jenis</label>
                	<select class="form-control" name="jenis" required>
                		<option value="">--pilih--</option>
                		<option value="KTP">KTP</option>
                		<option value="KK">KK</option>
                		<option value="Photo">Photo</option>
                		<option value="Photo Rumah">Photo Rumah</option>
                		<option value="Surat Izin Usaha">Surat Izin Usaha</option>
                		<option value="Nomor Rekening">Nomor Rekening</option>
                	</select>
                </div>
                <div class="form-group">
                	<label>FIle</label>
                	<input type="file" name="nama_file" class="form-control" required>
                </div>
                <div id="notif_file"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal medium -->