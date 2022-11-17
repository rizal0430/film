<?php
    //koneksikan dengan database
    include "../../../koneksi.php";

    //ambil idfilm yang akan dihapus sebagai referensi
    $id_film=$_GET['id_film'];

    //query untuk menghapus data
   $q = mysqli_query($sambung,"delete from tb_datafilm where id_film='$id_film'");

   
    //arahkan ke halaman data setelah menghapus 1 data film
    header("location:../../index.php?page=film");
?>