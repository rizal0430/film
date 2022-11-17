<?php 
    //koneksi dengan database 
    include '../../../koneksi.php'; 
    
    //menangkap data yang dikirim dari form dengan methode post 
    $idsiswa     =$_POST['id_member']; 
    $namasiswa   =$_POST['nama_member']; 
    $username         = $_POST['username'];
    $password         = $_POST['password'];
    
    //update data dari database 
    mysqli_query($sambung,"update tb_member set nama_member='$nama_member', username='$username', password='$password' where id_member='$id_member'"); 

    //mengalihkan ke halaman daftar member
    header("location:../../index.php?page=member"); 
?>