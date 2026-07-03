<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RooteraDatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Services
        DB::table('services')->insert([
            [
                'title'       => 'Saluran Pembuangan Mampet',
                'icon'        => 'drain',
                'description' => 'Pengerjaan profesional menggunakan alat modern tanpa harus membongkar struktur bangunan.',
                'sub_items'   => json_encode(['Saluran Kamar Mandi', 'Saluran Cuci Piring', 'Saluran Cuci Tangan']),
                'image'       => '/images/drain_service.png',
                'sort_order'  => 1,
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => 'Air Bersih & Cuci Toren',
                'icon'        => 'water',
                'description' => 'Pengerjaan profesional menggunakan alat modern tanpa harus membongkar struktur bangunan.',
                'sub_items'   => json_encode(['Kran Mampet', 'Cuci Toren / Tangki Air']),
                'image'       => '/images/water_tank_service.png',
                'sort_order'  => 2,
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => 'Instalasi Sanitary & Pipa',
                'icon'        => 'pipe',
                'description' => 'Pengerjaan profesional menggunakan alat modern tanpa harus membongkar struktur bangunan.',
                'sub_items'   => json_encode(['Instalasi Pipa Air Bersih', 'Instalasi Pipa Air Kotor', 'Instalasi Kloset Jongkok/Duduk']),
                'image'       => '/images/pipe_installation.png',
                'sort_order'  => 3,
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);

        // Coverage Areas
        $cities = [
            ['city' => 'Jabodetabek', 'province' => 'DKI Jakarta & Jawa Barat'],
            ['city' => 'Cirebon',     'province' => 'Jawa Barat'],
            ['city' => 'Semarang',    'province' => 'Jawa Tengah'],
            ['city' => 'Yogyakarta',  'province' => 'DI Yogyakarta'],
            ['city' => 'Lampung',     'province' => 'Lampung'],
            ['city' => 'Metro',       'province' => 'Lampung'],
        ];
        foreach ($cities as $i => $city) {
            DB::table('coverage_areas')->insert([
                'city'       => $city['city'],
                'province'   => $city['province'],
                'image'      => null,
                'sort_order' => $i + 1,
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Tools & Advantages
        DB::table('tools')->insert([
            [
                'title'       => 'Mesin Spiral Ridgid',
                'description' => 'Menggunakan mesin spiral Ridgid bertenaga tinggi yang mampu menembus penyumbatan paling keras di saluran pipa tanpa merusak struktur.',
                'icon'        => 'spiral',
                'image'       => '/images/drain_service.png',
                'sort_order'  => 1,
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => 'Drain Inspection Camera',
                'description' => 'Kamera inspeksi saluran canggih untuk mendiagnosis lokasi dan jenis penyumbatan secara akurat sebelum penanganan.',
                'icon'        => 'camera',
                'image'       => '/images/drain_service.png',
                'sort_order'  => 2,
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => 'Double Action Technology',
                'description' => 'Teknologi double action memungkinkan pembersihan dua arah sekaligus, menghasilkan saluran yang bersih optimal dalam waktu lebih singkat.',
                'icon'        => 'double',
                'image'       => '/images/drain_service.png',
                'sort_order'  => 3,
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'title'       => 'Metode Ramah Lingkungan',
                'description' => 'Proses pembersihan tanpa bahan kimia keras. Aman untuk keluarga, hewan peliharaan, dan lingkungan sekitar.',
                'icon'        => 'eco',
                'image'       => '/images/drain_service.png',
                'sort_order'  => 4,
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);

        // Service Sectors
        $sectors = [
            'Hunian Rumah',
            'Apartemen',
            'Ruko Bisnis',
            'Gedung Kantor',
            'Area Industri',
            'Resto & Cafe',
        ];
        $sectorIcons = ['home', 'building', 'store', 'office', 'factory', 'restaurant'];
        foreach ($sectors as $i => $sector) {
            DB::table('service_sectors')->insert([
                'name'       => $sector,
                'icon'       => $sectorIcons[$i],
                'image'      => null,
                'sort_order' => $i + 1,
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Blog Posts
        DB::table('posts')->insert([
            [
                'title'        => 'Cara Mengatasi Wastafel Mampet secara Mandiri',
                'slug'         => 'cara-mengatasi-wastafel-mampet-secara-mandiri',
                'thumbnail'    => '/images/blog_wastafel.png',
                'excerpt'      => 'Wastafel mampet adalah masalah umum yang sering terjadi. Pelajari langkah-langkah praktis yang bisa Anda lakukan sendiri sebelum memanggil teknisi profesional.',
                'content'      => '<p>Wastafel yang mampet tentu sangat mengganggu aktivitas sehari-hari. Sebelum memanggil teknisi, ada beberapa cara yang bisa Anda coba sendiri...</p><p>Pertama, coba gunakan plunger untuk mendorong penyumbatan. Kedua, periksa P-trap di bawah wastafel. Ketiga, gunakan campuran baking soda dan cuka untuk melarutkan lemak.</p><p>Jika cara-cara di atas tidak berhasil, segera hubungi ROOTERA untuk penanganan profesional dengan peralatan modern.</p>',
                'author'       => 'ROOTERA Team',
                'category'     => 'Tips & Pengetahuan',
                'is_published' => true,
                'published_at' => now(),
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'title'        => 'Penyebab Utama Pipa Rumah Tersumbat',
                'slug'         => 'penyebab-utama-pipa-rumah-tersumbat',
                'thumbnail'    => '/images/blog_wastafel.png',
                'excerpt'      => 'Tahukah Anda apa saja penyebab paling umum saluran pipa rumah menjadi tersumbat? Artikel ini mengulas penyebab utama dan cara pencegahannya.',
                'content'      => '<p>Pipa rumah yang tersumbat biasanya disebabkan oleh penumpukan lemak, rambut, sisa makanan, dan benda asing lainnya. Memahami penyebabnya adalah langkah pertama untuk pencegahan.</p><p>Lemak dan minyak masak adalah musuh utama saluran dapur. Rambut adalah penyebab terbesar di kamar mandi. Tisu basah dan sampah non-organik juga sering menjadi masalah.</p>',
                'author'       => 'ROOTERA Team',
                'category'     => 'Edukasi',
                'is_published' => true,
                'published_at' => now()->subDays(3),
                'created_at'   => now()->subDays(3),
                'updated_at'   => now()->subDays(3),
            ],
            [
                'title'        => 'Kapan Waktu yang Tepat Cuci Toren Air?',
                'slug'         => 'kapan-waktu-yang-tepat-cuci-toren-air',
                'thumbnail'    => '/images/blog_wastafel.png',
                'excerpt'      => 'Toren air yang kotor dapat menjadi sarang bakteri dan penyakit. Ketahui seberapa sering toren Anda perlu dibersihkan dan tanda-tandanya.',
                'content'      => '<p>Idealnya, toren atau tangki air bersih harus dicuci minimal 6 bulan sekali. Namun, ada beberapa tanda yang menunjukkan toren perlu segera dibersihkan meski belum mencapai 6 bulan.</p><p>Tanda-tanda tersebut antara lain: air berbau tidak sedap, warna air berubah kekuningan atau keruh, adanya lumut atau endapan, dan menurunnya tekanan air.</p>',
                'author'       => 'ROOTERA Team',
                'category'     => 'Perawatan',
                'is_published' => true,
                'published_at' => now()->subDays(7),
                'created_at'   => now()->subDays(7),
                'updated_at'   => now()->subDays(7),
            ],
        ]);
    }
}
