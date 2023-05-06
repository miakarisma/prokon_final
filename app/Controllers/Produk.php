<?php namespace App\Controllers;
use App\Models\ProdukModel;

class Produk extends BaseController
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

        echo view('produk/index', $data);
    }

    public function create()
    {
        return view('produk/create');
    }

    public function save()
    {
        $rules = [
            'productName' => 'required|min_length[3]|max_length[45]',  
            'price' => 'required', 
            'description' => 'required', 
            'image' => 'is_image[image]|max_size[image,10240]|mime_in[image,image/png,image/jpg,image/jpeg,image/webp]',
        ];
        if($this->request->is('post') && $this->validate($rules))
        {
            $imageFile = $this->request->getFile('image');
            if($imageFile->getError() == 4){
                $imageName = "default.jpg";
            }else{
                $imageName = $imageFile->getRandomName();
                $imageFile->move('img', $imageName); 
            }           

            $this->produkModel->save([
                'nama_produk' => $this->request->getVar('productName'),
                'harga' => $this->request->getVar('price'),
                'deskripsi' => $this->request->getVar('description'),
                'gambar' => $imageName,
            ]);

            return redirect()->to(base_url('/page'));
        }else{
            // echo "aaa";
            return view('produk/create');
        }

    }
    public function delete($id)
    {
        $product = $this->produkModel->find($id);
        if($product['gambar'] != 'default.jpg'){
            unlink('img/' . $product['gambar']);
        }

        $this->produkModel->delete($id);
        return redirect()->to(base_url('/page'));
    }
    public function edit($id){ // id ieu kedahna
        $data = [
            'produk' => $this->produkModel->getProdukById($id)
        ];

        return view('produk/edit', $data);
        // Sok cobian, aa mah kurang panah hungkul_-
        // $data['produk'] = $this->produkModel->getProdukById($id); ril or fek te tiasa : Can't find a route for 'get: produk/edit2'.
        // sok cobian deui angger teh NAHA produk/edit teh kan folder Produk file edit kitu?
        // return view('produk/edit', $data); te apal fungsi edit ketang id na 2 
        // Hah id na 2 kumaha?
        // id produk, janten parameter di fungsi edit
        // Tinggal ka page edit
    }
    public function update($id){
        // $this->produkModel->save([ // edit na ge eror keneh ketang
        //     // muhun pan ieu teh fungsi edit?
        //     // edit mah luhur
        // ]);
        // $validation = \Config\Services::validation();
        // $validation->setRules(['username' => 'required|min_length[5]|max_length[50]',  'email' => 'required|valid_email',    'password' => 'required|min_length[8]']);
        $rules = [
            'productName' => 'required|min_length[3]|max_length[45]',  
            'price' => 'required',
            'description' => 'required', 
            'image' => 'is_image[image]|max_size[image,10240]|mime_in[image,image/jpg,image/jpeg,image/png]',
        ];
        if($this->request->is('post') && $this->validate($rules))
        {
            $imageFile = $this->request->getFile('image');
            if($imageFile->getError() == 4){
                $imageName = $this->request->getVar('imagePrevName');
            }else{
                $imageName = $imageFile->getRandomName();
                $imageFile->move('img',$imageName);

                if($this->request->getVar('imagePrevName') != 'default.jpg'){
                    unlink('img/' . $this->request->getVar('imagePrevName'));
                }
            }

            $this->produkModel->save([
                'id' => $id,
                'nama_produk' => $this->request->getVar('productName'),
                'harga' => $this->request->getVar('price'),
                'deskripsi' => $this->request->getVar('description'),
                'gambar' => $imageName,
            ]);
            return redirect()->to(base_url('/page'));
        }else{
            return redirect()->to('/produk/edit/'.$id);
        }
        // nu validate eror keneh
        
        // IEU NU MANA NU TEU ACAN BERES NA A?
    }
}