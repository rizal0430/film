<?php 
    //koneksi dengan database 
    include '../../../koneksi.php'; 
    
    //menangkap data yang dikirim dari form dengan methode post 
    $id_film   =$_POST['id_film']; 
    $judul_film      =$_POST['judul_film']; 
    $genre_film =$_POST['genre_film']; 
    $tahun_film   =$_POST['tahun_film']; 
    
    //update data dari database 
    mysqli_query($sambung,"update tb_datafilm set judul_film='$judul_film',genre_film='$genre_film',tahun_film='$tahun_film' where id_film='$id_film'"); 

    //mengalihkan ke halaman daftar film 
    header("location:../../index.php?page=film"); 
?>