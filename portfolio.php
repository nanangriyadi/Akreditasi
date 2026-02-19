<?php
$pageTitle = 'Portofolio - Telaah Dokumen';
include 'header.php';

/**
 * DATA SOURCE
 * Perbaikan: Semua string wajib menggunakan tanda kutip.
 * Jika 'subIndikator' kosong, maka baris tersebut dianggap sebagai Baris Judul (tanpa link).
 */
$telaahDokumen = [
    // Kelompok Indikator 1
    ['no' => 1, 'subIndikator' => '', 'name' => 'KOMPONEN 1: KURIKULUM SATUAN PENDIDIKAN', 'link' => ''],
    ['no' => 1, 'subIndikator' => '1.1.1', 'name' => 'Catatan Perkembangan Kemajuan Belajar', 'link' => '/assets/data/1.pdf'],
    ['no' => 1, 'subIndikator' => '1.1.2', 'name' => 'Dokumen Sarana Prasarana Pendukung Pelajaran', 'link' => '/assets/data/2.pdf'],
    
    // Kelompok Indikator 2
    ['no' => 2, 'subIndikator' => '', 'name' => 'KOMPONEN 2: IKLIM LINGKUNGAN BELAJAR', 'link' => ''],
    ['no' => 2, 'subIndikator' => '1.2.1', 'name' => 'Catatan Perilaku Murid & Rencana Dukungan Sosial Emosional', 'link' => '/assets/data/3.pdf'],
    ['no' => 2, 'subIndikator' => '2.1.0', 'name' => 'Laporan Bulanan Evaluasi Pembelajaran', 'link' => '/assets/data/4.pdf'],
    ['no' => 2, 'subIndikator' => '2.2.0', 'name' => 'Data Inventaris Laboratorium dan Perpustakaan', 'link' => '/assets/data/5.pdf'],
    ['no' => 2, 'subIndikator' => '2.3.0', 'name' => 'Arsip Kurikulum Operasional Satuan Pendidikan', 'link' => '/assets/data/6.pdf'],
];

// LOGIKA ROWSPAN: Menghitung berapa kali setiap nomor 'no' muncul
$counts = array_count_values(array_column($telaahDokumen, 'no'));
$displayedNo = []; // Tracker agar nomor hanya muncul sekali di kolom pertama
?>

<section class="py-10 px-[3%] bg-gray-50 min-h-screen">

    <div class="text-center mb-14 animate__animated animate__fadeIn">
        <h2 class="font-swash text-4xl font-bold drop-shadow-sm">
            Telaah <span class="text-green-600">Dokumen</span>
        </h2>
        <div class="w-20 h-1.5 bg-green-500 mx-auto mt-4 rounded-full"></div>
        <p class="text-gray-500 mt-4">Daftar portofolio dan dokumen pendukung indikator sekolah</p>
    </div>

    <div class="max-w-6xl mx-auto">
        <div class="animate__animated animate__fadeInUp">

            <div class="flex items-center gap-3 mb-6">
                <div class="bg-green-500 p-2 rounded-lg shadow-lg">
                    <span class="text-white text-xl">📄</span>
                </div>
                <h3 class="text-2xl font-extrabold text-gray-800">Daftar Portofolio</h3>
            </div>

            <div class="overflow-hidden rounded-3xl shadow-2xl border border-gray-100 bg-white">
                <table class="w-full border-collapse text-left">
                    <thead>
                        <tr class="bg-gradient-to-r from-sky-600 to-sky-500 text-white">
                            <th class="px-6 py-5 font-bold uppercase tracking-wider text-center w-20">No</th>
                            <th class="px-6 py-5 font-bold uppercase tracking-wider w-32">Sub Indikator</th>
                            <th class="px-6 py-5 font-bold uppercase tracking-wider">Uraian Dokumen</th>
                            <th class="px-6 py-5 font-bold uppercase tracking-wider text-center w-32">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <?php foreach($telaahDokumen as $row): ?>
                        <?php 
                                // Cek apakah baris ini adalah header/induk (subIndikator kosong)
                                $isHeader = empty($row['subIndikator']); 
                            ?>
                        <tr class="transition-colors <?= $isHeader ? 'bg-green-50/50' : 'hover:bg-blue-50/40' ?>">

                            <?php if (!isset($displayedNo[$row['no']])): ?>
                            <td class="px-6 py-4 font-black text-gray-400 text-center text-xl align-top border-r border-gray-50"
                                rowspan="<?= $counts[$row['no']] ?>">
                                <?= $row['no'] ?>
                            </td>
                            <?php $displayedNo[$row['no']] = true; ?>
                            <?php endif; ?>

                            <td
                                class="px-6 py-4 font-mono text-sm <?= $isHeader ? 'text-transparent' : 'text-sky-600 font-bold' ?>">
                                <?= !$isHeader ? $row['subIndikator'] : '---' ?>
                            </td>

                            <td class="px-6 py-4">
                                <?php if ($isHeader): ?>
                                <span class="text-green-700 font-extrabold text-base tracking-wide italic">
                                    <?= htmlspecialchars($row['name']) ?>
                                </span>
                                <?php else: ?>
                                <span class="text-gray-700 font-medium">
                                    <?= htmlspecialchars($row['name']) ?>
                                </span>
                                <?php endif; ?>
                            </td>

                            <td class="px-6 py-4 text-center">
                                <?php if (!$isHeader): ?>
                                <a href="<?= $row['link'] ?>" target="_blank"
                                    class="inline-flex items-center justify-center px-5 py-2 bg-green-500 hover:bg-green-600 text-white text-xs font-bold rounded-full transition-all transform hover:scale-105 shadow-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    LIHAT
                                </a>
                                <?php else: ?>
                                <span
                                    class="text-[10px] text-gray-300 font-bold uppercase tracking-widest">Header</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="mt-6 flex justify-between items-center text-gray-400 text-xs italic px-4">
                <p>* Pastikan koneksi internet stabil untuk membuka dokumen PDF.</p>
                <p>Update: <?= date('d M Y') ?></p>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>