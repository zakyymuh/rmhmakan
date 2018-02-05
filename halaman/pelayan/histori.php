<?php include_once("header.php") ?>
    <section class="content">
        <div class="container-fluid">
           <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <div class="block-header">
                <h2>Beranda</h2>
            </div>
                    <div class="card" id="tugas">
                        <div class="header bg-green text-center">
                            <h2>
                                <i class="material-icons">done_all</i><br>Riwayat pekerjaan selesai hari ini.
                            </h2>
                           
                        </div>
                        <div class="body">
                             <div class="body">
                            <div class="table-responsive">
                                 <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th style="width:10%">NO</th>
                                            <th>JENIS</th>
                                            <th>WAKTU</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                            $no = 1;
                                            $id_petugas = $_SESSION['id_petugas'];
                                            $get = mysqli_query($c,"SELECT * FROM penugasan WHERE id_petugas = '$id_petugas' order by id_penugasan DESC");
                                            while($row = mysqli_fetch_array($get)){
                                                echo "<tr>";
                                                echo "<td>$no</td>";
                                                echo "<td>".$row['jenis']."</td>";
                                                echo "<td>".$row['waktu']."</td></tr>";
                                            }
                                       ?>
                                    </tbody>
                                </table>
                            </div>
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