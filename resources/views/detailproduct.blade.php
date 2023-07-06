@extends('layouts.main')
@section('css', '/css/detailproduk.css')
@section('title','Detail product')
@section('content')
<section class="detail-produk">
    <div class="container">
        <div class="row" >
            <div class="col-md-6 img-produk">
                <img src="{{ url('product-img/' . $products->gambar) }}" alt="{{ $products->namaproduk }}" class=" h-auto rounded-t-lg">       
            </div>
            <div class="col-md-6 text-justify">
                <p class="bestdeal text-lg p-2 mb-3 text-center">BEST DEAL</p>
                <h2 class="text-2xl font-semibold">{{ $products->namaproduk }}</h2>
                <p class="text-lg mt-2 ">{{ 'Rp. ' . number_format($products->harga, 0, ',', '.') }}</p>
                <p class="mt-4 pr-10">{{ $products->deskripsi }}</p>
                <div class="mt-6">
                    <p class="mb-2 text-xl">Kategori : {{ $products->kategori }}</p>
                    <p class="mb-2 text-xl">Size : {{ $products->size }}</p>
                    <a href="https://api.whatsapp.com/send?phone=+62895320297330&text=Halo%2C%20saya%20ingin%20order%20produk%20raitopia"
                                        class="inline-block mt-10 px-4 py-2 text-white bg-red-500 rounded hover:bg-green-600">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
