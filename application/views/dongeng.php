<div class="container-fluid">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
</ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/slider1.jpeg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slider2.jpeg') ?>" class="d-block w-100" alt="...">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>

    <div class="row text-center mt-3">

    <?php foreach ($dongeng as $bk) : ?>

        <div class="card ml-3 mb-3" style="width: 18rem;">
        <img src="<?php echo base_url().'/uploads/'.$bk->gambar ?>" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title mb-1"><?php echo $bk->nm_buku ?></h5>
        <small><?php echo $bk->pengarang ?></small><br>
        <small><?php echo $bk->penerbit ?></small><br>
        <span class="badge badge-pill badge-success mb-3">Rp<?php echo number_format($bk->harga, 0,',','.') ?></span><br>
        <?php echo anchor('pj_dashboard/tambah_ke_keranjang/'.$bk->id_buku,'<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>') ?>
        <?php echo anchor('pj_dashboard/detail/'.$bk->id_buku,'<div class="btn btn-sm btn-success">Detail</div>') ?>
        </div>
    </div>

    <?php endforeach; ?>
</div>
</div>
</div>