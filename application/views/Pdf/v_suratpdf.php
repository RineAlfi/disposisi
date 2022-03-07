<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_pdf;?></title>
    <style>
        table tr .text2  {
            text-align: center;
        }

        #table tr td {
            font-size: 13px;
        }

        table tr .text{
            text-align: right;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <!-- <center> -->
        <table width="100%">
            <tr>
                <td><img src="<?= base_url('assets'); ?>/images/logo.png" width="90" height="90"></td>
                <td width="100%">
                    <center>
                        <font size="3">KEMENTERIAN PERTANIAN</font><br>
                        <font size="3">BADAN PENELITIAN DAN PENGEMBAGAN PERTANIAN</font><br>
                        <font size="4">BADAN PENELITIAN AGROKLIMAT DAN HIDROLOGI</font><br>
                        <font size="2">Jl. Tentara Pelajar No. 1A, Kampus Penelitian Pertanian Cimanggu Bogor 16111</font><br>
                        <font size="2">Telepon (0251) 8312760, Faksimili (0251) 8323909</font><br>
                        <font size="2">WEBSITE http://balitklimat.litbang.pertanian.go.id EMAIL: balitklimat@litbang.pertanian.go.id</font><br>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
        </table>
        <table width="100%">
            <tr>
                <td class=text>Bogor, <?php echo date('d M Y');?></td>
            </tr>
        </table>
        <br>
        <table width="100%">
            <tr>
                <td class="text2">
                    LEMBAR DISPOSISI
                </td>
            </tr>
        </table>
        <br>
        <table border width="100%">
            <tr>
                <td width="50">Sifat Surat: <?php echo $detail->sifat_surat?> </td>
                <td width="50">Kode/Indeks: <?php echo $datapeg->kode?> </td>
            </tr>
        </table>
        <table border width="100%">
            <tr>
                <td width="50">Tanggal Surat: <?php echo $datapeg->tanggal_surat?> </td>
                <td width="50">Tanggal Input: <?php echo $datapeg->tanggal_input?> </td>
            </tr>
        </table>
        <table border width="100%">
            <tr>
                <td width="50">No. Surat: <?php echo $datapeg->no_surat?> </td>
                <td width="50">No. Urut: <?php echo $datapeg->no_urut?> </td>
            </tr>
        </table>
        <table border width="100%">
            <tr>
                <td width="50">Asal Surat: <?php echo $datapeg->asal_surat?> </td>
                <td width="50">File Surat: <?php echo $datapeg->dokumen?> </td>
            </tr>
        </table>
        <table border width="100%">
            <tr>
                <td>Perihal/Isi: <?php echo $datapeg->perihal?> </td>
            </tr>
        </table>
        <table border width="100%">
            <tr>
                <td>Diteruskan ke: <?php echo $datapeg->nama_pegawai?> </td>
            </tr>
        </table>
        <table border width="100%">
            <tr>
                <td>Isi Disposisi: <?php echo $datapeg->isi?> </td>
            </tr>
        </table>
        <table border width="100%">
            <tr>
                <td>Catatan: <?php echo $datapeg->catatan?> </td>
            </tr>
        </table>
        <!-- <table width="100%">
            <tr>
                <td width="100">Kepada&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </td>
            </tr>
        </table> -->
        <!-- <table width="100%">
            <tr>
                <td width="100">Bahan Diseminasi&nbsp;: </td>
                <td></?php echo $detail->nama_barang?> </?php echo $detail->jumlah_keluar?> </?php echo $detailbarang->nama_satuan?></td> -->
                <!-- <td width="20"></?php echo $detail->jumlah_keluar?></td> -->
                <!-- <td width="50"></?php echo $detailbarang->nama_satuan?></td> -->
            <!-- </tr>
        </table> -->
        <!-- <table width="100%">
            <tr>
                <td width="100">Diserahkan pada&nbsp;&nbsp;&nbsp;: </td>
                <td></?php echo $detail->tanggal_keluar?></td>
            </tr>
        </table> -->
        <!-- <table width="100%">
            <tr>
                <td width="100">Keterangan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td>
                <td></?php echo $detail->keterangan?></td>
            </tr>
        </table>
        <br>
        <br>
        <table width="100%">
            <tr>
                <td width="25"class="text2">Yang Menyerahkan<br><br><br><br><br><br><br><hr> </td>
                <td width="50"></td>
                <td width="25" class="text2">Yang Menerima<br><br><br><br><br><br><br><hr> </td>
            </tr>
        </table> -->

    <!-- </center> -->
</body>
</html>