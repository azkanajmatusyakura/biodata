<?php
// --- Inisialisasi Variabel ---
$nama_lengkap = "Azka Najmatusyakura";
$nama_panggilan = "Azka";
$agama = "Islam";
$tempat_lahir = "Semarang";
$tgl = 13; $bln = "September"; $thn_lahir = 2009;
$alamat = "Klipang Pesona Asri 3 Blok A No 281 Sendangmulyo,Tembalang,Semarang,Jawa Tengah";
$hobi = ["Memasang Lego", "Memasak"];
$skills = [
    ["name" => "Memasang Lego", "level" => 90],
    ["name" => "Memasak", "level" => 85],
];
$gender = "Perempuan";
$kewarganegaraan = "WNI";
$no_wa = "082137451591";
$email = "azkanajmatusyakura8@mail.com";
$makanan_fav = [ "Sushi","Ramen","Sayur Bayam", "Sop Bihun", "Soto Lamongan", "Sambel Tempe"];
$minuman_fav = ["Matcha", "Kopi Dalgona", "Jus Alpukat"];
$foto = "najma.jpeg"; 
$motto = "Keberhasilan bukanlah milik orang yang pintar";
$cita_cita = "Bekerja menjadi karyawan tetap di perusahaan TELKOM dan menjadi orang sukses dunia & akhirat";
$rencana = "Kuliah mendapat beasiswa full,Kuliah sambil kerja yang sudah menjadi karyawan tetap,bekerja di perusahaan TELKOM dan menjabat setinggi mungkin";

// --- Perhitungan Umur ---
$tahun_sekarang = date("Y");
$umur = $tahun_sekarang - $thn_lahir;
$umur_10_tahun = $umur + 10;
$tahun_10_tahun = $tahun_sekarang + 10;

// --- Riwayat Pendidikan ---
$pendidikan = [
    ["tingkat" => "SD", "nama" => "SDN Sendangmulyo 01 ", "mulai" => "2016", "lulus" => "2022"],
    ["tingkat" => "SMP", "nama" => "SMP Negeri 42 Semarang", "mulai" => "2022", "lulus" => "2025"],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata - <?php echo $nama_panggilan; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background-color: #f4f7f6; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .card { border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); margin-bottom: 20px; }
        .profile-img { width: 150px; height: 150px; object-fit: cover; border: 5px solid #fff; }
        ul.square-list { list-style-type: square; }
        marquee { font-weight: bold; color: #0d6efd; background: #e9ecef; padding: 10px; border-radius: 5px; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="text-center mb-4">
        <img src="<?php echo $foto; ?>" class="rounded-circle profile-img mb-3" style="width: 150px; height: 150px; object-fit: cover;">
        <h1><?php echo $nama_lengkap; ?></h1>
        <p class="text-muted"><i class="fas fa-map-marker-alt"></i> <?php echo $alamat; ?></p>
        <a href="jadwal.php" class="btn btn-primary">Lihat Jadwal Pelajaran <i class="fas fa-arrow-right"></i></a>
    </div>

    <marquee scrollamount="10"><?php echo $motto; ?></marquee>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card p-4">
                <h3><i class="fas fa-user"></i> Biodata Pribadi</h3>
                <hr>
                <p><strong>Nama Panggilan:</strong> <?php echo $nama_panggilan; ?></p>
                <p><strong>TTL:</strong> <?php echo "$tempat_lahir, $tgl $bln $thn_lahir"; ?></p>
                <p><strong>Umur:</strong> <?php echo $umur; ?> Tahun</p>
                <p><strong>Gender:</strong> <?php echo $gender; ?> (<?php echo $kewarganegaraan; ?>)</p>
                <p><strong>Agama:</strong> <?php echo $agama; ?></p>
                <p><strong>Kontak:</strong> <i class="fab fa-whatsapp"></i> <?php echo $no_wa; ?> | <i class="fas fa-envelope"></i> <?php echo $email; ?></p>
            </div>

            <div class="card p-4">
                <h3><i class="fas fa-bullseye"></i> Harapan 10 Tahun Lagi</h3>
                <hr>
                <p>Hai namaku <strong><?php echo $nama_panggilan; ?></strong>, saat ini tahun <strong><?php echo $tahun_sekarang; ?></strong>, aku adalah seorang pelajar yang berumur <strong><?php echo $umur; ?></strong> tahun. 10 tahun lagi di tahun <strong><?php echo $tahun_10_tahun; ?></strong>, di umur <strong><?php echo $umur_10_tahun; ?></strong> aku akan <strong><?php echo $cita_cita; ?></strong>. Aku ingin sukses dan bermanfaat bagi banyak orang. Rencana yang akan aku tempuh adalah <strong><?php echo $rencana; ?></strong>.</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card p-4">
                <h3><i class="fas fa-star"></i> Skills</h3>
                <?php foreach($skills as $s): ?>
                    <label><?php echo $s['name']; ?></label>
                    <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $s['level']; ?>%"><?php echo $s['level']; ?>%</div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="card p-4">
                <h3><i class="fas fa-heart"></i> Hobi & Favorit</h3>
                <hr>
                <h6>Hobi:</h6>
                <ol>
                    <?php foreach($hobi as $h) echo "<li>$h</li>"; ?>
                </ol>
                <h6>Makanan Favorit (Square):</h6>
                <ul class="square-list">
                    <?php foreach($makanan_fav as $m) echo "<li>$m</li>"; ?>
                </ul>
                <h6>Minuman Favorit (ABC):</h6>
                <ol type="A">
                    <?php foreach($minuman_fav as $min) echo "<li>$min</li>"; ?>
                </ol>
            </div>
        </div>
    </div>

    <div class="card p-4">
        <h3><i class="fas fa-graduation-cap"></i> Riwayat Pendidikan</h3>
        <table class="table table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Tingkat</th>
                    <th>Nama Sekolah</th>
                    <th>Tahun Mulai</th>
                    <th>Tahun Lulus</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pendidikan as $p): ?>
                <tr>
                    <td><?php echo $p['tingkat']; ?></td>
                    <td><?php echo $p['nama']; ?></td>
                    <td><?php echo $p['mulai']; ?></td>
                    <td><?php echo $p['lulus']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


