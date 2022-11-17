<?php 
    //koneksi dengan database 
    include '../../../koneksi.php'; 
    
    //menangkap data yang dikirim dari form dengan methode post 
    $id_genre    =$_POST['id_genre']; 
    $nama_genre     =$_POST['nama_genre']; 
  
    //update data dari database 
    mysqli_query($sambung,"update tb_genre set nama_genre='$nama_genre' where id_genre='$id_genre'"); 

    //mengalihkan ke halaman daftar genre
    header("location:../../index.php?page=genre"); 
?>