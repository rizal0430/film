<a href="../../index.php?page=genre">Kembali ke Data </a>
<br /><br />
<?php
include "../../../koneksi.php";
$id_genre = $_GET['id_genre'];
$ambildata = mysqli_query($sambung, "select * from tb_genre where id_genre='$id_genre'");
while ($tampildata = mysqli_fetch_array($ambildata)) {
?>

    <form action="../genre/genreubah_aksi.php" method="post" name="formubah">
        <table>
            <tr>
                <td><input type="hidden" name="id_genre" value="<?php echo $tampildata['id_genre'] ?>" readonly></td>
            </tr>

            <tr>
                <td>Nama genre</td>
                <td><input type="text" name="nama_genre" value="<?php echo $tampildata['nama_genre'] ?>"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="tombolubah" value="Ubah" onclick="return confirm('Apa Anda yakin akan mengubah data ?')">
            </tr>
        </table>
    </form>

<?php
}
?>