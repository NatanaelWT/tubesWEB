<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natanael Wijaya Tiono</title>
    <link rel="icon" href="img/natan.jpg">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="">
    <!-- Internal CSS -->
    <style>
        body {
            min-width: 400px;
        }
    </style>
</head>

<body>
    <!-- Inline CSS -->
    <header style="margin-top: 0.75rem;" class="mx-6">
        <div class="bg-white text-black py-4 border rounded-3xl border-slate-200 shadow-md">
            <div class="grid grid-cols-4 text-center font-semibold text-lg">
                <a href="#profile">
                    <div class="hover:text-blue-800">
                        Profile
                    </div>
                </a>
                <a href="#aboutMe">
                    <div class="hover:text-blue-800">
                        About Me
                    </div>
                </a>
                <a href="#experience">
                    <div class="hover:text-blue-800">
                        Experience
                    </div>
                </a>
                <a href="#contact">
                    <div class="hover:text-blue-800">
                        Contact
                    </div>
                </a>
            </div>
        </div>
    </header>

    <section>    
        <div id="profile" class="grid grid-cols-6 m-4 border rounded-3xl border-slate-200 shadow-md gap-4 p-4">
            <div class="col-span-6 text-3xl font-bold text-center">
                <h1>PROFIL</h1>
            </div>
            <div class="col-span-6 md:col-span-2">
                <img src="img/natan.jpg" class="rounded-full w-96 h-w-96 mx-auto" alt="">

            </div>
            <div class="col-span-6 md:col-span-4 my-auto">
                <div class="grid grid-cols-6 text-left text-md font-bold sm:text-2xl md:text-lg lg:text-2xl">
                    <div class="col-span-2">
                        <h2>Nama</h2>
                        <h2>NIM</h2>
                        <h2>TTL</h2>
                        <h2>Kampus</h2>
                        <h2>Jurusan</h2>
                        <h2>Alamat</h2>
                    </div>
                    <div class="col-span-4">
                        <h2>: Natanael Wijaya Tiono</h2>
                        <h2>: 1203220140</h2>
                        <h2>: Banjarmasin, 25 January 2024</h2>
                        <h2>: Telkom University Surabaya</h2>
                        <h2>: Informatika</h2>
                        <h2>: Jl. Karah No 29, Karah, Kec. Jambangan, Surabaya, Jawa Timur 60232</h2>
                    </div>
                </div>
            </div>
            <div class="hidden">

            </div>
        </div>
        <div id="aboutMe" class="grid grid-cols-6 m-4 border rounded-3xlborder-slate-200 shadow-md gap-4 p-4">
            <div class="col-span-6 text-3xl font-bold text-center">
                <h1>ABOUT ME</h1>
            </div>
            <div class="lg:hidden"></div>
            <div class="col-span-6 md:col-span-4 lg:col-span-6 border-b-2 pb-8">
                <h1>
                    Saya adalah seorang software developer yang berdedikasi dan bersemangat dalam menciptakan solusi teknologi yang inovatif. Sebagai seorang yang selalu haus akan pengetahuan, saya senantiasa berusaha untuk terus memperdalam pemahamannya tentang berbagai teknologi terkini dan praktik pengembangan perangkat lunak terbaik. Keterampilan teknis yang kuat meliputi penguasaan bahasa pemrograman seperti HTML, CSS, dan JavaScript, serta keahlian dalam menggunakan berbagai framework dan teknologi terkait, termasuk Bootstrap, Tailwind, dan Laravel.
                    Selain itu, saya juga memiliki kemampuan komunikasi yang baik dan keterampilan kolaborasi yang solid, memungkinkannya untuk bekerja sama dengan tim lintas disiplin dan berkontribusi dalam mencapai tujuan bersama.
                </h1>
            </div>
            <div class="lg:hidden"></div>
            <div class="col-span-6 text-3xl font-bold text-center mt-4">
                <h1>EDUCATION</h1>
            </div>
            <div class="lg:hidden"></div>
            <div class="col-span-6 md:col-span-4 lg:col-span-2 pt-2">
                <h1 class="text-xl font-bold text-center">Telkom University Surabaya</h1>
                <h1>Telkom University Surabaya adalah tempat di mana saya menempuh pendidikan Sarjana Sains di Bidang Informatika. Di sini, saya mempelajari dunia ilmu komputer, rekayasa perangkat lunak, dan teknologi informasi secara mendalam. Universitas ini menyediakan kurikulum yang kuat dan lingkungan akademik yang dinamis, mempersiapkan saya dengan pengetahuan dan keterampilan yang diperlukan untuk karier di bidang ini.</h1>
            </div>
            <div class="lg:hidden"></div>
            <div class="lg:hidden"></div>
            <div class="col-span-6 md:col-span-4 lg:col-span-2 pt-2">
                <h1 class="text-xl font-bold text-center">SMKN 1 Palangkaraya</h1>
                <h1>Saya mengkhususkan diri dalam Rekayasa Perangkat Lunak, mempelajari dasar-dasar pemrograman, metodologi pengembangan perangkat lunak, dan arsitektur sistem. Pengalaman pendidikan ini membentuk dasar perjalanan saya dalam dunia rekayasa perangkat lunak, membekali saya dengan keterampilan praktis dan pemahaman teoritis yang penting untuk membangun solusi perangkat lunak inovatif.</h1>
            </div>
            <div class="lg:hidden"></div>
            <div class="lg:hidden"></div>
            <div class="col-span-6 md:col-span-4 lg:col-span-2 pt-2">
                <h1 class="text-xl font-bold text-center">SMPN 9 Palangkaraya</h1>
                <h1>SMPN 9 Palangkaraya memberikan saya pondasi akademik yang kokoh, mengembangkan kemampuan berpikir kritis dan pemecahan masalah yang akan sangat berharga dalam pendidikan dan karier profesional saya selanjutnya.</h1>
            </div>
            <div class="lg:hidden"></div>
        </div>
        <div id="experience" class="grid grid-cols-6 m-4 border rounded-3xl border-slate-200 shadow-md gap-4 p-4">
            <div class="col-span-6 text-3xl font-bold text-center">
                <h1>EXPERIENCE</h1>
            </div>
            <div class="lg:hidden"></div>
            <div class="col-span-6 md:col-span-4 lg:col-span-2 pt-2">
                <img src="img/sertifPkm.jpg" alt="">
                <h1 class="text-xl font-bold text-center">Experience 1</h1>
                <h1>Sertifikat ini diberikan oleh Direktorat Pembelajaran dan Kemahasiswaan, Direktorat Jenderal Pendidikan Tinggi, Riset, dan Teknologi, Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia. Nomor sertifikat adalah 7308/E2/DT.01.00/2023.

Sertifikat ini diberikan kepada five individu, yaitu Natanael Wijaya Tiono, Dharma Wiguna Limmarga, Yoga Maulana, Irfan Yasin, dan Muhammad Hafizh Alfajri sebagai pemenang pendanaan bidang PKMKI (Program Kreativitas Mahasiswa Keahlian Ilmu Komputer) tahun 2023. Judul proyek yang mereka ajukan adalah "Media Pembelajaran Astronomi Berbasis VR untuk Anak Sekolah Dasar".

Sertifikat ini ditandatangani oleh Direktur Pembelajaran dan Kemahasiswaan, Sri Suning Kusumawardani, pada tanggal 15 November 2023. Dengan mendapatkan sertifikat ini, pemenang diharapkan dapat melanjutkan dan mengembangkan ide proyeknya untuk memanfaatkan teknologi virtual reality (VR) dalam pendidikan astronomy untuk siswa SD.</h1>
            </div>
            <div class="lg:hidden"></div>
            <div class="lg:hidden"></div>
            <div class="col-span-6 md:col-span-4 lg:col-span-2 pt-2">
                <img src="img/sertifPkkmb.jpg" alt="">
                <h1 class="text-xl font-bold text-center">Experience 2</h1>
                <h1>Sertifikat ini diberikan oleh Institut Teknologi Telkom Surabaya (IT Telkom Surabaya) kepada Natanael Wijaya Tiono sebagai Anggota Kafas dalam acara Pengenalan Kehidupan Kampus Mahasiswa Baru (PKKMB) DEWANGKARA MAETALA 2023. Acara ini diselenggarakan oleh IT Telkom Surabaya pada tanggal 11-13 September 2023.

Sertifikat ini memiliki nomor 1186/MHS9/WRIII/X/2023 dan ditandatangani oleh Agoes Windarto, S.T., M,M., sebagai Wakil Rektor III IT Telkom Surabaya. Sertifikat ini diberikan sebagai penghargaan atas partisipasi dan sumbangsi Natanael Wijaya Tiono dalam acara PKKMB DEWANGKARA MAETALA 2023.</h1>
            </div>
            <div class="lg:hidden"></div>
            <div class="lg:hidden"></div>
            <div class="col-span-6 md:col-span-4 lg:col-span-2 pt-2">
                <img src="img/sertifOsjur.jpg" alt="">
                <h1 class="text-xl font-bold text-center">Experience 3</h1>
                <h1>Sertifikat ini diterbitkan oleh Telkom University, Surabaya, untuk Nomor: 171/MHS9/IF-S1-IF/I. Ini telah diberikan kepada Natanael Wijaya Tiono sebagai Koordinator Materi & Penugasan dalam kegiatan Ospek Jurusan Informatika Telkom University Surabaya, yang diselenggarakan oleh Panitia Ospek HMIF Telkom University Surabaya pada tanggal 11-13 Januari 2024. Satria Putra Buana, Kepala Program Studi Informatika, Telkom University, dan Muhammad Dzulfikar Fauzi, S.Kom., M.Cs. NIP. 20940043, juga tercantum sebagai etua Pelaksana dalam acara EMATICS 2024.</h1>
            </div>
            <div class="lg:hidden"></div>
        </div>
        <div id="contact" class="grid grid-cols-3 m-4 border rounded-3xl border-slate-200 shadow-md gap-4 p-4">
            <div class="col-span-3 text-3xl font-bold text-center">
                <h1>CONTACT</h1>
            </div>
            <div class="col-span-3 flex items-center justify-center p-12">
                <div class="mx-auto w-full max-w-[550px]">
                    <form action="" method="POST">
                        <div class="mb-5">
                            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                Full Name
                            </label>
                            <input type="text" name="name" id="name" placeholder="Full Name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="mb-5">
                            <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                                Email Address
                            </label>
                            <input type="email" name="email" id="email" placeholder="example@domain.com" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="mb-5">
                            <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                                Subject
                            </label>
                            <input type="text" name="subject" id="subject" placeholder="Enter your subject" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="mb-5">
                            <label for="message" class="mb-3 block text-base font-medium text-[#07074D]">
                                Message
                            </label>
                            <textarea rows="4" name="message" id="message" placeholder="Type your message" class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                        </div>
                        <div>
                            <button class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>