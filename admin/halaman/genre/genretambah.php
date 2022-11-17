<form action="halaman/genre/genretambah_aksi.php" method="post">
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="hidden" class="form-control" name="id_genre" placeholder="Masukan genre">
        </div>
    </div>

    <div class="form-group row">
        <label for="id_genre" class="col-sm-2 col-form-label">id_genre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="id_genre" placeholder="Masukan idgenre film">
        </div>
    </div>

    <div class="form-group row">
        <label for="nama_genre" class="col-sm-2 col-form-label">nama_genre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_genre" placeholder="Masukan genre film">
        </div>
    </div>

    
    
    <button type="submit" class="btn btn-primary" name="tomboltambah">Tambah</button>

</form>