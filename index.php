<?php
include 'koneksi.php';

// Ambil data dari database
$query = "SELECT * FROM tb_mahasiswa";
$result = mysqli_query($koneksi, $query);

$no = 1;
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil atus</title>
    <link rel="stylesheet" href="style.css">
</head>

    <title>Hapus Data</title>   
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .btn { padding: 5px 10px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn-danger { background-color: #f44336; color: white; border: none; }
        .btn-danger:hover { background-color: #d32f2f; }
        .btn-primary { background-color: #4CAF50; color: white; border: none; }
        .btn-primary:hover { background-color: #45a049; }
        .form-group { margin-bottom: 15px; }
        .form-control { width: 100%; padding: 8px; box-sizing: border-box; }
    </style>
</head>
<body>

 <header>
        <nav class="navbar">
            <a href="#beranda">Beranda</a>
            <a href="#tentang">Tentang saya</a>
            <a href="#portofolio">Portofolio</a>
            <a href="#opini">Opini</a>

            <div class="dropdown">
                <button class="dropbtn">lainnya</button>
                <div class="dropdown-content">
                    <a href="https://www.instagram.com/mratustiianiiiiii6_/" target="_blank">Instagram</a>
                    <a href="https://www.facebook.com/share/1FSumWP1UZ/" target="_blank">Facebook</a>
                    <a href="https://www.tiktok.com/@maratusetiani?_t=ZS-8vmAEqFfg2y&_r=1" target="_blank">Tiktok</a>
                </div>
                <a href="http:localhost/PHP/index.php" class="btn-tambah">TAMBAH DATA</a>
            </div>

        </nav>
    </header>
    <section class="intro" id="intro">
        <img src="aku.jpg" alt="Foto">
    <div class="intro-text">
    <h2>Halo, saya Maratus Setiani</h2>
    <p>Saya seorang mahasiswa di Universitas Nahdlatul Ulama Sunan Giri Bojonegoro</p>

    </section>

    <section class="tentang " id="tentang">
        <div>
            <h2>Tentang Saya</h2>
            <p>Saya adalah seorang mahasiswa di UNUGIRI , prodi Teknik Informatika. Sekarang saya menduduki semester 2.</p>
            <p>Saya adalah Gen-z dengan kelahiran pada tanggal 10 mei 2006. Saya anak kedua dari dua bersaudara.</p>
            <p> Saya adalah alumi dari pondok pesantren ATTANWIR bojonegoro.</p>
            <p>Dan kini saya melanjutkan pendidikan saya dengan kuliah di UNUGIRI di prodi Teknik Informatika.</p>
          </div>
          <img src="atus.jpg" alt="foto saya">
    </section>

  <section class="portofolio" id="portofolio">
    <h2>Portofolio</h2>

    <!-- Form Tambah -->
    <form action="tambah.php" method="POST" style="margin-bottom: 20px;">
        <input type="hidden" name="id">
        <input type="text" name="nama_kegiatan" placeholder="nama kegiatan" required>
        <input type="text" name="waktu_kegiatan" placeholder="waktu kegiatan" required>
        <button type="submit">Tambah Kegiatan</button>
    </form>

    <!-- Tabel Kegiatan -->
    <?php
    include 'koneksi.php';
    $query = "SELECT * FROM tb_mahasiswa";
    $result = mysqli_query($koneksi, $query);
    ?>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nama kegiatan</th>
                <th>waktu kegiatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['nama_kegiatan']; ?></td>
                <td><?= $row['waktu_kegiatan']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

 <section>
        <h2 style="text-align: center;">Opini</h2>
      </section>
    
      <section class="opini" id="opini">
       
        <div><img src="kmd.jpg" alt="Opini 1"><h4>KMD Attanwir</h4></div>
        <div><img src="it camp.jpg" alt="Opini 2"><h4>IT camp</h4></div>
        <div><img src="sosialisasi.jpg" alt="Opini 3"><h4>Sosialisasi</h4></div>
        <div><img src="tugas1.jpg" alt="Opini 4"><h4>Tugas Pemograman</h4></div>
        <div><img src="tugas.jpg" alt="Opini 5"><h4>Tugas struktur data</h4></div>
        <div><img src="tugas2.jpg" alt="Opini 6"><h4>Tugas Bahasa inggris </h4></div>
      </section> 

      <section class="kontak">
        <h2>hubungi saya</h2>
        <div class="kontak1">
    
        <form>
          <input type="email" placeholder="Email">
          <input type="text" placeholder="Nama">
          <input type="text" placeholder="Subject">
          <textarea placeholder="Isi Pesan"></textarea>
          <button type="submit">Kirim</button>
        </form>
     
        <div class="maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31656.009256997408!2d112.04127026897488!3d-7.353764529913663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78256fc8b465f9%3A0x1ce5ed3ecfc34078!2sTondomulo%2C%20Kec.%20Kedungadem%2C%20Kabupaten%20Bojonegoro%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1745497607406!5m2!1sid!2sid"
           width="350" 
           height="200" 
           style="border:0;" 
           allowfullscreen="" loading="lazy" 
           referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
       </section> 
    
       <footer>
        <p>Copyright by Maratus Setiani</p>
      </footer>
</body>
</html>
