
<section class="content-header">
      <h1>8th ENGLISH OLYMPIAD OF SMKN 1 BANYUWANGI</h1>
      
    
    </section>

<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <p>Jumlah Pendaftar</p>
              <h3> <?php $info = $data->jumdaftar($con);
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