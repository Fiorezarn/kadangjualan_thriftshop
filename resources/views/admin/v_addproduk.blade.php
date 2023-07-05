<!DOCTYPE html>
<html lang="en">

@include('admin.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('AdminLTE/dist') }}//img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
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
                            <h1 class="m-0">Add Produk</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <form action="/produk/insert" method="POST" enctype="multipart/form-data">
                        @csrf
    
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Id</label>
                                        <input name="id" class="form-control" value="{{ old('id') }}">
                                            <div class="text-danger">
                                            @error('id')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">No</label>
                                        <input name="no" class="form-control" value="{{ old('no') }}">
                                        <div class="text-danger">
                                        @error('no')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nama Produk</label>
                                        <input name="namaproduk" class="form-control" value="{{ old('namaproduk') }}">
                                        <div class="text-danger">
                                        @error('namaproduk')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Gambar</label>
                                        <input type="file" name="gambar" class="form-control">
                                        <div class="text-danger">
                                        @error('gambar')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Size</label>
                                        <input name="size" class="form-control" value="{{ old('size') }}">
                                        <div class="text-danger">
                                        @error('size')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input name="harga" class="form-control" value="{{ old('harga') }}">
                                        <div class="text-danger">
                                        @error('harga')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <input name="deskripsi" class="form-control" value="{{ old('deskripsi') }}">
                                        <div class="text-danger">
                                        @error('deskripsi')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Kategori</label>
                                        <input name="kategori" class="form-control" value="{{ old('kategori') }}">
                                        <div class="text-danger">
                                        @error('kategori')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    </div>


                                    <div class="form-group">
                                        <a href="/produk" class="btn btn-danger btn-sm">Close</a>
                                        <button class="btn btn-primary btn-sm">Save</button>
                                    </div>
                    </form>
                </div>
            </div>
        </div>
                </div><!-- /.container-fluid -->
            </div>
    </div>

</div>
    @include('admin.footer')


    @include('admin.script')
</body>

</html>
