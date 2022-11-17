<h3>
    <center>Daftar film</center>
</h3>
<p>
<h3>
    <center>duta film</center>
</h3>
<a href="index.php?page=filmtambah" class="btn btn-primary">tambah film </a>

<!--awal table-->
<table align="center" class="table table-bordered table-striped table-hover">
    <!--awal header table-->
    <tr>
        <td width="5%" align="center">No</td>
        <td width="30%" align="center">Judul film</td>
        <td width="10%" align="center">genre</td>
        <td width="25%" align="center">tahun</td>
        <td width="20%" align="center">Aksi</td>
    </tr>
    <!--akhir header table-->

    <?php
        //koneksi ke database melalui koneksi.php
        include "../koneksi.php";

        //menentukan banyak nya data yang akan ditampilkan dalam 1 halaman
        $batas   = 10; 
        $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
        $mulai  = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
        
        //ambil data dari tabel
        $ambildata1     = mysqli_query($sambung,"SELECT * FROM tb_datafilm LIMIT $mulai, $batas");
        $ambildata2     = mysqli_query($sambung,"SELECT * FROM tb_datafilm");
        $jumlahdata     = mysqli_num_rows($ambildata2);
        $jumlahhalaman  = ceil($jumlahdata / $batas);
        $nomor =$mulai+1;

        while ($tampildata = mysqli_fetch_array($ambildata1)) {
    ?>

        <!--awal menampilkan data dari tabel ke halaman web-->
        <tr>
            <td align="center"> <?php echo $nomor++?></td>
            <td align="center"> <?php echo $tampildata['judul_film'] ?></td>
            <td align="center"> <?php echo $tampildata['genre_film']?></td>
            <td align="center"> <?php echo $tampildata['tahun_film']?></td>
            <td align="center">
                <a href="../admin/index.php?page=filmubah&id_film=<?php echo $tampildata['id_film'];?>">
                    Edit
                </a>
                |
                <a href="halaman/film/filmhapus.php?idfilm=<?php echo $tampildata['id_film'];?>" onclick="return confirm('Apa Anda yakin akan menghapus Data film?')">
                    Delete
                </a>
            </td>
        </tr>
        <!--akhir menampilkan data dari tabel buku ke halaman web-->

    <?php
        }
    ?>
</table>
<!--akhir table-->

<!--awal menentukan banyaknya halaman pagination-->
<?php
    $ambildata2 = mysqli_query($sambung, "select * from tb_datafilm");
    $jumlahdata = mysqli_num_rows($ambildata2);
    $jumlahhalaman = ceil($jumlahdata/$batas);
?>
<!--akhir menentukan banyaknya halaman pagination-->

<p>

<!--awal navigasi pagination-->
<nav>
    <ul class="pagination justify-content-center">
    <?php 
        for ($i=1; $i<=$jumlahhalaman; $i++) 
        { 
            if ($i != $halaman) 
            {
    ?>
        <li class="page-item"><a class="page-link" href="../admin/index.php?page=film&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php
        } 
            else {
                echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
            }
    
        } 
    ?>
    </ul>
</nav>
<!--akhir navigasi pagination-->