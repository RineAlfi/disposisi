<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold">Tambah Data Sifat Surat</h3><br>
                <div class="col-md-12 grid-margin">
                <div class="card-body">
                <form method="POST" action="<?php echo base_url('sifatsurat/tambah_aksi') ?>">
                    <div class="form-group">
                        <label>Data Sifat Surat</label>
                        <input type="text" name="sifat_surat" class="form-control" required>
                        <?php echo form_error('sifat_surat', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</a></button>&nbsp &nbsp
                    <a href="<?php echo base_url() ?>sifatsurat" class="btn btn-warning" >Kembali</a>
                </form>
            </div>
        </div>                   
</div>
</div>