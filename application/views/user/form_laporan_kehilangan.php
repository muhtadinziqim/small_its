<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Laporan Kehilangan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>user/laporan">Laporan Kehilangan</a></li>
                        <li class="breadcrumb-item active">Form Laporan Kehilangan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Laporan Kehilangan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>user/laporan/submit">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_pelapor">Nama Lengkap (Sesuai KTP)</label>
                                    <input type="text" class="form-control" id="nama_pelapor" name="nama" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="alamat_pelapor">Alamat (Sesuai KTP)</label>
                                    <input type="text" class="form-control" id="alamat_pelapor" name="alamat" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="no_identitas">No Identitas (KTP/SIM/KK/NRP/NIP/KITAS)</label>
                                    <input type="text" class="form-control" id="no_identitas" name="no_identitas" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="nope">No Handphone </label>
                                    <input type="text" class="form-control" id="nope" name="no_hp" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Laporan Kehilangan
                                        <small>(Jenis barang, spesifikasi barang, tanggal dan waktu kehilangan, lokasi kehilangan)</small>
                                    </label>
                                    <textarea class="form-control" name="permasalahan" rows="5" placeholder=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Berkas Pendukung <small>(Wajib)</small><br>
                                    <small>(Format PDF)</small>
                                    </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="berkas" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                    <label for="">Catatan : Berkas yang diletakkan pada deskripsi dijadikan satu file dokumen pdf. Jika kehilangan kendaraan harap dilampirkan juga tiket masuknya. Mis : STNK, Tiket Masuk, BPKB, TKP di scan jadikan satu dalam dokumen PDF.</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" onclick="Check()" name="check" class="form-check-input" id="check">
                                    <label class="form-check-label" for="exampleCheck1">Saya menyatakan bahwa data yang saya isi adalah benar serta dapat dipertanggungjawabkan dan Saya telah membaca, memahami catatan dan syarat berkas yang harus saya patuhi untuk di upload.</label>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" id="btnSubmit" disabled="true" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

<script>
    function Check() {
        // Get the checkbox
        var checkBox = document.getElementById("check");
        // Get the output text
        var btn = document.getElementById("btnSubmit");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true) {
            btn.removeAttribute("disabled", "");
            btn.setAttribute("enabled", "");
        } else {
            btn.removeAttribute("enabled", "");
            btn.setAttribute("disabled", "");
        }
    }
</script>