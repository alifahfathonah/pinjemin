<div class="row">
	<div class="col-md-12">
		<div class="au-card recent-report">
            <div class="au-card-inner">
            	<h4>Customer</h4>
				<hr/>
				<table class="table table-striped">
					<tr>
						<td>No.</td>
						<td>NIK</td>
						<td>Nama</td>
						<td></td>
					</tr>
					<?php $no = 1;foreach($data->result() as $row_customer){?>
					<tr>
						<td><?=$no++?>.</td>
						<td><?=$row_customer->nik?></td>
						<td><?=$row_customer->nama_customer?></td>
						<td>
							<a class="btn btn-sm btn-info" href="<?=base_url()?>admin/detail_customer/<?=$row_customer->id_customer?>">Detail</a>
							<a  class="btn btn-sm btn-danger" href="<?=base_url()?>admin/ajuan_peminjaman/<?=$row_customer->id_customer?>">Ajuan Pinjaman</a>
						</td>
					</tr>
					<?php }?>
				</table>
            </div>
        </div>
		
	</div>
</div>

