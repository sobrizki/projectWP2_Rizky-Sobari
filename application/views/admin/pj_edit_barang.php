<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BUKU</h3>

    <?php foreach($nm_buku as $tb_buku) : ?>

        <form method="post" action="<?php echo base_url(). 'pj_admin/pj_data_barang/update' ?>">

    <div class="for-group">
            <label>Judul Buku</label>
            <input type="text" name="nm_buku" class="form-control" value="<?php echo $tb_buku->nm_buku ?>">
    </div>

    <div class="for-group">
            <label>Pengarang</label>
            <input type="hidden" name="id_buku" class="form-control" value="<?php echo $tb_buku->id_buku ?>">
            <input type="text" name="pengarang" class="form-control" value="<?php echo $tb_buku->pengarang ?>">
    </div>

    <div class="for-group">
            <label>Penerbit</label>
            <input type="text" name="penerbit" class="form-control" value="<?php echo $tb_buku->penerbit ?>">
    </div>

    <div class="for-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" value="<?php echo $tb_buku->kategori ?>">
    </div>

    <div class="for-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" value="<?php echo $tb_buku->harga ?>">
    </div>

    <div class="for-group">
            <label>Stok</label>
            <input type="text" name="stok" class="form-control" value="<?php echo $tb_buku->stok ?>">
    </div>

    <button type="submit" class="btn btn-primary btn-sm mt-3">Save</button>

    </form>

        <?php endforeach; ?>
    </div>