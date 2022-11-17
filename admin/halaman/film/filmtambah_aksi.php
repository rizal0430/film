<?php
    include "../../../koneksi.php";

    if(isset($_POST['tomboltambah'])){
        $id_film     = $_POST['idfilm'];
        $judul_film      = $_POST['judul_film'];
        $genre_film      = $_POST['genre_film'];
        $tahun_film      = $_POST['tahun_film'];

        mysqli_query($sambung,"insert into tb_datafilm (id_film,judul_film,genre_film,tahun_film) values ('$id_film','$judul_film','$genre_film','$tahun_film')");
    }

    header("location:../../index.php?page=film");
?>