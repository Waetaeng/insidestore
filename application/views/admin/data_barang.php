<!-- Data Barang -->
<div class="container-fluid">


  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>


  <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang">
    <i class="fa fa-plus-square"></i>
    Tambah Barang
  </button>

  <table class="table table-bordered table-striped table-hover">

    <tr>
      <th>NO</th>
      <th>NAMA BARANG</th>
      <th>KETERANGAN</th>
      <th>KATEGORI</th>
      <th>HARGA</th>
      <th>STOK</th>
      <th class="text-center">GAMBAR</th>
      <th colspan="3" class="text-center">AKSI</th>
    </tr>


    <?php
    $no = 1;
    foreach ($barang as $brg) : ?>


      <tr>
        <td class="text-center"><?= $no++ ?></td>
        <td><?= $brg->nama_brg ?></td>
        <td><?= $brg->keterangan ?></td>
        <td><?= $brg->kategori ?></td>
        <td><?= $brg->harga ?></td>
        <td><?= $brg->stok ?></td>
        <td class="text-center">
          <div>
            <img src="<?= base_url('./uploads/') . $brg->gambar; ?>" style="width:45%" class="img-thumbnail">
          </div>
        </td>
        <td><?= anchor('admin/data_barang/edit/' . $brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fas fa-fw fa fa-edit"></i></div>') ?></td>

        <td><a href="<?= base_url('admin/data_barang/hapus/' . $brg->id_brg); ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-fw fa fa-trash"></i></a></td>
      </tr>


    <?php endforeach; ?>

  </table>
</div>

<!-- Modal Tambah Barang -->
<div class=" modal fade" id="tambah_barang" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>

      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/data_barang/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_brg" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="kategori">
              <option>Elektronik</option>
              <option>Pakaian Pria</option>
              <option>Pakaian Wanita</option>
              <option>Pakaian Anak_anak</option>
              <option>Peralatan Olahraga</option>
            </select>
          </div>

          <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Gambar Produk</label>
            <input type="file" name="gambar" class="form-control">
          </div>


          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>

        </form>

      </div>
    </div>
  </div>