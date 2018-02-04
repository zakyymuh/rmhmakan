<?php include_once("header.php") ?>
    <section class="content">
        <div class="container-fluid">
           <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <div class="block-header">
                <h2>Beranda</h2>
            </div>
            <div class="card">
                <div class="header">
                    <h2>Daftar Bahan Baku</h2><a href='<?=url?>halaman/pantri/tambah_bahan.php'><button class='btn bg-pink btn-circle waves-effect waves-circle waves-float pull-right' style="margin:0;"><i class="material-icons">add</i></button></a>

                </div>
            <div class="body"> <div class="table-responsive" >
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th style="width:10%">NO</th>
                                            <th>NAMA BAHAN</th>
                                            <th>STOK</th>
                                            <th class="text-center" style="width:30%">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                        $no = 1;
                                        $get = mysqli_query($c,"SELECT * FROM bahanbaku ORDER by id_bahan DESC");
                                        $no = 1;
                                        while ($row = mysqli_fetch_array($get)) {
                                            $id = $row['id_bahan'];
                                            $nama = $row['nama_bahan'];
                                            $total = $row['total'];
                                            $satuan = $row['satuan'];
                                            echo "<tr>";
                                            echo "<td>$no</td>";
                                            echo "<td>$nama</td>";
                                            echo "<td>$total $satuan</td>";
                                            echo "<td class='text-center'><a href='".url."halaman/pantri/tambah_jumlah.php?id_bahan=$id'><button class='btn btn-info no_sd'>".'<i class="material-icons">add</i>'."</button></a> &nbsp;<a href='".url."halaman/pantri/edit_bahan.php?aksi=edit&id_bahan=$id'><button class='btn btn-warning no_sd'>".'<i class="material-icons">edit</i>'."</button></a>&nbsp;"; 
                                            ?>
                                            <a href='<?=url?>aksi/bahan.php?aksi=hapus&id_bahan=<?=$id?>' onclick="return confirm('Apakah anda yakin akan menghapus bahan baku ini ?')"><button class='btn btn-danger no_sd'><i class="material-icons">clear</i></button></td></tr>
                                            <?php
                                            $no++;
                                        }
                                        ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="footer text-center"><small>
© 2016 - 2017 AdminBSB - Material Design.
Version: 1.0.5 Edited by Rumah Makan <b>Broto</b></small> <br>&nbsp;
</div>
            </div>
            </div>
           </div>
            
        </div>
    </section>
<?php include_once("footer.php") ?>