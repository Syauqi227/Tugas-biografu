<?php
// ===== VARIABEL PHP =====
$nama_lengkap   = "Syauqi Rama";
$nama_panggilan = "Syauqi";
$agama          = "Islam";
$tempat_lahir   = "Kebumen";
$tanggal_lahir  = "11";
$bulan_lahir    = "04";
$tahun_lahir    = "2007";
$alamat         = "Jatispari RT5 RW8 Majun";
$gender         = "Laki-laki";
$kewarganegaraan= "Indonesia";
$no_wa          = "08823729292";
$email          = "syauqi.rama@email.com"; // contoh
$umur           = date("Y") - $tahun_lahir; // hitung umur
$tahun_sekarang = date("Y");
$tahun_10       = $tahun_sekarang + 10;
$umur_10        = $umur + 10;
$keinginan_10   = "menjadi cyber security atau game developer";
$motto          = "Tetap Bernafas";

// makanan favorit (list persegi)
$makanan_favorit = ["Telur Dadar", "Nasi Padang", "Bakso"];
// minuman favorit (list A, B, C)
$minuman_favorit = ["Air Putih", "Lemon Tea", "Es Teh"];
// hobi (list nomor)
$hobi = ["Bermain game", "Membaca artikel teknologi", "Eksperimen PC"];
// skill dengan range
$skill = [
    "Merakit PC" => 60,
    "Crimping LAN" => 50
];

// riwayat pendidikan
$pendidikan = [
    ["TK", "TKIT MIFAHUSSLAM", "2014", "2016"],
    ["SD", "SDIT MIFAHUSSLAM", "2016", "2022"],
    ["SMP", "SMPN 221 Semhang", "2022", "2025"]
];

// (opsional: foto dikosongkan, pakai placeholder)
$foto = ""; // kosong, nanti pakai placeholder
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Syauqi Rama</title>
    <style>
        /* ===== CSS NATIVE ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, system-ui, sans-serif;
        }
        body {
            background: linear-gradient(145deg, #f0f4f8 0%, #d9e2ec 100%);
            min-height: 100vh;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            max-width: 1100px;
            width: 100%;
            background: rgba(255,255,255,0.75);
            backdrop-filter: blur(6px);
            border-radius: 48px 48px 32px 32px;
            box-shadow: 0 20px 40px -10px rgba(0,20,30,0.3);
            padding: 35px 40px;
            border: 2px solid rgba(255,255,255,0.7);
        }
        h1 {
            font-size: 2.8rem;
            font-weight: 700;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 15px;
            border-left: 8px solid #2a5298;
            padding-left: 25px;
        }
        .sub {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 25px;
            background: #ffffffb0;
            padding: 15px 25px;
            border-radius: 200px;
            box-shadow: 0 4px 8px #00000010;
        }
        .motto-bergerak {
            background: #0b2b44;
            color: white;
            padding: 14px 0;
            border-radius: 60px;
            font-size: 1.5rem;
            font-weight: 500;
            letter-spacing: 1px;
            margin: 25px 0 35px 0;
            box-shadow: 0 6px 0 #071b2b;
            overflow: hidden;
            white-space: nowrap;
        }
        .motto-bergerak span {
            display: inline-block;
            padding-left: 100%;
            animation: marquee 18s linear infinite;
        }
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }

        /* grid layout */
        .grid-2 {
            display: grid;
            grid-template-columns: 1.2fr 0.9fr;
            gap: 30px;
            margin: 20px 0;
        }
        .card {
            background: white;
            border-radius: 32px;
            padding: 24px 28px;
            box-shadow: 0 15px 25px #0000001a;
            border: 2px solid #ffffff;
        }
        .card h2 {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.8rem;
            color: #113a5e;
            border-bottom: 4px dotted #8fc1e0;
            padding-bottom: 12px;
            margin-bottom: 22px;
        }
        .info-item {
            display: flex;
            align-items: baseline;
            margin: 12px 0;
            font-size: 1.2rem;
            border-bottom: 1px dashed #cbd5e0;
            padding-bottom: 6px;
        }
        .info-label {
            font-weight: 700;
            width: 150px;
            color: #1e4a6b;
        }
        .info-value {
            color: #154256;
        }
        .icon {
            margin-right: 12px;
            font-size: 1.6rem;
            vertical-align: middle;
        }
        ul, ol {
            padding-left: 35px;
            margin: 15px 0;
            font-size: 1.2rem;
        }
        ul.square-list {
            list-style-type: square;
        }
        ol.upper-alpha {
            list-style-type: upper-alpha;
        }
        .skill-bar {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 12px 0;
        }
        .skill-name {
            width: 130px;
            font-weight: 600;
        }
        .progress-bg {
            flex: 1;
            height: 24px;
            background: #e2e8f0;
            border-radius: 40px;
            overflow: hidden;
            box-shadow: inset 0 2px 5px #00000020;
        }
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #256ba0, #4299e1);
            width: 0%;
            border-radius: 40px;
            font-size: 0.9rem;
            color: white;
            line-height: 24px;
            padding-left: 12px;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 8px 16px #0000001a;
        }
        th {
            background: #1f4e7a;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            padding: 12px 6px;
        }
        td {
            background: #f8fafc;
            padding: 10px 8px;
            border-bottom: 2px solid white;
            text-align: center;
        }
        .foto-placeholder {
            width: 180px;
            height: 180px;
            background: linear-gradient(145deg, #bdd4e0, #a0bbcc);
            border-radius: 50%;
            margin: 20px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 6px solid white;
            box-shadow: 0 14px 20px #00000030;
            font-size: 1.4rem;
            color: #2b3b4b;
            font-weight: 500;
        }
        .btn-link {
            display: inline-block;
            background: #1f4e7a;
            color: white;
            padding: 14px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.3rem;
            margin: 30px 0 10px;
            transition: all 0.2s;
            border: 2px solid white;
        }
        .btn-link:hover {
            background: #143655;
            transform: scale(1.02);
        }
        .jadwal-keterangan {
            background: #eaf2f9;
            border-radius: 40px;
            padding: 12px 20px;
            margin-top: 25px;
        }
        .jam-cell {
            font-size: 0.9rem;
            color: #2d3748;
        }
        .highlight-nama {
            background-color: #fde68a !important;
            font-weight: 800;
            color: #1e3c5a;
        }
        footer {
            margin-top: 25px;
            font-size: 1rem;
            color: #325b7c;
        }
    </style>
</head>
<body>
<div class="container">

    <!-- ICON & HEADER (menggunakan emoji sebagai icon sederhana) -->
    <h1>📋 Biodata Diri</h1>
    <div class="sub">
        <span style="font-size:1.6rem;">👤 <?php echo $nama_lengkap; ?> (<?php echo $nama_panggilan; ?>)</span>
        <span style="font-size:1.6rem;">⚡✨🎯</span>
    </div>

    <!-- MOTTO BERGERAK (point 12) -->
    <div class="motto-bergerak"><span><?php echo $motto; ?> ✦ <?php echo $motto; ?> ✦ <?php echo $motto; ?> ✦</span></div>

    <!-- LAYOUT GRID: kiri besar, kanan kecil -->
    <div class="grid-2">
        <!-- KIRI: DATA INTI, FOTO, MAKANAN DLL -->
        <div class="card">
            <h2><span class="icon">🧑‍💻</span> Profil & Data</h2>
            <div class="info-item"><span class="info-label"><i class="icon">🔖</i>Nama</span><span class="info-value"><?php echo $nama_lengkap; ?> (<?php echo $nama_panggilan; ?>)</span></div>
            <div class="info-item"><span class="info-label"><i class="icon">🕊️</i>Agama</span><span class="info-value"><?php echo $agama; ?></span></div>
            <div class="info-item"><span class="info-label"><i class="icon">📍</i>Tempat/Tgl Lahir</span><span class="info-value"><?php echo $tempat_lahir . ', ' . $tanggal_lahir . ' ' . $bulan_lahir . ' ' . $tahun_lahir; ?></span></div>
            <div class="info-item"><span class="info-label"><i class="icon">🏠</i>Alamat</span><span class="info-value"><?php echo $alamat; ?></span></div>
            <div class="info-item"><span class="info-label"><i class="icon">⚥</i>Gender</span><span class="info-value"><?php echo $gender; ?></span></div>
            <div class="info-item"><span class="info-label"><i class="icon">🌍</i>Kewarganegaraan</span><span class="info-value"><?php echo $kewarganegaraan; ?></span></div>
            <div class="info-item"><span class="info-label"><i class="icon">📞</i>No WA</span><span class="info-value"><?php echo $no_wa; ?></span></div>
            <div class="info-item"><span class="info-label"><i class="icon">✉️</i>Email</span><span class="info-value"><?php echo $email; ?></span></div>
            <div class="info-item"><span class="info-label"><i class="icon">🎂</i>Umur</span><span class="info-value"><?php echo $umur; ?> tahun</span></div>

            <!-- FOTO placeholder (point 10) -->
            <div class="foto-placeholder">
                📸 <span style="margin-left:6px;">Foto</span>
            </div>
            <p style="text-align:center; color:#2f5575;">(tempat fotomu nanti)</p>
        </div>

        <!-- KANAN: MAKANAN, MINUMAN, HOBI, SKILL -->
        <div class="card">
            <h2><span class="icon">🍽️</span>Kesukaan & Skill</h2>
            <!-- Makanan favorit (list persegi) point 7 -->
            <p><strong>🍛 Makanan Favorit</strong></p>
            <ul class="square-list">
                <?php foreach ($makanan_favorit as $m): echo "<li>$m</li>"; endforeach; ?>
            </ul>
            <!-- Minuman favorit (list A, B, C) point 8 -->
            <p><strong>🥤 Minuman Favorit</strong></p>
            <ol class="upper-alpha">
                <?php foreach ($minuman_favorit as $m): echo "<li>$m</li>"; endforeach; ?>
            </ol>
            <!-- Hobi (list nomor 123) point 6 -->
            <p><strong>🎯 Hobi</strong></p>
            <ol>
                <?php foreach ($hobi as $h): echo "<li>$h</li>"; endforeach; ?>
            </ol>
            <!-- Skill dengan range point 5 -->
            <p><strong>🧠 Skill</strong></p>
            <?php foreach ($skill as $nama_skill => $persen): ?>
            <div class="skill-bar">
                <span class="skill-name"><?php echo $nama_skill; ?></span>
                <div class="progress-bg">
                    <div class="progress-fill" style="width: <?php echo $persen; ?>%;"><?php echo $persen; ?>%</div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- KEINGINAN 10 TAHUN LAGI (point 4) -->
    <div class="card" style="margin-top:30px;">
        <h2><span class="icon">🔮</span> 10 Tahun Lagi</h2>
        <p style="font-size:1.4rem; line-height:1.6; background: #e5f0fa; padding:25px; border-radius:50px;">
        Hai namaku <strong><?php echo $nama_panggilan; ?></strong>, saat ini tahun <strong><?php echo $tahun_sekarang; ?></strong>, 
        aku adalah seorang pelajar yang berumur <strong><?php echo $umur; ?> tahun</strong>, 10 tahun lagi di tahun <strong><?php echo $tahun_10; ?></strong>, 
        di umur <strong><?php echo $umur_10; ?></strong> aku adalah <strong><?php echo $keinginan_10; ?></strong>.
        Rencana yang akan aku tempuh: belajar coding, ikut kursus cybersecurity, dan membuat portofolio game.
        </p>
    </div>

    <!-- RIWAYAT PENDIDIKAN (point 9) tabel -->
    <div class="card" style="margin-top:25px;">
        <h2><span class="icon">🏫</span> Riwayat Pendidikan</h2>
        <table>
            <tr><th>Tingkat</th><th>Nama Sekolah</th><th>Tahun Mulai</th><th>Tahun Lulus</th></tr>
            <?php foreach ($pendidikan as $row): ?>
            <tr><td><?php echo $row[0]; ?></td><td><?php echo $row[1]; ?></td><td><?php echo $row[2]; ?></td><td><?php echo $row[3]; ?></td></tr>
            <?php endforeach; ?>
        </table>
    </div>

    <!-- LINK menuju halaman jadwal (point 15) -->
    <div style="text-align:center;">
        <a href="?page=jadwal" class="btn-link">📅 Lihat Jadwal Pelajaran & Piket →</a>
    </div>

    <?php
    // ===== HALAMAN JADWAL (page berbeda) =====
    if (isset($_GET['page']) && $_GET['page'] === 'jadwal'):
    ?>
</div> <!-- tutup container sebelumnya agar rapi, lalu buka container baru untuk jadwal -->
<div class="container" style="margin-top:30px;">
    <h2 style="font-size:2.5rem;">🗓️ Jadwal Pelajaran & Piket</h2>
    <!-- LINK KEMBALI KE BIODATA -->
    <div style="text-align:right; margin-bottom:20px;">
        <a href="?" class="btn-link" style="padding:10px 20px; font-size:1rem;">↩ Kembali ke Biodata</a>
    </div>

    <!-- ========== JADWAL PELAJARAN (point 13) ========== -->
    <div class="card">
        <h3>📚 Jadwal Pelajaran (Senin - Jumat)</h3>
        <table>
            <thead><tr><th>Jam Ke-</th><th>Senin</th><th>Selasa</th><th>Rabu</th><th>Kamis</th><th>Jumat</th></tr></thead>
            <tbody>
            <?php
            // Membangun jadwal dengan range jam 07:00 - 15:30 (Senin-Kamis) dan Jumat sampai 14:00
            // Mata pelajaran dummy (bebas, nanti bisa diganti sendiri)
            $mapel_pool = ['Matematika','B. Indo','B. Inggris','Fisika','Kimia','Biologi','Sejarah','PKN','Olahraga','Seni Budaya','Informatika','Prakarya','Agama','B. Daerah'];
            $jadwal_senin = ['Matematika','B. Indo','Istirahat','B. Inggris','Fisika','Istirahat','Kimia','Biologi','Sejarah'];
            $jadwal_selasa = ['B. Inggris','PKN','Istirahat','Matematika','Fisika','Istirahat','Kimia','Informatika','Seni Budaya'];
            $jadwal_rabu = ['Agama','B. Daerah','Istirahat','Matematika','Kimia','Istirahat','Biologi','Fisika','Olahraga'];
            $jadwal_kamis = ['PKN','Sejarah','Istirahat','B. Indo','B. Inggris','Istirahat','Informatika','Prakarya','Seni Budaya'];
            $jadwal_jumat = ['Agama','Matematika','Istirahat','B. Indo','B. Inggris','Istirahat','Olahraga','Sejarah','-']; // jumat lebih pendek sampai jam 14.00
            
            for ($jam = 1; $jam <= 10; $jam++):
                // Menentukan rentang jam berdasarkan urutan
                if ($jam <= 2) { $rentang = "07:00-07:45"; $jam_ke = 1; }
                elseif ($jam == 2) { $rentang = "07:45-08:30"; $jam_ke = 2; }
                elseif ($jam == 3) { $rentang = "08:30-09:15"; $jam_ke = 3; }
                elseif ($jam == 4) { $rentang = "09:30-10:15"; $jam_ke = 4; } // setelah istirahat 1
                elseif ($jam == 5) { $rentang = "10:15-11:00"; $jam_ke = 5; }
                elseif ($jam == 6) { $rentang = "11:00-11:45"; $jam_ke = 6; }
                elseif ($jam == 7) { $rentang = "12:30-13:15"; $jam_ke = 7; } // setelah istirahat kedua
                elseif ($jam == 8) { $rentang = "13:15-14:00"; $jam_ke = 8; }
                elseif ($jam == 9) { $rentang = "14:00-14:45"; $jam_ke = 9; }
                elseif ($jam == 10) { $rentang = "14:45-15:30"; $jam_ke = 10; }
                else $rentang = "-";
            ?>
                <tr>
                    <td class="jam-cell"><?php echo $jam_ke; ?> (<?php echo $rentang; ?>)</td>
                    <td><?php echo $jadwal_senin[$jam-1] ?? '-'; ?></td>
                    <td><?php echo $jadwal_selasa[$jam-1] ?? '-'; ?></td>
                    <td><?php echo $jadwal_rabu[$jam-1] ?? '-'; ?></td>
                    <td><?php echo $jadwal_kamis[$jam-1] ?? '-'; ?></td>
                    <td><?php echo ($jam <= 8) ? ($jadwal_jumat[$jam-1] ?? '-') : '-'; ?></td>
                </tr>
            <?php endfor; ?>
            </tbody>
        </table>
        <div class="jadwal-keterangan">
            ⏰ Istirahat 1: 09:15-09:30 | Istirahat 2: 11:45-12:30 (Senin-Kamis). Jumat: 11:45-12:30 istirahat, selesai 14:00.
        </div>
    </div>

    <!-- ========== JADWAL PIKET KELAS (point 14) ========== -->
    <div class="card" style="margin-top:30px;">
        <h3>🧹 Jadwal Piket Kelas</h3>
        <table>
            <tr><th>Hari</th><th>Nama Petugas</th></tr>
            <tr><td>Senin</td><td>Alex, Bella, Chandra</td></tr>
            <tr><td>Selasa</td><td>Dian, Eka, Farhan</td></tr>
            <tr><td>Rabu</td><td class="highlight-nama"><strong>Syauqi Rama</strong>, Gita, Hari</td></tr> <!-- highlight -->
            <tr><td>Kamis</td><td>Indra, Joko, Kiki</td></tr>
            <tr><td>Jumat</td><td>Lala, Maman, Nina</td></tr>
        </table>
        <p style="margin-top:12px;">✅ Nama <strong>Syauqi Rama</strong> mendapat highlight kuning (piket Rabu).</p>
    </div>

    <!-- Link kembali bawah -->
    <div style="text-align:center; margin:30px 0;">
        <a href="?" class="btn-link">⬅ Kembali ke Biodata</a>
    </div>
    <?php endif; ?>

    <!-- footer icon (point 11, icon sudah dipakai semua) -->
    <footer>
        ⚡ Dibuat dengan PHP Native, HTML, CSS murni • icon via emoji 😎
    </footer>
</div>
</body>
</html>