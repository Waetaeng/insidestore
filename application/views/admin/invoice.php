<div class="container-fluid">


    <div class="flash-data-invoice" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>


    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th colspan="2" class="text-center">Aksi</th>
        </tr>

        <?php foreach ($invoice as $inv) : ?>

            <tr>
                <td><?php echo $inv->id ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
                <td><?php echo $inv->batas_bayar ?></td>
                <td class="text-center">
                    <?php echo anchor('admin/invoice/detail/' . $inv->id, '<div class="btn btn-sm btn-primary"><i class="fas fa-fw fa fa-eye"></i></div>') ?>
                </td>
                <td class="text-center">
                    <a href="<?= base_url('admin/invoice/hapus/' . $inv->id); ?>" class="btn btn-danger btn-sm hapus-invoice"><i class="fas fa-fw fa fa-trash"></i></a>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>
</div>