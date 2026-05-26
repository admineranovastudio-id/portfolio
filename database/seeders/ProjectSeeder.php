<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'slug' => 'barly-vision',
            'num' => '01',
            'title' => 'Barly Vision',
            'category' => 'E-Commerce',
            'year' => '2023',
            'role' => 'Full-Stack Developer',
            'description' => 'Platform e-commerce lengkap untuk Barly Vision — usaha penjualan CCTV dan jasa instalasi — dilengkapi admin CMS berbasis Filament dan sistem manajemen pesanan terintegrasi.',
            'tech' => ['Laravel', 'MySQL', 'Filament PHP', 'Tailwind CSS'],
            'challenges' => [
                [
                    'title' => 'Manajemen Katalog Kompleks',
                    'description' => 'Produk CCTV memiliki banyak spesifikasi teknis. Solusi: Menggunakan Filament PHP untuk membangun admin panel kustom yang memudahkan pemilik toko memasukkan data spesifikasi secara terstruktur.',
                ],
                [
                    'title' => 'Integrasi Jasa Instalasi',
                    'description' => 'Selain beli produk, user bisa menyewa jasa instalasi. Solusi: Membuat alur checkout khusus yang mencakup jadwal instalasi dan biaya tambahan otomatis.',
                ],
            ],
            'outcomes' => [
                'Sistem pemesanan yang efisien dan terekam dalam database terpusat.',
                'Dashboard analitik untuk melihat total penjualan bulanan.',
                'Peningkatan profesionalitas bisnis di mata pelanggan.',
            ],
            'featured' => true,
        ]);

        Project::create([
            'slug' => 'eranovastudio',
            'num' => '02',
            'title' => 'Eranovastudio',
            'category' => 'Landing Page',
            'year' => '2024',
            'role' => 'Frontend Developer',
            'description' => 'Website company profile dan portfolio digital untuk studio kreatif, didesain untuk menonjolkan karya visual dengan performa yang cepat dan animasi yang halus.',
            'tech' => ['HTML5', 'CSS3', 'JavaScript'],
            'challenges' => [
                [
                    'title' => 'Performa Gambar Berat',
                    'description' => 'Portfolio studio memuat banyak gambar beresolusi tinggi. Solusi: Implementasi lazy loading dan format WebP untuk mengurangi waktu muat tanpa mengorbankan kualitas visual.',
                ],
                [
                    'title' => 'Animasi yang Halus di Semua Perangkat',
                    'description' => 'Memastikan animasi berjalan smooth di perangkat low-end. Solusi: Menggunakan CSS transforms dan will-change property untuk hardware-accelerated rendering.',
                ],
            ],
            'outcomes' => [
                'Identitas online yang solid dan artistik bagi Eranovastudio.',
                'Tampilan portfolio yang menonjolkan karya visual dengan presentasi premium.',
                'Waktu muat halaman di bawah 2 detik meskipun banyak aset gambar.',
            ],
            'featured' => false,
        ]);

        Project::create([
            'slug' => 'coming-soon',
            'num' => '03',
            'title' => 'Coming Soon',
            'category' => 'Web App',
            'year' => '2025',
            'role' => 'Developer',
            'description' => 'Proyek akademik atau latihan lain sebagai pelengkap portofolio.',
            'tech' => ['PHP', 'MySQL'],
            'challenges' => [],
            'outcomes' => [],
            'featured' => false,
        ]);
    }
}
