# SLBN Badegan Ponorogo — PHP Murni + TailwindCSS

## 📁 Struktur Folder

```
slbn/
│
├── index.php               ← Halaman Home (hero + quick info cards)
├── about.php               ← Halaman Tentang Kami
├── portfolio.php           ← Halaman Sarana Prasarana & Hubungan Masyarakat
├── team.php                ← Halaman Jajaran Team
├── contact.php             ← Halaman Kontak (form + info)
│
├── includes/
│   ├── header.php          ← Bagian <head> + <body> + include navbar
│   ├── navbar.php          ← Komponen navbar (fixed, aktif otomatis)
│   └── footer.php          ← Footer + tutup </body></html>
│
└── assets/
    ├── img/
    │   ├── home2.jpg       ← Background hero halaman Home
    │   ├── about.jpg       ← Foto halaman About
    │   ├── contact-bg.jpg  ← Background halaman Contact
    │   ├── team1.jpg       ← Foto TRI SUSILOWATI
    │   ├── team2.jpg       ← Foto TRI NOVEMBRI J
    │   ├── team3.jpg       ← Foto NUR RISKA P
    │   ├── team4.jpg       ← Foto NUR ALFIN LAILA
    │   └── favicon.png     ← Ikon tab browser
    ├── css/                ← (opsional, jika ada CSS tambahan)
    └── js/                 ← (opsional, jika ada JS tambahan)
```

---

## 🚀 Cara Menjalankan

### Opsi 1 — PHP Built-in Server
```bash
cd slbn
php -S localhost:8000
```
Buka browser: http://localhost:8000

### Opsi 2 — XAMPP / Laragon
Salin folder `slbn/` ke:
- XAMPP  → `C:/xampp/htdocs/slbn/`
- Laragon → `C:/laragon/www/slbn/`

Buka browser: http://localhost/slbn

---

## ✨ Fitur
- Navbar fixed + responsif (hamburger menu mobile)
- Deteksi halaman aktif otomatis di navbar
- TailwindCSS CDN (tanpa build step)
- Animate.css untuk animasi masuk
- Form kontak dengan validasi PHP server-side
- Tabel portofolio dengan status badge (Lihat / BelumAda)
- Gambar fallback otomatis jika foto team tidak ada
- Footer dengan ikon sosial media

## 📦 Dependensi Eksternal (via CDN — tidak perlu install)
- [TailwindCSS](https://tailwindcss.com/)
- [Animate.css](https://animate.style/)
- [Google Fonts — Berkshire Swash + Poppins](https://fonts.google.com/)
