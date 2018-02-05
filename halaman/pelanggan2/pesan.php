<?php include("header.php"); ?>
           <br />  
           <br />  
           <br />  
           <br />  
           <br />  
           <div class="container" style="">
              <div class="block-header">
                    <h2>Halaman pemesanan menu</h2>
                </div><div class="alert bg-green alert-dismissible" id="alert" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <b>PESANAN ANDA DALAM PROSES !</b> mohon menunggu sebentar.
                            </div>
                   <div class="card" id="tugas">
                            <div class="header bg-blue" id="top">
                                <a style="cursor:pointer" onclick="hilang()"><i class="material-icons pull-right">keyboard_arrow_up</i></a>
                                <h2>Daftar order
                                </h2>
                            </div><div class="body" id="tagihan">
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Nama menu</th>  
                               <th width="10%">Jumlah</th>  
                               <th width="20%">Harga</th>  
                               <th width="15%">Total</th>
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td >Rp <?php echo number_format($values["item_price"],2); ?></td>  
                               <td class="text-right" >Rp <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>   
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right"><b>Rp <?php echo number_format($total, 2); ?></b></td> 
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>
                       <div class="footer text-center"><br>
                     <a href="<?=url?>halaman/pelanggan2/pembayaran.php?id_pesanan=<?=$id_pesanan;?>"><button class="btn btn-info btn-float text-center">&nbsp;&nbsp;&nbsp;BAYAR&nbsp;&nbsp;&nbsp; </button></a>
                     </div>
                </div>  
                </div>  
                </div>  
  
           <br />  
      </body>  
 </html>
 <style type="text/css">
   .hilang {
    display: none;
   }
   .tampil {
    display: block;
   }
 </style>
 <?php include_once("footer.php"); ?>
 <script type="text/javascript">
   function hilang(){
    $("#tagihan").addClass("hilang");
    $("#tagihan").removeClass("tampil");
    $("#top").html('<a style="cursor:pointer" onclick="tampil()"><i class="material-icons pull-right">keyboard_arrow_up</i></a> <h2>Daftar order</h2>');
   }
   function tampil(){
    $("#top").html('<a style="cursor:pointer" onclick="hilang()"><i class="material-icons pull-right">keyboard_arrow_down</i></a> <h2>Daftar order</h2>');
    $("#tagihan").removeClass("hilang");
    $("#tagihan").addClass("tampil");
   }
 </script>