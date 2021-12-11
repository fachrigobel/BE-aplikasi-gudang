<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use CodeIgniter\HTTP\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Produk extends ResourceController
{
    use ResponseTrait;

    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        return $this->respond($this->produkModel->findAll());
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
        return $this->respond($this->produkModel->find($id));
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
        $data = [
            'nama_produk'   =>  $this->request->getVar('nama_produk')
        ];

        $this->produkModel->save($data);
        return $this->respondCreated('Data Succesfully Created!');
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
        $data = [
            'nama_produk'   =>  $this->request->getVar('nama_produk')
        ];

        $this->produkModel->update($id, $data);
        return $this->respondCreated('Data Succesfully Updated!');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
        $this->produkModel->delete($id);
        return $this->respondDeleted('Data Successfully Deleted!');
    }
}
