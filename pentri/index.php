<?php session_start();


	//koneksi terpusat
	include "koneksi.php";
	
	if(isset($_POST['Edit'])){
    mysqli_query($kon,"UPDATE bahan_baku SET nama_bahanbaku='$_POST[nama_bahanbaku]', stok='$_POST[stok]' WHERE id_bahanbaku = '$_POST[id]'");
    }
	
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bahan Baku</title>
    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
        <?php
        include "nav.php";
        ?>
       	

        <div id="page-wrapper">
            <div class="row col-lg-12">
                
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Edit Bahan Baku</h3></div>
                    <div class="panel-body">   
                        <form name="edit" action="index.php" method="post" enctype="multipart/form-data">
                        <?php
                            if (isset($_GET['id']))
                            {
                            $comot_id=mysqli_query($kon,"SELECT * FROM bahan_baku WHERE id_bahanbaku=".$_GET['id']);   
                            $ngisi=mysqli_fetch_array($comot_id);
                            }                       
                        ?>
                        <fieldset>
                        	<div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>ID Bahan Baku</label>
                                    <input class="form-control" name="id" type="text" placeholder="ID" value="<?php echo $ngisi['id_bahanbaku']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                 <div class="form-group ">
                                    <label>Nama Bahan</label>
                                    <input class="form-control" name="nama_bahanbaku" type="text" value="<?php echo $ngisi['nama_bahanbaku']; ?>" >
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label>Expire Date</label>
                                    <input class="form-control" name="kadaluarsa" type="text" value="<?php echo $ngisi['kadaluarsa']; ?>" readonly>
                                </div>
                            </div>
                             
                            </div>
                            <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>STOK</label>
                                    <input class="form-control" name="stok" type="text" value="<?php echo $ngisi['stok']; ?>" >
                                </div>

                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <label>Satuan</label>
                                    <input class="form-control" name="satuan" type="text" value="<?php echo $ngisi['satuan']; ?>" readonly>
                                </div>
                            </div>
                   
                        </div>
                                <?php
                                    if (isset($_GET['id'])){
                                ?>
                                <input name="Edit" type="submit" value="Ubah" class="btn btn-info" data-hint="Klik untuk Edit Post">
                                </div>
                                <?php
                                    }else{
                                ?>
                                <input name="Edit" type="submit" value="Ubah" class="btn" disabled>
                                </div>
                                <?php
                                    }
                                ?>
                            </fieldset>
                        </form>
                    </div>

                    
                    <div class="panel-body">
                        <div class="row col-lg-13">
                        	<div class="table-responsive">
                        	<table class="table table-hover table-striped" id="dataTables-bahan">
                                <thead>
                                    <tr>
                                        <th class="text-left">ID</th>
                                        <th class="text-left">Nama bahan</th>
                                        <th class="text-left">stok</th>
                                        <th class="text-left">satuan</th>
                                        <th class="text-left">Kadaluarsa</th>
                                        <th class="text-left">aksi</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                <?php
                                    $comot=mysqli_query($kon,"SELECT * FROM bahan_baku");
                                    while($isi_tbl=mysqli_fetch_array($comot))
                                    {
									$now= date("Y-m-d");
                                ?>
                                    <tr>
                                        <td><?php echo $isi_tbl['id_bahanbaku'] ?></td>
                                        <td><?php echo $isi_tbl['nama_bahanbaku']; ?></td> 
                                        <td><?php echo $isi_tbl['stok']; ?></td>
                                        <td><?php echo $isi_tbl['satuan']; ?></div>
										</td>
                                        <td><?php
                                        if($isi_tbl['kadaluarsa']<$now){
                                            $txtS="Kadaluarsa!!";
                                            echo "<div class='tooltip-demo'><span data-toggle='tooltip' data-placement='top' title='".$txtS."'><div class='text-danger'><i class='fa fa-warning'></i>&nbsp".$isi_tbl['kadaluarsa']."</div></span></div>";
                                        }else{
                                            echo $isi_tbl['kadaluarsa']; 
                                        }?></td>
                                        <td>
										<div class="tooltip-demo">
                                        	<a href="index.php?id=<?php echo $isi_tbl[0]; ?>"><button type="button" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="Edit Transaksi"><i class="fa fa-wrench"></i></button></a>
                                            <a href="deletebahan.php?id=<?php echo $isi_tbl[0]; ?>"><button type="button" class="btn btn-xs btn-danger"data-toggle="tooltip" data-placement="top" title="Delete Transaksi"><i class="fa fa-trash-o"></i></button></a>
                                   		</div>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                                </tbody>
                                
                            </table>
                            </div>
                        </div>
					</div>
                    <div class="panel-footer">Footer</div>

                    
                </div>
                <!--.panel end -->
			</div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>
    <script>
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })
	</script>
    <script>
    $(document).ready(function() {
        $('#dataTables-bahan').dataTable();
        bFilter : false;
    });
    </script>
</body>

</html>
