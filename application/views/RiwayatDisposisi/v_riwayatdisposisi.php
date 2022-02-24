<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold">Riwayat Disposisi</h3><br>
                    <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                    <!-- <div class="col-md-4 grid-margin"> -->
                    <!-- <a href="</?php echo base_url() ?>suratmasuk/tambah" class="btn btn-success btn-md"><i class="ti ti-plus"></i> Tambah Surat Masuk</a></div> -->
                    <div class="col-md-12 grid-margin">
                        <div class="card shadow mb-12">
                            <div class="col-rd-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                <div class="table-responsive pt-3 ">
                                <table id="dtBasicExample" class="table table-striped table-bordered table-md" cellspacing="0" height='50%'>
                                <thead  class="thead-light">
                                        <tr>
                                        <th width='5px'>No</th>
                                        <!-- <th style= "text-align: center;">Sifat Surat</th> -->
                                        <!-- <th style= "text-align: center;">Kode/Indeks</th> -->
                                        <th style= "text-align: center;">No. Surat</th>
                                        <th style= "text-align: center;">Tanggal Surat</th>
                                        <th style= "text-align: center;">Asal Surat</th>
                                        <th style= "text-align: center;">Perihal/Isi Surat</th>
                                        <th style= "text-align: center;">File Surat</th>
                                        <th style= "text-align: center;">Status</th>
                                        <!-- <th style= "text-align: center;">Tanggal Input</th>
                                        <th style= "text-align: center;">No. Urut</th> -->
                                        <th style= "text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        if ($riwayatdisposisi)
                                            foreach ($riwayatdisposisi as $rd) {
                                            ?>
                                            <tr>
                                                <td style= "text-align: center;"><?php echo $no++; ?></td>
                                                <!-- <td></?php echo $rd->sifat_surat; ?></td> -->
                                                <td><?php echo $rd->no_surat; ?></td>
                                                <td><?php echo $rd->tanggal_surat ?></td>
                                                <td><?php echo $rd->asal_surat?></td>
                                                <td><?php echo $rd->perihal ?></td>
                                                <td><a class="btn btn-rd btn-outline-primary btn-icon-text" href="<?php echo base_url() ?>assets/file/suratmasuk/<?php echo $rd->dokumen ?>"><i class="ti ti-download"></i> Unduh</a></td>
                                                <td><?php echo "tes" ?></td>
                                             <td>
                                                <a class="btn btn-rd btn-warning" href="<?php echo base_url('/suratmasuk/detail/' . $rd->id_suratmasuk) ?>"><i class="ti ti-eye"></i></a>
                                                <a class="btn btn-rd btn-success" href="<?php echo base_url('/suratmasuk/edit/' . $rd->id_suratmasuk) ?>"><i class="ti ti-pencil"></i></a>
                                                <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-rd btn-danger" href="<?php echo site_url('/suratmasuk/hapus/' . $rd->id_suratmasuk) ?>"><i class="ti ti-trash"></i></a>
                                                <a class="btn btn-rd btn-info" href="<?php echo base_url('/riwayatdisposisi/tambah/' . $rd->id_suratmasuk) ?>">Disposisi</a>
                                            </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- </div>  -->
            </div> 
    </div>                   
</div>
</div>