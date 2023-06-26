<?php

namespace App\Controllers;

use App\Models\KtModel;
use App\Models\NkpModel;
use App\Models\NktModel;
use App\Models\Bimbingan;
use App\Models\NkppModel;
use App\Models\NKPATModel;
use App\Models\NKPKTModel;
use App\Models\NKTATModel;
use App\Models\NKTKTModel;
use App\Models\SasaranATModel;
use App\Models\SasaranKTModel;
use App\Controllers\BaseController;

class KTController extends BaseController
{

    public function index($id)
    {
        $ktModel = new KtModel();

        $kt = $ktModel->find($id);

        $data = [
            'kt' => $kt
        ];

        return view("kt/index", $data);
    }

    //BImbingan
    public function BimbinganView()
    {
        $bimbinganModel = new Bimbingan();
        $bimbingan = $bimbinganModel->getKT();

        $data = [
            'bimbingan' => $bimbingan
        ];

        return view('kt/bimbingan', $data);
    }

    public function CreateBimbingan()
    {
        return view('kt/create_bimbingan');
    }

    public function saveBimbingan()
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'kendala1' => 'required',
            'kendala2' => 'required',

        ])) {
            return redirect()->to('/kt/create_bimbingan');
        }
        $bimbinganModel = new Bimbingan();
        $data1 = [
            'bimbingan_satu' => $this->request->getPost('kendala1'),
            'bimbingan_dua' => $this->request->getPost('kendala2'),
            'nama' => $this->request->getPost('nama'),
            'periode' => $this->request->getPost('periode'),
            'nip' => $this->request->getPost('nip'),
            'bagian' => "kt",
            'status' => "Proses",

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $bimbinganModel->protect(false)
            ->save($data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/kt/bimbingan');
    }

    public function DetailBimbingan($id)
    {
        $bimbinganModel = new Bimbingan();
        $bimbingan = $bimbinganModel->find($id);

        $data = [
            'bimbingan' => $bimbingan
        ];

        return view('kt/detail_bimbingan', $data);
    }

    public function EditBimbingan($id)
    {
        $bimbinganModel = new Bimbingan();
        $bimbingan = $bimbinganModel->find($id);

        $data = [
            'bimbingan' => $bimbingan,

        ];
        return view('kt/edit_bimbingan', $data);
    }

    public function updateBimbingan($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'kendala1' => 'required',
            'kendala2' => 'required',

        ])) {
            return redirect()->to('/kt/edit_bimbingan/' . $id);
        }
        $bimbinganModel = new Bimbingan();
        $data1 = [
            'bimbingan_satu' => $this->request->getPost('kendala1'),
            'bimbingan_dua' => $this->request->getPost('kendala2'),
            'nama' => $this->request->getPost('nama'),
            'periode' => $this->request->getPost('periode'),
            'nip' => $this->request->getPost('nip'),
            'bagian' => "kt",
            'status' => "Proses",

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $bimbinganModel->protect(false)
            ->update($id, $data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/kt/detail_bimbingan/' . $id);
    }

    public function deleteBimbingan($id)
    {
        $bimbingan = new Bimbingan();
        $bimbingan->delete($id);


        return redirect()->to('/kt/bimbingan');
    }

    //NKP
    public function NKPView()
    {
        $nkpKTModel = new NKPKTModel();
        $nkpKT = $nkpKTModel->findAll();

        $data = [
            'nkpKT' => $nkpKT
        ];
        return view('kt/nkp', $data);
    }

    public function CreateNKP()
    {
        $nkpModel = new NkpModel();
        $nkp = $nkpModel->getKT();

        $data = [
            'nkp' => $nkp,

        ];
        return view('kt/create_nkp', $data);
    }

    public function saveNKPKT()
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'periode' => 'required',


        ])) {
            return redirect()->to('/kt/create_nkp');
        }

        $no = 1;
        $no1 = $this->request->getPost('nilai' . '' . $no) * 0.5;
        $no2 = $this->request->getPost('nilai' . '' . $no + 1) * 0.5;
        $total1 = $no1 + $no2;
        $total1 = $total1 * 0.2;

        $no3 = $this->request->getPost('nilai' . '' . $no + 2) * 0.4;
        $no4 = $this->request->getPost('nilai' . '' . $no + 3) * 0.6;
        $total2 = $no3 + $no4;
        $total2 = $total2 * 0.2;

        $no5 = $this->request->getPost('nilai' . '' . $no + 4) * 0.5;
        $no6 = $this->request->getPost('nilai' . '' . $no + 5) * 0.5;
        $total3 = $no5 + $no6;
        $total3 = $total3 * 0.2;

        $no7 = $this->request->getPost('nilai' . '' . $no + 6) * 0.4;
        $no8 = $this->request->getPost('nilai' . '' . $no + 7) * 0.6;
        $total4 = $no7 + $no8;
        $total4 = $total4 * 0.2;

        $no9 = $this->request->getPost('nilai' . '' . $no + 8) * 0.25;
        $no10 = $this->request->getPost('nilai' . '' . $no + 9) * 0.25;
        $no11 = $this->request->getPost('nilai' . '' . $no + 10) * 0.25;
        $no12 = $this->request->getPost('nilai' . '' . $no + 11) * 0.25;
        $total5 = $no9 + $no10 + $no11 + $no12;
        $total5 = $total5 * 0.2;

        $nkp = $total1 + $total2 + $total3 + $total4 + $total5;

        $nkpKTModel = new NKPKTModel();
        $nkppModel = new NkppModel();

        $data = [
            'nilai_nkp' => $nkp,
            'nilai' => $nkp,
            'periode' => $this->request->getPost('periode'),
            'status' => "Pending",
            'nama_kt' => $this->request->getPost('nama'),
            'nip_kt' => $this->request->getPost('nip')

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];

        $nilai_kinerja = $nkp * 20 / 100;
        $data2 = [
            'nilai_nkp' => $nkp,
            'nilai_kinerja_nkp' => $nilai_kinerja,
            'periode' => $this->request->getPost('periode'),
            'status' => "Pending",
            'bagian' => "kt",
            'nip' => $this->request->getPost('nip')



        ];

        $nkpKTModel->protect(false)->save($data);
        $nkppModel->protect(false)->save($data2);



        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/kt/nkp');
    }

    public function DetailNKP($id)
    {
        $nkpKTModel = new NKPKTModel();
        $nkp = $nkpKTModel->find($id);
        $nkpModel = new NkpModel();
        $soal = $nkpModel->getKT();
        $data = [
            'nkp' => $nkp,
            'soal' => $soal

        ];
        return view('kt/detail_nkp', $data);
    }

    public function EditNKP($id)
    {
        $nkpKTModel = new NKPKTModel();
        $nkp = $nkpKTModel->find($id);
        $nkpModel = new NkpModel();
        $soal = $nkpModel->getKT();

        $data = [
            'nkp' => $nkp,
            'soal' => $soal

        ];
        return view('kt/edit_nkp', $data);
    }

    public function updateNKP($id)
    {
        if (!$this->validate([
            'periode' => 'required',


        ])) {
            return redirect()->to('/kt/edit_nkp/' . $id);
        }

        $no = 1;
        $no1 = $this->request->getPost('nilai' . '' . $no) * 0.5;
        $no2 = $this->request->getPost('nilai' . '' . $no + 1) * 0.5;
        $total1 = $no1 + $no2;
        $total1 = $total1 * 0.2;

        $no3 = $this->request->getPost('nilai' . '' . $no + 2) * 0.4;
        $no4 = $this->request->getPost('nilai' . '' . $no + 3) * 0.6;
        $total2 = $no3 + $no4;
        $total2 = $total2 * 0.2;

        $no5 = $this->request->getPost('nilai' . '' . $no + 4) * 0.5;
        $no6 = $this->request->getPost('nilai' . '' . $no + 5) * 0.5;
        $total3 = $no5 + $no6;
        $total3 = $total3 * 0.2;

        $no7 = $this->request->getPost('nilai' . '' . $no + 6) * 0.4;
        $no8 = $this->request->getPost('nilai' . '' . $no + 7) * 0.6;
        $total4 = $no7 + $no8;
        $total4 = $total4 * 0.2;

        $no9 = $this->request->getPost('nilai' . '' . $no + 8) * 0.25;
        $no10 = $this->request->getPost('nilai' . '' . $no + 9) * 0.25;
        $no11 = $this->request->getPost('nilai' . '' . $no + 10) * 0.25;
        $no12 = $this->request->getPost('nilai' . '' . $no + 11) * 0.25;
        $total5 = $no9 + $no10 + $no11 + $no12;
        $total5 = $total5 * 0.2;

        $nkp = $total1 + $total2 + $total3 + $total4 + $total5;

        $nkpKTModel = new NKPKTModel();
        $nkppModel = new NkppModel();

        $data = [
            'nilai' => $nkp,
            'periode' => $this->request->getPost('periode'),
            'status' => "Pending",
            'nama_kt' => $this->request->getPost('nama'),
            'nip_kt' => $this->request->getPost('nip')

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];

        $nilai_kinerja = $nkp * 20 / 100;
        $data2 = [
            'nilai_nkp' => $nkp,
            'nilai_kinerja_sasaran' => $nilai_kinerja,
            'periode' => $this->request->getPost('periode'),
            'status' => "Pending",
            'bagian' => "kt",
            'nip' => $this->request->getPost('nip')




        ];

        $nkpKTModel->protect(false)->update($id, $data);
        $nkppModel->protect(false)->update($id, $data2);
        // $nkpSoalModel->protect(false)->save($data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/kt/nkp');
    }

    public function deleteNKP($id)
    {
        $nkpKTModel = new NKPKTModel();
        $nkpKTModel->delete($id);


        return redirect()->to('/kt/nkp');
    }

    //NKT
    public function NKTVIew()
    {
        $nktKTModel = new NKTKTModel();
        $nktKT = $nktKTModel->findAll();

        $data = [
            'nktKT' => $nktKT
        ];
        return view('kt/nkt', $data);
    }

    public function CreateNKT()
    {
        $nktModel = new NktModel();
        $nkt = $nktModel->getKT();

        $data = [
            'nkt' => $nkt,

        ];

        return view('kt/create_nkt', $data);
    }

    public function saveNKTKT()
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'periode' => 'required',


        ])) {
            return redirect()->to('/kt/create_nkt');
        }

        $no = 1;
        $no1 = $this->request->getPost('nilai' . '' . $no) * 0.2;
        $no2 = $this->request->getPost('nilai' . '' . $no + 1) * 0.3;
        $no3 = $this->request->getPost('nilai' . '' . $no + 2) * 0.5;
        $total1 = $no1 + $no2 + $no3;
        $total1 = $total1 * 0.2;


        $no4 = $this->request->getPost('nilai' . '' . $no + 3) * 0.2;
        $no5 = $this->request->getPost('nilai' . '' . $no + 4) * 0.4;
        $no6 = $this->request->getPost('nilai' . '' . $no + 5) * 0.4;
        $total2 = $no4 + $no5 + $no6;
        $total2 = $total2 * 0.15;

        $no7 = $this->request->getPost('nilai' . '' . $no + 6) * 0.2;
        $no8 = $this->request->getPost('nilai' . '' . $no + 7) * 0.4;
        $no9 = $this->request->getPost('nilai' . '' . $no + 8) * 0.4;
        $total3 = $no7 + $no8 + $no9;
        $total3 = $total3 * 0.15;

        $no10 = $this->request->getPost('nilai' . '' . $no + 9) * 0.3;
        $no11 = $this->request->getPost('nilai' . '' . $no + 10) * 0.3;
        $no12 = $this->request->getPost('nilai' . '' . $no + 11) * 0.4;
        $total4 = $no10 + $no11 + $no12;
        $total4 = $total4 * 0.2;



        $no13 = $this->request->getPost('nilai' . '' . $no + 12) * 1;
        $total5 = $no13;
        $total5 = $total5 * 0.3;

        $nkt = $total1 + $total2 + $total3 + $total4 + $total5;



        $nktKTModel = new NKTKTModel();
        $nkppModel = new NkppModel();


        $data = [
            'nilai_nkt' => $nkt,
            'nilai' => $nkt,
            'periode' => $this->request->getPost('periode'),
            'status' => "Pending",
            'nama_kt' => $this->request->getPost('nama'),
            'nip_kt' => $this->request->getPost('nip')

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $nktKTModel->protect(false)->save($data);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/kt/nkt');
    }

    public function DetailNKT($id)
    {
        $nktKTModel = new NKTKTModel();
        $nkt = $nktKTModel->find($id);

        $nktModel = new NktModel();
        $soal = $nktModel
            ->getKT();


        $data = [
            'nkt' => $nkt,
            'soal' => $soal,


        ];
        return view('kt/detail_nkt', $data);
    }

    public function EditNKT($id)
    {
        $nktKTModel = new NKTKTModel();
        $nkt = $nktKTModel->find($id);
        $nktModel = new NktModel();
        $soal = $nktModel->getKT();

        $data = [
            'nkt' => $nkt,
            'soal' => $soal

        ];
        return view('kt/edit_nkt', $data);
    }

    public function updateNKT($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'periode' => 'required',


        ])) {
            return redirect()->to('/kt/edit_nkt/' . $id);
        }

        $no = 1;
        $no1 = $this->request->getPost('nilai' . '' . $no) * 0.2;
        $no2 = $this->request->getPost('nilai' . '' . $no + 1) * 0.3;
        $no3 = $this->request->getPost('nilai' . '' . $no + 2) * 0.5;
        $total1 = $no1 + $no2 + $no3;
        $total1 = $total1 * 0.2;


        $no4 = $this->request->getPost('nilai' . '' . $no + 3) * 0.2;
        $no5 = $this->request->getPost('nilai' . '' . $no + 4) * 0.4;
        $no6 = $this->request->getPost('nilai' . '' . $no + 5) * 0.4;
        $total2 = $no4 + $no5 + $no6;
        $total2 = $total2 * 0.15;

        $no7 = $this->request->getPost('nilai' . '' . $no + 6) * 0.2;
        $no8 = $this->request->getPost('nilai' . '' . $no + 7) * 0.4;
        $no9 = $this->request->getPost('nilai' . '' . $no + 8) * 0.4;
        $total3 = $no7 + $no8 + $no9;
        $total3 = $total3 * 0.15;

        $no10 = $this->request->getPost('nilai' . '' . $no + 9) * 0.3;
        $no11 = $this->request->getPost('nilai' . '' . $no + 10) * 0.3;
        $no12 = $this->request->getPost('nilai' . '' . $no + 11) * 0.4;
        $total4 = $no10 + $no11 + $no12;
        $total4 = $total4 * 0.2;



        $no13 = $this->request->getPost('nilai' . '' . $no + 12) * 1;
        $total5 = $no13;
        $total5 = $total5 * 0.3;

        $nkt = $total1 + $total2 + $total3 + $total4 + $total5;



        $nktKTModel = new NKTKTModel();
        $nkppModel = new NkppModel();

        $data = [
            'nilai' => $nkt,
            'periode' => $this->request->getPost('periode'),
            'status' => "Pending",
            'nama_kt' => $this->request->getPost('nama'),
            'nip_kt' => $this->request->getPost('nip')

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $nktKTModel->protect(false)->update($id, $data);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/kt/nkt');
    }

    public function deleteNKT($id)
    {
        $nktKTModel = new NKTKTModel();
        $nktKTModel->delete($id);


        return redirect()->to('/kt/nkt');
    }

    //Sasaran
    public function SasaranKinerjaVIew()
    {
        $SasaranKTModel = new SasaranKTModel();

        $sasaranKT = $SasaranKTModel->findAll();

        $data = [
            'sasaranKT' => $sasaranKT
        ];
        return view('kt/sasarankinerja', $data);
    }

    public function CreateSasaran()
    {
        return view('kt/create_sasaran');
    }

    public function saveSasaran()
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'kuant1' => 'required',
            'kual1' => 'required',
            'waktu1' => 'required',
            'kuant2' => 'required',
            'kual2' => 'required',
            'waktu2' => 'required',
            'kuant3' => 'required',
            'kual3' => 'required',
            'waktu3' => 'required',
            'kuant4' => 'required',
            'kual4' => 'required',
            'waktu4' => 'required',
            'periode' => 'required',


        ])) {
            return redirect()->to('/kt/create_sasaran');
        }
        $sasaranModel = new SasaranKTModel();
        $data1 = [
            'kuantitas' => $this->request->getPost('kuant1'),
            'kualitas' => $this->request->getPost('kual1'),
            'waktu' => $this->request->getPost('waktu1'),

            'kuantitas2' => $this->request->getPost('kuant2'),
            'kualitas2' => $this->request->getPost('kual2'),
            'waktu2' => $this->request->getPost('waktu2'),

            'kuantitas3' => $this->request->getPost('kuant3'),
            'kualitas3' => $this->request->getPost('kual3'),
            'waktu3' => $this->request->getPost('waktu3'),

            'kuantitas4' => $this->request->getPost('kuant4'),
            'kualitas4' => $this->request->getPost('kual4'),
            'waktu4' => $this->request->getPost('waktu4'),

            'periode_kt' => $this->request->getPost('periode'),
            'catatan_kt' => $this->request->getPost('catatan'),
            'status' => "Pending",
            'nama_kt' => $this->request->getPost('nama'),
            'nip_kt' => $this->request->getPost('nip')
            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];



        $sasaranModel->protect(false)
            ->save($data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/kt/sasarankinerja');
    }

    public function DetailSasaran($id)
    {
        $SasaranKTModel = new SasaranKTModel();

        $sasaranKT = $SasaranKTModel->find($id);

        $data = [
            'sasaranKT' => $sasaranKT
        ];

        return view('kt/detail_sasaran', $data);
    }

    public function EditSasaran($id)
    {
        $sasaranModel = new SasaranKTModel();
        $sasaranKT = $sasaranModel->find($id);

        $data = [
            'sasaranKT' => $sasaranKT

        ];
        return view('kt/edit_sasaran', $data);
    }

    public function updateSasaran($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'kuant1' => 'required',
            'kual1' => 'required',
            'waktu1' => 'required',
            'kuant2' => 'required',
            'kual2' => 'required',
            'waktu2' => 'required',
            'kuant3' => 'required',
            'kual3' => 'required',
            'waktu3' => 'required',
            'kuant4' => 'required',
            'kual4' => 'required',
            'waktu4' => 'required',
            'periode' => 'required',


        ])) {
            return redirect()->to('/kt/edit_sasaran/' . $id);
        }
        $sasaranModel = new SasaranKTModel();
        $data1 = [
            'kuantitas' => $this->request->getPost('kuant1'),
            'kualitas' => $this->request->getPost('kual1'),
            'waktu' => $this->request->getPost('waktu1'),

            'kuantitas2' => $this->request->getPost('kuant2'),
            'kualitas2' => $this->request->getPost('kual2'),
            'waktu2' => $this->request->getPost('waktu2'),

            'kuantitas3' => $this->request->getPost('kuant3'),
            'kualitas3' => $this->request->getPost('kual3'),
            'waktu3' => $this->request->getPost('waktu3'),

            'kuantitas4' => $this->request->getPost('kuant4'),
            'kualitas4' => $this->request->getPost('kual4'),
            'waktu4' => $this->request->getPost('waktu4'),

            'periode_kt' => $this->request->getPost('periode'),
            'catatan_kt' => $this->request->getPost('catatan'),
            'status' => "Pending",
            'nama_kt' => $this->request->getPost('nama'),
            'nip_kt' => $this->request->getPost('nip')
            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];



        $sasaranModel->protect(false)
            ->update($id, $data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/kt/detail_sasaran/' . $id);
    }

    public function deleteSasaran($id)
    {
        $sasaranModel = new SasaranKTModel();
        $sasaranModel->delete($id);


        return redirect()->to('/kt/sasarankinerja');
    }

    //Profile
    public function ProfileVIew($id)
    {
        $ktModel = new KtModel();

        $kt = $ktModel->find($id);

        $data = [
            'kt' => $kt
        ];
        return view('kt/profile', $data);
    }

    public function saveProfile($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'nama' => 'required',
            'nip' => 'required',
            'unit' => 'required',
            'periode' => 'required',
            'no_surat_dinas' => 'required',
            'email' => 'required',
            'password' => 'required',

        ])) {
            return redirect()->to('/at/profile');
        }

        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();

        $ktModel = new KtModel();
        $data1 = [
            'nama_kt' => $this->request->getPost('nama'),
            'nip_kt' => $this->request->getPost('nip'),
            'unit_kerja_kt' => $this->request->getPost('unit'),
            'periode_kt' => $this->request->getPost('periode'),
            'no_surat_dinas_kt' => $this->request->getPost('no_surat_dinas'),
            'email_kt' => $this->request->getPost('email'),
            'password_kt' => $this->request->getPost('password'),
            // 'foto_kt'=>$nama,

            //Foto

        ];

        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        $ktModel->protect(false)
            ->update($id, $data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/kt/index/' . $id);
    }

    //NKPP
    public function NKPPVIew()
    {
        $nkppModel = new NkppModel();

        $nkpp = $nkppModel->getKT();

        $data = [
            'nkpp' => $nkpp
        ];
        
        return view('kt/nkpp', $data);
    }

    public function DetailNKPP($id)
    {
        $nkppModel = new NkppModel();

        $nkpp = $nkppModel->find($id);
        $nilai_sasaran = $this->request->getPost('sasaran');
        $nilai_nkp = $this->request->getPost('nkp');
        $nilai_nkt = $this->request->getPost('nkt');

        $nilai_nkpp = $nilai_sasaran + $nilai_nkp + $nilai_nkt;
        $data = [
            'nkpp' => $nkpp,
            'nilai_nkpp' => $nilai_nkpp,
        ];
        return view('kt/detail_nkpp', $data);
    }

    //ANGGOTA REALISASI


    //NKP
    public function DetailNKP_Anggota($id)
    {
        $nkpATModel = new NKPATModel();
        $nkp = $nkpATModel->find($id);
        $nkpModel = new NkpModel();
        $soal = $nkpModel->getAT();
        $data = [
            'nkp' => $nkp,
            'soal' => $soal

        ];
        return view("kt/anggota/detail_nkp", $data);
    }


    public function NKP_Anggota()
    {
        $nkpATModel = new NKPATModel();
        $nkpAT = $nkpATModel->findAll();

        $data = [
            'nkpAT' => $nkpAT
        ];
        return view("kt/anggota/nkp_at", $data);
    }

    public function RealisasiNKP($id)
    {

        $nkpATModel = new NKPATModel();
        $nkp = $nkpATModel->find($id);
        $nkpModel = new NkpModel();
        $soal = $nkpModel->getAT();

        $data = [
            'nkp' => $nkp,
            'soal' => $soal

        ];

        return view("kt/anggota/realisasi_nkp", $data);
    }

    public function saveNKP($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'periode' => 'required',

        ])) {
            return redirect()->to('kt/anggota/nkp_at/' . $id);
        }


        $no = 1;
        $no1 = $this->request->getPost('nilai' . '' . $no) * 0.25;
        $no2 = $this->request->getPost('nilai' . '' . $no + 1) * 0.25;
        $no3 = $this->request->getPost('nilai' . '' . $no + 2) * 0.2;
        $no4 = $this->request->getPost('nilai' . '' . $no + 3) * 0.3;
        $total1 = $no1 + $no2 + $no3 + $no4;
        $total1 = $total1 * 0.3;

        $no5 = $this->request->getPost('nilai' . '' . $no + 4) * 0.4;
        $no6 = $this->request->getPost('nilai' . '' . $no + 5) * 0.6;
        $total2 = $no5 + $no6;
        $total2 = $total2 * 0.2;

        $no7 = $this->request->getPost('nilai' . '' . $no + 6) * 0.5;
        $no8 = $this->request->getPost('nilai' . '' . $no + 7) * 0.5;
        $total3 = $no7 + $no8;
        $total3 = $total3 * 0.3;

        $no9 = $this->request->getPost('nilai' . '' . $no + 8) * 0.2;
        $no10 = $this->request->getPost('nilai' . '' . $no + 9) * 0.25;
        $no11 = $this->request->getPost('nilai' . '' . $no + 10) * 0.25;
        $no12 = $this->request->getPost('nilai' . '' . $no + 11) * 0.3;
        $total4 = $no9 + $no10 + $no11 + $no12;
        $total4 = $total4 * 0.2;

        $nkp = $total1 + $total2 + $total3 + $total4;


        $nkpATModel = new NKPATModel();

        $nilai_kinerja = $nkp * 20 / 100;
        $data = [

            'nilai_nkp' => $nkp,
            'realisasi_nilai' => $nkp,
            'periode' => $this->request->getPost('periode'),
            'status' => "Proses",
            'nilai_kinerja_nkp' => $nilai_kinerja,


            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];

        $nkppModel = new NkppModel();

        $data2 = [
            'nilai_nkp' => $nkp,
            'nilai_kinerja_nkp' => $nilai_kinerja,
            'periode' => $this->request->getPost('periode'),
            'status' => "Proses",
            'bagian' => "at",
            'nip' => $this->request->getPost('nip'),
            'id_nkp' => $this->request->getPost('id_nkp'),



        ];

        $nkppModel->protect(false)->save($data2);


        $nkpATModel->protect(false)->update($id, $data);
        // $nkpSoalModel->protect(false)->save($data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/kt/anggota/nkp_at/' . $id);
    }


    //NKT
    public function DetailNKT_Anggota($id)
    {
        $nktATModel = new NKTATModel();
        $nkt = $nktATModel->find($id);
        $nktModel = new NktModel();
        $soal = $nktModel->getAT();
        $data = [
            'nkt' => $nkt,
            'soal' => $soal

        ];

        return view("kt/anggota/detail_nkt", $data);
    }

    public function NKT_Anggota()
    {
        $nktATModel = new NKTATModel();
        $nktAT = $nktATModel->findAll();

        $data = [
            'nktAT' => $nktAT
        ];

        return view("kt/anggota/nkt_at", $data);
    }

    public function RealisasiNKT($id)
    {
        $nktATModel = new NKTATModel();
        $nkt = $nktATModel->find($id);
        $nktModel = new NktModel();
        $soal = $nktModel->getAT();

        $data = [
            'nkt' => $nkt,
            'soal' => $soal

        ];



        return view("kt/anggota/realisasi_nkt", $data);
    }

    public function saveNKT($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'periode' => 'required',


        ])) {
            return redirect()->to('kt/anggota/realisasi_nkt/' . $id);
        }

        $no = 1;
        $no1 = $this->request->getPost('nilai' . '' . $no) * 0.4;
        $no2 = $this->request->getPost('nilai' . '' . $no + 1) * 0.6;
        $total1 = $no1 + $no2;
        $total1 = $total1 * 0.1;

        $no3 = $this->request->getPost('nilai' . '' . $no + 2) * 0.2;
        $no4 = $this->request->getPost('nilai' . '' . $no + 3) * 0.3;
        $no5 = $this->request->getPost('nilai' . '' . $no + 4) * 0.5;
        $total2 = $no3 + $no4 + $no5;
        $total2 = $total2 * 0.25;

        $no6 = $this->request->getPost('nilai' . '' . $no + 5) * 0.5;
        $no7 = $this->request->getPost('nilai' . '' . $no + 6) * 0.3;
        $no8 = $this->request->getPost('nilai' . '' . $no + 7) * 0.2;
        $total3 = $no6 + $no7 + $no8;
        $total3 = $total3 * 0.25;

        $no9 = $this->request->getPost('nilai' . '' . $no + 8) * 0.33;
        $no10 = $this->request->getPost('nilai' . '' . $no + 9) * 0.34;
        $no11 = $this->request->getPost('nilai' . '' . $no + 10) * 0.33;
        $total4 = $no9 + $no10 + $no11;
        $total4 = $total4 * 0.25;

        $no12 = $this->request->getPost('nilai' . '' . $no + 11) * 0.4;
        $no13 = $this->request->getPost('nilai' . '' . $no + 11) * 0.2;
        $no14 = $this->request->getPost('nilai' . '' . $no + 11) * 0.4;
        $total5 = $no12 + $no13 + $no14;
        $total5 = $total5 * 0.15;

        $nkt = $total1 + $total2 + $total3 + $total4 + $total5;




        $nktATModel = new NKTATModel();

        $data = [
            'nilai_nkt' => $nkt,
            'realisasi_nilai' => $nkt,
            'periode' => $this->request->getPost('periode'),

            'status' => "Proses",

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $nktATModel->protect(false)->update($id, $data);



        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/kt/anggota/nkt_at/' . $id);
    }

    //NSKP

    public function Realisasi($id)
    {
        $SasaranATModel = new SasaranATModel();

        $sasaranAT = $SasaranATModel->find($id);

        $data = [
            'sasaranAT' => $sasaranAT
        ];
        return view("kt/anggota/realisasi", $data);
    }

    public function saveSasaranAT($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'kuant' => 'required',
            'kual' => 'required',
            'waktu' => 'required',
            'kuant2' => 'required',
            'kual2' => 'required',
            'waktu2' => 'required',
            'periode' => 'required',


        ])) {
            return redirect()->to('/kt/anggota/sasaran/' . $id);
        }

        $sasaranModel = new SasaranATModel();

        //no1
        $waktuTarget = (int)$this->request->getPost('waktu');

        $waktuRealisasi = (int)$this->request->getPost('waktu');

        $kuantitasTarget = (int)$this->request->getPost('kuant');

        $kuantitasRealisasi = (int)$this->request->getPost('kuant');

        $kualitasTarget = (int)$this->request->getPost('kual');

        $kualitasRealisasi = (int)$this->request->getPost('kual');

        //no2
        $waktuTarget2 = (int)$this->request->getPost('waktuAT2');

        $waktuRealisasi2 = (int)$this->request->getPost('waktu2');

        $kuantitasTarget2 = (int)$this->request->getPost('kuant2');

        $kuantitasRealisasi2 = (int)$this->request->getPost('kuant2');

        $kualitasTarget2 = (int)$this->request->getPost('kual2');

        $kualitasRealisasi2 = (int)$this->request->getPost('kual2');
        // var_dump($waktuTarget);

        //RUmus Persentase1
        $totalPersentase = 0;

        $persenWaktu = 100 - (($waktuRealisasi / $waktuTarget) * 100);

        if ($persenWaktu > 24) {
            $totalPersentase = 76 - ((((1.76 * $waktuTarget / $waktuRealisasi) / $waktuTarget) * 100) - 100);
        } else if ($persenWaktu < 24) {
            $totalPersentase = ((1.76 * $waktuTarget - $waktuRealisasi) / $waktuTarget) * 100;
        }

        //Rumus persentase2
        $totalPersentase2 = 0;

        $persenWaktu2 = 100 - (($waktuRealisasi2 / $waktuTarget2) * 100);


        if ($persenWaktu2 > 24) {
            $totalPersentase2 = 76 - ((((1.76 * $waktuTarget2 / $waktuRealisasi2) / $waktuTarget2) * 100) - 100);
        } else if ($persenWaktu2 < 24) {
            $totalPersentase2 = ((1.76 * $waktuTarget2 - $waktuRealisasi2) / $waktuTarget2) * 100;
        }

        //Rumus Hasil Kuantitas

        $perhitungan1 = (($kuantitasRealisasi / $kuantitasTarget) * 100);

        $perhitungan2 = (($kuantitasRealisasi2 / $kuantitasTarget2) * 100);

        //Rumus Hasil Kualitas
        $perhitungan3 = (($kualitasRealisasi / $kualitasTarget) * 100);

        $perhitungan4 = (($kualitasRealisasi2 / $kualitasTarget2) * 100);

        //Rumus Perhitungan no 1
        $perhitungan5 = $perhitungan1 + $perhitungan3 + $totalPersentase;

        //Rumus Perhitungan no 2
        $perhitungan6 = $perhitungan2 + $perhitungan4 + $totalPersentase2;


        //Kotak merah
        $nilaiSKP1 = $perhitungan5 / 3;
        $nilaiSKP2 = $perhitungan6 / 3;

        // var_dump($perhitungan1);
        // var_dump($nilaiSKP1);
        // var_dump($nilaiSKP2);



        //Kotak hijau
        $TotalnilaiSKP = (($nilaiSKP1 + $nilaiSKP2) / 2);

        $data1 = [
            'realisasi_kuantitas' => $this->request->getPost('kuant'),
            'realisasi_kualitas' => $this->request->getPost('kual'),
            'realisasi_waktu' => $this->request->getPost('waktu'),
            'realisasi_kuantitas2' => $this->request->getPost('kuant2'),
            'realisasi_kualitas2' => $this->request->getPost('kual2'),
            'realisasi_waktu2' => $this->request->getPost('waktu2'),
            'periode_at' => $this->request->getPost('periode'),
            'status' => "Proses",
            'nilai' => $nilaiSKP1,
            'nilai2' => $nilaiSKP2,
            'realisasi_nilai' => $TotalnilaiSKP,
            'nilai_skp' => $TotalnilaiSKP,
            // 'realisasi_nilai_at'=>$TotalnilaiSKP,
            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $sasaranModel->protect(false)
            ->update($id, $data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/kt/anggota/detail_nskp/' . $id);
    }

    public function approveSasaranAT($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'kuant' => 'required',
            'kual' => 'required',
            'waktu' => 'required',
            'kuant2' => 'required',
            'kual2' => 'required',
            'waktu2' => 'required',


        ])) {
            return redirect()->to('/kt/anggota/detail_nskp/' . $id);
        }

        $sasaranModel = new SasaranATModel();

        //no1
        $waktuTarget = (int)$this->request->getPost('waktu');

        $waktuRealisasi = (int)$this->request->getPost('waktu');

        $kuantitasTarget = (int)$this->request->getPost('kuant');

        $kuantitasRealisasi = (int)$this->request->getPost('kuant');

        $kualitasTarget = (int)$this->request->getPost('kual');

        $kualitasRealisasi = (int)$this->request->getPost('kual');

        //no2
        $waktuTarget2 = (int)$this->request->getPost('waktu2');

        $waktuRealisasi2 = (int)$this->request->getPost('waktu2');

        $kuantitasTarget2 = (int)$this->request->getPost('kuant2');

        $kuantitasRealisasi2 = (int)$this->request->getPost('kuant2');

        $kualitasTarget2 = (int)$this->request->getPost('kual2');

        $kualitasRealisasi2 = (int)$this->request->getPost('kual2');
        // var_dump($waktuTarget);

        //RUmus Persentase1
        $totalPersentase = 0;

        $persenWaktu = 100 - ($waktuRealisasi / $waktuTarget) * 100;


        if ($persenWaktu > 24) {
            $totalPersentase = 76 - ((((1.76 * $waktuTarget / $waktuRealisasi) / $waktuTarget) * 100) - 100);
        } else if ($persenWaktu < 24) {
            $totalPersentase = ((1.76 * $waktuTarget - $waktuRealisasi) / $waktuTarget) * 100;
        }

        //Rumus persentase2
        $totalPersentase2 = 0;

        $persenWaktu2 = 100 - ($waktuRealisasi2 / $waktuTarget2) * 100;


        if ($persenWaktu2 > 24) {
            $totalPersentase2 = 76 - ((((1.76 * $waktuTarget2 / $waktuRealisasi2) / $waktuTarget2) * 100) - 100);
        } else if ($persenWaktu2 < 24) {
            $totalPersentase2 = ((1.76 * $waktuTarget2 - $waktuRealisasi2) / $waktuTarget2) * 100;
        }

        //Rumus Hasil Kuantitas
        $perhitungan1 = (($kuantitasRealisasi / $kuantitasTarget) * 100);

        $perhitungan2 = (($kuantitasRealisasi2 / $kuantitasTarget2) * 100);

        //Rumus hasil kualitas
        $perhitungan3 = (($kualitasRealisasi / $kualitasTarget) * 100);

        $perhitungan4 = (($kualitasRealisasi2 / $kualitasTarget2) * 100);

        //Rumus perhitungan no 1

        $perhitungan5 = $perhitungan1 + $perhitungan3 + $totalPersentase;

        $perhitungan6 = $perhitungan2 + $perhitungan4 + $totalPersentase2;
        //Kotak merah
        $nilaiSKP1 = $perhitungan5 / 3;
        $nilaiSKP2 = $perhitungan6 / 3;

        // var_dump($perhitungan1);
        // var_dump($nilaiSKP1);
        // var_dump($nilaiSKP2);

        //Kotak hijau
        $TotalnilaiSKP = (($nilaiSKP1 + $nilaiSKP2) / 2);


        $data1 = [
            'realisasi_kuantitas' => $this->request->getPost('kuant'),
            'realisasi_kualitas' => $this->request->getPost('kual'),
            'realisasi_waktu' => $this->request->getPost('waktu'),
            'realisasi_kuantitas2' => $this->request->getPost('kuant2'),
            'realisasi_kualitas2' => $this->request->getPost('kual2'),
            'realisasi_waktu2' => $this->request->getPost('waktu2'),
            'status' => "Proses",
            'nilai' => $nilaiSKP1,
            'nilai2' => $nilaiSKP2,
            'realisasi_nilai' => $TotalnilaiSKP,
            'nilai_skp' => $TotalnilaiSKP,
            // 'realisasi_nilai_at'=>$TotalnilaiSKP,
            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $sasaranModel->protect(false)
            ->update($id, $data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/kt/anggota/detail_nskp/' . $id);
    }

    public function DetailNSKP_Anggota($id)
    {
        $SasaranATModel = new SasaranATModel();

        $sasaranAT = $SasaranATModel->find($id);

        $data = [
            'sasaranAT' => $sasaranAT
        ];


        return view("kt/anggota/detail_nskp", $data);
    }

    public function NSKP_Anggota()
    {
        $SasaranATModel = new SasaranATModel();

        $sasaranAT = $SasaranATModel->findAll();

        $data = [
            'sasaranAT' => $sasaranAT
        ];
        return view("kt/anggota/nskp", $data);
    }

    //Tanggapan
    public function TanggapanBimbinganView()
    {
        $bimbinganModel = new Bimbingan();
        $bimbingan = $bimbinganModel->findAll();

        $data = [
            'bimbingan' => $bimbingan
        ];
        return view('kt/bimbingan', $data);
    }

    public function DoTanggapan($id)
    {
        $bimbinganModel = new Bimbingan();
        $bimbingan = $bimbinganModel->find($id);

        $data = [
            'bimbingan' => $bimbingan
        ];


        $bimbinganModel = new Bimbingan();


        return view("kt/anggota/do_tanggapan", $data);
    }

    public function SaveTanggapan($id)
    {

        if (!$this->validate([
            'tanggapan1' => 'required',
            'tanggapan2' => 'required',

        ])) {
            return redirect()->to('/kt/anggota/do_tanggapan/' . $id);
        }

        $bimbinganModel = new Bimbingan();

        $data2 = [
            'tanggapan_satu' => $this->request->getPost('tanggapan1'),
            'tanggapan_dua' => $this->request->getPost('tanggapan2'),
            // 'nama'=>$this->request->getPost('nama'),
            // 'periode'=>$this->request->getPost('periode'),
            // 'nip' => $this->request->getPost('nip'),
            // 'bagian' =>"at",
            'status' => "Selesai",

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $bimbinganModel->protect(false)
            ->update($id, $data2);

        return redirect()->to("kt/anggota/tanggapan_bimbingan");
    }

    //Bimbingan
    public function TanggapanBimbingan()
    {
        $bimbinganModel = new Bimbingan();
        $bimbingan = $bimbinganModel->getAT();

        $data = [
            'bimbingan' => $bimbingan
        ];
        return view("kt/anggota/tanggapanbimbingan", $data);
    }
}
