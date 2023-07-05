<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->Product = new Product();
    }

    public function index () {
        $data = [
            'produk' => $this->Product->get()
        ];
    return view ('admin.v_dataproduk', $data);
    }

    public function detail($id)
    {
        if (!$this->Product->detailData($id)) {
            abort(404);
        }
        $data = [
            'produk'=> $this->Product->detailData($id),
        ];
        return view('admin.v_detailproduk', $data);
    }

    public function add()
    {
        return view ('admin.v_addproduk');
    }

    public function insert()
    {
        Request()->validate([
            'id' => 'nullable|unique:products,id|min:1|max:6',
            'no' => 'required|integer',
            'namaproduk' => 'required',
            'size' => 'required',
            'harga' => 'required|integer',
            'gambar' => 'required|mimes:jpg,jpeg,png,webp|max:1000',
            'deskripsi' => 'required',
            'kategori' => 'required',
        ],[
            'id.required' => 'wajib diisi !!',
            'id.unique' => 'id Sudah Ada !!',
            'id.min' => 'Min 1 Karakter',
            'id.max' => 'Max 6 Karakter'
        ]);

        //jika validasi tidak ada maka lakukan simpan data
        //upload photo
        $file = Request()-> gambar;
        $fileName = Request()->namaproduk.'.'.$file->extension();
        $file->move(public_path('product-img'), $fileName);

        $data = [
            'id' => Request()->id,
            'no' => Request()->no,
            'namaproduk' => Request()->namaproduk,
            'size' => Request()->size,
            'harga' => Request()->harga,
            'gambar' => $fileName,
            'deskripsi' => Request()->deskripsi,
            'kategori' => Request()->kategori,
        ];

        $this->Product->addData($data);
        return redirect()->route('produk')->with('pesan','Data Berhasil Di Tambahkan !!');
    }
    public function edit($id)
    {
        if (!$this->Product->detailData($id)) {
            abort(404);
        }
        $data = [
            'produk'=> $this->Product->detailData($id),
        ];
        return view ('admin.v_editproduk', $data);
    }
    public function update($id)
    {
        Request()->validate([
            'id' => 'nullable|min:1|max:6',
            'no' => 'required|integer',
            'namaproduk' => 'required',
            'size' => 'required',
            'harga' => 'required|integer',
            'gambar' => 'mimes:jpg,jpeg,png,webp|max:1000',
            'deskripsi' => 'required',
            'kategori' => 'required',
        ],[
            'id.required' => 'wajib diisi !!',
            'id.unique' => 'id Sudah Ada !!',
            'id.min' => 'Min 1 Karakter',
            'id.max' => 'Max 6 Karakter'
        ]);

        //jika validasi tidak ada maka lakukan simpan data
        if (Request()->gambar <> "") {
        //jika ingin ganti foto
        //upload photo
        $file = Request()-> gambar;
        $fileName = Request()->namaproduk.'.'.$file->extension();
        $file->move(public_path('product-img'), $fileName);

        $data = [
            'id' => Request()->id,
            'no' => Request()->no,
            'namaproduk' => Request()->namaproduk,
            'size' => Request()->size,
            'harga' => Request()->harga,
            'gambar' => $fileName,
            'deskripsi' => Request()->deskripsi,
            'kategori' => Request()->kategori,
        ];

        $this->Product->editData($id, $data);
        }else {
            //jika tidak ingin ganti foto
            $data = [
            'id' => Request()->id,
            'no' => Request()->no,
            'namaproduk' => Request()->namaproduk,
            'size' => Request()->size,
            'harga' => Request()->harga,
            'deskripsi' => Request()->deskripsi,
            'kategori' => Request()->kategori,
            ];
            $this->Product->editData($id, $data);
        }
        return redirect()->route('produk')->with('pesan','Data Berhasil Di Update !!');
    }
    public function delete($id)
    {
        //hapus foto
        $produk = $this->Product->detailData($id);
        if ($produk->gambar <> "") {
            unlink(public_path('product-img') . '/' . $produk->gambar);
        }   
        $this->Product->deleteData($id);
        return redirect()->route('produk')->with('pesan','Data Berhasil Di Hapus !!');
    }
}
