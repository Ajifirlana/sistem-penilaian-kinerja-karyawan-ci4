<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NKPPT extends Seeder
{
    public function run()
    {
        $data = [

            //1
            [
                'soal' => 'Mampu mengarahkan dan menyimpulkan Temuan Pemeriksaan secara valid, terstruktur, dan sistematis',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'pt',
    
            ],
    
            //2
            [
                'soal' => 'Mampu merangkum informasi yang kompleks menjadi sebuah kesimpulan yang sederhana dan mudah dipahami oleh orang lain',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'pt'
            ],
    
            //3
            [
                'soal' => 'Mampu memberikan arahan secara teknis dan rinci kepada Ketua Tim agar menerapkan suatu sistem/metode bekerja yang efektif sesuai dengan kondisi di lapangan sehingga Tim Pemeriksa dapat bekerja lebih efektif, efisien, dan/atau melebihi target dari yang ditetapkan dalam Program Pemeriksaan.',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'pt'
            ],
    
            //4
            [
                'soal' => 'Mampu memantau penyelesaian penugasan Tim Pemeriksa secara periodik dan memberikan masukan jika terjadi hambatan teknis (faktor lokasi, fasilitas, alam, kestabilan politik daerah, dan lain-lain)',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'pt'
            ],
            
            //5
            [
                'soal' => 'Mampu memahami dan mengarahkan Tim mengenai psikologi audit agar dapat menyesuaikan dengan karakter Entitas',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'pt'
            ],
    
            //6
            [
                'soal' => 'Mereviu materi penyampaian Hasil Pemeriksaan yang disusun oleh KT dengan memperhatikan latar belakang Entitas',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'pt'
            ],
    
            //7
            [
                'soal' => 'Mampu mengarahkan materi penyampaian Hasil Pemeriksaan sesuai dengan tujuan dan harapan penugasan',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'pt'
            ],
            
            //8
            [
                'soal' => 'Mampu memprediksi tanggapan dari Auditee dan mengarahkan Tim Pemeriksa untuk dapat mengantisipasi reaksi yang muncul',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'pt'
            ],
            
            //9
            [
                'soal' => 'Mampu memberikan penjelasan yang jelas dan bersikap wajar serta meyakinkan dalam menanggapi sanggahan dari Auditee dan meyakinkan Entitas atas  Temuan Pemeriksaan',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'pt'
            ],
            
            //10
            [
                'soal' => 'Mampu mengomunikasikan dan memberikan gambaran secara utuh mengenai tujuan dan harapan penugasan Pemeriksaan kepada Tim melalui, diskusi 2 (dua) arah',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'pt'
            ],
            
            //11
            [
                'soal' => 'Mampu memotivasi Tim Pemeriksaan dalam Pelaksanaan Pemeriksaan untuk mencapai tujuan dan harapan penugasan',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'pt'
            ],
            
            //12
            [
                'soal' => 'Mengantisipasi kendala-kendala yang akan dihadapi Tim Pemeriksaan dalam pelaksanaan Pemeriksaan dan kebutuhan Tim terpenuhi',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'pt'
            ],
                        
    
    
            ];
    
    
    
            // Using Query Builder
            $this->db->table('nkp')->insertBatch($data);
    }
}
