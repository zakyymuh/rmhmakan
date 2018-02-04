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
                    <h2>Tambah Bahan Baku</h2><a href='<?=url?>halaman/pantri/index.php'><button class='btn bg-pink btn-circle waves-effect waves-circle waves-float pull-right' style="margin:0;"><i class="material-icons">arrow_back</i></button></a>

                </div>
            <div class="body">
                <div class="row">
                    <form action="<?=url?>aksi/bahan.php?aksi=tambah" method="POST">
                    <div class="col-md-8">
                        <label>Nama bahan baku</label>
                <div class="form-group">
                                    <div class="form-line">
                                        <input id="email_address" class="form-control" name="nama" placeholder="Masukan nama bahan" required="required" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Satuan bahan</label>
                            <div class="form-group">
                                    <div class="form-line">
                                        <input id="email_address" class="form-control" placeholder="" name="satuan" required="required" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Jumlah bahan</label>
                            <div class="form-group">
                                    <div class="form-line">
                                        <input id="email_address" class="form-control" placeholder="" name="jumlah" required="required" type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary waves-effect">TAMBAH</button>
                            </div>
                        </div>
                        </div>

                    </form>
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