 <?php   
 include_once("../koneksi.php");
 if($_GET['aksi'] == "selesai"){
    $id_pesanan = $_GET['id_pesanan'];
    mysqli_query($c,"START TRANSACTION");
    $update = mysqli_query($c,"UPDATE pesanan SET status = 'selesai' WHERE id_pesanan = '$id_pesanan'");
    if($update){
      mysqli_query($c,"COMMIT");
        echo "<script>alert('WELL DONE, satu pekerjaan telah selesai !')</script>";
        $url = url."halaman/koki/index.php";
        header("refresh:0.1; url=$url");
        exit;
    }else{
      mysqli_query($c,"ROLLBACK");
        echo "<script>alert('OOPS! pekerjaan satu ini gagal dilakukan !')</script>";
        $url = url."halaman/koki/index.php";
        header("refresh:0.1; url=$url");
        exit;
    }
 }elseif($_GET['aksi'] == "antar"){
  if(!session_start()) session_start();
  $id_pesanan = $_GET['id_pesanan'];
  $id_petugas = $_SESSION['id_petugas'];
  $now = date("Y-m-d h:i:s");
  mysqli_query($c,"START TRANSACTION");
  $update = mysqli_query($c,"UPDATE pesanan SET status = 'antar' WHERE id_pesanan = '$id_pesanan'");
  if($update){
    $insert = mysqli_query($c,"INSERT INTO penugasan VALUES ('','$id_petugas','antar','$now')");
    if($insert){
      mysqli_query($c,"COMMIT");
      $data['message'] = "berhasil";
    }
    else{

    $data['message'] = "gagal";
    }
  }else{
    $data['message'] = "gagal";
  }
  echo json_encode($data);
 }
 else{
 if(!session_start()) session_start();
 if(empty($_SESSION["shopping_cart"])){
          echo "<script>alert('Silahkan memilih menu terlebih dahulu !')</script>";
        $url = url."halaman/pelanggan2/index.php";
        header("refresh:0.1; url=$url");
        exit;
 }
    $getmaxkode = mysqli_fetch_row(mysqli_query($c,"SELECT max(right(id_pesanan,4)) FROM pesanan"));
    $max = $getmaxkode['0'] + 1;
    if($max <= 9){
      $kode = "O000".$max;
    }elseif($max > 9 && $max <= 99){
      $kode = "O00".$max;
    }else{
      $kode = "O0".$max;
    }
    //isi dulu bahan kode, baru total nanti, kalo tidak mungkin update
      $total = 0;  
      foreach($_SESSION["shopping_cart"] as $keys => $values)  
      {  
      $total = $total + ($values["item_quantity"] * $values["item_price"]);  
      }   
       mysqli_query($c,"START TRANSACTION");
       $now = date('Y-m-d h:i:s');
       $id_meja= $_SESSION['id_petugas'];
    if(mysqli_query($c,"INSERT INTO pesanan VALUES ('$kode','$id_meja','$total','$now','menunggu')")){

        foreach($_SESSION["shopping_cart"] as $keys => $values)  
              {  
              $id_menu = $values["item_id"];
              $total = ($values["item_quantity"] * $values["item_price"]);  
              $jumlah = $values["item_quantity"];
              mysqli_query($c,"INSERT INTO pesanan_menu (id_menu,id_pesanan,jumlah) VALUES ('$id_menu','$kode','$jumlah')");
             }   
       if(!mysqli_error($c)){
        mysqli_query($c,"COMMIT");
        $url = url."halaman/pelanggan2/pesan.php";
        header("refresh:0.1; url=$url");
        exit;
       }
       else{
        mysqli_query($c,"ROLLBACK");
          echo "<script>alert('Proses pemesanan gagal, cobalah beberapa saat lagi !')</script>";
        $url = url."halaman/pelanggan2/index.php";
        header("refresh:0.1; url=$url");
        exit;
       }
    }}

 ?>  