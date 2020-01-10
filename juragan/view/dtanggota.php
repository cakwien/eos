<section class="content">
  <div class="row">   
<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">DATA PENDAFTAR 
                  <br>
                  <br>
                  <?php $dt = $data->tampil($con);
                  if ($dt > 0)
                  {
                      echo ' <a href="?p=cetak" class="btn-sm btn-success" type="reset"><I class="fa fa-print"></I> CETAK DATA PENDAFTAR</a>
                  <a href="?p=ex" class="btn-sm btn-danger" type="reset"> <I class="fa fa-file-excel-o"></I> DOWNLOAD FORMAT EXCEL</a>';
                  }else
                  {
                      echo "";
                  }
                  
                  ?>
               
                </h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
            <thead>      
                <tr>
                  <th style="width: 10px">#</th>
                  <th>No. Pendaftaran</th>
                  <th>Nama Lengkap</th>
                  <th>TimeStamp</th>
                  <th>L/P</th>
                  <th>Asal Sekolah</th>
                  <th>Kelas</th>
                  <th>Transfer</th>
                </tr>
                  </thead>                               
                  <?php
                   $dt2 = $data->tampil($con);
                  $no=1;
                  foreach($dt2 as $isi){
                  ?>
                  <tbody>
                <tr>
                  <td> <?php echo $no; ?> </td>
                  <td><?php echo $isi['nopeserta']; ?></td>
                  <td><?php echo $isi['nama']; ?></td>
                  <td><?php $ts=date('d-m-Y h:i:s',strtotime($isi['tgldaftar'])); echo $ts; ?></td>
                  <td><?php echo $isi['jeniskelamin']; ?></td>
                  <td><?php echo $isi['sekolah']; ?></td>
                  <td><?php echo $isi['kelas']; ?></td>
                  <td><?php $ck=$data->cekbayar($con,$isi['idpeserta']);
                        echo $ck;
                      ?> </td>
                </tr>
                  </tbody>
                  <?php $no++; } ?>
                  
              </table>
            </div>
            <!-- /.box-body -->
        </div>
</div>
    </div>
</section>