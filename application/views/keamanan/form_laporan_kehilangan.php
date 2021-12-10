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
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>keamanan/laporan">Laporan Kehilangan</a></li>
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
                            <h3 class="card-title">Form Update Laporan Komplain (KN-0001)</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>keamanan/laporan/submit/<?php echo $laporan[0]->id_laporan ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_pelapor">Nama Pelapor</label>
                                    <input type="text" value="<?php echo $laporan[0]->nama ?>" class="form-control" id="nama_pelapor" name="nama" placeholder="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="alamat_pelapor">Alamat Pelapor</label>
                                    <input type="text" value="<?php echo $laporan[0]->alamat ?>" class="form-control" id="alamat_pelapor" name="alamat" placeholder="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="no_identitas">No Identitas Pelapor</label>
                                    <input type="text" value="<?php echo $laporan[0]->no_identitas ?>" class="form-control" id="no_identitas" name="no_identitas" placeholder="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nope">No Handphone Pelapor</label>
                                    <input type="text" value="<?php echo $laporan[0]->no_hp ?>" class="form-control" id="nope" name="no_hp" placeholder="" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Laporan Kehilangan Pelapor</label>
                                    <textarea class="form-control" name="permasalahan" readonly rows="5" placeholder=""><?php echo $laporan[0]->permasalahan ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Berkas Laporan Kehilangan</label><br>
                                    <a href="<?php echo base_url() ?>keamanan/laporan/download_berkas/<?php echo $laporan[0]->id_laporan ?>" class="btn btn-primary">Unduh</a>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label>Deskripsi Update Laporan Kehilangan</label>
                                    <textarea class="form-control" name="solusi" rows="5" placeholder=""><?php if ($laporan[0]->solusi) : ?><?php echo $laporan[0]->solusi ?><?php endif; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Bukti Solusi<br>
                                        <small>(JPEG, JPG, PNG)</small>
                                    </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="berkas" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                    <label for="">Catatan : Bukti penanganan komplain adalah objek ataupun subjek yang ditangani. Mis: Foto penanganan jalan berlubang</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" onclick="Check()" name="check" class="form-check-input" id="check">
                                    <label class="form-check-label" for="check">Saya menyatakan bahwa data yang saya isi adalah benar serta dapat dipertanggungjawabkan dan Saya telah membaca, memahami catatan dan syarat berkas yang harus saya patuhi untuk di upload.</label>
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