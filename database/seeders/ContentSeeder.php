<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\ContentCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Category
        ContentCategory::create([
            'name' => 'Kegiatan',
        ]);
        ContentCategory::create([
            'name' => 'Informasi',
        ]);

        //Content
        Content::create([
            'content_category_id' => 2,
            'title' => 'Masa Depan Energi Terbarukan: Teknologi Tenaga Surya Terbaru',
            'desc' => 'Artikel ini akan membahas teknologi terbaru dalam bidang tenaga surya yang sedang mengubah cara kita memproduksi dan menggunakan energi. Kami akan mengeksplorasi panel surya inovatif, sistem penyimpanan energi yang canggih, dan integrasi ke dalam bangunan dan kendaraan. Temukan bagaimana teknologi tenaga surya terbaru ini dapat memberikan solusi yang berkelanjutan untuk kebutuhan energi masa depan',
        ]);
        Content::create([
            'content_category_id' => 2,
            'title' => 'Keajaiban Augmented Reality (AR): Pengalaman Baru dalam Dunia Digital',
            'desc' => 'Dalam artikel ini, kami akan membahas tentang augmented reality (AR) dan dampaknya dalam berbagai industri. Kami akan menjelaskan apa itu AR, bagaimana teknologi ini bekerja, dan bagaimana ia telah menghadirkan pengalaman baru dalam gaming, edukasi, periklanan, dan lainnya. Temukan potensi AR untuk mengubah cara kita berinteraksi dengan dunia digital.',
        ]);
        Content::create([
            'content_category_id' => 2,
            'title' => 'Blockchain: Revolusi Keamanan dan Transparansi di Era Digital',
            'desc' => ' Artikel ini akan menggali teknologi blockchain dan bagaimana ia telah merevolusi keamanan dan transparansi dalam dunia digital. Kami akan menjelaskan konsep dasar blockchain, manfaatnya dalam industri keuangan, logistik, dan lainnya, serta potensinya dalam menciptakan sistem yang lebih adil dan aman. Jelajahi peran blockchain dalam mengubah cara kita melakukan transaksi dan berinteraksi di era digital.',
        ]);
        Content::create([
            'content_category_id' => 2,
            'title' => 'Kecerdasan Buatan (AI): Mengapa AI adalah Tren Terbesar di Dunia Teknologi',
            'desc' => 'Dalam artikel ini, kami akan membahas mengapa kecerdasan buatan (AI) menjadi tren terbesar di dunia teknologi saat ini. Kami akan menjelaskan apa itu AI, jenis-jenis AI yang ada, dan aplikasinya dalam berbagai industri seperti otomasi industri, pengenalan wajah, chatbot, dan lainnya. Temukan bagaimana AI telah mengubah cara kita bekerja, berinteraksi, dan membuat keputusan di berbagai sektor.',
        ]);
        Content::create([
            'content_category_id' => 2,
            'title' => 'Internet of Things (IoT): Menghubungkan Dunia di Ujung Jari Anda',
            'desc' => 'Artikel ini akan menjelaskan tentang Internet of Things (IoT) dan bagaimana teknologi ini menghubungkan perangkat di sekitar kita. Kami akan menjelajahi contoh-contoh penggunaan IoT dalam kehidupan sehari-hari, seperti rumah pintar, kota pintar, dan transportasi cerdas. Temukan bagaimana IoT membawa kenyamanan, efisiensi, dan konektivitas yang tak terbatas dalam kehidupan kita.',
        ]);
    }
}
