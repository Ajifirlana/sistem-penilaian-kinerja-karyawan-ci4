<?php

namespace App\Controllers;

use App\Models\AtModel;
use App\Models\KtModel;
use App\Models\PjModel;
use App\Models\PtModel;
use App\Models\UserModel;

class Home extends BaseController
{

    public function index()
    {
        return view('index');
    }

    public function login()
    {

        return view('login');
    }

    public function proses_login()
    {
        $session = \Config\Services::session();
        $session = session();


        $model = new UserModel();
        $atmodel = new AtModel();
        $ktmodel = new KtModel();

        $ptmodel = new PtModel();
        $pjmodel = new PjModel();

        $username  = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $model->where('email', $username)->first();

        $data1 = $atmodel->where('email_at', $username)
            ->join('pt', 'pt.idPT = at.idPT')
            ->join('kt', 'kt.idKT = at.idKT')
            ->first();

        $data2 = $ktmodel->where('email_kt', $username)
            ->join('pj', 'pj.idPJ = kt.idPJ')
            ->join('pt', 'pt.idPT = kt.idPT')
            ->first();

        $data3 = $ptmodel->where('email_pt', $username)
            ->join('pj', 'pj.idPJ = pt.idPJ')
            ->first();

        $data4 = $pjmodel->where('email_pj', $username)->first();

        $peran = $this->request->getPost('peran');

        if ($data1) {
            $pass = $data1['password_at'];
            $verify_pass = ($password = $pass);

            if ($verify_pass) {
                $ses_data = [
                    'id'       => $data1['idAT'],
                    'nip'     => $data1['nip_at'],
                    'nama' => $data1['nama_at'],
                    'email' => $data1['email_at'],
                    'unit' => $data1['unit_kerja_at'],
                    'surat' => $data1['no_surat_dinas_at'],
                    'periode' => $data1['periode_at'],
                    'pt' => $data1['nama_pt'],
                    'kt' => $data1['nama_kt'],

                ];
                session()->set($ses_data);
                if ($peran == 'at') {
                    return redirect()->to('/at/index/5',);
                }
                // else if($peran == 'kt')
                // {
                //     return redirect()->to('/kt/index',);
                // }
                // else if($peran == 'pt')
                // {
                //     return redirect()->to('/pt/index',);
                // }
                // else if($peran == 'pj')
                // {
                //     return redirect()->to('/pj/index',);
                // }
                else {
                    session()->setFlashdata('Peran Tidak Sesuai');
                    return redirect()->to('/login');
                }
            }
        }

        if ($data) {
            $pass = $data['password'];
            $verify_pass = ($password = $pass);

            if ($verify_pass) {
                $ses_data = [
                    'id'       => $data['idAdmin'],
                    'email'     => $data['email'],

                ];
                session()->set($ses_data);
                if ($peran == 'admin') {
                    return redirect()->to('/admin/index',);
                } else {
                    session()->setFlashdata('msg', 'Peran Tidak Sesuai!');
                    return redirect()->to('/login');
                }
            }
        }

        if ($data2) {
            $pass = $data2['password_kt'];
            $verify_pass = ($password = $pass);

            if ($verify_pass) {
                $ses_data = [
                    'id'       => $data2['idKT'],
                    'nip'     => $data2['nip_kt'],
                    'nama' => $data2['nama_kt'],
                    'email' => $data2['email_kt'],
                    'unit' => $data2['unit_kerja_kt'],
                    'surat' => $data2['no_surat_dinas_kt'],
                    'periode' => $data2['periode_kt'],
                    'pt' => $data2['nama_pt'],
                    'pj' => $data2['nama_pj'],

                ];
                session()->set($ses_data);
                if ($peran == 'kt') {
                    return redirect()->to('/kt/index/3',);
                } else {
                    session()->setFlashdata('msg', 'Peran Tidak Sesuai!');
                    return redirect()->to('/login');
                }
            }
        }

        if ($data3) {
            $pass = $data3['password_pt'];
            $verify_pass = ($password = $pass);

            if ($verify_pass) {
                $ses_data = [
                    'id'       => $data3['idPT'],
                    'nip'     => $data3['nip_pt'],
                    'nama' => $data3['nama_pt'],
                    'email' => $data3['email_pt'],
                    'unit' => $data3['unit_kerja_pt'],
                    'surat' => $data3['no_surat_dinas_pt'],
                    'periode' => $data3['periode_pt'],
                    'pj' => $data3['nama_pj'],

                ];
                session()->set($ses_data);
                if ($peran == 'pt') {
                    return redirect()->to('/pt/index/2',);
                } else {
                    session()->setFlashdata('msg', 'Peran Tidak Sesuai!');
                    return redirect()->to('/login');
                }
            }
        }

        if ($data4) {
            $pass = $data4['password_pj'];
            $verify_pass = ($password = $pass);

            if ($verify_pass) {
                $ses_data = [
                    'id'       => $data4['idPJ'],
                    'nip'     => $data4['nip_pj'],
                    'nama' => $data4['nama_pj'],
                    'email' => $data4['email_pj'],
                    // 'unit' => $data4['unit_kerja_pj'],
                    'surat' => $data4['no_surat_dinas_pj'],
                    'periode' => $data4['periode_pj'],


                ];
                session()->set($ses_data);
                if ($peran == 'pj') {
                    return redirect()->to('/pj/index/4',);
                } else {
                    session()->setFlashdata('msg', 'Peran Tidak Sesuai!');
                    return redirect()->to('/login');
                }
            }
        } else {
            session()->setFlashdata('msg', 'NIP atau Password Salah!');
            return redirect()->to('/login');
        }
    }




    public function logout()
    {

        $session = session();
        $session->destroy();

        return redirect()->to('/login');
    }
}
