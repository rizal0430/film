<a href="index.php?page=film">Kembali ke Data film</a>
<br /><br />
<?php
include "../koneksi.php";
$id_film = $_GET['id_film'];
$ambildata = mysqli_query($sambung, "select * from tb_datafilm where id_film='$id_film'");
while ($tampildata = mysqli_fetch_array($ambildata)) {
?>

    <form action="halaman/film/filmubah_aksi.php" method="post" name="formubah">
    <div class="form-group row">
            <label for="id_film" class="col-sm-2 col-form-label">ID film</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="id_film" value="<?php echo $tampildata['id_film'] ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="judul_film" class="col-sm-2 col-form-label">Judul film</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="judul_film" value="<?php echo $tampildata['judul_film'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="genre_film" class="col-sm-2 col-form-label">genre film</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="genre_film" value="<?php echo $tampildata['genre_film'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="tahun_film" class="col-sm-2 col-form-label">tahun film</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="tahun_film" value="<?php echo $tampildata['tahun_film'] ?>">
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary" name="tombolubah" onclick="return confirm('Apa Anda yakin akan mengubah data film?')">Ubah</button>
        
    </form>

<?php
}
?>