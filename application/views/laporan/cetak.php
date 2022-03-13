<html>
	<head>
		<title>Laporan Editor</title>
	</head>
	<body>
		<center>
		<img src="../images/logo-hut-5.png" height="100">
		<h1>Laporan Editor RiauOnline.co.id</h1>
		</center>
		<p>Periode : <?= $awal ?> s/d <?= $akhir ?>, waktu unduh : <?= tanggal_waktu(date('Y-m-d H:i:s')) ?></p>
		<hr>
		<p>Total Upload</p>
		<hr>
		<table border="1px solid black" width="100%">
			<thead>
				<th>No.</th>
				<th>Editor</th>
				<th>Total Berita</th>
				<th>Total Kunjungan</th>
			</thead>
			<tbody>
				<?php $no = 1; $total = 0; $total_k = 0; foreach($counter as $c): ?>
				<tr>
					<td width="5%"><?= $no ?></td>
					<td><?= $c['name'] ?></td>
					<td><?= $c['total'] ?></td>
					<td><?= $c['total_hit'] ?></td>
				</tr>
				<?php $no++; $total += $c['total']; $total_k += $c['total_hit']; endforeach; ?>
				<tr>
				<td colspan="2"><b>Total</b></td>
				<td><?= $total ?></td>
				<td><?= $total_k ?></td>
				</tr>
			</tbody>
		</table>
		<?php if($pilihan == 2): ?>
		<hr>
		<p>Detail Berita</p>
		<hr>
		<table border="1px solid black" width="100%">
			<thead>
				<th width="5%">No.</th>
				<th>Judul</th>
				<th>Waktu Tayang</th>
				<th>Editor</th>
				<th>Pembaca</th>
			</thead>
			<tbody>
			<?php $no = 1; foreach($list as $c): ?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $c['title'] ?></td>
					<td><?= $c['publish_date'] ?></td>
					<td><?= $c['name'] ?></td>
					<td><?= $c['total_hit'] ?></td>
				</tr>
				<?php $no++; endforeach; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</body>
	<script>
	window.print();
	</script>
</html>