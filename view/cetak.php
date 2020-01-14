<script>
    window.print();
   //setTimeout(function(){window.location.href='?p=<?php echo md5("daftareos"); ?>'},3000)
    
    function balik()
    {
        window.history.back(-1);
    }
    
</script>

<?php
    include ("qr/qrlib.php");
?>

<head>
<title>EOS SMKN 1 BANYUWANGI 2020</title>

<style>
table.minimalistBlack {
  font-family: "Trebuchet MS", Helvetica, sans-serif;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.minimalistBlack td, table.minimalistBlack th {
  padding: 5px 4px;
}
table.minimalistBlack tbody td {
  font-size: 13px;
}
table.minimalistBlack thead {
  background: #CFCFCF;
  background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  border-bottom: 3px solid #000000;
}
table.minimalistBlack thead th {
  font-size: 15px;
  font-weight: bold;
  color: #000000;
  text-align: left;
}
table.minimalistBlack tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #000000;
  border-top: 3px solid #000000;
}
table.minimalistBlack tfoot td {
  font-size: 14px;
}
</style>

</head>
    
    
<body onfocus="balik()" >

<?php
$dt=$data->tampil($con,$id);
?>

<img src="img/eos8.png" width="300">
<br>
<br>
<table class="minimalistBlack" border="1">

<thead>
    
<tr>
<th colspan="2">Bukti Pendaftaran 8th English Olympiad of SMKN 1 Banyuwangi</th>
</tr>
</thead>
<tfoot>
<tr>
<td colspan="2"> NB : Bukti pendaftaran ini harap dibawa pada saat pelaksaan Olympiade sebagai bukti untuk melakukan registrasi ulang </td>

<?php $qr=$dt['nopeserta']; ?>
</tr>
<tr>
    <td><?php QRcode::png($qr,'image.png','L',4,4); ?><img src="image.png"></td>
    <td>QRCODE</td>
</tr>
</tfoot>
<tbody>
<tr>
<td width="200">No.Pendaftaran</td>
<td >: <?php echo $dt['nopeserta']; ?></td>

</tr>
<tr>
<td>Nama Peserta</td>
<td >: <?php echo $dt['nama']; ?></td>
</tr>
<tr>
<td>Asal Sekolah</td>
<td  >: <?php echo $dt['sekolah']; ?></td>
</tr>
<tr>
<td>Waktu Daftar</td>
<td  >: <?php echo $dt['tgldaftar']; ?></td>
</tr>
<tr>
<td>Nama Pendamping</td>
<td  >: <?php echo $dt['pendamping']; ?></td>
</tr>
<tr>
</tbody>
</table>
<br>
</body>