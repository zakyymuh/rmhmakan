<?php include_once("header.php") ?>
    <section class="content">
        <div class="container-fluid">
           <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <div class="block-header">
                <h2>Beranda</h2>
            </div>
                    <div class="card" id="tugas">
                        <div class="header bg-orange text-center">
                            <h2>
                                        <i class="material-icons">notifications_active</i><br>Description text here...
                            </h2>
                            <div class="pull-right" id="button_ambil">
                            <button type="button" onclick="ambil()" class="btn btn-primary btn-circle-lg waves-effect waves-circle waves-float pull-right">
                            <i class="material-icons" id="buttonq">check</i></button>
                            </div>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-12">
                            Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                                </div>
                                 
                            </div>
                        </div>
            </div><div class="alert bg-green alert-dismissible hilang" id="alert" role="alert">
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
<?php include_once("footer.php") ?>

<script type="text/javascript">
    function ambil(){
        $("#button_ambil").html('<button type="button" id="button_ambil" onclick="selesai()" class="btn btn-success btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons" id="buttonq">done_all</i>');
    }
    function selesai(){
        $("#tugas").removeClass('tampil');
        $("#tugas").addClass('hilang');
        $("#menunggu").removeClass('hilang');
        $("#menunggu").addClass('tampil');
        $("#alert").removeClass('hilang');
        $("#alert").addClass('tampil');
    }
</script>