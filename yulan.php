<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Saya</title>
    <link rel="stylesheet" href="yulanstyles.css"> <!-- File CSS Eksternal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome CSS -->
</head>
<body>
    <footer class="footer">
        <p>Yulan Tamariska Lepur</p>
        <div class="footer-links">
            <a href="#portofolio">Portofolio</a>
            <a href="#data-diri">Data Diri</a>
            <a href="#about-me">About Me</a> 
            <a href="#pendidikan">Pendidikan</a>
            <a href="#video">Video Favorite</a>
            <a href="#hubungisaya">Hubungi Saya</a>
        </div>
        </footer>
        <div class="container">
        <div class="header" id=portofolio>
            <h1>Portofolio Yulan</h1>
            <img src="Foto.jpg" alt="Foto Saya">            
        <div class="ucapanselamatdatang">
            <h3>Selamat datang di website saya
        </h3>
        <div class="content" id="data-diri">
            <h2>Data Diri</h2>
            <p>Nama: Yulan Tamariska Lepur</p>
            <p>NIM: 1203220022</p>
            <p>Tempat,Tanggal Lahir: Tobelo, 30 Agustus 2004</p>
            <p>Program Studi: Informatika</p>
            <p>Email: lepuryulan30@gmail.com</p>
            <p>Nomor WA: 085240359344</p>
            <p>Instagram: @yulantamariska</p>
        </div></div>
        </div>
        <div class="katapengantar" id="about-me">
            <h2>About Me</h2>
            <p>Hai perkenalkan saya Yulan Tamariska Lepur, nama panggilan saya Yulan. Saya seorang mahasiswa aktif di Telkom University Surabaya. 
            Asal saya dari Halmahera Utara kota Tobelo. Saya memiliki mimpih yang besar untuk menjadi seorang wanita karir, mandiri dan sukses.
            Dan di kota Surabaya, kota yang dijuluki kota pahlawan saya memulai mimpi saya dengan menempuh pendidikan saya di jenjang perkuliahan dengan jurusan S1 Informatika. 
            Saya sangat berharap di kampus ini saya dapat meraih mimpi saya di kampus impian saya ini. Di kampus Telkom University Surabaya ini saya sangat belajar banyak hal baik juga pengalaman-pengalaman baru dari pertemanan, mencoba 
            hal yang diluar pengetahuan saya. Saya suka untuk belajar hal baru karena dari apa yang saya buat dapat membantu untuk menambah wawasan dan pengetahun saya.
            </p>
        </div>
        <div class="data-section" id="pendidikan">
            <h2>Pendidikan</h2>
            <table class="education-table">
                <tr>
                    <th>Tingkat</th>
                    <th>Sekolah</th>
                    <th>Tahun</th>
                </tr>
                <tr>
                    <td>SD</td>
                    <td>SD Inpres Wosia</td>
                    <td>2010-2016</td>
                </tr>
                <tr>
                    <td>SMP</td>
                    <td>SMP Negeri 6 Halmahera Utara</td>
                    <td>2016-2019</td>
                </tr>
                <tr>
                    <td>SMA</td>
                    <td>SMA Negeri 6 Halmahera Utara</td>
                    <td>2019-2022</td>
                </tr>
                <tr>
                    <td>Universitas</td>
                    <td>Telkom University Surabaya</td>
                    <td>2022-Sekarang</td>
                </tr>
            </table>
        </div>
        <div class="video-container" id="video">
            <h2>Video Favorit</h2>
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/watch?v=MPqft_YO3TA" frameborder="0" allowfullscreen></iframe> -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/LAOxuo6pkdo?si=YKLYd_R_THjp71fV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="hubungi-saya" id="hubungisaya">
            <h2>Hubungi Saya</h2>
            <form action="submit.php" method="POST">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                <label for="pesan">Pesan:</label><br>
                <textarea id="pesan" name="pesan" rows="4" cols="50" required></textarea><br>
                <input type="submit" value="Kirim">
            </form>
        </div>
    </div>

    <button onclick="scrollToTop()" id="scrollToTopBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

    <script src="yulanScript.js"></script> <!-- File JavaScript Eksternal -->
</body>
</html>
