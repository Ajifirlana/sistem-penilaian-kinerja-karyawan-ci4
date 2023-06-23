<?php

namespace App\Controllers;

use App\Models\PtModel;
use App\Models\NkpModel;
use App\Models\NktModel;
use App\Models\Bimbingan;
use App\Models\NKPATModel;
use App\Models\NKPKTModel;
use App\Models\NKPPTModel;
use App\Models\NKTATModel;
use App\Models\NKTKTModel;
use App\Models\NKTPTModel;
use App\Models\SasaranATModel;
use App\Models\SasaranKTModel;
use App\Models\SasaranPTModel;
use App\Controllers\BaseController;

class PTController extends BaseController
{
    public function index($id)
    {
        $ptModel = new PtModel();

        $pt = $ptModel->find($id);

        $data = [
            'pt' => $pt
        ];

        return view('pt/index', $data);
    }

    //BImbingan
    public function BimbinganView()
    {
        $bimbinganModel = new Bimbingan();
        $bimbingan = $bimbinganModel->getPT();

        $data = [
            'bimbingan' => $bimbingan
        ];
        return view('pt/bimbingan', $data);
    }

    public function CreateBimbingan()
    {
        return view('pt/create_bimbingan');
    }

    public function saveBimbingan()
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'kendala1' => 'required',
            'kendala2' => 'required',

        ])) {
            return redirect()->to('/pt/create_bimbingan');
        }
        $bimbinganModel = new Bimbingan();
        $data1 = [
            'bimbingan_satu' => $this->request->getPost('kendala1'),
            'bimbingan_dua' => $this->request->getPost('kendala2'),
            'nama' => $this->request->getPost('nama'),
            'periode' => $this->request->getPost('periode'),
            'nip' => $this->request->getPost('nip'),
            'bagian' => "pt",
            'status' => "Proses",

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $bimbinganModel->protect(false)
            ->save($data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pt/bimbingan');
    }

    public function DetailBimbingan($id)
    {
        $bimbinganModel = new Bimbingan();
        $bimbingan = $bimbinganModel->find($id);

        $data = [
            'bimbingan' => $bimbingan
        ];
        return view('pt/detail_bimbingan', $data);
    }

    public function EditBimbingan($id)
    {
        $bimbinganModel = new Bimbingan();
        $bimbingan = $bimbinganModel->find($id);

        $data = [
            'bimbingan' => $bimbingan,

        ];
        return view('pt/edit_bimbingan', $data);
    }

    public function updateBimbingan($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'kendala1' => 'required',
            'kendala2' => 'required',

        ])) {
            return redirect()->to('/pt/edit_bimbingan/' . $id);
        }
        $bimbinganModel = new Bimbingan();
        $data1 = [
            'bimbingan_satu' => $this->request->getPost('kendala1'),
            'bimbingan_dua' => $this->request->getPost('kendala2'),
            'nama' => $this->request->getPost('nama'),
            'periode' => $this->request->getPost('periode'),
            'nip' => $this->request->getPost('nip'),
            'bagian' => "pt",
            'status' => "Proses",

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $bimbinganModel->protect(false)
            ->update($id, $data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pt/detail_bimbingan/' . $id);
    }

    public function deleteBimbingan($id)
    {
        $bimbingan = new Bimbingan();
        $bimbingan->delete($id);


        return redirect()->to('/pt/bimbingan');
    }

    //NKP
    public function NKPView()
    {
        $nkpPTModel = new NKPPTModel();
        $nkpPT = $nkpPTModel->findAll();

        $data = [
            'nkpPT' => $nkpPT
        ];
        return view('pt/nkp', $data);
    }

    public function CreateNKP()
    {
        $nkpModel = new NkpModel();
        $nkp = $nkpModel->getPT();

        $data = [
            'nkp' => $nkp,

        ];
        return view('pt/create_nkp', $data);
    }

    public function saveNKP()
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'periode' => 'required',


        ])) {
            return redirect()->to('/pt/create_nkp');
        }

        $no = 1;
        $no1 = $this->request->getPost('nilai' . '' . $no) * 0.5;
        $no2 = $this->request->getPost('nilai' . '' . $no + 1) * 0.5;
        $total1 = $no1 + $no2;
        $total1 = $total1 * 0.3;

        $no3 = $this->request->getPost('nilai' . '' . $no + 2) * 0.5;
        $no4 = $this->request->getPost('nilai' . '' . $no + 3) * 0.5;
        $total2 = $no3 + $no4;
        $total2 = $total2 * 0.2;

        $no5 = $this->request->getPost('nilai' . '' . $no + 4) * 0.2;
        $no6 = $this->request->getPost('nilai' . '' . $no + 5) * 0.2;
        $no7 = $this->request->getPost('nilai' . '' . $no + 6) * 0.2;
        $no8 = $this->request->getPost('nilai' . '' . $no + 7) * 0.2;
        $no9 = $this->request->getPost('nilai' . '' . $no + 8) * 0.2;
        $total3 = $no5 + $no6 + $no7 + $no8 + $no9;
        $total3 = $total3 * 0.3;

        $no10 = $this->request->getPost('nilai' . '' . $no + 9) * 0.3;
        $no11 = $this->request->getPost('nilai' . '' . $no + 10) * 0.4;
        $no12 = $this->request->getPost('nilai' . '' . $no + 11) * 0.3;
        $total4 = $no10 + $no11 + $no12;
        $total4 = $total4 * 0.2;

        $nkp = $total1 + $total2 + $total3 + $total4;



        $nkpPTModel = new NKPPTModel();

        $data = [
            'nilai_nkp' => $nkp,
            'nilai' => $nkp,
            'periode' => $this->request->getPost('periode'),
            'status' => "Pending",
            'nama_pt' => $this->request->getPost('nama'),
            'nip_pt' => $this->request->getPost('nip')

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $nkpPTModel->protect(false)->save($data);



        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pt/nkp');
    }


    public function DetailNKP($id)
    {
        $nkpPTModel = new NKPPTModel();
        $nkp = $nkpPTModel->find($id);
        $nkpModel = new NkpModel();
        $soal = $nkpModel->getPT();
        $data = [
            'nkp' => $nkp,
            'soal' => $soal

        ];
        return view('pt/detail_nkp', $data);
    }

    public function EditNKP($id)
    {
        $nkpPTModel = new NKPPTModel();
        $nkp = $nkpPTModel->find($id);
        $nkpModel = new NkpModel();
        $soal = $nkpModel->getPT();

        $data = [
            'nkp' => $nkp,
            'soal' => $soal

        ];
        return view('pt/edit_nkp', $data);
    }

    public function updateNKP($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'periode' => 'required',


        ])) {
            return redirect()->to('/pt/edit_nkp/', $id);
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
        $no12 = $this->request->getPost('nilai' . '' . $no + 11) * 0.3;
        $total5 = $no9 + $no10 + $no11 + $no12;
        $total5 = $total5 * 0.2;

        $nkp = $total1 + $total2 + $total3 + $total4 + $total5;



        $nkpPTModel = new NKPPTModel();

        $data = [
            'nilai' => $nkp,
            'periode' => $this->request->getPost('periode'),
            'status' => "Pending",
            'nama_pt' => $this->request->getPost('nama'),
            'nip_pt' => $this->request->getPost('nip')

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $nkpPTModel->protect(false)->update($id, $data);



        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pt/nkp');
    }

    public function deleteNKP($id)
    {
        $nktPTModel = new NKPPTModel();
        $nktPTModel->delete($id);


        return redirect()->to('/pt/nkp');
    }

    //NKT
    public function NKTVIew()
    {
        $nktPTModel = new NKTPTModel();
        $nktPT = $nktPTModel->findAll();

        $data = [
            'nktPT' => $nktPT
        ];

        return view('pt/nkt', $data);
    }

    public function CreateNKT()
    {
        $nktModel = new NktModel();
        $nkt = $nktModel->getPT();

        $data = [
            'nkt' => $nkt,

        ];
        return view('pt/create_nkt', $data);
    }

    public function saveNKT()
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'periode' => 'required',


        ])) {
            return redirect()->to('/pt/create_nkt');
        }

        $no = 1;
        $no1 = $this->request->getPost('nilai' . '' . $no) * 0.4;
        $no2 = $this->request->getPost('nilai' . '' . $no + 1) * 0.6;
        $total1 = $no1 + $no2;
        $total1 = $total1 * 0.4;

        $no3 = $this->request->getPost('nilai' . '' . $no + 2) * 1;
        $total2 = $no3 * 0.2;

        $no4 = $this->request->getPost('nilai' . '' . $no + 3) * 1;
        $total3 = $no4 * 0.4;

        $nkt = $total1 + $total2 + $total3;



        $nktPTModel = new NKTPTModel();

        $data = [
            'nilai_nkt' => $nkt,
            'nilai' => $nkt,
            'periode' => $this->request->getPost('periode'),
            'status' => "Pending",
            'nama_pt' => $this->request->getPost('nama'),
            'nip_pt' => $this->request->getPost('nip')

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $nktPTModel->protect(false)->save($data);



        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pt/nkt');
    }

    public function DetailNKT($id)
    {
        $nktPTModel = new NKTPTModel();
        $nkt = $nktPTModel->find($id);

        $nktModel = new NktModel();
        $soal = $nktModel
            ->getPT();


        $data = [
            'nkt' => $nkt,
            'soal' => $soal,


        ];
        return view('pt/detail_nkt', $data);
    }

    public function EditNKT($id)
    {
        $nktPTModel = new NKTPTModel();
        $nkt = $nktPTModel->find($id);
        $nktModel = new NktModel();
        $soal = $nktModel->getPT();

        $data = [
            'nkt' => $nkt,
            'soal' => $soal

        ];
        return view('pt/edit_nkt', $data);
    }

    public function updateNKT($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'periode' => 'required',


        ])) {
            return redirect()->to('/pt/edit_nkt/' . $id);
        }

        $no = 1;
        $no1 = $this->request->getPost('nilai' . '' . $no) * 0.4;
        $no2 = $this->request->getPost('nilai' . '' . $no + 1) * 0.6;
        $total1 = $no1 + $no2;
        $total1 = $total1 * 0.4;

        $no3 = $this->request->getPost('nilai' . '' . $no + 2) * 1;
        $total2 = $no3 * 0.2;

        $no4 = $this->request->getPost('nilai' . '' . $no + 3) * 1;
        $total3 = $no4 * 0.4;

        $nkt = $total1 + $total2 + $total3;

        //NKP Pengendali Teknis

        $nktPTModel = new NKTPTModel();

        $data = [
            'nilai' => $nkt,
            'periode' => $this->request->getPost('periode'),
            'status' => "Pending",
            'nama_pt' => $this->request->getPost('nama'),
            'nip_pt' => $this->request->getPost('nip')

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $nktPTModel->protect(false)->update($id, $data);



        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pt/nkt');
    }

    public function deleteNKT($id)
    {
        $nktPTModel = new NKTPTModel();
        $nktPTModel->delete($id);


        return redirect()->to('/pt/nkt');
    }

    //Sasaran
    public function SasaranKinerjaVIew()
    {
        $SasaranPTModel = new SasaranPTModel();

        $sasaranPT = $SasaranPTModel->findAll();

        $data = [
            'sasaranPT' => $sasaranPT
        ];
        return view('pt/sasarankinerja', $data);
    }

    public function CreateSasaran()
    {
        return view('pt/create_sasaran');
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
            'periode' => 'required',


        ])) {
            return redirect()->to('/pt/create_sasaran');
        }
        $sasaranModel = new SasaranPTModel();
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

            'periode_pt' => $this->request->getPost('periode'),
            'catatan_pt' => $this->request->getPost('catatan'),
            'status' => "Pending",
            'nama_pt' => $this->request->getPost('nama'),
            'nip_pt' => $this->request->getPost('nip')
            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];



        $sasaranModel->protect(false)
            ->save($data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pt/sasarankinerja');
    }

    public function DetailSasaran($id)
    {
        $SasaranPTModel = new SasaranPTModel();

        $sasaranPT = $SasaranPTModel->find($id);

        $data = [
            'sasaranPT' => $sasaranPT
        ];
        return view('pt/detail_sasaran', $data);
    }

    public function EditSasaran($id)
    {
        $sasaranModel = new SasaranPTModel();
        $sasaranPT = $sasaranModel->find($id);

        $data = [
            'sasaranPT' => $sasaranPT

        ];
        return view('pt/edit_sasaran', $data);
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
            'periode' => 'required',


        ])) {
            return redirect()->to('/pt/edit_sasaran/' . $id);
        }
        $sasaranModel = new SasaranPTModel();
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

            'periode_pt' => $this->request->getPost('periode'),
            'catatan_pt' => $this->request->getPost('catatan'),
            'status' => "Proses",
            'nama_pt' => $this->request->getPost('nama'),
            'nip_pt' => $this->request->getPost('nip')
            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];



        $sasaranModel->protect(false)
            ->update($id, $data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pt/sasarankinerja');
    }

    public function deleteSasaran($id)
    {
        $sasaranModel = new SasaranPTModel();
        $sasaranModel->delete($id);


        return redirect()->to('/pt/sasarankinerja');
    }

    //Profile
    public function ProfileVIew($id)
    {
        $ptModel = new PtModel();

        $pt = $ptModel->find($id);

        $data = [
            'pt' => $pt
        ];
        return view('pt/profile', $data);
    }
    //Ubah Profil
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
            return redirect()->to('/pt/profile/' . $id);
        }

        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();

        $ptModel = new PtModel();
        $data1 = [
            'nama_pt' => $this->request->getPost('nama'),
            'nip_pt' => $this->request->getPost('nip'),
            'unit_kerja_pt' => $this->request->getPost('unit'),
            'periode_pt' => $this->request->getPost('periode'),
            'no_surat_dinas_pt' => $this->request->getPost('no_surat_dinas'),
            'email_pt' => $this->request->getPost('email'),
            'password_pt' => $this->request->getPost('password'),
            // 'foto_pt'=>$nama,

            //Foto

        ];

        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        $ptModel->protect(false)
            ->update($id, $data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pt/index/' . $id);
    }

    //NKPP
    public function NKPPVIew()
    {
        return view('pt/nkpp');
    }

    public function DetailNKPP()
    {
        return view('pt/detail_nkpp');
    }

    //Anggota
    //NKP
    public function DetailNKPAnggota($id)
    {
        $nkpATModel = new NKPATModel();
        $nkp = $nkpATModel->find($id);
        $nkpModel = new NkpModel();
        $soal = $nkpModel->getAT();
        $data = [
            'nkp' => $nkp,
            'soal' => $soal

        ];
        return view("pt/anggota/detail_nkp", $data);
    }

    public function ReviewNKP()
    {
        $nkpATModel = new NKPATModel();
        $nkpAT = $nkpATModel->findAll();

        $data = [
            'nkpAT' => $nkpAT
        ];
        return view("pt/anggota/review_nkp", $data);
    }

    public function saveNKPAT($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'periode' => 'required',


        ])) {
            return redirect()->to('/pt/anggota/do_review_nkp/' . $id);
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

        $data = [
            'nilai_nkp' => $nkp,
            'review_nilai' => $nkp,
            'periode' => $this->request->getPost('periode'),
            'status' => "Selesai",


            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];



        $nkpATModel->protect(false)->update($id, $data);
        // $nkpSoalModel->protect(false)->save($data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pt/anggota/detail_nkp/' . $id);
    }

    //NKT
    public function DetailNKTAnggota($id)
    {
        $nktATModel = new NKTATModel();
        $nkt = $nktATModel->find($id);
        $nktModel = new NktModel();
        $soal = $nktModel->getAT();
        $data = [
            'nkt' => $nkt,
            'soal' => $soal

        ];

        return view("pt/anggota/detail_nkt", $data);
    }

    public function ReviewNKT()
    {
        $nktATModel = new NKTATModel();
        $nktAT = $nktATModel->findAll();

        $data = [
            'nktAT' => $nktAT
        ];

        return view("pt/anggota/review_nkt", $data);
    }

    public function saveNKTAT($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'periode' => 'required',


        ])) {
            return redirect()->to('/pt/anggota/do_review_nkt/' . $id);
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
            'review_nilai' => $nkt,
            'periode' => $this->request->getPost('periode'),

            'status' => "Selesai",

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];



        $nktATModel->protect(false)->update($id, $data);



        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pt/anggota/detail_nkt/' . $id);
    }

    //Sasaran
    public function DetailSasaranAnggota($id)
    {
        $SasaranATModel = new SasaranATModel();

        $sasaranAT = $SasaranATModel->find($id);

        $data = [
            'sasaranAT' => $sasaranAT
        ];
        return view("pt/anggota/detail_sasaran", $data);
    }

    public function ReviewSasaran()
    {
        $SasaranATModel = new SasaranATModel();

        $sasaranAT = $SasaranATModel->findAll();

        $data = [
            'sasaranAT' => $sasaranAT
        ];
        return view("pt/anggota/review_sasaran", $data);
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
            return redirect()->to('/pt/anggota/do_review_sasaran/' . $id);
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
            'review_kuantitas' => $this->request->getPost('kuant'),
            'review_kualitas' => $this->request->getPost('kual'),
            'review_waktu' => $this->request->getPost('waktu'),
            'review_kuantitas2' => $this->request->getPost('kuant2'),
            'review_kualitas2' => $this->request->getPost('kual2'),
            'review_waktu2' => $this->request->getPost('waktu2'),
            'periode_at' => $this->request->getPost('periode'),
            'status' => "Selesai",
            'nilai' => $nilaiSKP1,
            'nilai2' => $nilaiSKP2,
            'nilai_skp' => $TotalnilaiSKP,
            'review_nilai' => $TotalnilaiSKP,
            // 'realisasi_nilai_at'=>$TotalnilaiSKP,
            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $sasaranModel->protect(false)
            ->update($id, $data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pt/anggota/detail_sasaran/' . $id);
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
            return redirect()->to('/pt/anggota/do_review_sasaran/' . $id);
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
            'review_kuantitas' => $this->request->getPost('kuant'),
            'review_kualitas' => $this->request->getPost('kual'),
            'review_waktu' => $this->request->getPost('waktu'),
            'review_kuantitas2' => $this->request->getPost('kuant2'),
            'review_kualitas2' => $this->request->getPost('kual2'),
            'review_waktu2' => $this->request->getPost('waktu2'),
            'status' => "Selesai",
            'nilai' => $nilaiSKP1,
            'nilai2' => $nilaiSKP2,
            'nilai_skp' => $TotalnilaiSKP,
            'review_nilai' => $TotalnilaiSKP,
            // 'realisasi_nilai_at'=>$TotalnilaiSKP,
            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $sasaranModel->protect(false)
            ->update($id, $data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pt/anggota/detail_sasaran/' . $id);
    }

    //Do
    public function DoReviewNKP($id)
    {
        $nkpATModel = new NKPATModel();
        $nkp = $nkpATModel->find($id);
        $nkpModel = new NkpModel();
        $soal = $nkpModel->getAT();

        $data = [
            'nkp' => $nkp,
            'soal' => $soal

        ];
        return view("pt/anggota/do_review_nkp", $data);
    }

    public function DoReviewNKT($id)
    {
        $nktATModel = new NKTATModel();
        $nkt = $nktATModel->find($id);
        $nktModel = new NktModel();
        $soal = $nktModel->getAT();

        $data = [
            'nkt' => $nkt,
            'soal' => $soal

        ];

        return view("pt/anggota/do_review_nkt", $data);
    }

    public function DoReviewSasaran($id)
    {
        $SasaranATModel = new SasaranATModel();

        $sasaranAT = $SasaranATModel->find($id);

        $data = [
            'sasaranAT' => $sasaranAT
        ];
        return view("pt/anggota/do_review_sasaran", $data);
    }

    //KEtua


    //NKP
    public function DetailNKP_Ketua($id)
    {
        $nkpKTModel = new NKPKTModel();
        $nkp = $nkpKTModel->find($id);
        $nkpModel = new NkpModel();
        $soal = $nkpModel->getKT();
        $data = [
            'nkp' => $nkp,
            'soal' => $soal

        ];
        return view("pt/ketua/detail_nkp", $data);
    }

    public function NKP_Ketua()
    {
        $nkpKTModel = new NKPKTModel();
        $nkpKT = $nkpKTModel->findAll();

        $data = [
            'nkpKT' => $nkpKT
        ];
        return view("pt/ketua/nkp", $data);
    }

    public function RealisasiNKP($id)
    {
        $nkpKTModel = new NKPKTModel();
        $nkp = $nkpKTModel->find($id);
        $nkpModel = new NkpModel();
        $soal = $nkpModel->getKT();

        $data = [
            'nkp' => $nkp,
            'soal' => $soal

        ];


        return view("pt/ketua/realisasi_nkp", $data);
    }

    public function saveNKPKT($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'periode' => 'required',


        ])) {
            return redirect()->to('pt/ketua/realisasi_nkp/' . $id);
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

        $data = [
            'nilai_nkp' => $nkp,
            'realisasi_nilai' => $nkp,
            'periode' => $this->request->getPost('periode'),
            'status' => "Proses",


            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $nkpKTModel->protect(false)->update($id, $data);



        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pt/ketua/nkp/' . $id);
    }


    //NKT
    public function DetailNKT_Ketua($id)
    {
        $nktKTModel = new NKTKTModel();
        $nkt = $nktKTModel->find($id);
        $nktModel = new NktModel();
        $soal = $nktModel->getKT();
        $data = [
            'nkt' => $nkt,
            'soal' => $soal

        ];
        return view("pt/ketua/detail_nkt", $data);
    }

    public function NKT_Ketua()
    {
        $nktKTModel = new NKTKTModel();
        $nktKT = $nktKTModel->findAll();

        $data = [
            'nktKT' => $nktKT
        ];

        return view("pt/ketua/nkt", $data);
    }

    public function RealisasiNKT($id)
    {
        $nktKTModel = new NKTKTModel();
        $nkt = $nktKTModel->find($id);
        $nktModel = new NktModel();
        $soal = $nktModel->getAT();

        $data = [
            'nkt' => $nkt,
            'soal' => $soal

        ];
        return view("pt/ketua/realisasi_nkt", $data);
    }

    public function saveNKTKT($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if (!$this->validate([
            'periode' => 'required',


        ])) {
            return redirect()->to('pt/ketua/realisasi_nkt/' . $id);
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

        $data = [
            'nilai_nkt' => $nkt,
            'realisasi_nilai' => $nkt,
            'periode' => $this->request->getPost('periode'),
            'status' => "Proses",


            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $nktKTModel->protect(false)->update($id, $data);



        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pt/ketua/nkt/' . $id);
    }


    //NSKP
    public function Realisasi($id)
    {
        $SasaranKTModel = new SasaranKTModel();

        $sasaranKT = $SasaranKTModel->find($id);

        $data = [
            'sasaranKT' => $sasaranKT
        ];
        return view("pt/ketua/realisasi", $data);
    }

    public function DetailNSKP_Ketua($id)
    {

        $SasaranKTModel = new SasaranKTModel();

        $sasaranKT = $SasaranKTModel->find($id);

        $data = [
            'sasaranKT' => $sasaranKT
        ];
        return view("pt/ketua/detail_nskp", $data);
    }

    public function saveSasaranKT($id)
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
            return redirect()->to('/kt/anggota/realisasi/' . $id);
        }

        $sasaranModel = new SasaranKTModel();

        //no1
        $waktuTarget = (int)$this->request->getPost('waktuKT1');

        $waktuRealisasi = (int)$this->request->getPost('waktu1');

        $kuantitasTarget1 = (int)$this->request->getPost('kuant1');

        $kuantitasRealisasi1 = (int)$this->request->getPost('kuant1');

        $kualitasTarget1 = (int)$this->request->getPost('kual1');

        $kualitasRealisasi1 = (int)$this->request->getPost('kual1');

        //no2
        $waktuTarget2 = (int)$this->request->getPost('waktuKT2');

        $waktuRealisasi2 = (int)$this->request->getPost('waktu2');

        $kuantitasTarget2 = (int)$this->request->getPost('kuant2');

        $kuantitasRealisasi2 = (int)$this->request->getPost('kuant2');

        $kualitasTarget2 = (int)$this->request->getPost('kual2');

        $kualitasRealisasi2 = (int)$this->request->getPost('kual2');

        //no3
        $waktuTarget3 = (int)$this->request->getPost('waktuKT3');

        $waktuRealisasi3 = (int)$this->request->getPost('waktu3');

        $kuantitasTarget3 = (int)$this->request->getPost('kuant3');

        $kuantitasRealisasi3 = (int)$this->request->getPost('kuant3');

        $kualitasTarget3 = (int)$this->request->getPost('kual3');

        $kualitasRealisasi3 = (int)$this->request->getPost('kual3');
        //no4
        $waktuTarget4 = (int)$this->request->getPost('waktuKT4');

        $waktuRealisasi4 = (int)$this->request->getPost('waktu4');

        $kuantitasTarget4 = (int)$this->request->getPost('kuant4');

        $kuantitasRealisasi4 = (int)$this->request->getPost('kuant4');

        $kualitasTarget4 = (int)$this->request->getPost('kual4');

        $kualitasRealisasi4 = (int)$this->request->getPost('kual4');

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

        //Rumus persentase3
        $totalPersentase3 = 0;

        $persenWaktu3 = 100 - (($waktuRealisasi3 / $waktuTarget3) * 100);

        if ($persenWaktu3 > 24) {
            $totalPersentase3 = 76 - ((((1.76 * $waktuTarget3 / $waktuRealisasi3) / $waktuTarget3) * 100) - 100);
        } else if ($persenWaktu3 < 24) {
            $totalPersentase3 = ((1.76 * $waktuTarget3 - $waktuRealisasi3) / $waktuTarget3) * 100;
        }

        //Rumus persentase4
        $totalPersentase4 = 0;

        $persenWaktu4 = 100 - (($waktuRealisasi4 / $waktuTarget4) * 100);

        if ($persenWaktu4 > 24) {
            $totalPersentase4 = 76 - ((((1.76 * $waktuTarget4 / $waktuRealisasi4) / $waktuTarget4) * 100) - 100);
        } else if ($persenWaktu4 < 24) {
            $totalPersentase4 = ((1.76 * $waktuTarget4 - $waktuRealisasi4) / $waktuTarget4) * 100;
        }

        //Rumus hasil kuantitas

        $perhitungan1 = (($kuantitasRealisasi1 / $kuantitasTarget1) * 100);

        $perhitungan2 = (($kuantitasRealisasi2 / $kuantitasTarget2) * 100);

        $perhitungan3 = (($kuantitasRealisasi3 / $kuantitasTarget3) * 100);

        $perhitungan4 = (($kuantitasRealisasi4 / $kuantitasTarget4) * 100);

        //Rumus Hasil Kualitas
        $perhitungan5 = (($kualitasRealisasi1 / $kualitasTarget1) * 100);

        $perhitungan6 = (($kualitasRealisasi2 / $kualitasTarget2) * 100);

        $perhitungan7 = (($kualitasRealisasi2 / $kualitasTarget3) * 100);

        $perhitungan8 = (($kualitasRealisasi4 / $kualitasTarget4) * 100);


        //Rumus Perhitungan no 1
        $perhitungan9 = $totalPersentase + $perhitungan1 + $perhitungan5;

        //Rumus Perhitungan no 2
        $perhitungan10 = $totalPersentase2 + $perhitungan2 + $perhitungan6;

        //Rumus Perhitungan no 3
        $perhitungan11 = $totalPersentase3 + $perhitungan3 + $perhitungan7;

        //Rumus Perhitungan no 4
        $perhitungan12 = $totalPersentase4 + $perhitungan4 + $perhitungan8;


        //Kotak merah
        $nilaiSKP1 = $perhitungan9 / 3;
        $nilaiSKP2 = $perhitungan10 / 3;
        $nilaiSKP3 = $perhitungan11 / 3;
        $nilaiSKP4 = $perhitungan12 / 3;

        // var_dump($perhitungan1);
        // var_dump($nilaiSKP1);
        // var_dump($nilaiSKP2);

        //Kotak hijau
        $TotalnilaiSKP = (($nilaiSKP1 + $nilaiSKP2 + $nilaiSKP3 + $nilaiSKP4) / 4);


        $data1 = [
            'review_kuantitas' => $this->request->getPost('kuant1'),
            'review_kualitas' => $this->request->getPost('kual1'),
            'review_waktu' => $this->request->getPost('waktu1'),
            'review_kuantitas2' => $this->request->getPost('kuant2'),
            'review_kualitas2' => $this->request->getPost('kual2'),
            'review_waktu2' => $this->request->getPost('waktu2'),
            'review_kuantitas3' => $this->request->getPost('kuant3'),
            'review_kualitas3' => $this->request->getPost('kual3'),
            'review_waktu3' => $this->request->getPost('waktu3'),
            'review_kuantitas4' => $this->request->getPost('kuant4'),
            'review_kualitas4' => $this->request->getPost('kual4'),
            'review_waktu4' => $this->request->getPost('waktu4'),
            'periode_kt' => $this->request->getPost('periode'),
            'status' => "Proses",
            'nilai' => $nilaiSKP1,
            'nilai2' => $nilaiSKP2,
            'nilai3' => $nilaiSKP3,
            'nilai4' => $nilaiSKP4,
            'nilai_skp' => $TotalnilaiSKP,
            'realisasi_nilai' => $TotalnilaiSKP,
            // 'realisasi_nilai_kt'=>$TotalnilaiSKP,
            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $sasaranModel->protect(false)
            ->update($id, $data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pt/ketua/detail_nskp/' . $id);
    }

    public function approveSasaranKT($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();


        $sasaranModel = new SasaranKTModel();

        //no1
        $waktuTarget = (int)$this->request->getPost('waktu1');

        $waktuRealisasi = (int)$this->request->getPost('waktu1');

        $kuantitasTarget1 = (int)$this->request->getPost('kuant1');

        $kuantitasRealisasi1 = (int)$this->request->getPost('kual1');

        $kualitasTarget1 = (int)$this->request->getPost('kual1');

        $kualitasRealisasi1 = (int)$this->request->getPost('kual1');

        //no2
        $waktuTarget2 = (int)$this->request->getPost('waktu2');

        $waktuRealisasi2 = (int)$this->request->getPost('waktu2');

        $kuantitasTarget2 = (int)$this->request->getPost('kuant2');

        $kuantitasRealisasi2 = (int)$this->request->getPost('kual2');

        $kualitasTarget2 = (int)$this->request->getPost('kual2');

        $kualitasRealisasi2 = (int)$this->request->getPost('kual2');

        //no3
        $waktuTarget3 = (int)$this->request->getPost('waktu3');

        $waktuRealisasi3 = (int)$this->request->getPost('waktu3');

        $kuantitasTarget3 = (int)$this->request->getPost('kuant3');

        $kuantitasRealisasi3 = (int)$this->request->getPost('kual3');

        $kualitasTarget3 = (int)$this->request->getPost('kual3');

        $kualitasRealisasi3 = (int)$this->request->getPost('kual3');

        //no4
        $waktuTarget4 = (int)$this->request->getPost('waktu4');

        $waktuRealisasi4 = (int)$this->request->getPost('waktu4');

        $kuantitasTarget4 = (int)$this->request->getPost('kuant4');

        $kuantitasRealisasi4 = (int)$this->request->getPost('kual4');

        $kualitasTarget4 = (int)$this->request->getPost('kual4');

        $kualitasRealisasi4 = (int)$this->request->getPost('kual4');

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

        //Rumus persentase3
        $totalPersentase3 = 0;

        $persenWaktu3 = 100 - (($waktuRealisasi3 / $waktuTarget3) * 100);

        if ($persenWaktu3 > 24) {
            $totalPersentase3 = 76 - ((((1.76 * $waktuTarget3 / $waktuRealisasi3) / $waktuTarget3) * 100) - 100);
        } else if ($persenWaktu3 < 24) {
            $totalPersentase3 = ((1.76 * $waktuTarget3 - $waktuRealisasi3) / $waktuTarget3) * 100;
        }

        //Rumus persentase4
        $totalPersentase4 = 0;

        $persenWaktu4 = 100 - (($waktuRealisasi4 / $waktuTarget4) * 100);

        if ($persenWaktu4 > 24) {
            $totalPersentase4 = 76 - ((((1.76 * $waktuTarget4 / $waktuRealisasi4) / $waktuTarget4) * 100) - 100);
        } else if ($persenWaktu4 < 24) {
            $totalPersentase4 = ((1.76 * $waktuTarget4 - $waktuRealisasi4) / $waktuTarget4) * 100;
        }


        //Rumus hasil kuantitas

        $perhitungan1 = (($kuantitasRealisasi1 / $kuantitasTarget1) * 100);

        $perhitungan2 = (($kuantitasRealisasi2 / $kuantitasTarget2) * 100);

        $perhitungan3 = (($kuantitasRealisasi3 / $kuantitasTarget3) * 100);

        $perhitungan4 = (($kuantitasRealisasi4 / $kuantitasTarget4) * 100);

        //Rumus Hasil Kualitas
        $perhitungan5 = (($kualitasRealisasi1 / $kualitasTarget1) * 100);

        $perhitungan6 = (($kualitasRealisasi2 / $kualitasTarget2) * 100);

        $perhitungan7 = (($kualitasRealisasi2 / $kualitasTarget3) * 100);

        $perhitungan8 = (($kualitasRealisasi4 / $kualitasTarget4) * 100);


        //Rumus Perhitungan no 1
        $perhitungan9 = $totalPersentase + $perhitungan1 + $perhitungan5;

        //Rumus Perhitungan no 2
        $perhitungan10 = $totalPersentase2 + $perhitungan2 + $perhitungan6;

        //Rumus Perhitungan no 3
        $perhitungan11 = $totalPersentase3 + $perhitungan3 + $perhitungan7;

        //Rumus Perhitungan no 4
        $perhitungan12 = $totalPersentase4 + $perhitungan4 + $perhitungan8;


        //Kotak merah
        $nilaiSKP1 = $perhitungan9 / 3;
        $nilaiSKP2 = $perhitungan10 / 3;
        $nilaiSKP3 = $perhitungan11 / 3;
        $nilaiSKP4 = $perhitungan12 / 3;

        // var_dump($perhitungan1);
        // var_dump($nilaiSKP1);
        // var_dump($nilaiSKP2);

        //Kotak hijau
        $TotalnilaiSKP = (($nilaiSKP1 + $nilaiSKP2 + $nilaiSKP3 + $nilaiSKP4) / 4);


        $data1 = [
            'realisasi_kuantitas' => $this->request->getPost('kuant1'),
            'realisasi_kualitas' => $this->request->getPost('kual1'),
            'realisasi_waktu' => $this->request->getPost('waktu1'),
            'realisasi_kuantitas2' => $this->request->getPost('kuant2'),
            'realisasi_kualitas2' => $this->request->getPost('kual2'),
            'realisasi_waktu2' => $this->request->getPost('waktu2'),
            'realisasi_kuantitas3' => $this->request->getPost('kuant3'),
            'realisasi_kualitas3' => $this->request->getPost('kual3'),
            'realisasi_waktu3' => $this->request->getPost('waktu3'),
            'realisasi_kuantitas4' => $this->request->getPost('kuant4'),
            'realisasi_kualitas4' => $this->request->getPost('kual4'),
            'realisasi_waktu4' => $this->request->getPost('waktu4'),
            'status' => "Proses",
            'nilai' => $nilaiSKP1,
            'nilai2' => $nilaiSKP2,
            'nilai3' => $nilaiSKP3,
            'nilai4' => $nilaiSKP4,
            'nilai_skp' => $TotalnilaiSKP,
            'realisasi_nilai' => $TotalnilaiSKP,
            // 'realisasi_nilai_kt'=>$TotalnilaiSKP,
            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),

        ];


        $sasaranModel->protect(false)
            ->update($id, $data1);


        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pt/ketua/detail_nskp/' . $id);
    }

    public function NSKP_Ketua()
    {
        $SasaranKTModel = new SasaranKTModel();

        $sasaranKT = $SasaranKTModel->findAll();

        $data = [
            'sasaranKT' => $sasaranKT
        ];
        return view("pt/ketua/nskp", $data);
    }

    //Tanggapan
    public function DoTanggapan($id)
    {
        $bimbinganModel = new Bimbingan();
        $bimbingan = $bimbinganModel->find($id);

        $data = [
            'bimbingan' => $bimbingan
        ];


        $bimbinganModel = new Bimbingan();


        return view("pt/ketua/do_tanggapan", $data);
    }

    public function SaveTanggapan($id)
    {

        if (!$this->validate([
            'tanggapan1' => 'required',
            'tanggapan2' => 'required',

        ])) {
            return redirect()->to('/pt/ketua/do_tanggapan/' . $id);
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

        return redirect()->to("pt/ketua/tanggapan_bimbingan");
    }

    //Bimbingan
    public function TanggapanBimbingan()
    {
        $bimbinganModel = new Bimbingan();
        $bimbingan = $bimbinganModel->getKT();

        $data = [
            'bimbingan' => $bimbingan
        ];
        return view("pt/ketua/tanggapanbimbingan", $data);
    }
}
