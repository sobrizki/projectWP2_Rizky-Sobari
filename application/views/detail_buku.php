<div class="container-fluid">
<div class="card">
  <div class="card-header">DETAIL PRODUK</div>
  <div class="card-body">

    <?php foreach($buku as $bk): ?>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php echo base_url().'/uploads/'.$bk->gambar ?>" class="card-img-top">

        </div>
        <div class="col-md-8">
            <table class="table">
                <tr>
                    <td>Judul Buku</td>
                    <td><strong><?php echo $bk->nm_buku ?></strong></td>
    </tr>
    
    <tr>
                    <td>Pengarang</td>
                    <td><strong><?php echo $bk->pengarang ?></strong></td>
    </tr>

    <tr>
                    <td>Penerbit</td>
                    <td><strong><?php echo $bk->penerbit ?></strong></td>
    </tr>

    <tr>
                    <td>Kategori</td>
                    <td><strong><?php echo $bk->kategori ?></strong></td>
    </tr>

    <tr>
                    <td>Stok</td>
                    <td><strong><?php echo $bk->stok ?></strong></td>
    </tr>

    <tr>
                    <td>Harga</td>
                    <td><strong><div class="btn btn-sm btn-success">Rp<?php echo number_format($bk->harga,0,',','.')  ?></div></strong></td>
    </tr>

    </table>

    <?php echo anchor('pj_dashboard/tambah_ke_keranjang/'.$bk->id_buku,'<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>') ?>
    <?php echo anchor('pj_dashboard/index/','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
        </div>
        <?php endforeach; ?>
  </div>
</div>
</div>