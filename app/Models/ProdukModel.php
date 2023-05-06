<?php namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model{
    protected $table= 'produk';
    protected $allowedFields = ['nama_produk','harga','deskripsi','gambar'];

    public function getAllProduk(){
        return $this->findAll();
    }    
    public function getProdukById($id){
        return $this->where(['id' => $id])->first();
    }
}

?>