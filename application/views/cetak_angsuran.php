<!DOCTYPE html>
<html>
<head>
	<title>Cetak</title>
	
</head>
<body onload="window.print();">
	<p style="margin-left:0in; margin-right:0in; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:13.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Sanggam</span></span></span></strong></span></span></p>

<div style="margin-bottom:8pt; margin-left:0in; margin-right:0in; margin-top:0in; text-align:center">
<hr /></div>

<p style="margin-left:0in; margin-right:0in; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><u><span style="font-size:13.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Bukti Bayar Angsuran</span></span></span></u></span></span></p>
<p style="margin-left:0in; margin-right:0in; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:13.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">NO. <?=$data->row()->nik?><?=$id_angsuran?><?=date('ymd',strtotime($data->row()->tgl_angsuran))?></span></span></span></span></span></p>

<table class="Table" style="border:undefined">
	<tbody>
		<tr>
			<td>
			<p style="margin-left:0in; margin-right:0in"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:13.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">NIK</span></span></span></span></span></p>
			</td>
			<td>
			<p style="margin-left:0in; margin-right:0in"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:13.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">: <?=$data->row()->nik?></span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td>
			<p style="margin-left:0in; margin-right:0in"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:13.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Nama</span></span></span></span></span></p>
			</td>
			<td>
			<p style="margin-left:0in; margin-right:0in"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:13.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">: <?=$data->row()->nama_customer?></span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td>
			<p style="margin-left:0in; margin-right:0in"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:13.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Angsuran Ke</span></span></span></span></span></p>
			</td>
			<td>
			<p style="margin-left:0in; margin-right:0in"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:13.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">: <?=$data->row()->angsuran_ke?></span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td>
			<p style="margin-left:0in; margin-right:0in"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:13.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Denda</span></span></span></span></span></p>
			</td>
			<td>
			<p style="margin-left:0in; margin-right:0in"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:13.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">: <?='Rp. '.number_format($data->row()->denda, 0, ',', '.')?></span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td>
			<p style="margin-left:0in; margin-right:0in"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:13.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Nominal Angsuran</span></span></span></span></span></p>
			</td>
			<td>
			<p style="margin-left:0in; margin-right:0in"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:13.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">: <?='Rp. '.number_format($data->row()->nominal_angsuran, 0, ',', '.')?></span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td>
			<p style="margin-left:0in; margin-right:0in"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:13.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Tanggal Bayar</span></span></span></span></span></p>
			</td>
			<td>
			<p style="margin-left:0in; margin-right:0in"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:13.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">: <?=$data->row()->tgl_angsuran?></span></span></span></span></span></p>
			</td>
		</tr>
	</tbody>
</table>

<p style="margin-left:0in; margin-right:0in">&nbsp;</p>

<p style="margin-left:0in; margin-right:0in; text-align:right"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Bandar Lampung, <?=date('Y-m-d')?></span></span></p>

<p style="margin-left:0in; margin-right:0in; text-align:right">&nbsp;</p>

<p style="margin-left:0in; margin-right:0in; text-align:right">&nbsp;</p>

<p style="margin-left:0in; margin-right:0in; text-align:right">&nbsp;</p>

<p style="margin-left:0in; margin-right:0in; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Petugas</span></span></p>

</body>
</html>

