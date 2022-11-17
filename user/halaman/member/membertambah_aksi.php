<?php
    include "../../../koneksi.php";

    if(isset($_POST['tomboltambah'])){
        $idmember   = $_POST['idmember'];
        
        $namasiswa  = $_POST['namamember'];
        $username         = $_POST['username'];
        $password         = $_POST['password'];

        mysqli_query($sambung,"insert into tb_member (idmember,namamember,username,password) values ('$idmember','$namamember','$username','$password')");
    }

    header("location:../../index.php?page=member");
?>