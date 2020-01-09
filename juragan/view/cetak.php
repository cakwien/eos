<?php
date_default_timezone_set('Asia/Jakarta');
?>

<script>
    window.print();
    setTimeout(function(){window.location.href='?p=<?php echo "admin"; ?>'},3000)
</script>

<style>
table.minimalistBlack {
  font-family: "Trebuchet MS", Helvetica, sans-serif;
  border: 3px solid #000000;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.minimalistBlack td, table.minimalistBlack th {
  border: 1px solid #000000;
  padding: 5px 4px;
}
table.minimalistBlack tbody td {
  font-size: 11px;
}
table.minimalistBlack thead {
  background: #CFCFCF;
  background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  border-bottom: 3px solid #000000;
}
table.minimalistBlack thead th {
  font-size: 12px;
  font-weight: bold;
  color: #000000;
  text-align: left;
}
table.minimalistBlack tfoot td {
  font-size: 14px;
}
</style>

<h3>LIST PENDAFTAR 8TH ENGLISH OLYMPIAD OF SMKN 1 BANYUWANGI</h3>
<label style="font-size:13px; font-style:italic;">Last Update : <?= date('d/m/Y --- H:i:s'); ?></label>
<table class="minimalistBlack">
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