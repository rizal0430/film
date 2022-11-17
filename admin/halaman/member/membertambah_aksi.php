<?php
    include "../../../koneksi.php";

    if(isset($_POST['tomboltambah'])){
        $id_member   = $_POST['id_member'];
        
        $nama_member  = $_POST['nama_member'];
        $username         = $_POST['username'];
        $password         = $_POST['password'];

        mysqli_query($sambung,"insert into tb_member (id_member,nama_member,username,password) values ('$id_member','$nama_member','$username','$password')");
    }

    header("location:../../index.php?page=member");
?>