<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#pj_tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>JUDUL BUKU</th>
            <th>PENGARANG</th>
            <th>PENERBIT</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
</tr>

<?php
$no=1;
foreach($buku as $bk) : ?>

<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $bk->nm_buku ?></td>
    <td><?php echo $bk->pengarang ?></td>
    <td><?php echo $bk->penerbit ?></td>
    <td><?php echo $bk->kategori ?></td>
    <td><?php echo $bk->harga ?></td>
    <td><?php echo $bk->stok ?></td>
    <td><?php echo anchor('pj_admin/pj_data_barang/edit/' .$bk->id_buku, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
    <td><?php echo anchor('pj_admin/pj_data_barang/hapus/' .$bk->id_buku, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?></td>
</tr>

<?php endforeach; ?>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="pj_tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">FORM INPUT BUKU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'pj_admin/pj_data_barang/pj_tambah_aksi'?>" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label>Judul Buku</label>
    <input type="text" name="nm_buku" class="form-control">
</div>

<div class="form-group">
    <label>Pengarang</label>
    <input type="text" name="pengarang" class="form-control">
</div>

<div class="form-group">
    <label>Penerbit</label>
    <input type="text" name="penerbit" class="form-control">
</div>

<div class="form-group">
    <label>Kategori</label>
    <select class="form-control" name="kategori">
      <option>Sains</option>
      <option>Komik</option>
      <option>Cerita</option>
      <option>Dongeng</option>
    </select>
</div>

<div class="form-group">
    <label>Harga</label>
    <input type="text" name="harga" class="form-control">
</div>

<div class="form-group">
    <label>Stok</label>
    <input type="text" name="stok" class="form-control">
</div>

<div class="form-group">
    <label>Gambar</label><br>
    <input type="file" name="gambar" class="form-control">
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

      </form>

    </div>
  </div>
</div>