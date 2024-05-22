<!DOCTYPE html>
<html lang="en">
<head>
    <style> 
.button {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #04AA6D;
}
.button2 {background-color: #008CBA;} /* Blue */
 .buttton { border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
 }

</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<body>
<a href="tampil.php" class="button button1">Liat Data</a>
<?php 
include 'koneksi.php';
$id = $_GET ['id'];
$data =mysqli_query($konn,"SELECT * FROM daftar where id='$id'");
while($d = mysqli_fetch_array($data)){
?>
<form action="update.php" method="post">

<div class="w3-container w3-blue">
  <h2>Edit Data Anda</h2>
</div>

<form class="w3-container">
  <p>
  <label>Tahun Ajaran</label>
  <input type="hidden"  name="id" value="<?php echo $d['id']; ?>"></p>
  <input class="w3-input" type="text" name="thn_ajaran" class="input-control" value="2024/2025" readonly value="<?php echo $d['thn_ajaran']; ?>"></p>
  <p>
  <label>Jurusan</label>
  <select class="w3-select" name="jurusan" value="<?php echo $d['jurusan']; ?>">
                            <option value="">Pilih</option>
                            <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                            <option value="Bisnis Daring dan Pemasaran">Bisnis Daring dan Pemasaran</option>
                            <option value="Perhotelan">Perhotelan</option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Kendaraan Ringan dan Otomotif">Teknik Kendaraan Ringan dan Otomotif</option>
                            <option value="Teknik Pengelasan">Teknik Pengelasan</option>
                        </select>
  <p>
  <label>Nama Lengkap</label>
  <input class="w3-input" type="text" name="nama"  value="<?php echo $d['nama']; ?>"></p>
  <p>
  <label>Tempat,Tanggal Lahir</label>
  <input class="w3-input" type="text" name="ttl" value="<?php echo $d['ttl']; ?>"></p>
  <p>
  <label>Jenis Kelamin</label>
  <input class="w3-radio" type="radio" name="jk" value="Pria" checked <?php echo $d['jk']; ?>">
<label>Laki-laki</label>

<input class="w3-radio" type="radio" name="jk" value="Wanita" <?php echo $d['jk']; ?>">
<label>Perempuan</label>

  <p>
  <label>Agama</label>
  <select class="w3-select" name="agama" value="<?php echo $d['agama']; ?>">
  <option value="">Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                        </select>
  <p>
  <label>Alamat</label>
  <input class="w3-input" type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></p>
  <p>
                   <input type="submit" name="submit" class="buttton button2" value="Daftar Sekarang">
</p>
</form>
</form> 

<?php } ?>
</body>
</html>