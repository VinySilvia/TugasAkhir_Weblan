<?php

namespace App\Controllers;
use App\Models\Dokter_model;

class Dokter extends BaseController
{
    public function index()
    {

        $model = new Dokter_model();
        $data['dokter'] = $model->getDokter()->getResultArray();

        echo view('dokter/view_dokter', $data);
    }

	public function save()
	{
		$model = new Dokter_model();
		$data = array(
			'kode_dokter' => $this->request->getPost('kode_dokter'),
			'nama_dokter' => $this->request->getPost('nama_dokter'),
			'spesialis' => $this->request->getPost('spesialis'),
			'nohp_dokter' => $this->request->getPost('nohp_dokter'),
			'alamat_dokter' => $this->request->getPost('alamat_dokter'),
			'jadwal_praktek' => $this->request->getPost('jadwal_praktek'),
		);
		$model->saveDokter($data);
		return redirect()->to('/dokter');
	}

	



    

}
