<div class="container-fluid">
    <h3><i class="fas fa -edit"></i>EDIT DATA BARANG</h3>

    <?php foreach ($barang as $brg) : ?>

        <form method="post" action="<?php echo base_url() . 'admin/data_barang/update' ?>" enctype="multipart/form-data">

            <div class="for-group mb-3">
                </label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
            </div>

            <div class="for-group mb-3">
                </label>Keterangan</label>
                <input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
            </div>

            <div class="for-group mb-3">
                </label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
            </div>

            <div class="for-group mb-3">
                </label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
            </div>

            <div class="for-group mb-3">
                </label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
            </div>

            <div class="form-group mb-3">
                </label>Gambar Produk</label>

                <!-- Gambar Produk -->
                <div class="col-sm-3 mb-3">
                    <img src="<?= base_url('./uploads/') . $brg->gambar; ?>" class="img-thumbnail">
                </div>

                <input type="file" name="gambar" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan</button>

        </form>

    <?php endforeach; ?>
</div>