<a href="../../index.php?page=member">Kembali ke Data member</a>
<br /><br />
<?php
include "../../../koneksi.php";
$id_member = $_GET['id_member'];
$ambildata = mysqli_query($sambung, "select * from tb_member where id_member='$id_member'");
while ($tampildata = mysqli_fetch_array($ambildata)) {
?>

    <form action="../member/memberubah_aksi.php" method="post" name="formubah">
        <table>
            <tr>
                <td><input type="hidden" name="id_member" value="<?php echo $tampildata['id_member'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama member</td>
                <td><input type="text" name="nama_member" value="<?php echo $tampildata['nama_member'] ?>"></td>
            </tr>

            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $tampildata['username'] ?>"></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input type="password" name="password" value="<?php echo $tampildata['password'] ?>"></td>
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