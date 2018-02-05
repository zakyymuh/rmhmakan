
<?php include_once("header.php"); ?>
   <section class="content">
        <div class="container-fluid">
            
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 ">
                    <div class="card">
                        <div class="header text-center"> 
                                <h2>PESANAN</h2>
                            </div>
                            <div class="body">
                                <div class="row">
                                    <div class="col-md-12">
                                <?php 
                                    $get = mysqli_fetch_array(mysqli_query($c,"SELECT * FROM pesanan WHERE status = 'menunggu' order by tanggal ASC LIMIT 0,1"));
                                    if(empty($get['0'])){
                                        echo "<h3 class='text-center'>Menunggu tugas selanjutnya</h3>";
                                    }else{
                                    echo "<h3> Pesanan dari meja ".$get['1']."</h3>";
                                    $id_pesanan = $get['0'];
                                    $getmenu = mysqli_query($c,"SELECT p.jumlah,m.* FROM pesanan_menu p JOIN menu m USING(id_menu) WHERE p.id_pesanan = '$id_pesanan'");
                                    while($row = mysqli_fetch_array($getmenu)){
                                        echo " - <label>".$row['nama_menu']." : ".$row['jumlah']."</label><br>";
                                    }
                                 ?><br><br>
                                <center>
                                <a href="<?=url?>aksi/pesan.php?aksi=selesai&id_pesanan=<?=$id_pesanan;?>"><button type="button" class="btn bg-green waves-effect" class="text-center" style="height: 80px;width: 50%">
                                    <div class="material-icons" style="font-size: 75px;">check</div>
                                </button> </a>
                            </center>
                            <?php } ?>
                                </div>

                                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once("footer.php") ?>