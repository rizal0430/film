<h3>
    <center>Daftar film</center>
</h3>
<p>
<h3>
    <center>Universitas Duta Bangsa</center>
</h3>
<a href="index.php?page=pinjamtambah" class="btn btn-primary">Peminjaman Buku</a>

<!--awal table-->
<table align="center" class="table table-bordered table-striped table-hover">
    <!--awal header table-->
    <tr><h3>
    <center>Daftar member</center>
</h3>
<p>
<h3>
    <center>duta film</center>
</h3>
<a href="index.php?page=membertambah" class="btn btn-primary">Tambah member</a>

<!--awal table-->
<table align="center" class="table table-bordered table-striped table-hover" border="1">
    <!--awal header table-->
    <tr>
        <td width="5%" align="center">No</td>
        <td width="20%" align="center">Nama member</td>
        <td width="10%" align="center">username</td>
        <td width="25%" align="center">password</td>
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

    //ambil data dari tabel tbl_siswa
    $ambildata1     = mysqli_query($sambung, "SELECT * FROM tb_member LIMIT $mulai, $batas");
    $ambildata2     = mysqli_query($sambung, "SELECT * FROM tb_member");
    $jumlahdata     = mysqli_num_rows($ambildata2);
    $jumlahhalaman  = ceil($jumlahdata / $batas);
    $nomor = $mulai + 1;

    while ($tampildata = mysqli_fetch_array($ambildata1)) {
    ?>

        <!--awal menampilkan data dari tabel siswa ke halaman web-->
        <tr>
            <td> <?php echo $nomor++ ?></td>
            <td align="center"> <?php echo $tampildata['nama_member'] ?></td>
            <td align="center"> <?php echo $tampildata['username'] ?></td>
            <td align="center"> <?php echo $tampildata['password'] ?></td>
                <a href="halaman//memberubah.php?idmember=<?php echo $tampildata['idmember']; ?>">
                    Edit
                </a>
                |
                <a href="halaman/member/memberhapus.php?idmember=<?php echo $tampildata['idmember']; ?>" onclick="return confirm('Apa Anda yakin akan menghapus Data ?')">
                    Delete
                </a>
            </td>
        </tr>
        <!--akhir menampilkan data dari tabel member ke halaman web-->

    <?php
    }
    ?>
</table>
<!--akhir table-->

<!--awal menentukan banyaknya halaman pagination-->
<?php
$ambildata2 = mysqli_query($sambung, "select * from tb_member");
$jumlahdata = mysqli_num_rows($ambildata2);
$jumlahhalaman = ceil($jumlahdata / $batas);
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
        <li class="page-item"><a class="page-link" href="../admin/index.php?page=member&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
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
        <td width="5%" align="center">No</td>
        <td width="30%" align="center">Petugas</td>
        <td width="10%" align="center">Siswa</td>
        <td width="25%" align="center">Judul Buku</td>
    </tr>
    <!--akhir header table-->

    <?php
    //koneksi ke database melalui koneksi.php
    include "../koneksi.php";

    //menentukan banyak nya data yang akan ditampilkan dalam 1 halaman
    $batas   = 10;
    $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
    $mulai  = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

    //ambil data dari tabel tbl_peminjaman
    $ambildata1     = mysqli_query($sambung, "SELECT * FROM tbl_peminjaman INNER JOIN tbl_petugas ON tbl_petugas.idpetugas=tbl_peminjaman.idpetugas INNER JOIN tbl_siswa ON tbl_siswa.idsiswa=tbl_peminjaman.idsiswa INNER JOIN tbl_buku ON tbl_buku.idbuku=tbl_peminjaman.idbuku
        LIMIT $mulai, $batas");
    $ambildata2     = mysqli_query($sambung, "SELECT * FROM tbl_peminjaman INNER JOIN tbl_petugas ON tbl_petugas.idpetugas=tbl_peminjaman.idpetugas INNER JOIN tbl_siswa ON tbl_siswa.idsiswa=tbl_peminjaman.idsiswa INNER JOIN tbl_buku ON tbl_buku.idbuku=tbl_peminjaman.idbuku");
    $jumlahdata     = mysqli_num_rows($ambildata2);
    $jumlahhalaman  = ceil($jumlahdata / $batas);
    $nomor = $mulai + 1;

    while ($tampildata = mysqli_fetch_array($ambildata1)) {
    ?>

        <!--awal menampilkan data dari tabel peminjaman ke halaman web-->
        <tr>
            <td> <?php echo $nomor++ ?></td>
            <td align="center"> <?php echo $tampildata['namapetugas'] ?></td>
            <td align="center"> <?php echo $tampildata['namasiswa'] ?></td> 
            <td align="center"> <?php echo $tampildata['judul'] ?></td>
        </tr>
        <!--akhir menampilkan data dari tabel buku ke halaman web-->

    <?php
    }
    ?>
</table>
<!--akhir table-->

<!--awal menentukan banyaknya halaman pagination-->
<?php
$ambildata2 = mysqli_query($sambung, "select * from tbl_buku");
$jumlahdata = mysqli_num_rows($ambildata2);
$jumlahhalaman = ceil($jumlahdata / $batas);
?>
<!--akhir menentukan banyaknya halaman pagination-->
<nav>
    <ul class="pagination justify-content-center">
    <?php 
        for ($i=1; $i<=$jumlahhalaman; $i++) 
        { 
            if ($i != $halaman) 
            {
    ?>
        <li class="page-item"><a class="page-link" href="../user/index.php?page=pinjam&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
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