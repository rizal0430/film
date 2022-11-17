<?php
    //koneksikan dengan database
    include "../../../koneksi.php";

    //ambil idsiswa yang akan dihapus sebagai referensi
    $idsiswa=$_GET['id_member'];

    //query untuk menghapus data 
    mysqli_query($sambung,"delete from tb_member where id+member='$id_member'");

    //arahkan ke halaman data setelah menghapus 1 data 
    header("location:../../index.php?page=member");
?>