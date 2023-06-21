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
            'title'     => 'Masa Depan Energi Terbarukan: Teknologi Tenaga Surya Terbaru',
            'desc'      => 'Artikel ini akan membahas teknologi terbaru dalam bidang tenaga surya yang sedang mengubah cara kita memproduksi dan menggunakan energi. Kami akan mengeksplorasi panel surya inovatif, sistem penyimpanan energi yang canggih, dan integrasi ke dalam bangunan dan kendaraan. Temukan bagaimana teknologi tenaga surya terbaru ini dapat memberikan solusi yang berkelanjutan untuk kebutuhan energi masa depan',
            'title_en'  => 'The Future of Renewable Energy: The Latest Solar Technology',
            'desc_en'   => 'This article will discuss the latest technology in the field of solar power that are changing the way we produce and use energy. We will explore innovative solar panels, state-of-the-art energy storage systems, and integration into buildings and vehicles. Discover how the latest solar power technology it can provide sustainable solutions to future energy needs',
        ]);
        Content::create([
            'content_category_id' => 2,
            'title'     => 'Keajaiban Augmented Reality (AR): Pengalaman Baru dalam Dunia Digital',
            'desc'      => 'Dalam artikel ini, kami akan membahas tentang augmented reality (AR) dan dampaknya dalam berbagai industri. Kami akan menjelaskan apa itu AR, bagaimana teknologi ini bekerja, dan bagaimana ia telah menghadirkan pengalaman baru dalam gaming, edukasi, periklanan, dan lainnya. Temukan potensi AR untuk mengubah cara kita berinteraksi dengan dunia digital.',
            'title_en'  => 'Augmented Reality (AR) Magic: A New Experience in the Digital World',
            'desc_en'   => 'In this article, we will talk about augmented reality (AR) and its impact in various industries. We will explain what AR is, how this technology works, and how it has brought new experiences to gaming, education, advertising and more. Discover the potential of AR to change the way we interact with the digital world'
        ]);
        Content::create([
            'content_category_id' => 2,
            'title'     => 'Blockchain: Revolusi Keamanan dan Transparansi di Era Digital',
            'desc'      => 'Artikel ini akan menggali teknologi blockchain dan bagaimana ia telah merevolusi keamanan dan transparansi dalam dunia digital. Kami akan menjelaskan konsep dasar blockchain, manfaatnya dalam industri keuangan, logistik, dan lainnya, serta potensinya dalam menciptakan sistem yang lebih adil dan aman. Jelajahi peran blockchain dalam mengubah cara kita melakukan transaksi dan berinteraksi di era digital.',
            'title_en'  => 'Blockchain: Security and Transparency Revolution in the Digital Age',
            'desc_en'   => 'This article will explore blockchain technology and how it has revolutionized security and transparency in the digital world. We will explain the basic concepts of blockchain, its benefits in the financial, logistics and other industries, and its potential in creating a more equitable and secure system. Explore the role of blockchain in changing the way we transact and interact in the digital age.'
        ]);
        Content::create([
            'content_category_id' => 2,
            'title'     => 'Kecerdasan Buatan (AI): Mengapa AI adalah Tren Terbesar di Dunia Teknologi',
            'desc'      => 'Dalam artikel ini, kami akan membahas mengapa kecerdasan buatan (AI) menjadi tren terbesar di dunia teknologi saat ini. Kami akan menjelaskan apa itu AI, jenis-jenis AI yang ada, dan aplikasinya dalam berbagai industri seperti otomasi industri, pengenalan wajah, chatbot, dan lainnya. Temukan bagaimana AI telah mengubah cara kita bekerja, berinteraksi, dan membuat keputusan di berbagai sektor.',
            'title_en'  => 'Artificial Intelligence (AI): Why AI is the Biggest Trend in Tech',
            'desc_en'   => "In this article, we'll explore why artificial intelligence (AI) is the biggest trend in tech today. We will explain what AI is, the types of AI that exist, and their applications in various industries such as industrial automation, facial recognition, chatbots, and more. Discover how AI has changed the way we work, interact and make decisions in various sectors.",
        ]);
        Content::create([
            'content_category_id' => 2,
            'title'     => 'Internet of Things (IoT): Menghubungkan Dunia di Ujung Jari Anda',
            'desc'      => 'Artikel ini akan menjelaskan tentang Internet of Things (IoT) dan bagaimana teknologi ini menghubungkan perangkat di sekitar kita. Kami akan menjelajahi contoh-contoh penggunaan IoT dalam kehidupan sehari-hari, seperti rumah pintar, kota pintar, dan transportasi cerdas. Temukan bagaimana IoT membawa kenyamanan, efisiensi, dan konektivitas yang tak terbatas dalam kehidupan kita.',
            'title_en'  => 'Internet of Things (IoT): Connecting the World at Your Fingertips',
            'desc_en'   => 'This article will explain about the Internet of Things (IoT) and how this technology connects the devices around us. We will explore examples of using IoT in everyday life, such as smart homes, smart cities, and smart transportation. Discover how IoT brings convenience, efficiency and boundless connectivity to our lives.'
        ]);
    }
}
