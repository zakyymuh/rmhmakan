<<<<<<< HEAD
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
                                <a href="<?=url?>halaman/koki/daftarmenu.php"><i class="material-icons pull-right">view_list</i></a>
                                <h2>Tambah menu baru
                                </h2>
                            </div>
                            <div class="body">
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. 
                                </p>
                                <form action="<?=url?>aksi/menu.php?aksi=tambah" method="POST" class="form">
                                    <div class="row clearfix">
                                <div class="col-sm-12">
                                        <label>Nama menu</label> 
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input class="form-control" name="nama" placeholder="" type="text">
                                        </div>
                                    </div>
                                </div><div class="col-sm-12">
                                        <label>Deskripsi singkat</label> 
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input class="form-control" name="deskripsi" type="text">
                                        </div>
                                    </div>
                                </div><div class="col-sm-12">
                                        <label>Harga</label> 
                                    <div class="input-group">
                                        <span class="input-group-addon"><label>Rp</label>
                                        </span>
                                        <div class="form-line">
                                            <input class="form-control" type="number" min=1000>
                                        </div>
                                    </div>
                                </div>
                                 </div>
                                 <label>Bahan Makanan</label>
                                 <div class="row clearfix" id="bisa_nambah">
                                    <div id="awal">
                                <div class="col-sm-8">
                                        <label>Nama bahan / berat</label> 
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="bahan[]" class="form-control">
                                            <?php $get = mysqli_query($c,"SELECT * FROM bahanbaku ORDER BY nama_bahan ASC"); 
                                            while($row = mysqli_fetch_array($get)){

                                                echo "<option value='".$row['id_bahan']."'>".$row['nama_bahan']." / ".$row['satuan']."</option>";
                                                }
                                                echo mysqli_error($c);
                                            ?></select>
                                        </div>
                                    </div>
                                </div><div class="col-sm-4">
                                        <label>Jumlah</label> 
                                   <div class="input-group">
                                        <div class="form-line">
                                            <input class="form-control" type="number" min="0">
                                        </div>
                                    </div>
                                    </div>
                                </div></div>
                                <div class="row">
                                <div class="col-sm-12"> 
                                   <div class="input-group">
                                    <button type="button" onclick="nambah()" class="btn btn-info waves-effect btn-float"><i class="material-icons">add_circle</i></button>
                                        
                                    </div>
                                </div>
                                 <div class="col-sm-12 text-center">
                                    <button type="submit" value="simpan" class="btn btn-primary waves-effect btn-float">SIMPAN</button>
                                 </div>
                                 </div>

                                </form>
                            </div>
                </div> 
=======
<?php include_once("header.php"); ?>
   <section class="content">
        <div class="container-fluid">
            
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card js-animating-object">
                        <div class="header">                            
>>>>>>> f2b5c512dd2629c2f6c5530a4f68ef2ed1e18959
                            
                            <center>
                                <h1>PESANAN</h1>
                                <?php

                                ?>
                            </br></br></br>
                           <button type="button" class="btn bg-green waves-effect" style="height: 80px;width: 1300px">
                                    <div class="material-icons" style="font-size: 75px">check</div>
                                </button> 
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once("footer.php") ?>