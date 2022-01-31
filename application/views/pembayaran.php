<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success mb-2">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h4> Total Belanja Anda : Rp. " . number_format($grand_total, 0, ',', '.');
                ?>
            </div>
            <h3>Input Informasi Pembayaran</h3>
            <form action="<?php echo base_url('dashboard/proses_pemesanan') ?>" method="post">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" placeholder="Nama lengkap" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" placeholder="Alamat lengkap" class="form-control">
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" name="no_telp" placeholder="No Telp / Hp" class="form-control">
                </div>
                <div class="form-group">
                    <label>Pengiriman</label>
                    <select name="" id="" class="form-control">
                        <option value="">JNE</option>
                        <option value="">TIKI</option>
                        <option value="">POS Indonesia</option>
                        <option value="">GO-JEK</option>
                        <option value="">GRAB</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Bank</label>
                    <select name="" id="" class="form-control">
                        <option value="">BCA - XXXXXXXXX</option>
                        <option value="">BRI - XXXXXXXXX</option>
                        <option value="">BNI - XXXXXXXXX</option>
                        <option value="">MANDIRI - XXXXXXXXX</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary bt-3">Pesan</button>
            </form>
        <?php
                } else {
                    echo 'Mohon Maaf Kenjang Anda Kosong';
                }
        ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>