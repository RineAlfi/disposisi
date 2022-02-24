<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold">Riwayat Barang kembali</h3><br>
                    <!-- <div class="col-md-4 grid-margin">
                    <a href="<?//php echo base_url() ?>barangkembali/tambah" class="btn btn-success btn-md"><i class="ti ti-plus"></i> Tambah Barang kembali</a></div> -->
                    <div class="col-md-12 grid-margin">
                        <div class="card shadow mb-12">
                            <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <!-- <div class="card-body"> -->
                                <div class="table-responsive pt-3 ">
                                <?php echo $this->session->flashdata('message'); ?>
                                <table id="dtBasicExample" class="table table-striped table-bordered table-md" cellspacing="0" height='50%'>
                                    <thead  class="thead-light">
                                        <tr>
                                        <th width='5px'>No</th>
                                        <th width='20px' style= "text-align: center;">Tanggal Keluar</th>
                                        <th style= "text-align: center;">Nama Barang</th>
                                        <th style= "text-align: center;">Jumlah Kembali</th>
                                        <th style= "text-align: center;">Tanggal Kembali</th>
                                        <th style= "text-align: center;">Keterangan</th>
                                        <th style= "text-align: center;">File</th>
                                        <th style= "text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        if ($barangkembali)
                                            foreach ($barangkembali as $bm) {
                                            ?>
                                            <tr>
                                                <td style= "text-align: center;"><?php echo $no++; ?></td>
                                                <td><?php echo $bm['tanggal_keluar']; ?></td>
                                                <td><?php echo $bm['nama_barang']; ?></td>
                                                <td><?php echo $kembali['jumlah_kembali'] . ' ' . $bm['nama_satuan']; ?></td>
                                                <td><?php echo $kembali['tanggal_kembali']; ?></td>
                                                <td><?php echo $bm['keterangan']; ?></td>
                                                <td><a class="btn btn-sm btn-outline-primary btn-icon-text" href="<?php echo base_url() ?>assets/file/barangkembali/<?php echo $bm['dokumen'] ?>"><i class="ti ti-download"> Unduh</i></a></td>

                                             <td>
                                                <a class="btn btn-sm btn-warning" href="<?php echo base_url('/barangkembali/detail/' . $kembali['id_barangkembali']) ?>"><i class="ti ti-eye"></i></a>
                                                <a class="btn btn-sm btn-success" href="<?php echo base_url('/barangkembali/edit/' . $kembali['id_barangkembali']) ?>"><i class="ti ti-pencil"></i></a>
                                                <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo site_url('/barangkembali/hapus/' . $kembali['id_barangkembali']) ?>"><i class="ti ti-trash"></i></a>
                                            </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
    </div>                   
</div>
</div>