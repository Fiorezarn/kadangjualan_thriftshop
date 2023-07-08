@extends('layouts.main')
@section('css', '/css/style.css')

@section('content')

<section class="bg-center bg-no-repeat bg-gray-700 bg-blend-multiply hero" id="header-home">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Selamat datang di Kadang Jualan Thrifting Unik!</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Berani Berbeda dengan Thrifting - Tampil Beda, Tapi Tak Bikin Kantong Jebol!</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="#produk-thrifting" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Lihat Produk
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a> 
        </div>
    </div>
</section>

<section>
    <div class="w-200 m-10 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="sm:hidden">
            <label for="tabs" class="sr-only">Select tab</label>
            <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Statistics</option>
                <option>Keuntungan</option>
                <option>FAQ</option>
            </select>
        </div>
        <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
            <li class="w-full">
                <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Statistics</button>
            </li>
            <li class="w-full">
                <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Services</button>
            </li>
            <li class="w-full">
                <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">FAQ</button>
            </li>
        </ul>
        <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800 " id="stats" role="tabpanel" aria-labelledby="stats-tab">
                <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-2 xl:grid-cols-4 dark:text-white sm:p-8">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">100K+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Pengunjung</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">100K+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Item Vintage</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">5++</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Rating</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">1K+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Brand</dd>
                    </div>
                </dl>
            </div>
            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">Keuntungan yang anda dapatkan</h2>
                <!-- List -->
                <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                    <li class="flex space-x-2 items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        <span class="leading-tight">Meningkatkan kreativitas dalam berpakaian</span>
                    </li>
                    <li class="flex space-x-2 items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        <span class="leading-tight">Menemukan barang langka</span>
                    </li>
                    <li class="flex space-x-2 items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        <span class="leading-tight">Peningkatan kesadaran akan mode berkelanjutan</span>
                    </li>
                    <li class="flex space-x-2 items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        <span class="leading-tight">Berbelanja dengan nilai lebih</span>
                    </li>
                    <li class="flex space-x-2 items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        <span class="leading-tight">Pengalaman berbelanja yang unik</span>
                    </li>
                    <li class="flex space-x-2 items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        <span class="leading-tight">Menjaga baju-baju vintage tetap hidup</span>
                    </li>
                </ul>
            </div>
            <div class="hidden p-4 bg-white rounded-lg dark:bg-gray-800" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                    <h2 id="accordion-flush-heading-1">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                        <span>Bagaimana metode pembayaran yang tersedia?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Kami menerima pembayaran melalui transfer bank BCA. Setelah Anda mengirimkan pesanan, tim kami akan menghubungi Anda melalui WhatsApp yang tercantum untuk memberikan detail pembayaran dan instruksi transfer.</p>
                        </div>
                    </div>
                    <h2 id="accordion-flush-heading-2">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                        <span>Apakah ada konfirmasi pembayaran yang harus dilakukan?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Ya, setelah Anda melakukan transfer pembayaran, Anda harus melakukan konfirmasi pembayaran melalui WhatsApp. Kami akan menyediakan nomor WhatsApp yang dapat Anda hubungi untuk melakukan konfirmasi. Mohon sertakan bukti transfer dan informasi pesanan Anda agar kami dapat memproses pesanan dengan cepat.</p>
                        </div>
                    </div>
                    <h2 id="accordion-flush-heading-3">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                        <span>Berapa lama waktu pemrosesan dan pengiriman pesanan?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Bagaimana cara memesan baju trifhting melalui website ini?</p>
                            <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                <li><p  class="text-blue-600 dark:text-blue-500">Telusuri koleksi baju trifhting yang tersedia di website.</p></li>
                                <li><p  class="text-blue-600 dark:text-blue-500">Pilih ukuran, warna, dan kuantitas yang Anda inginkan.</p></li>
                                <li><p  class="text-blue-600 dark:text-blue-500">Klik tombol "Detail" untuk melihat detail dari produk.</p></li>
                                <li><p  class="text-blue-600 dark:text-blue-500">Klik tombol "Beli Sekarang" untuk melakukan transaksi.</p></li>
                                
                            </ul>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-2">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                        <span>Apakah ada biaya pengiriman yang harus dibayarkan?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Biaya pengiriman akan ditanggung oleh pembeli. Kami akan menghitung biaya pengiriman berdasarkan lokasi pengiriman dan berat paket. Biaya pengiriman akan diinformasikan kepada Anda sebelum Anda melakukan pembayaran.</p>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-2">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                        <span>Apakah ada kebijakan pengembalian atau penukaran barang?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Ya, kami menerima pengembalian atau penukaran barang dalam waktu 7 hari setelah pesanan diterima, dengan catatan barang yang dikembalikan atau ditukar dalam kondisi baru dan belum digunakan. Untuk informasi lebih lanjut tentang prosedur pengembalian atau penukaran barang, silakan hubungi tim kami melalui WhatsApp.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section  id="produk-thrifting">
    <div class=" text-4xl font-extrabold text-center">
        <h3 >Produk Thrifting</h3>
    </div>
    <div class="container mt-5">
    
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3">
            @foreach ($product as $item)
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="mb-3 rounded-t-lg" src="{{ url('product-img/' . $item->gambar) }}" alt="{{ $item->namaproduk }}"/>
                <div class="px-5 pb-5">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $item->namaproduk }}</h5>
                    <div class="flex items-center mt-2.5 my-3">
                        <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">{{ 'Rp. ' . number_format($item->harga, 0, ',', '.') }}</span>
                    </div>
                    @auth
                    <a href="https://wa.me/081287935402?text=Pembayaran%20Via%20BCA%2077654342.%0AFormat%20Pesanan%20Kadang%20Jualan%0ANama%20Barang%20:{{ $item->namaproduk }}%0AHarga%20:{{ $item->harga }}%0AKategori%20:{{ $item->kategori }}%0AHarga%20:{{ $item->harga }}%0A%0ANama%20Penerima%20:%0AAlamat%20:" class="inline-block mt-4 px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600">Beli Sekarang</a>
                    <a href="/product/detailproduct/{{ $item->id }}" class="inline-block mt-4 px-4 py-2 text-white bg-green-500 rounded hover:bg-600">Detail</a>
                     @else
                     <a href="{{route('login')}}" class="inline-block mt-4 px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600">Beli Sekarang</a>
                     <a href="{{route('login')}}" class="inline-block mt-4 px-4 py-2 text-white bg-green-500 rounded hover:bg-600">Detail</a>
                    @endauth

                </div>
            </div>

            @endforeach
        </div>
    </div>

</section>


<section id="contact">    
    <div class="section-header">
      <div class="container">
        <h2>Contact Us</h2>
    </div>
    </div>
    
    <div class="container">
      <div class="row">
        
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-home"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Address</h4>
              <p>jl.danau kerinci 2 no.7</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-phone"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Phone</h4>
              <p>+62 812-8793-5402</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-envelope"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Email</h4>
             <p>pampampramq@gmail.com</p>
            </div>
          </div>
        </div>
        
        <div class="contact-form">
        @if(Session::has('message_sent'))
          <div class="alert alert-success" role="alert">
              {{ Session::get('message_sent') }}
          </div>
        @endif
          <form action="{{ route('contact.send') }}" method="post" role="form" enctype="multipart/form-data" id="contact-form">
          @csrf
            <h2>Send Message</h2>
            <div class="input-box">
              <input type="text" required="true" name="name">
              <span>Full Name</span>
            </div>
            
            <div class="input-box">
              <input type="email" required="true" name="email">
              <span>Email</span>
            </div>
            
            <div class="input-box">
              <textarea required="true" name="message"></textarea>
              <span>Type your Message...</span>
            </div>
            
            <div class="input-box">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send Message</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </section>


<footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="{{ url('/') }}" class="hover:underline">Kadang Jualan™</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="{{ url('/') }}#header-home" class="mr-4 hover:underline md:mr-6 ">Home</a>
        </li>
        <li>
            <a href="{{ url('/') }}#produk-thrifting" class="mr-4 hover:underline md:mr-6">Produk</a>
        </li>
        <li>
            <a href="{{ url('/') }}#contact" class="hover:underline">Contact Us</a>
        </li>
    </ul>
    </div>
</footer>
@endsection
