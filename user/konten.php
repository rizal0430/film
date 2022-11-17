<div class="konten">
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                include "halaman/home.php";
                break;
            case 'film':
                include "halaman/film/film.php";
                break;
            case 'membertambah':
                include "halaman/member/membertambah.php";
                break;
            case 'genre':
                include "halaman/genre/genre.php";
                break;
            case 'filmtambah':
                include "halaman/film/filmtambah.php";
                break;
            case 'filmubah':
                include "halaman/film/filmubah.php";
                break;
            case 'genreubah':
                include "halaman/genre/genreubah.php";
                break;
            case 'genretambah':
                include "halaman/genre/genretambah.php";
                break;
            default:
                echo "Maaf halaman yang anda tuju tidak ada";
                break;
        }
    }
    ?>
</div>
</div>