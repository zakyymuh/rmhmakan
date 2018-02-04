<?php session_start();


	//koneksi terpusat
	include "koneksi.php";
	
	
	
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Bahan Baku</title>
    <!-- Core CSS - Include with every page -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet"

   
</head>

<body>

    <div id="wrapper">
        <?php
        include "nav.php";
        ?>
        <?php
        
                            if (isset($_POST['tambah']))
                            {
                                $nama_bahanbaku = $_POST['nama_bahanbaku'];
                                $kadaluarsa = $_POST['kadaluarsa'];
                                $stok = $_POST['stok'];
                                $satuan = $_POST['satuan'];
                                $insert=mysqli_query($kon,"INSERT INTO `bahan_baku` (`id_bahanbaku`, `nama_bahanbaku`, `satuan`, `stok`, `kadaluarsa`) VALUES (NULL, '$nama_bahanbaku', '$satuan', '$stok', '$kadaluarsa')") or die (mysqli_error());   
                            }                       
        ?>
       	

        <div id="page-wrapper">
            <div class="row col-lg-12">
                
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Tambah Bahan Baku</h3></div>
                    <div class="panel-body">   
                        <form name="tambah" action="tambahbahan.php" method="post" enctype="multipart/form-data">

                        <fieldset>
                        	<div class="row">
                            
                            <div class="col-sm-4">
                                 <div class="form-group ">
                                    <label>Nama Bahan</label>
                                    <input class="form-control" name="nama_bahanbaku" type="text"  >
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label>Expire Date</label>
                                   <input type="text" name="kadaluarsa" class="input-group datepicker form-control" date="" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" >
                                </div>
                            </div>
                             
                            </div>
                            <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>STOK</label>
                                    <input class="form-control" name="stok" type="text"  >
                                </div>

                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <label>Satuan</label>
                                    <input class="form-control" name="satuan" type="text" >
                                </div>
                            </div>
                   
                        </div>
                                
                                <input name="tambah" type="submit" value="Tambah" class="btn btn-info" data-hint="Klik untuk Tambah Post">
                                </div>
                            
                            </fieldset>
                        </form>
                    </div>

                    
                    <div class="panel-body">
                        <div class="row col-lg-13">
                        	<div class="table-responsive">
                        	<table class="table table-hover table-striped" id="dataTables-transaksi">
                                <thead>
                                    <tr>
                                        <th class="text-left">ID</th>
                                        <th class="text-left">Nama bahan</th>
                                        <th class="text-left">stok</th>
                                        <th class="text-left">satuan</th>
                                        <th class="text-left">Kadaluarsa</th>
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
                                        	<a href="index.php?id=<?php echo $isi_tbl[0]; ?>"><button type="button" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah Transaksi"><i class="fa fa-wrench"></i></button></a>
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
    <script src="js/bootstrap-datepicker.js"></script>
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
        $('#dataTables-transaksi').dataTable();
    });
    </script>
     <script>    
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
    })
    </script>
</body>

</html>
