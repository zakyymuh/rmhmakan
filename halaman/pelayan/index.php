<?php include_once("header.php") ?>
    <section class="content">
        <div class="container-fluid">
           <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <div class="block-header">
                <h2>Beranda</h2>
            </div>
            <?php 
            $get = mysqli_fetch_array(mysqli_query($c,"SELECT * FROM pesanan WHERE status = 'selesai' order by tanggal ASC LIMIT 0,1"));
            echo "<script>var id_pesanan = '".$get['0']."'</script>";
            if(empty($get['0'])){
                ?>
                <div class="card">
                <div class="header bg-blue text-center">
                            <h2>
                                        <i class="material-icons">hourglass_empty</i><br>Menunggu tugas berikutnya
                            </h2>
                        </div>
                        </div>
                        <?php
            }else{
             ?>
                    <div class="card" id="tugas">
                        <div class="header bg-orange text-center">
                            <h2>
                                        <i class="material-icons">donut_small</i><br>Pesanan untuk meja no <?=$get['no_meja'];?> telah selesai
                            </h2>
                            <div class="pull-right" id="button_ambil">
                            <button type="button" onclick="selesai()" class="btn btn-primary btn-circle-lg waves-effect waves-circle waves-float pull-right">
                            <i class="material-icons" id="buttonq">check</i></button>
                            </div>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-12">
                                    Mohon untuk mengantarkan pesanan tersebut ke meja yang telah ditentukan. Terima kasih.
                                </div>
                                 
                            </div>
                        </div>
            </div><?php } ?><div class="alert bg-green alert-dismissible hilang" id="alert" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <b>WELL DONE!</b> anda telah menyelesaikan satu buah pekerjaan.
                            </div> <div class="card hilang" id="menunggu">
                
                        <div class="header bg-blue text-center">
                            <h2>
                                        <i class="material-icons">hourglass_empty</i><br>Menunggu tugas berikutnya
                            </h2>
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
<?php include_once("footer.php");?>
<script type="text/javascript">
    function selesai(){
        $.ajax({
            type:'GET',
            data : 'aksi=antar&jenis=pesanan&id_pesanan='+id_pesanan,
            url :'<?=url;?>aksi/pesan.php',
            success: function(result){
                var resultObj = JSON.parse(result);
                if (resultObj.message == "berhasil") {
                $("#tugas").removeClass('tampil');
                $("#tugas").addClass('hilang');
                $("#menunggu").removeClass('hilang');
                $("#menunggu").addClass('tampil');
                $("#alert").removeClass('hilang');
                $("#alert").addClass('tampil');
                } else {    
                    alert("Sistem bermasalah, mohon coba beberapa saat lagi");
                }
            }
        });

    }
</script>