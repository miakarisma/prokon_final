<?php namespace App\Controllers;
use App\Models\ProdukModel;

class Page extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }
    public function index()
    {
        $produkModel = new ProdukModel();
        $data['produk'] = $produkModel->getAllProduk();

        echo view('Page/index', $data);
    }

    public function login()
    {
        return view('Page/login');
    }
}