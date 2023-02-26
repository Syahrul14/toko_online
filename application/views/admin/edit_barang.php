<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> EDIT DATA BARANG</h3>

    <?php foreach ($barang as $brg) { ?>
        <form method="post" action="<?= base_url() . 'admin/data_barang/update' ?>">
            <input type="text" name="id_brg" id="id_brg" class="form-control" value="<?= $brg->id_brg ?>" hidden>
            <div class="for-group">
                <label for="nama_brg">Nama Barang</label>
                <input type="text" name="nama_brg" id="nama_brg" class="form-control" value="<?= $brg->nama_brg ?>">
            </div>
            <div class="for-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" class="form-control" value="<?= $brg->keterangan ?>">
            </div>
            <div class="for-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" value="<?= $brg->kategori ?>">
            </div>
            <div class="for-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control" value="<?= $brg->harga ?>">
            </div>
            <div class="for-group">
                <label for="stok">Stok</label>
                <input type="text" name="stok" id="stok" class="form-control" value="<?= $brg->stok ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
        </form>
    <?php } ?>
</div>