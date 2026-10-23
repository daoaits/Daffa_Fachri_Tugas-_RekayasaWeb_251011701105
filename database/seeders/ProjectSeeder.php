<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Sistem Informasi Manajemen Akademik (SIMAK)',
                'description' => 'Aplikasi berbasis web untuk otomasi administrasi mahasiswa, Kartu Rencana Studi (KRS), dan rekap nilai terintegrasi.',
                'teknologi' => 'Laravel, MySQL & Bootstrap 5',
                'image' => 'project1.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Enterprise E-Commerce Platform',
                'description' => 'Platform toko online modern dengan integrasi payment gateway otomatis, katalog produk, dan optimasi SEO terpadu.',
                'teknologi' => 'Laravel 11, Livewire & AlpineJS',
                'image' => 'project2.jpg',
                'status' => 'In Progress',
            ],
            [
                'title' => 'Agile Task & Project Management',
                'description' => 'Aplikasi kolaborasi tim berbasis Kanban board untuk monitoring deadline, pembagian sprint tugas, dan efisiensi kerja.',
                'teknologi' => 'Laravel & React',
                'image' => 'project3.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Smart Digital Library Portal',
                'description' => 'Portal perpustakaan cerdas untuk pencarian e-book, manajemen sirkulasi peminjaman buku, dan sistem barcode otomatis.',
                'teknologi' => 'Laravel & Vue.js',
                'image' => 'project4.jpg',
                'status' => 'In Progress',
            ],
            [
                'title' => 'Food Order & Quick Delivery App',
                'description' => 'Aplikasi pemesanan kuliner interaktif dengan fitur live tracking driver dan pembayaran QRIS digital.',
                'teknologi' => 'Laravel REST API & React Native',
                'image' => 'project5.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Human Resource Information System (HRIS)',
                'description' => 'Sistem tata kelola SDM terpadu untuk pencatatan absensi presensi geolocation, pengajuan cuti, dan slip gaji elektronik.',
                'teknologi' => 'Laravel, Tailwind & Chart.js',
                'image' => 'project6.jpg',
                'status' => 'In Progress',
            ],
            [
                'title' => 'Warehouse & Inventory Control System',
                'description' => 'Solusi manajemen logistik pergudangan untuk mencatat stok barang masuk-keluar, alert minimum stok, dan audit inventaris.',
                'teknologi' => 'Laravel & Vue.js',
                'image' => 'project7.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Cloud Point of Sales (POS) & Analytics',
                'description' => 'Aplikasi kasir berbasis cloud dengan laporan laba-rugi realtime, manajemen multi-outlet, dan cetak struk otomatis.',
                'teknologi' => 'Laravel & React',
                'image' => 'project8.jpg',
                'status' => 'In Progress',
            ],
            [
                'title' => 'Event Ticketing & Reservation System',
                'description' => 'Platform reservasi tiket seminar, konser, dan festival dengan tiket digital berbasis QR Code scanner.',
                'teknologi' => 'Laravel & Inertia.js',
                'image' => 'project9.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Mobile Campus & Student Companion',
                'description' => 'Aplikasi pendamping mahasiswa untuk pengingat jadwal kuliah harian, notifikasi pengumuman, dan materi dosen.',
                'teknologi' => 'Flutter & Laravel API',
                'image' => 'project10.jpg',
                'status' => 'In Progress',
            ],            
        ];

        foreach ($projects as $project) {
            \App\Models\Project::create($project);
        }
    }
}
