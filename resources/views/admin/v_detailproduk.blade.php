<!DOCTYPE html>
<html lang="en">

@include('admin.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('adminLTE/dist') }}//img/adminLogo.png" alt="adminLogo" height="60"
                widtd="60">
        </div> --}}

        @include('admin.navbar')

        @include('admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <table class="table">
        <tr>
            <th width="100px">No</th>
            <th width="30px">:</th>
            <th>{{ $produk->no }}</th>
        </tr>
        <tr>
            <th width="100px">Nama Wisata</th>
            <th width="30px">:</th>
            <th>{{ $produk->namaproduk }}</th>
        </tr>
        <tr>
            <th width="100px">Size</th>
            <th width="30px">:</th>
            <th>{{ $produk->size }}</th>
        </tr>
        <tr>
            <th width="100px">Harga</th>
            <th width="30px">:</th>
            <th>{{ $produk->harga }}</th>
        </tr>
        <tr>
            <th width="100px">Deskripsi</th>
            <th width="30px">:</th>
            <th>{{ $produk->deskripsi }}</th>
        </tr>
        <tr>
            <th width="100px">Kategori</th>
            <th width="30px">:</th>
            <th>{{ $produk->kategori }}</th>
        </tr>
        <tr>
            <th width="100px">Gambar</th>
            <th width="30px">:</th>
            <th><img src="{{url('product-img/',$produk->gambar)}}" width="100px"></th>
        </tr>
        <tr>
            <th><a href="/produk" class="btn btn-success btn-sm">Back</a></th>
        </tr>
    </table>
  </div>
  
</div>
@include('admin.footer')

    @include('admin.script')
</body>

</html>
