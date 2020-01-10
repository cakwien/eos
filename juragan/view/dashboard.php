
<section class="content-header">
      <h1>8th ENGLISH OLYMPIAD OF SMKN 1 BANYUWANGI</h1>
      
    
    </section>

<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <p>Jumlah Pendaftar Keseluruhan</p>
              <h3> <?php $info = $data->jumdaftar($con);
      echo $info['jumlah']; ?></h3>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="?p=pendaftar" class="small-box-footer">Info Selengkapnya  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
          
           <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <p>Jumlah Pendaftar Kelas VII</p>
              <h3> <?php $info = $data->bykelas($con,'VII');
      echo $info['jumlah']; ?></h3>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="?p=pendaftar" class="small-box-footer">Info Selengkapnya  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
          
          <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <p>Jumlah Pendaftar Kelas VIII</p>
              <h3> <?php $info = $data->bykelas($con,'VIII');
      echo $info['jumlah']; ?></h3>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="?p=pendaftar" class="small-box-footer">Info Selengkapnya  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
          
          <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
            <p>Jumlah Pendaftar Kelas IX</p>
              <h3> <?php $info = $data->bykelas($con,'IX');
      echo $info['jumlah']; ?></h3>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="?p=pendaftar" class="small-box-footer">Info Selengkapnya  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
          
          
          
          
        <!-- ./col -->
      </div>
    

    
    
</section>