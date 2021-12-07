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
                        <li class="breadcrumb-item"><a href="#">Laporan Kehilangan</a></li>
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
                        <form action="<?php echo base_url() ?>keamanan/laporan/submit">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_pelapor">Nama Pelapor</label>
                                    <input type="text" class="form-control" id="nama_pelapor" name="nama" placeholder="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="alamat_pelapor">Alamat Pelapor</label>
                                    <input type="text" class="form-control" id="alamat_pelapor" name="alamat" placeholder="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="no_identitas">No Identitas Pelapor</label>
                                    <input type="text" class="form-control" id="no_identitas" name="no_identitas" placeholder="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nope">No Handphone Pelapor</label>
                                    <input type="text" class="form-control" id="nope" name="nope" placeholder="" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Laporan Kehilangan Pelapor</label>
                                    <textarea class="form-control" name="deskripsi" readonly rows="5" placeholder=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Berkas Laporan Kehilangan</label><br>
                                    <a href="#" class="btn btn-primary">Unduh</a>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label>Deskripsi Update Laporan Kehilangan</label>
                                    <textarea class="form-control" name="solusi" rows="5" placeholder=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Bukti Solusi<br>
                                    <small>(JPEG, JPG, PNG)</small>
                                    </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                    <label for="">Catatan : Bukti penanganan komplain adalah objek ataupun subjek yang ditangani. Mis: Foto penanganan jalan berlubang</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Saya menyatakan bahwa data yang saya isi adalah benar serta dapat dipertanggungjawabkan dan Saya telah membaca, memahami catatan dan syarat berkas yang harus saya patuhi untuk di upload.</label>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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