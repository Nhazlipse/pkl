<a href="?page=buku&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px;">Tambah Data</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Alamat Perusahaan</th>
                                            <th>No Fax</th>
                                            <th>No Telp</th>
                                            <th>Alamat Email</th>
                                            <th>Direktur</th>
                                            <th>No Rekening</th>
                                            <th>Bank</th>
                                            <th>Kantor Bank</th>
                                            <th>Atas Nama</th>
                                            <th>Ket Akta Pendirian</th>
                                            <th>No DPT</th>
                                            <th>No SAPV</th>
                                            <th>No NPWP</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php require 'panggil-datavendor.php';?>
</table>
</div>
                            <a href="./laporan/laporan_buku_exel.php" class="btn btn-default" target="blank" style="margin-top: 10px; "><i class="fa fa-print" style="margin-right: 7px;"> </i>ExportToExcel</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>