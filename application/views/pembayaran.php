<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total += $item['subtotal'];
                    }
                    echo "<h4>Total Belanja Anda: Rp. " . number_format($grand_total, 0, ',', '.');

                ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            <form method="post" action="<?= base_url() ?>dashboard/proses_pesanan">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Lengkap Anda">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <input class="form-control" type="text" name="alamat" id="alamat" placeholder="Alamat Lengkap Anda">
                </div>
                <div class="form-group">
                    <label for="no_telp">No. Telepon</label>
                    <input class="form-control" type="text" name="no_telp" id="no_telp" placeholder="No Telepon Anda">
                </div>
                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control" name="" id="">
                        <option value="">JNE</option>
                        <option value="">TIKI</option>
                        <option value="">POS INDONESIA</option>
                        <option value="">GOJEK</option>
                        <option value="">GRAB</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>PILIH BANK</label>
                    <select class="form-control" name="" id="">
                        <option value="">BCA - XXXXXX</option>
                        <option value="">BRI - XXXXXX</option>
                        <option value="">BNI - XXXXXX</option>
                        <option value="">MANDIRI - XXXXXX</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
            </form>
        <?php } else {
                    echo "<h4>Keranjang Belanja Anda Masih Kosong !!!</h4>";
                } ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>