<?php
    //koneksi ke database
    include "koneksi.php";
    ?>

    <form name="member" action="admin/halaman/member/membertambah_aksi.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                 <div>
                    <input type="text" name="id_member" placeholder="id_member">
                </div>
    
                
                <div>
                    <input type="text" name="nama_member" placeholder="nama_member">
                </div>
              
                <div>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div>
                    <input type="password" name="password" placeholder="Kata Sandi">
                </div>
                <div>
                    <!-- /.col -->
                    <div>
                        <button type="submit" name="tomboltambah" value="tambah">Daftar Sekarang</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>