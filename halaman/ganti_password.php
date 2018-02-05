    <?php 
    include_once("../koneksi.php");
    include_once("header.php");

     ?>
        <section class="content">
            <div class="container-fluid">
               <div class="row">
                <div class="col-md-8 col-md-offset-2">
                <div class="block-header">
                    <h2>Halaman Edit Password</h2>
                </div>
                        <div class="card" id="tugas">
                            <div class="header bg-blue">
                                Edit Password
                            </div>
                            <form method="POST">
                                
                            <div class="col-sm-12">   
                            <div style="margin-top: 1%;margin-bottom: 0.5%" >Password Lama </div>
                           <div class="form-group">
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Username" type="text">
                                        </div>
                            </div>
 
                            <div style="margin-top: 1%;margin-bottom: 0.5%" >Password Baru</div> 
                            <div class="form-group">
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Password Baru" type="text">
                                        </div>
                            </div>
                            <div style="margin-top: 1%;margin-bottom: 0.5   %" >Konfrimasi Password Baru</div> 
                            <div class="form-group">
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Konfirmasi Password" type="text">
                                        </div>
                            </div>
                            </div>
                            <button type="button" class="btn bg-blue waves-effect" style="margin-bottom: 2%;margin-top: 2%;margin-left: 88%">Edit Password</button>

                        </form>
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