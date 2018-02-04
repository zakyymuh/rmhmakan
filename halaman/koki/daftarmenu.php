    <?php include_once("header.php") ?>
        <section class="content">
            <div class="container-fluid">
               <div class="row">
                <div class="col-md-8 col-md-offset-2">
                <div class="block-header">
                    <h2>Halaman pengelolaan menu</h2>
                </div>
                        <div class="card" id="tugas">
                            <div class="header bg-blue">
                                <h2>Dafar Menu
                                </h2>
                            </div>
                            <div class="body">
                                <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <div class="body">
                        <style type="text/css">
                            .no_shadow{
                                box-shadow: none !important;
                            }
                        </style>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th style="width:10%">NO</th>
                                            <th>Gambar</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                        $no = 1;
                                        $get = mysqli_query($c,"SELECT * FROM hasil h JOIN calon_anggota c USING(id_pendaftar) ORDER by id_pendaftar DESC");
                                        while ($row = mysqli_fetch_array($get)){
                                            $nama = $row['nama'];
                                            $tgl_lahir = $row['tgl_lahir'];
                                            $jk = $row['jk'];
                                            $nim = $row['NIM'];
                                            echo "<tr>";
                                            echo "<td>$no</td>";
                                            echo "<td>$nim</td>";
                                            echo "<td>$nama</td>";
                                            echo "<td>$jk</td>";
                                            echo "<td>$tgl_lahir</td></tr>";
                                            $no++;
                                        } 
                                        ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
           
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
                            </div>
                </div> 
                            
                            </div>
                </div>
                            <div class="footer text-center"><small>
    © 2016 - 2017 AdminBSB - Material Design.
    Version: 1.0.5 Edited by Rumah Makan <b>Broto</b></small> <br>&nbsp;
    </div>
                </div>
               </div>
                
            </div>
        </section>
    <?php include_once("footer.php") ?>
    <script type="text/javascript">
        awal = $("#awal").html();
        function nambah(){
            $("#bisa_nambah").append(awal);
        }
    </script>