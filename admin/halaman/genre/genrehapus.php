<?php
    //koneksikan dengan database
    include "../../../koneksi.php";

    //ambil idsiswa yang akan dihapus sebagai referensi
    $id_genre=$_GET['id_genre'];

    //query untuk menghapus data 
    mysqli_query($sambung,"delete from tb_genre where id_genre='$id_genre'");

    //arahkan ke halaman data setelah menghapus 1 data 
    header("location:../../index.php?page=genre");
?>