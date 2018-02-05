<?php include("header.php"); 
  $id_pesanan = $_GET['id_pesanan'];
  $update = mysqli_query($c,"UPDATE pesanan SET status = 'bayar' WHERE id_pesanan = '$id_pesanan'");
?>
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
                                <b>TERIMA KASIH !</b> silahkan melakukan pembayaran kepada pelayan kami atau langsung ke kasir.
                            </div> 
                </div>  
                </div>  
  
           <br />  
      </body>  
 </html>
 <?php 
                     unset($_SESSION["shopping_cart"]); 
                    include_once("footer.php"); ?>