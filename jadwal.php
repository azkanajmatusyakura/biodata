<?php
$nama_panggilan = "Azka"; // Digunakan untuk highlight (samakan case-nya)

// Data Jadwal dari Gambar
$jadwal = [
    "SENIN"  => ["Bahasa Inggris", "Bahasa Ingris", "Informatika", "Informatika", "KKA", "KKA", "GIM", "GIM", "GIM", "GIM"],
    "SELASA" => ["Matematika", "Matematika", "Seni Musik", "Seni Musik", "IPAS", "IPAS", "IPAS", "IPAS", "Bahasa Indonesia", "Bahasa Indonesia"],
    "RABU"   => ["Pendidikan Agama&Pekerti", "Pendidikan Agama&Pekerti", "Pendidikan Agama&Pekerti", "Pendidikan Olahraga", "Pendidikan Olahraga", "Pendidikan Olahraga", "Bahasa Jawa", "Bahasa Jawa", "Sejarah", "Sejarah"],
    "KAMIS"  => ["Bahasa Inggris", "Bahasa Inggris", "PGD", "PGD", "PGD", "PGD", "PGD", "PGD", "PGD", "PGD"],
    "JUMAT"  => ["IPAS", "IPAS", "Matematika", "Matematika", "Pendidikan Pancasila", "Pendidikan Pancasila", "Bahasa Indonesia", "Bahasa Indonesia", "-", "-"]
];

// Data Piket dari List yang kamu berikan
$piket = [
    "Senin"  => ["Fanezza", "Cahaya", "Aca", "Azka", "Rama", "Nafi'u", "Ridwan" ,"-"],
    "Selasa" => ["Love", "Diva", "Angel", "Galuh", "Teo", "Syaarif", "Zidni","-"],
    "Rabu"   => ["Ines", "Nashwa", "Oliv", "Kirey", "Marta", "Khoyru", "Reizo","-"],
    "Kamis"  => ["Jihan", "Valen", "Jason", "Tata", "Bunga", "Qais", "Gavian","-"],
    "Jumat"  => ["Alin", "Ihsan", "Virda", "Windy", "Nove", "Ubay", "Kael", "Leon"]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jadwal Sekolah & Piket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .highlight { background-color: #ffeb3b !important; font-weight: bold; border: 2px solid #fbc02d; }
        .table-primary { background-color: #0d6efd; color: white; }
    </style>
</head>
<body class="bg-light">

<div class="container py-5">
    <a href="biodata.php" class="btn btn-secondary mb-4">← Kembali ke biodata</a>

    <h2 class="text-center mb-4">JADWAL PELAJARAN X PPLG 1</h2>
    <div class="table-responsive shadow-sm">
        <table class="table table-bordered text-center align-middle bg-white">
            <thead class="table-dark">
                <tr>
                    <th>HARI</th>
                    <?php for($i=1; $i<=10; $i++) echo "<th>$i</th>"; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($jadwal as $hari => $mapel): ?>
                <tr>
                    <td class="fw-bold table-light"><?php echo $hari; ?></td>
                    <?php foreach($mapel as $m): ?>
                        <td><?php echo $m; ?></td>
                    <?php endforeach; ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <h2 class="text-center mt-5 mb-4">JADWAL PIKET KELAS</h2>
    <div class="table-responsive shadow-sm">
        <table class="table table-bordered text-center bg-white">
            <thead class="table-success">
                <tr>
                    <th>Senin</th><th>Selasa</th><th>Rabu</th><th>Kamis</th><th>Jumat</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Mencari baris maksimal (Jumat ada 8 orang, yang lain 7)
                for($i=0; $i<8; $i++): ?>
                <tr>
                    <?php foreach(["Senin", "Selasa", "Rabu", "Kamis", "Jumat"] as $h): ?>
                        <?php 
                        $nama = isset($piket[$h][$i]) ? $piket[$h][$i] : "-";
                        // Highlight jika nama adalah Azka
                        $class = (strtolower($nama) == strtolower($nama_panggilan)) ? 'highlight' : '';
                        ?>
                        <td class="<?php echo $class; ?>"><?php echo ucfirst($nama); ?></td>
                    <?php endforeach; ?>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>