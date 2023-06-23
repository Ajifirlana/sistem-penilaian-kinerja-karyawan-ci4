<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NKTKT extends Seeder
{
    public function run()
    {
        $data = [

            //1
            [
                'soal' => 'Mampu mengevaluasi hasil pemahaman AT atas proses bisnis Entitas',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'kt',
    
            ],
    
            //2
            [
                'soal' => 'Mampu mengusulkan secara tepat tujuan, lingkup, dan sasaran Pemeriksaan berdasarkan hasil analisis atas proses bisnis Entitas',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'kt'
            ],
    
            //3
            [
                'soal' => 'Mampu mengidentifikasi kekuatan dan kelemahan serta potensi permasalahan pada proses bisnis Entitas',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'kt'
            ],
    
            //4
            [
                'soal' => 'Mampu mengevaluasi bahwa kegiatan pengumpulan data yang dilakukan  sudah  sesuai  dengan Program  Pemeriksaan ',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'kt'
            ],
            
            //5
            [
                'soal' => 'Mampu mengevaluasi bahwa data yang dikumpulkan mendukung kecukupan dan keandalan Bukti Pemeriksaan',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'kt'
            ],
    
            //6
            [
                'soal' => 'Mampu mengevaluasi apakah Bukti Pemeriksaan yang diperoleh melalui kegiatan pengumpulan data telah menjawab Tujuan Pemeriksaan',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'kt'
            ],
    
            //7
            [
                'soal' => 'Mampu mengevaluasi apakah kegiatan pengolahan data sudah dilakukan sesuai dengan Program Pemeriksaan',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'kt'
            ],
            
            //8
            [
                'soal' => 'Mampu mengevaluasi apakah hasil pengolahan data mendukung kecukupan dan keandalan Bukti Pemeriksaan',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'kt'
            ],
            
            //9
            [
                'soal' => 'Mampu mengevaluasi apakah Bukti Pemeriksaan yang diperoleh melalui  kegiatan  pengolahan  data  mampu  menjawab  Tujuan Pemeriksaan',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'kt'
            ],
            
            //10
            [
                'soal' => 'Mampu mereviu kesesuaian KKP Anggota Tim dengan prosedur Pemeriksaan pada saat Pemeriksaan',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'kt'
            ],
            
            //11
            [
                'soal' => 'Mampu segera memperbaiki/melengkapi KKP sesuai arahan Pengendali Teknis dan mendokumentasikan proses reviu',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'kt'
            ],
            
            //12
            [
                'soal' => 'Mampu mereviu kecukupan, relevansi, dan keandalan bukti pendukung dan akurasi perhitungan matematis',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'kt'
            ],
                        
            //13
            [
                'soal' => 'Mampu mereviu kelogisan substansi, kebenaran matematis, dan  akurasi  angka  dalam  konsep  Temuan Pemeriksaan',
                'melebihi' => 100,
                'memenuhi' => 85,
                'perlu_perhatian' => 70,
                'tidak_memenuhi' => 55,
                'bagian'    => 'kt'
            ],
    
    
            ];
    
    
    
            // Using Query Builder
            $this->db->table('nkt')->insertBatch($data);
        
        
    }
}
