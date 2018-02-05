 
 <?php   
 include_once("header.php");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Menu telah ditambahkan")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     //echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="index.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
           <br />  
           <br />  
           <br />  
           <br />  
           <br />  
           <div class="container" style="">
              <div class="block-header">
                    <h2>Halaman pemesanan menu</h2>
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
                               <th width="5%">Aksi</th>  
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
                               <td>Rp <?php echo number_format($values["item_price"],2); ?></td>  
                               <td>Rp <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span>BATAL</span> </a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right"><b>Rp <?php echo number_format($total, 2); ?></b></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>
                       <div class="footer text-center"><br>
                     <a href="<?=url?>aksi/pesan.php"><button class="btn btn-info btn-float text-center"> PESAN </button></a>
                     </div>
                </div>  
                </div>  
                </div>  

                <h3 align="center">Menu</h3><br />  
                <?php  
                $query = "SELECT * FROM menu ORDER BY id_menu ASC";  
                $result = mysqli_query($c, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                  <div class="card">
                     <form method="post" action="index.php?action=add&id=<?php echo $row["id_menu"]; ?>">  
                               <img src="<?=url?>assets/uploads/<?=$row['foto'];?>" class="img-responsive" />
                    <div class="body" style="margin-top:0px; padding: 10px !important;" class="text-center">
                               <h4 class="text-info"><?php echo $row["nama_menu"]; ?></h4> <p><?=$row['deskripsi']; ?></p>
                               <h4 class="text-danger">Rp <?php echo number_format($row["harga"],2); ?></h4>  
                               <input type="number" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["nama_menu"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["harga"]; ?>" />  
                               <div class="footer text-center">
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="PESAN" />  
                          </div>
                     </form>  
                </div>  
                </div>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>
               
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