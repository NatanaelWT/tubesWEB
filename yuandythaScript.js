
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

// Fungsi untuk menampilkan pesan terima kasih setelah mengirim formulir kontak
function showThankYouMessage() {
    alert("Terima kasih! Pesan Anda telah berhasil dikirim.");
}

// Fungsi untuk validasi formulir kontak sebelum pengiriman
function validateContactForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    // Validasi nama
    if (name.trim() === "") {
        alert("Silakan masukkan nama Anda.");
        return false;
    }

    // Validasi email
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.match(emailPattern)) {
        alert("Silakan masukkan alamat email yang valid.");
        return false;
    }

    // Validasi pesan
    if (message.trim() === "") {
        alert("Silakan masukkan pesan Anda.");
        return false;
    }

    // Jika semua validasi berhasil, kirim formulir
    return true;
}

// Tambahkan event listener untuk formulir kontak
document.getElementById("contactForm").addEventListener("submit", function(event) {
    if (!validateContactForm()) {
        // Jika validasi gagal, hentikan pengiriman formulir
        event.preventDefault();
    } else {
        // Jika validasi berhasil, tampilkan pesan terima kasih
        showThankYouMessage();
    }
});
