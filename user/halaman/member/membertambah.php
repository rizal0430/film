<?php
    include "../koneksi.php";
?>

<form action="halaman/member/membertambah_aksi.php" method="post">
    <table>
        <tr>
            <td>ID Member</td>
            <td>
                <input type="text" name="idmember" placeholder="Masukan ID ">
            </td>
        </tr>

        <tr>
            <td>genre</td>
            <td>
                <select name="idgenre" >
                    <option>Pilih Nama genre</option>
                    <?php
                        $genre_query = mysqli_query($sambung,"select * from tbl_genre");
                        while($genre_data = mysqli_fetch_array($genre_query))
                        {
                    ?>     
                        <option value="<?php echo $genre_data['idgenre']?>">
                            <?php echo $genre_data['namagenre']?>
                        </option>    
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>

        

        <tr>
            <td>Judul</td>
            <td>
                <select name="idfilm">
                    <option>Pilih Judul film</option>
                    <?php
                        $film_query = mysqli_query($sambung,"select * from tbl_datafilm");
                        while($film_data = mysqli_fetch_array($film_query))
                        {
                    ?>   
                        <option value="<?php echo $filn_data['idfilm']?>"><?php echo $film_data['judul']?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="tomboltambah" value="Tambah"></td>
        </tr>
    </table>
</form>