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
                        <li class="breadcrumb-item active">Laporan Kehilangan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <div class="ml-auto">
                                <a href="" class=" btn btn-primary">Buat</a>
                            </div>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No. Laporan</th>
                                        <th>Tgl & Waktu</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No. Identitas</th>
                                        <th>No. HP</th>
                                        <th>Status</th>
                                        <th>Permasalahan</th>
                                        <th>Berkas</th>
                                        <th>Tindak Lanjut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($laporan as $val) : ?>
                                        <tr>
                                            <td>K-<?php echo $val->id_laporan ?></td>
                                            <td><?php echo date('d-m-Y : H:i:s', strtotime($val->tanggal_dan_waktu)) ?></td>
                                            <td><?php echo $val->nama ?></td>
                                            <td><?php echo $val->alamat ?></td>
                                            <td><?php echo $val->no_identitas ?></td>
                                            <td><?php echo $val->no_hp ?></td>
                                            <td>
                                                <?php if ($val->status == "Terkirim") : ?>
                                                    <div class="btn btn-danger btn-xs">Belum Ditindak Lanjut</div>
                                                <?php else : ?>
                                                    <div class="btn btn-success btn-xs">Sudah Ditindak Lanjut</div>
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo $val->permasalahan ?></td>
                                            <td><a href="<?php echo base_url() ?>keamanan/laporan/download_berkas/<?php echo $val->id_laporan ?>" class="btn btn-default btn-sm">Unduh</a></td>
                                            <td>
                                                <a href="<?php echo base_url() ?>keamanan/laporan/update/<?php echo $val->id_laporan ?>" class="btn btn-primary btn-sm" >Update</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
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