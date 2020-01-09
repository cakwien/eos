<?php
date_default_timezone_set('Asia/Jakarta');

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=listEOS8.xls");
?>

<script>
    window.print();
    setTimeout(function(){window.location.href='?p=<?php echo "admin"; ?>'},3000)
</script>

<h3>LIST PENDAFTAR 8TH ENGLISH OLYMPIAD OF SMKN 1 BANYUWANGI</h3>
<label style="font-size:13px; font-style:italic;">Last Update : <?= date('d/m/Y --- H:i:s'); ?></label>
<table border="1">
<thead>
<tr>
<th>No</th>
<th>No Pendaftaran</th>
<th>Nama Lengkap</th>
<th>Time Stamp</th>
<th>TTL</th>
<th>L/P</th>
<th>Asal Sekolah</th>
<th>Kelas</th>
<th>Email</th>
<th>HP</th>
<th>Alamat</th>
<th>Pendamping</th>
<th>Telp. Pendamping</th>
<th>Transfer</th>
</tr>
</thead>
<tbody>
    <?php $dt=$data->tampil($con); $no=1; foreach ($dt as $isi){ ?>
<tr>
<td><?= $no ?></td>
<td><?= $isi['nopeserta'] ?></td>
<td><?= $isi['nama'] ?></td>
<td><?= date('d/m/Y - H:i:s' ,strtotime($isi['tgldaftar'])) ?></td>
<td><?= $isi['tplahir'].",".$isi['tglahir'] ?></td>
<td><?= $isi['jeniskelamin'] ?></td>
<td><?= $isi['sekolah'] ?></td>
<td><?= $isi['kelas'] ?></td>
<td><?= $isi['email'] ?></td>
<td><?= $isi['telp'] ?></td>
<td><?= $isi['alamat'] ?></td>
<td><?= $isi['pendamping'] ?></td>
<td><?= $isi['telppendamping'] ?></td>
<td><?php $ck=$data->cekbayar($con,$isi['idpeserta']); echo $ck; ?></td>
</tr>
    <?php } ?>
</tbody>
</table>