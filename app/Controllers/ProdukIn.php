<?php

namespace App\Controllers;

use App\Models\ProdukMasukModel;
use CodeIgniter\HTTP\ResponseTrait;
use CodeIgniter\I18n\Time;
use CodeIgniter\RESTful\ResourceController;

class ProdukIn extends ResourceController
{
    use ResponseTrait;
    protected $produkIn;

    public function __construct()
    {
        $this->produkIn = new ProdukMasukModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        return $this->respond($this->produkIn->findAll());
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        return $this->respond($this->produkIn->find($id));
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = [
            'id_produk'     => $this->request->getVar('id_produk'),
            'tanggal_masuk' => Time::now('Asia/Kuala_Lumpur'),
            'jumlah'        => $this->request->getVar('jumlah'),
        ];

        $this->produkIn->save($data);
        return $this->respondCreated('Data Succesfully Created!');
    }


    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = [
            'id_produk'     => $this->request->getVar('id_produk'),
            'jumlah'        => $this->request->getVar('jumlah'),
        ];

        $this->produkIn->update($id, $data);
        return $this->respondCreated('Data Succesfully Updated!');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->produkIn->delete($id);
        return $this->respondDeleted('Data Successfully Deleted!');
    }
}
