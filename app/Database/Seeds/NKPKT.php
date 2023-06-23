<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NKPKT extends Seeder
{
    public function run()
    {
        $data = [

        //1
        [
            'soal' => 'Mampu menerapkan sistem/metode bekerja yang efektif sesuai dengan kondisi di lapangan, sehingga Tim Pemeriksa bekerja lebih efektif dan efisien, termasuk di dalamnya merancang prosedur alternatif untuk mengatasi hambatan pelaksanaan atau langkah P2.',
            'melebihi' => 100,
            'memenuhi' => 85,
            'perlu_perhatian' => 70,
            'tidak_memenuhi' => 55,
            'bagian'    => 'kt',

        ],

        //2
        [
            'soal' => 'Mampu menyelesaikan Pemeriksaan menggunakan sumber daya yang ada dengan baik walaupun dengan banyak hambatan teknis (faktor lokasi, fasilitas, geografis, kestabilan politik daerah, dan lain-lain).',
            'melebihi' => 100,
            'memenuhi' => 85,
            'perlu_perhatian' => 70,
            'tidak_memenuhi' => 55,
            'bagian'    => 'kt'
        ],

        //3
        [
            'soal' => 'Mampu menyimpulkan faktor yang merupakan penyebab utama dari beberapa permasalahan.',
            'melebihi' => 100,
            'memenuhi' => 85,
            'perlu_perhatian' => 70,
            'tidak_memenuhi' => 55,
            'bagian'    => 'kt'
        ],

        //4
        [
            'soal' => 'Mampu mengidentifikasi beberapa faktor yang merupakan penyebab timbulnya suatu pemasalahan dan keterkaitan antar faktor, dalam penyusunan TP.',
            'melebihi' => 100,
            'memenuhi' => 85,
            'perlu_perhatian' => 70,
            'tidak_memenuhi' => 55,
            'bagian'    => 'kt'
        ],
        
        //5
        [
            'soal' => 'Mampu mereviu hasil kerja AT yang tertuang dalam P2 serta memberikan solusi maupun saran terhadap langkah Pemeriksaan yang sudah dilakukan, guna memastikan kecukupan Bukti Pemeriksaan.',
            'melebihi' => 100,
            'memenuhi' => 85,
            'perlu_perhatian' => 70,
            'tidak_memenuhi' => 55,
            'bagian'    => 'kt'
        ],

        //6
        [
            'soal' => 'Mampu mereviu hasil kerja AT yang tertuang dalam P2 serta memberikan solusi maupun saran terhadap langkah Pemeriksaan yang sudah dilakukan, guna memastikan kecukupan Bukti Pemeriksaan.',
            'melebihi' => 100,
            'memenuhi' => 85,
            'perlu_perhatian' => 70,
            'tidak_memenuhi' => 55,
            'bagian'    => 'kt'
        ],

        //7
        [
            'soal' => 'Mampu menemukan solusi yang tepat dalam memecahkan masalah yang dihadapi berdasarkan wawasan dan pengetahuan yang ia miliki (contoh: prosedur alternatif).',
            'melebihi' => 100,
            'memenuhi' => 85,
            'perlu_perhatian' => 70,
            'tidak_memenuhi' => 55,
            'bagian'    => 'kt'
        ],
        
        //8
        [
            'soal' => 'Mampu mengaplikasikan teori dan pengalaman  guna menganalisis data Pemeriksaan.',
            'melebihi' => 100,
            'memenuhi' => 85,
            'perlu_perhatian' => 70,
            'tidak_memenuhi' => 55,
            'bagian'    => 'kt'
        ],
        
        //9
        [
            'soal' => 'Mampu mengomunikasikan dan memberikan gambaran secara utuh mengenai tujuan dan harapan penugasan Pemeriksaan.',
            'melebihi' => 100,
            'memenuhi' => 85,
            'perlu_perhatian' => 70,
            'tidak_memenuhi' => 55,
            'bagian'    => 'kt'
        ],
        
        //10
        [
            'soal' => 'Mampu memberikan arahan yang jelas terkait Pelaksanaan Pemeriksaan.',
            'melebihi' => 100,
            'memenuhi' => 85,
            'perlu_perhatian' => 70,
            'tidak_memenuhi' => 55,
            'bagian'    => 'kt'
        ],
        
        //11
        [
            'soal' => 'Mampu memastikan kebutuhan kerja Tim dalam Pemeriksaan terpenuhi dan mampu memotivasi Anggota Tim dalam Pemeriksaan.',
            'melebihi' => 100,
            'memenuhi' => 85,
            'perlu_perhatian' => 70,
            'tidak_memenuhi' => 55,
            'bagian'    => 'kt'
        ],
        
        //12
        [
            'soal' => 'Mampu mengantisipasi kendala-kendala yang mungkin muncul pada saat Pemeriksaan.',
            'melebihi' => 100,
            'memenuhi' => 85,
            'perlu_perhatian' => 70,
            'tidak_memenuhi' => 55,
            'bagian'    => 'kt'
        ],


        ];



        // Using Query Builder
        $this->db->table('nkp')->insertBatch($data);
    
    }
}
