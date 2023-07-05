@extends('layouts.main')
@section('css', '/css/detail.css')
@section('title','Detail product')
@section('content')
<div class="container mx-auto">
    <div class="flex justify-center items-center min-h-screen">
        <div class="w-full md:w-2/3 lg:w-1/2">
            <div class="bg-white shadow-lg rounded-lg">
                <img src="{{ url('product-img/' . $products->gambar) }}" alt="{{ $products->namaproduk }}"
                    class="w-full h-auto rounded-t-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold">{{ $products->namaproduk }}</h2>
                    <p class="text-lg mt-2">{{ 'Rp. ' . number_format($products->harga, 0, ',', '.') }}/kg</p>
                    <p class="mt-4">{{ $products->deskripsi }}</p>
                    <div class="mt-6">
                        <p class="mb-2">Size : {{ $products->size }}</p>
                        <p class="mb-2">Kategori : {{ $products->kategori }}</p>
                        <a href="https://api.whatsapp.com/send?phone=+62895320297330&text=Halo%2C%20saya%20ingin%20order%20produk%20raitopia"
                            class="inline-block px-4 py-2 text-white bg-red-500 rounded hover:bg-blue-600">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
