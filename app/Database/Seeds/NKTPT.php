<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NKTPT extends Seeder
{
    public function run()
    {
        $data = [

            //1
            [
                'soal' => 'Mampu mengevaluasi hasil pemahaman KT atas proses bisnis Entitas',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'pt',
    
            ],
    
            //2
            [
                'soal' => 'Mampu menetapkan secara tepat tujuan, lingkup, dan sasaran Pemeriksaan berdasarkan hasil analisis atas proses bisnis Entitas',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'pt'
            ],
    
            //3
            [
                'soal' => 'Mampu memberikan saran yang tepat agar KKP mendukung Temuan dan Tujuan Pemeriksaan ',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'pt'
            ],
    
            //4
            [
                'soal' => 'Mampu menjamin kebenaran pembahasaan dalam TP',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'pt'
            ],
            
       
    
    
            ];
    
    
    
            // Using Query Builder
            $this->db->table('nkt')->insertBatch($data);
    }
}
