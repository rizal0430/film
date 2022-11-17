<form action="halaman/film/filmtambah_aksi.php" method="post">
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="hidden" class="form-control" name="id_film" placeholder="Masukan ID film">
        </div>
    </div>

    <div class="form-group row">
        <label for="judul_film" class="col-sm-2 col-form-label">Judul</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="judul_film" placeholder="Masukan Judul film">
        </div>
    </div>

    <div class="form-group row">
        <label for="genre_film" class="col-sm-2 col-form-label">genre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="genre_film" placeholder="Masukan genre film">
        </div>
    </div>

    <div class="form-group row">
        <label for="tahun_film" class="col-sm-2 col-form-label">tahun</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="tahun_film" placeholder="Masukan tahun">
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary" name="tomboltambah">Tambah</button>

</form>