<?php
$pageTitle = 'Portofolio - Telaah Dokumen';
include 'header.php';

/**
 * DATA SOURCE LENGKAP - PER POIN
 */
$telaahDokumen = [
    // --- INDIKATOR 1 ---
    ['no' => 1, 'subIndikator' => '', 'name' => 'KOMPONEN 1: PERKEMBANGAN BELAJAR & EMOSI', 'link' => 'assets/data/1.pdf'],
    ['no' => 1, 'subIndikator' => '1.1.1', 'name' => '1. Catatan Perkembangan Kemajuan Belajar', 'link' => 'assets/data/2.pdf'],
    ['no' => 1, 'subIndikator' => '1.1.1', 'name' => '2. Catatan Perkembangan Non Akademik', 'link' => 'assets/data/3.pdf'],
    ['no' => 1, 'subIndikator' => '1.1.1', 'name' => '3. Hasil Observasi 3-5 Menit', 'link' => 'assets/data/4.pdf'],
    ['no' => 1, 'subIndikator' => '1.1.1', 'name' => '4. Bahasa Tubuh Guru', 'link' => 'assets/data/5.pdf'],
    
    ['no' => 1, 'subIndikator' => '1.1.2', 'name' => '1. Catatan Perilaku Murid dan Rencana Dukungan Sosial Emosional', 'link' => 'assets/data/6.pdf'],
    ['no' => 1, 'subIndikator' => '1.1.2', 'name' => '2. Portofolio Perkembangan Emosi atau Perilaku Murid', 'link' => 'assets/data/7.pdf'],
    ['no' => 1, 'subIndikator' => '1.1.2', 'name' => '3. Bukti Visual Seperti Papan Emosi, Reward Board', 'link' => 'assets/data/8.pdf'],
    ['no' => 1, 'subIndikator' => '1.1.2', 'name' => '4. Chart Perilaku Positif', 'link' => 'assets/data/9.pdf'],

    ['no' => 1, 'subIndikator' => '1.1.3', 'name' => '1. RPP/PPI: Ada Strategi Refleksi, Afirmasi, Atau Fokus Pada Proses', 'link' => '#'],
    ['no' => 1, 'subIndikator' => '1.1.3', 'name' => '2. Catatan Formatif: Penilaian Berbasis Kemajuan Individual', 'link' => '#'],
    ['no' => 1, 'subIndikator' => '1.1.3', 'name' => '3. Portofolio Murid: Menampilkan Proses, Bukan Hanya Hasil Akhir', 'link' => '#'],
    ['no' => 1, 'subIndikator' => '1.1.3', 'name' => '4. Alat Kelas: Poster, Kartu Semangat, Atau Refleksi “Saya Sedang Belajar”', 'link' => '#'],

    // --- INDIKATOR 2 ---
    ['no' => 2, 'subIndikator' => '', 'name' => 'KOMPONEN 2: PENGELOLAAN PERILAKU & KONFLIK', 'link' => ''],
    ['no' => 2, 'subIndikator' => '1.2.1', 'name' => '1. Tatatertib Kelas Tertulis', 'link' => '#'],
    ['no' => 2, 'subIndikator' => '1.2.1', 'name' => '2. SOP Penanganan Perilaku', 'link' => '#'],
    ['no' => 2, 'subIndikator' => '1.2.1', 'name' => '3. Notulen Diskusi Kelas', 'link' => '#'],
    ['no' => 2, 'subIndikator' => '1.2.1', 'name' => '4. Papan Perilaku', 'link' => '#'],
    ['no' => 2, 'subIndikator' => '1.2.1', 'name' => '5. Poster / Afirmasi', 'link' => '#'],
    ['no' => 2, 'subIndikator' => '1.2.1', 'name' => '6. Bukti Keterlibatan Murid Dalam Menyusun Kesepakatan Kelas', 'link' => '#'],

    ['no' => 2, 'subIndikator' => '1.2.2', 'name' => '1. SOP Penanganan Konflik di Kelas', 'link' => '#'],
    ['no' => 2, 'subIndikator' => '1.2.2', 'name' => '2. Catatan Kejadian', 'link' => '#'],
    ['no' => 2, 'subIndikator' => '1.2.2', 'name' => '3. PPI', 'link' => '#'],
    ['no' => 2, 'subIndikator' => '1.2.2', 'name' => '4. Foto Intervensi Kejadian', 'link' => '#'],

    // --- INDIKATOR 3 ---
    ['no' => 3, 'subIndikator' => '', 'name' => 'KOMPONEN 3: ADMINISTRASI PEMBELAJARAN', 'link' => ''],
    ['no' => 3, 'subIndikator' => '1.3.1', 'name' => '1. RPP / PPI', 'link' => '#'],
    ['no' => 3, 'subIndikator' => '1.3.1', 'name' => '2. Silabus', 'link' => '#'],
    ['no' => 3, 'subIndikator' => '1.3.1', 'name' => '3. Materi', 'link' => '#'],

    ['no' => 3, 'subIndikator' => '1.3.2', 'name' => '1. Hasil Asesmen (Observasi, Catatan Harian)', 'link' => '#'],
    ['no' => 3, 'subIndikator' => '1.3.2', 'name' => '2. PPI', 'link' => '#'],
    ['no' => 3, 'subIndikator' => '1.3.2', 'name' => '3. Laporan (Harian) Kemajuan Siswa', 'link' => '#'],
    ['no' => 3, 'subIndikator' => '1.3.2', 'name' => '4. Bukti Komunikasi Dengan Orangtua', 'link' => '#'],

    // --- INDIKATOR 4 ---
    ['no' => 4, 'subIndikator' => '', 'name' => 'KOMPONEN 4: PEMBIASAAN DAN VISI MISI', 'link' => ''],
    ['no' => 4, 'subIndikator' => '1.4.1', 'name' => '1. RPP / PPI', 'link' => '#'],
    ['no' => 4, 'subIndikator' => '1.4.1', 'name' => '2. Program Pembiasaan Agama', 'link' => '#'],
    ['no' => 4, 'subIndikator' => '1.4.1', 'name' => '3. Dokumentasi Kegiatan / Foto / Video', 'link' => '#'],

    ['no' => 4, 'subIndikator' => '1.4.2', 'name' => '1. Foto SS Guru Ke Ortu Tentang Himbauan Pembiasaan Di Rumah', 'link' => '#'],
    ['no' => 4, 'subIndikator' => '1.4.2', 'name' => '2. Foto Kegiatan Pembiasaan Di Rumah', 'link' => '#'],

    ['no' => 4, 'subIndikator' => '1.4.3', 'name' => '1. KSP (Membangun Keterampilan Hidup Dan Karakter Murid)', 'link' => '#'],
    ['no' => 4, 'subIndikator' => '1.4.3', 'name' => '2. SS Visi, Misi Sekolah', 'link' => '#'],
    ['no' => 4, 'subIndikator' => '1.4.3', 'name' => '3. Program Tahunan, Program Mingguan', 'link' => '#'],
    ['no' => 4, 'subIndikator' => '1.4.3', 'name' => '4. RPP / PPI', 'link' => '#'],

    // --- INDIKATOR 5 ---
    ['no' => 5, 'subIndikator' => '', 'name' => 'KOMPONEN 5: KEPEMIMPINAN KEPALA SATUAN PENDIDIKAN', 'link' => ''],
    ['no' => 5, 'subIndikator' => '2.5.1', 'name' => '1. Kegiatan Rapat Rutin Terkait Refleksi Kinerja', 'link' => '#'],
    ['no' => 5, 'subIndikator' => '2.5.1', 'name' => '2. Undangan, Notulen Rapat', 'link' => '#'],
    ['no' => 5, 'subIndikator' => '2.5.1', 'name' => '3. Laporan Hasil Refleksi Kinerja', 'link' => '#'],

    ['no' => 5, 'subIndikator' => '2.5.2', 'name' => '1. Laporan Evaluasi Kinerja', 'link' => '#'],
    ['no' => 5, 'subIndikator' => '2.5.2', 'name' => '2. Notulen Rapat Refleksi Kinerja', 'link' => '#'],
    ['no' => 5, 'subIndikator' => '2.5.2', 'name' => '3. Dokumen Tindak Lanjut Evaluasi Kinerja', 'link' => '#'],
    ['no' => 5, 'subIndikator' => '2.5.2', 'name' => '4. Dokumen Program Pengembangan Pendidik Dan Tenaga Kependidikan', 'link' => '#'],

    ['no' => 5, 'subIndikator' => '2.5.3', 'name' => '1. Sertifikat Pendidik', 'link' => '#'],
    ['no' => 5, 'subIndikator' => '2.5.3', 'name' => '2. Program Pengembangan Profesional', 'link' => '#'],
    ['no' => 5, 'subIndikator' => '2.5.3', 'name' => '3. Hasil Refleksi Dan Evaluasi', 'link' => '#'],
    ['no' => 5, 'subIndikator' => '2.5.3', 'name' => '4. Dokumen Pelatihan Rutin', 'link' => '#'],

    ['no' => 5, 'subIndikator' => '2.5.4', 'name' => '1. Panduan Tata Kelola / Pedoman Pelaksanaan Tugas Guru Dan Tendik', 'link' => '#'],
    ['no' => 5, 'subIndikator' => '2.5.4', 'name' => '2. Peraturan Internal Tentang Penghargaan Dan Sanksi', 'link' => '#'],
    ['no' => 5, 'subIndikator' => '2.5.4', 'name' => '3. Dokumen Pelaksanaan Penghargaan / Sanksi', 'link' => '#'],
    ['no' => 5, 'subIndikator' => '2.5.4', 'name' => '4. Format Isi Penilaian Kinerja / Disiplin Kerja', 'link' => '#'],

    // --- INDIKATOR 6 ---
    ['no' => 6, 'subIndikator' => '', 'name' => 'KOMPONEN 6: VISI, MISI DAN KEMITRAAN', 'link' => ''],
    ['no' => 6, 'subIndikator' => '2.6.1', 'name' => '1. Dokumen Visi Dan Misi', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.1', 'name' => '2. Foto Sosialisasi Visi Dan Misi', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.1', 'name' => '3. Dokumen Penjabaaran Visi Dan Misi Dalam Proker', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.1', 'name' => '4. Media Komunikasi Visi Dan Misi', 'link' => '#'],

    ['no' => 6, 'subIndikator' => '2.6.2', 'name' => '1. Notulen Pertemuan Ortu', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.2', 'name' => '2. Buku Penghubung', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.2', 'name' => '3. Kegiatan Belajar Bersama Ortu', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.2', 'name' => '4. PPI', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.2', 'name' => '5. Surat Undangan', 'link' => '#'],

    ['no' => 6, 'subIndikator' => '2.6.3', 'name' => '1. Profil Kepala Satuan Pendidikan', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.3', 'name' => '2. RKT', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.3', 'name' => '3. KSP', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.3', 'name' => '4. Modul Pelajaran', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.3', 'name' => '5. PPI', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.3', 'name' => '6. Foto Kegiatan Keterampilan / Kewirausahaan', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.3', 'name' => '7. Mitra Kerja', 'link' => '#'],

    ['no' => 6, 'subIndikator' => '2.6.4', 'name' => '1. Profil Kepala Sekolah', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.4', 'name' => '2. RKT', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.4', 'name' => '3. PPI', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.4', 'name' => '4. Foto Kegiatan Keterampilan', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.4', 'name' => '5. MOU', 'link' => '#'],

    ['no' => 6, 'subIndikator' => '2.6.5', 'name' => '1. Laporan Refleksi Kinerja Dan Evaluasi', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.5', 'name' => '2. Dokumen Forum Diskusi / Evaluasi', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.5', 'name' => '3. Rekomendasi Hasil Evaluasi Dan Refleksi', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.5', 'name' => '4. Format Isi Refleksi Dan Evaluasi', 'link' => '#'],

    ['no' => 6, 'subIndikator' => '2.6.6', 'name' => '1. RKT', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.6', 'name' => '2. Hasil Evaluasi Sebelumnya', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.6', 'name' => '3. Berita Acara / Daftar Hadir Rapat Perencanaan', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.6', 'name' => '4. Matrik Skala Prioritas', 'link' => '#'],

    ['no' => 6, 'subIndikator' => '2.6.7', 'name' => '1. Dokumen Sejarah SP SLB', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.7', 'name' => '2. Arsip Foto / Perjalanan Sekolah', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.7', 'name' => '3. Dokumen Publikasi Eksternal', 'link' => '#'],
    ['no' => 6, 'subIndikator' => '2.6.7', 'name' => '4. Buku Tamu Kunjungan Dari Luar', 'link' => '#'],

    // --- INDIKATOR 7 ---
    ['no' => 7, 'subIndikator' => '', 'name' => 'KOMPONEN 7: PENGELOLAAN ANGGARAN', 'link' => ''],
    ['no' => 7, 'subIndikator' => '2.7.1', 'name' => '1. RKAS 3 Tahun Terakhir', 'link' => '#'],
    ['no' => 7, 'subIndikator' => '2.7.1', 'name' => '2. Dokumen Pertemuan Penyusunan Anggaran', 'link' => '#'],
    ['no' => 7, 'subIndikator' => '2.7.1', 'name' => '3. Skema Anggaran', 'link' => '#'],
    ['no' => 7, 'subIndikator' => '2.7.1', 'name' => '4. LPJ 2 Tahun Terakhir', 'link' => '#'],

    ['no' => 7, 'subIndikator' => '2.7.2', 'name' => '1. RKAS', 'link' => '#'],
    ['no' => 7, 'subIndikator' => '2.7.2', 'name' => '2. Tujuan Pemanfaatan Dana', 'link' => '#'],
    ['no' => 7, 'subIndikator' => '2.7.2', 'name' => '3. Dokumen Laporan Keuangan', 'link' => '#'],
    ['no' => 7, 'subIndikator' => '2.7.2', 'name' => '4. Dokumen Persetujuan Anggaran', 'link' => '#'],

    ['no' => 7, 'subIndikator' => '2.7.3', 'name' => '1. Laporan Realisasi Anggaran (SMT Dan Tahunan)', 'link' => '#'],
    ['no' => 7, 'subIndikator' => '2.7.3', 'name' => '2. Dokumen Pengesahan', 'link' => '#'],
    ['no' => 7, 'subIndikator' => '2.7.3', 'name' => '3. Dok Publikasi Laporan', 'link' => '#'],
    ['no' => 7, 'subIndikator' => '2.7.3', 'name' => '4. Saran Dan Masukan', 'link' => '#'],

    // --- INDIKATOR 8 ---
    ['no' => 8, 'subIndikator' => '', 'name' => 'KOMPONEN 8: SARANA PRASARANA', 'link' => ''],
    ['no' => 8, 'subIndikator' => '2.8.1', 'name' => '1. Kegiatan Ruang Kelas Inklusif', 'link' => '#'],
    ['no' => 8, 'subIndikator' => '2.8.1', 'name' => '2. Kegiatan Di Ruang Terapi Dan Area Transisi Sensorik', 'link' => '#'],
    ['no' => 8, 'subIndikator' => '2.8.1', 'name' => '3. Penyesuaian Lingkungan Belajar', 'link' => '#'],

    ['no' => 8, 'subIndikator' => '2.8.2', 'name' => '1. Jadwal Pemeliharaan', 'link' => '#'],
    ['no' => 8, 'subIndikator' => '2.8.2', 'name' => '2. Form Pelaporan Kerusakan', 'link' => '#'],
    ['no' => 8, 'subIndikator' => '2.8.2', 'name' => '3. Jadwal Penggunaan Fasilitas Bersama', 'link' => '#'],
    ['no' => 8, 'subIndikator' => '2.8.2', 'name' => '4. Notulen Rapat Sarpras', 'link' => '#'],

    // --- INDIKATOR 9 ---
    ['no' => 9, 'subIndikator' => '', 'name' => 'KOMPONEN 9: KURIKULUM SATUAN PENDIDIKAN', 'link' => ''],
    ['no' => 9, 'subIndikator' => '2.9.1', 'name' => '1. KTSP', 'link' => '#'],
    ['no' => 9, 'subIndikator' => '2.9.1', 'name' => '2. Silabus / ATP', 'link' => '#'],
    ['no' => 9, 'subIndikator' => '2.9.1', 'name' => '3. Jadwal Pelajaran', 'link' => '#'],
    ['no' => 9, 'subIndikator' => '2.9.1', 'name' => '4. Program Penilaian', 'link' => '#'],
    ['no' => 9, 'subIndikator' => '2.9.1', 'name' => '5. Dokumen Monitoring / Evaluasi Kurikulum', 'link' => '#'],

    ['no' => 9, 'subIndikator' => '2.9.2', 'name' => '1. Berita Acara Evaluasi Kurikulum', 'link' => '#'],
    ['no' => 9, 'subIndikator' => '2.9.2', 'name' => '2. Notulen Rapat Tim Kurikulum', 'link' => '#'],
    ['no' => 9, 'subIndikator' => '2.9.2', 'name' => '3. Instrumen Evaluasi Kurikulum', 'link' => '#'],
    ['no' => 9, 'subIndikator' => '2.9.2', 'name' => '4. Dokumen Revisi KSP, PPI / RPP', 'link' => '#'],
    ['no' => 9, 'subIndikator' => '2.9.2', 'name' => '5. Kalender Akademik', 'link' => '#'],

    // --- INDIKATOR 10 ---
    ['no' => 10, 'subIndikator' => '', 'name' => 'KOMPONEN 10: PEMBELAJARAN INKLUSIF', 'link' => ''],
    ['no' => 10, 'subIndikator' => '3.10.1', 'name' => '1. RPP / PPI', 'link' => '#'],
    ['no' => 10, 'subIndikator' => '3.10.1', 'name' => '2. Modul Ajar Tematik / LK', 'link' => '#'],
    ['no' => 10, 'subIndikator' => '3.10.1', 'name' => '3. Program Pembiasaan / Kegiatan', 'link' => '#'],
    ['no' => 10, 'subIndikator' => '3.10.1', 'name' => '4. Dokumen Praktek Inklusif', 'link' => '#'],

    ['no' => 10, 'subIndikator' => '3.10.2', 'name' => '1. Jadwal Kegiatan Keagamaan Sekolah', 'link' => '#'],
    ['no' => 10, 'subIndikator' => '3.10.2', 'name' => '2. Pemetaan Agama Peserta Didik', 'link' => '#'],
    ['no' => 10, 'subIndikator' => '3.10.2', 'name' => '3. PPI / RPP Agama', 'link' => '#'],
    ['no' => 10, 'subIndikator' => '3.10.2', 'name' => '4. Peraturan Sekolah', 'link' => '#'],
    ['no' => 10, 'subIndikator' => '3.10.2', 'name' => '5. Dokumen Kegiatan Hari Besar Agama', 'link' => '#'],

    // --- INDIKATOR 11 ---
    ['no' => 11, 'subIndikator' => '', 'name' => 'KOMPONEN 11: ANTI PERUNDUNGAN', 'link' => ''],
    ['no' => 11, 'subIndikator' => '3.11.1', 'name' => '1. Kebijakan Sekolah Anti Perundungan', 'link' => '#'],
    ['no' => 11, 'subIndikator' => '3.11.1', 'name' => '2. SK Tim TPPK', 'link' => '#'],
    ['no' => 11, 'subIndikator' => '3.11.1', 'name' => '3. Prosedur Penanganan Kekerasan', 'link' => '#'],
    ['no' => 11, 'subIndikator' => '3.11.1', 'name' => '4. Dokumentasi Kegiatan Edukasi Anti Bullying', 'link' => '#'],
    ['no' => 11, 'subIndikator' => '3.11.1', 'name' => '5. Catatan Kasus', 'link' => '#'],

    ['no' => 11, 'subIndikator' => '3.11.2', 'name' => '1. Sertifikat Pelatihan Guru / Staf', 'link' => '#'],
    ['no' => 11, 'subIndikator' => '3.11.2', 'name' => '2. Modul / SOP Penanganan Kekerasan', 'link' => '#'],
    ['no' => 11, 'subIndikator' => '3.11.2', 'name' => '3. PPI Muatan Karakter', 'link' => '#'],
    ['no' => 11, 'subIndikator' => '3.11.2', 'name' => '4. Kegiatan Tematik Siswa', 'link' => '#'],
    ['no' => 11, 'subIndikator' => '3.11.2', 'name' => '5. Jurnal Pendidik / Refleksi', 'link' => '#'],

    // --- INDIKATOR 12 ---
    ['no' => 12, 'subIndikator' => '', 'name' => 'KOMPONEN 12: KESELAMATAN & KESEHATAN', 'link' => ''],
    ['no' => 12, 'subIndikator' => '3.12.1', 'name' => '1. Dokumen Audit Bangunan', 'link' => '#'],
    ['no' => 12, 'subIndikator' => '3.12.1', 'name' => '2. Peta Evaluasi / Titik Kumpul', 'link' => '#'],
    ['no' => 12, 'subIndikator' => '3.12.1', 'name' => '3. Simulasi Evakuasi Bencana', 'link' => '#'],
    ['no' => 12, 'subIndikator' => '3.12.1', 'name' => '4. SOP Keselamatan', 'link' => '#'],
    ['no' => 12, 'subIndikator' => '3.12.1', 'name' => '5. Catatan / Buku Kerusakan / Perbaikan Sarpras', 'link' => '#'],

    ['no' => 12, 'subIndikator' => '3.12.2', 'name' => '1. Sertifikat Pelatihan P3K Untuk Pendidik', 'link' => '#'],
    ['no' => 12, 'subIndikator' => '3.12.2', 'name' => '2. SOP Pertolongan Pertama', 'link' => '#'],
    ['no' => 12, 'subIndikator' => '3.12.2', 'name' => '3. Inventaris P3K', 'link' => '#'],
    ['no' => 12, 'subIndikator' => '3.12.2', 'name' => '4. Kemitraan', 'link' => '#'],
    ['no' => 12, 'subIndikator' => '3.12.2', 'name' => '5. Catatan Pelayanan UKS', 'link' => '#'],

    // --- INDIKATOR 13 ---
    ['no' => 13, 'subIndikator' => '', 'name' => 'KOMPONEN 13: KESEHATAN FISIK & REPRODUKSI', 'link' => ''],
    ['no' => 13, 'subIndikator' => '3.13.1', 'name' => '1. Program Kebugaran', 'link' => '#'],
    ['no' => 13, 'subIndikator' => '3.13.1', 'name' => '2. RPP / PPI Bermuatan Program Kebugaran, PHBS, Keamanan Pangan Di SLB', 'link' => '#'],

    ['no' => 13, 'subIndikator' => '3.13.2', 'name' => '1. Silabus / RPP, PPI', 'link' => '#'],
    ['no' => 13, 'subIndikator' => '3.13.2', 'name' => '2. Jadwal Pelatihan Pendidik', 'link' => '#'],
    ['no' => 13, 'subIndikator' => '3.13.2', 'name' => '3. Dokumen BK Oleh Tenaga Khusus / Guru Kelas', 'link' => '#'],
    ['no' => 13, 'subIndikator' => '3.13.2', 'name' => '4. Ruang Istirahat Guru', 'link' => '#'],
    ['no' => 13, 'subIndikator' => '3.13.2', 'name' => '5. SOP Penanganan Krisis Emosional Siswa', 'link' => '#'],

    ['no' => 13, 'subIndikator' => '3.13.3', 'name' => '1. PPI / RPP Kesehatan Reproduksi Dan Adiksi', 'link' => '#'],
    ['no' => 13, 'subIndikator' => '3.13.3', 'name' => '2. Foto Simulasi Kegiatan Kesehatan Reproduksi', 'link' => '#'],
    ['no' => 13, 'subIndikator' => '3.13.3', 'name' => '3. Buku Pengayaan', 'link' => '#'],
    ['no' => 13, 'subIndikator' => '3.13.3', 'name' => '4. MOU Dengan Orangtua', 'link' => '#'],
    ['no' => 13, 'subIndikator' => '3.13.3', 'name' => '5. Kegiatan Ortu Dan Sekolah', 'link' => '#'],
    ['no' => 13, 'subIndikator' => '3.13.3', 'name' => '6. SS Grup WA Ortu', 'link' => '#'],

    // --- INDIKATOR 14 ---
    ['no' => 14, 'subIndikator' => '', 'name' => 'KOMPONEN 14: KETERAMPILAN & PASCA SEKOLAH', 'link' => ''],
    ['no' => 14, 'subIndikator' => '4.14.1', 'name' => '1. PPI', 'link' => '#'],
    ['no' => 14, 'subIndikator' => '4.14.1', 'name' => '2. Silabus / RPP', 'link' => '#'],
    ['no' => 14, 'subIndikator' => '4.14.1', 'name' => '3. Rubrik Penilaian Hidup', 'link' => '#'],
    ['no' => 14, 'subIndikator' => '4.14.1', 'name' => '4. Portofolio Hasil Karya Siswa Dan Aktivitasnya', 'link' => '#'],
    ['no' => 14, 'subIndikator' => '4.14.1', 'name' => '5. Foto Kegiatan Praktik Lapangan', 'link' => '#'],

    ['no' => 14, 'subIndikator' => '4.14.2', 'name' => '1. PPI', 'link' => '#'],
    ['no' => 14, 'subIndikator' => '4.14.2', 'name' => '2. Foto Kegiatan Pembiasaan Sosial Budaya', 'link' => '#'],
    ['no' => 14, 'subIndikator' => '4.14.2', 'name' => '3. Foto Kegiatan Keterlibatan Masyarakat', 'link' => '#'],
    ['no' => 14, 'subIndikator' => '4.14.2', 'name' => '4. Catatan Refleksi Kegiatan Sosial', 'link' => '#'],

    ['no' => 14, 'subIndikator' => '4.14.3', 'name' => '1. Piagam Pelatihan / RPP Keterampilan', 'link' => '#'],
    ['no' => 14, 'subIndikator' => '4.14.3', 'name' => '2. MOU Dengan DUDI', 'link' => '#'],
    ['no' => 14, 'subIndikator' => '4.14.3', 'name' => '3. Undangan Pelatih Dari Ortu', 'link' => '#'],
    ['no' => 14, 'subIndikator' => '4.14.3', 'name' => '4. Portofolio Keterampilan Siswa', 'link' => '#'],
    ['no' => 14, 'subIndikator' => '4.14.3', 'name' => '5. Data Alumni', 'link' => '#'],
];

$counts = array_count_values(array_column($telaahDokumen, 'no'));
$displayedNo = [];
$lastSubIndikator = ''; // Variabel bantu untuk mendeteksi perubahan sub-indikator
?>

<section class="py-10 px-[3%] bg-gray-50 min-h-screen">
    <div class="text-center mb-14">
        <h2 class="text-4xl font-bold italic">Telaah <span class="text-green-600">Dokumen</span></h2>
        <div class="w-24 h-1 bg-green-500 mx-auto mt-2"></div>
    </div>

    <div class="max-w-6xl mx-auto overflow-hidden rounded-xl shadow-xl border bg-white">
        <table class="w-full border-collapse text-left">
            <thead>
                <tr class="bg-sky-600 text-white font-bold uppercase text-sm">
                    <th class="px-6 py-4 text-center border-r border-sky-700 w-20">No</th>
                    <th class="px-6 py-4 w-40 border-r border-sky-700">Sub Indikator</th>
                    <th class="px-6 py-4">Uraian Dokumen Bukti Fisik</th>
                    <th class="px-6 py-4 text-center w-32">Link</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($telaahDokumen as $row): ?>
                <?php 
                    $isHeader = empty($row['subIndikator']);
                    // Logika Pembatas: Jika subIndikator berubah dari baris sebelumnya, beri border top
                    $hasTopBorder = (!$isHeader && $lastSubIndikator !== $row['subIndikator'] && !empty($lastSubIndikator)) ? 'border-t-4 border-gray-300' : '';
                    $lastSubIndikator = $row['subIndikator'];
                ?>

                <tr
                    class="transition-all <?= $isHeader ? ' text-green-800' : 'hover:bg-sky-50' ?> <?= $hasTopBorder ?>">

                    <?php if (!isset($displayedNo[$row['no']])): ?>
                    <td class="px-6 py-4 font-bold text-center text-xl align-top border-r border-gray-200"
                        rowspan="<?= $counts[$row['no']] ?>">
                        <?= $row['no'] ?>
                    </td>
                    <?php $displayedNo[$row['no']] = true; ?>
                    <?php endif; ?>

                    <td
                        class="px-6 py-4 font-mono text-sm border-r border-gray-100 <?= $isHeader ? 'text-green-600' : 'text-sky-600 font-bold' ?>">
                        <?= !$isHeader ? $row['subIndikator'] : '' ?>
                    </td>

                    <td class="px-6 py-4">
                        <?php if ($isHeader): ?>
                        <span class="font-bold tracking-widest uppercase">
                            <?= htmlspecialchars($row['name']) ?>
                        </span>
                        <?php else: ?>
                        <span class="text-gray-700"><?= htmlspecialchars($row['name']) ?></span>
                        <?php endif; ?>
                    </td>

                    <td class="px-6 py-4 text-center">
                        <?php if (!$isHeader): ?>
                        <a href="<?= $row['link'] ?>" target="_blank"
                            class="inline-block px-8 py-1 bg-green-500 hover:bg-green-700 text-white text-xs font-bold rounded shadow-sm">
                            Buka Link
                        </a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?php include 'footer.php'; ?>
