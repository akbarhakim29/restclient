<?php 
		header("Content-type: application/octet-stream");
		header("Content-Disposition: attachment; filename=tabel-klimatologi.xls");
		header("Pragma: no-cache");
		header("Expires: 0");
		?>
		<h1 align="center">DATA MONITORING KLIMATOLOGI </h1>
		<h4>dicetak tanggal : <?php $tgl=date('d-m-Y');echo $tgl;?></h4></br>
		<table border='2' width="70%">
		<tr align=center bgcolor="silver">
		<td>WILAYAH</td>
		<td>SUHU</td>
		<td>CURAH HUJAN</td>
		<td>KELEMBABAN</td>
		<td>WAKTU</td>
		</tr>
		<?php
		foreach($query as $row) { ?>
		<tr align=center>
		<td><?php echo $row->WILAYAH;?></td>
		<td><?php echo $row->SUHU;?></td>
		<td><?php echo $row->CURAH_HUJAN;?></td>
		<td><?php echo $row->KELEMBABAN;?></td>
		<td><?php echo $row->DATE_TIME;?></td>
		</tr>
		<?php } ?>
		</table>