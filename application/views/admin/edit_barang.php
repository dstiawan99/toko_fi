<div class="container-fluid">
    <h3><i class="fas fas-edit"></i> FORM EDIT DATA BARANG</h3>
    <?php foreach ($barang as $brg) : ?>
        <form action="<?php echo base_url() . 'admin/data_barang/update'; ?>" method="post">
            <div class="from-group">
                <label>Nama Barang</label>
                <input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
                <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
            </div>
            <div class="from-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
            </div>
            <div class="from-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
            </div>
            <div class="from-group">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
            </div>
            <div class="from-group">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>