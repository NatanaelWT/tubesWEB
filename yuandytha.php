<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- eksternal-->
	<link rel="stylesheet" href="yuandythaStyle.css">

	<!-- internal -->
	<style>
		#scrollToTopBtn {
			display: none;
			position: fixed;
			bottom: 20px;
			right: 20px;
			z-index: 99;
			font-size: 18px;
			border: none;
			outline: none;
			background-color: #333;
			color: white;
			cursor: pointer;
			padding: 15px;
			border-radius: 50%;
		}

		#myVideo {
			position: fixed;
			right: 0;
			bottom: 0;
			min-width: 100%;
			min-height: 100%;
			z-index: 0;
		}
	</style>


</head>

<body>

	<!-- header dan menu -->
	<header>
		<a class="brand">MY BIODATA</a>
		<div></div>
		<div class="navigasi" style="font-weight: bold">
			<strong>
				<a href="#home">Home</a>
				<a href="#about">About</a>
				<a href="#project">Project</a>
				<a href="#video2">Video</a>
				<a href="#kontak2">Kontak</a>
			</strong>
		</div>
	</header>
	<!-- akhir header -->
	<!-- home -->
	<section id="home" class="home" style="background-image: url(img/bgmain.jfif)">
		<div class="content1">
			<h2>Annyeonghaseyo perkenalkan<br /></h2>
			<div class="animasi-text">
				<h3>Saya Yuandytha</h3>
				<h3>Nim 1203220120</h3>
				<h3>Salam kenal xixi</h3>
			</div>
			<div style="padding-top: 50px">
				<a class="btns" href="#project">Project Saya</a>
			</div>
		</div>
		<div class="content2"><img src="img/fotoku.png" class="img" />
			<div id="about"></div>
		</div>

	</section>
	<!-- akhir  home -->


	<!-- awal about -->
	<section class="about">
		<div class="title">
			<h2 class="section-title">About Me</h2>
			<hr style="width: 500px; height: 5px; border-radius: 10px" />
		</div>
		<div class="content">
			<div class="col-left">
			</div>
		</div>
		<div class="col-right">
			<!-- paragraf 1 -->
			<p style="text-align: justify">
				Halo Teman! Saya dengan penuh semangat ingin memperkenalkan diri, saya adalah Yuandytha Fitria Ade Putri Sujiana. Saat ini, saya tengah menempuh perjalanan menuju impian saya melalui pendidikan S-1 Informatika di
				<a href="https://surabaya.telkomuniversity.ac.id/" target="_blank" style="text-decoration: none">Telkom University Surabaya</a>. Kota Surabaya bagi saya bukan hanya sebuah tempat, tetapi juga ladang ilmu yang tak terbatas, tempat saya mengasah bakat dan menemukan hal menarik dalam dunia teknologi. Di Telkom University Surabaya, saya telah banyak belajar dan bertemu dengan banyak orang hebat yang menginspirasi saya untuk terus berkembang dan mencapai potensi terbaik saya. Saya sangat bersemangat untuk terus mengejar mimpi dan berbagi pengalaman dengan teman-teman saya.
			</p>

			<br>
			<!-- tabel 1 untuk data pendidikan -->
			<table border="1">
				<tr>
					<td colspan="2" align="center">
						<h4>Riwayat Pendidikan</h4>
					</td>
				</tr>
				<tr>
					<th>Tahun</th>
					<th>NAMA SEKOLAH</th>
				</tr>
				<tr>
					<td width="20%">
						<!-- list 1: pendidikan -->
						<ul>
							<li><strong>2015</strong></li>
							<li><strong>2018</strong></li>
							<li><strong>2021</strong></li>
						</ul>
					</td>
					<td>
						<!-- list 1: pendidikan -->
						<ul>
							<li>SDN MADRASAH IBTIDAIYAH, Kefamenanu</li>
							<li>SMPN 1, Kefamenanu</li>
							<li>SMAN 2, Kefamenanu (IPA)</li>
						</ul>
					</td>
				</tr>
			</table>
		</div>
		<div style="margin-top: 200px;" id="project"></div>
	</section>
	<!-- akhir about -->
	
	<!-- awal project -->
	<section class="project" style="background-image: url(img/bgmain2.jfif)">
		<div class="title">
			<h2 class="section-title">My Project</h2>
			<hr style="width: 500px; height: 5px; border-radius: 10px; color: aliceblue" />
		</div>
		<div class="content">
			<div class="card">
				<div class="img-card"><a href="https://github.com/aefafifah/Tubes-PBO" target="blank" /><img src="img/project/pbo.jfif" /></a>
				</div>
			</div>
			<div class="card">
				<div class="img-card"><a href="d:\semester3\tubes\jarkom\tubes  jarkom topologi.pkt" target="blank" /><img src="img/project/jaringan.jfif" /></a></div>
			</div>
			<div class="card">
				<div class="img-card"><a href="d:\semester3\tubes\PCD\Tubes PCD\code tilt_shift_on_faces.ipynb" target="blank" /><img src="img/project/citra digital.jfif" /></a></div>
			</div>

		</div>
		<div style="margin-top: 120px;" id="video2"></div>
	</section>

	<!-- Video -->
	<section id="video" class="video" style="background-image: url(img/bgvideo.jfif)">
		<div class="title">
			<h2 class="section-title">My Video</h2>
			<hr style="width: 500px; height: 5px; border-radius: 10px; color: aliceblue" />
		</div>
		<div class="video-container">
			<iframe width="300" height="300" src="https://www.youtube.com/embed/QSWYyoF79oE?autoplay=1" frameborder="0" allowfullscreen></iframe>
		</div>
		<div id="kontak2"></div>
	</section>


	<!-- Section Kontak dengan Background Image -->
	<section id="kontak" class="kontak">
		<div class="kontak-background" style="background-image: url('img/bgmain3.jfif');">
			<div class="container">
				<div class="title">
					<h2 class="section-title">Hubungi Saya</h2>
					<hr class="section-divider">
				</div>
				<div class="kontak-content">
					<p>
						Saya sangat terbuka untuk menerima kritik dan saran yang membangun untuk meningkatkan kualitas proyek ini. Jika Anda memiliki ide atau masukan yang dapat membantu, saya sangat menghargainya.
					</p>
				</div>
			</div>
		</div>

		<!-- Form Kontak -->
		<section id="form-kontak" class="form-kontak">
			<div class="container">
				<form action="submit_form.php" method="POST">
					<label for="name">Nama:</label>
					<input type="text" id="name" name="name" required>
					<label for="email">Email:</label>
					<input type="email" id="email" name="email" required>
					<label for="message">Pesan:</label>
					<textarea id="message" name="message" required></textarea>
					<button type="submit">Kirim Pesan</button>
				</form>
			</div>
		</section>

		<!-- Social Media Links -->
		<section id="social-media" class="social-media">
			<div class="container">
				<div class="content">
					<div class="card">
						<a href="https://youtube.com/@yuandythasujiana8945?si=WVxPJZU2bYmrRJ2c" target="_blank">
							<img src="img/icon/youtube.png" alt="YouTube">
						</a>
					</div>
					<div class="card">
						<a href="https://www.instagram.com/yuandytha?igsh=MWlieGZhZmhvbDJsYw==" target="_blank">
							<img src="img/icon/instagram.ico" alt="Instagram">
						</a>
					</div>
					<div class="card">
						<a href="https://www.facebook.com/yuan.dytha" target="_blank">
							<img src="img/icon/facebook-removebg-preview.png" alt="Facebook">
						</a>
					</div>
					<div class="card">
						<a href="https://x.com/yuandytha?t=E4q5-FEqmWI7OP6Rvgou5w&s=09" target="_blank">
							<img src="img/icon/twiter.png" alt="Twitter">
						</a>
					</div>
				</div>
			</div>
		</section>
	</section>



	<!-- Footer -->
	<footer class="footer" style="text-align: center; padding: 10px; background-color: #333; color: white;">
		&copy; 2024 Biodata Saya Yuandytha</a>
	</footer>



	<button onclick="scrollToTop()" id="scrollToTopBtn" title="kembali ke atas">Home</button>


	<script>
		// Fungsi untuk menggulir kembali ke atas halaman
		function scrollToTop() {
			window.scrollTo({
				top: 0,
				behavior: "smooth"
			});
		}

		// Tampilkan tombol ketika pengguna menscroll ke bawah
		window.addEventListener("scroll", function() {
			var scrollToTopBtn = document.getElementById("scrollToTopBtn");
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				scrollToTopBtn.style.display = "block";
			} else {
				scrollToTopBtn.style.display = "none";
			}
		});
	</script>

	<script src="yuandythaScript.js"></script>

</body>

</html>