<?php

namespace App\Controllers;

use \App\Models\KomikModel;

class Komik extends BaseController
{

    protected $komikmodel;

    public function __construct()
    {
        $this->komikmodel = new KomikModel();
    }

    public function index()
    {
        // $komik = $this->komikmodel->getKomik();  sebelum ditambah method getKomik di Model pake ini

        $komik = $this->komikmodel->findall();

        $data = [
            'title' => 'Daftar Komik',
            'komik' => $komik
        ];

        return view('komik/index', $data);
    }


    public function detail($slug)
    {
        $komik = $this->komikmodel->getKomik($slug);

        $data = [
            'title' => 'Detail Komik',
            'row' => $komik
        ];

        // if (empty($data['komik'])) {
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Komik ' .  $slug  . ' Tidak Ditemukan');
        // }

        return view('komik/detail', $data);
    }


    public function create()
    {

        $data = [
            'title' => 'Create Data'
        ];

        return view('komik/create', $data);
    }

    public function save()
    {


        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->komikmodel->save(
            [
                'judul' => $this->request->getVar('judul'),
                'slug' => $slug,
                'penulis' => $this->request->getVar('penulis'),
                'penerbit' => $this->request->getVar('penerbit'),
                'sampul' => $this->request->getVar('sampul')

            ]
        );


        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/komik');
    }
}
