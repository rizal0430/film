<?php
    include "../../../koneksi.php";

    if(isset($_POST['tomboltambah'])){
        $id_genre    = $_POST['id_genre'];
        $nama_genre        = $_POST['nama_genre'];
        
        mysqli_query($sambung,"insert into tb_genre (id_genre,nama_genre) values ('$id_genre','$nama_genre')");
    }

    header("location:../../index.php?page=genre");
