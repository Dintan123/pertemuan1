<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
              height: 80vh;
              background-image: url(smeba.jpg);
              background-size: cover;
              position: relative;
           }
    </style>
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
        <img src="ic-logo-png.png" width="250" height="45">
        <div class="navbar-nav">
            <a href="index.php">Beranda</a>
            <a href="daftar.php">Daftar</a>
            <a href="profil.html">Profil</a>
            <a href="#">Contact</a>
            <a href="#">Album</a>
        </div>
    </nav>
    <section class="box-formulir">
        <h3>Formulir Pendaftaran Siswa Baru SMK</h3>
    

    <form action="proses.php" method="post">
        <div class="box">
            <table border="0" class="table-form">
                <tr>
                    <td>Tahun Ajaran</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="thn_ajaran" class="input-control" value="2024/2025" readonly>
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select class="input-control" name="jurusan">
                            <option value="">Pilih</option>
                            <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                            <option value="Bisnis Daring dan Pemasaran">Bisnis Daring dan Pemasaran</option>
                            <option value="Perhotelan">Perhotelan</option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Kendaraan Ringan dan Otomotif">Teknik Kendaraan Ringan dan Otomotif</option>
                            <option value="Teknik Pengelasan">Teknik Pengelasan</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <h3> <a href="tampil.php">Data Diri Calon Siswa</a></h3>
        <div class="box">
            <table border="0" class="table-form">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td>Tempat,Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="ttl" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" class="input-control" value="Pria">Laki-laki &nbsp; &nbsp; &nbsp;
                        <input type="radio" name="jk" class="input-control" value="Wanita">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select class="input-control" name="agama">
                            <option value="">Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                       <textarea class="input-control" name="alamat"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                       <input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
                    </td>
                </tr>
            </table>
        </div>
    </form>
</section>
    <footer>
            <div class="conteiner">
                <small> Copyright &copy; 2023 - Muhammad Daffa, All Rights Reserved.</small>
            </div>
         </footer>
         </body>
         </html>
    