<!DOCTYPE html>
<html lang="en">

@include('admin.head')

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    @include('admin.navbar')

    @include('admin.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Daftar Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <a href="/produk/add" class="btn btn-primary btn-sm">Add Product</a>
        <br><br>

        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-check"></i>Success</h5>
          {{ session('pesan') }}
        </div>
        @endif
        <table class="table table-bordered">
          <thead>
            <tr>
              <td>No</td>
              <td>Nama Produk</td>
              <td>Gambar</td>
              <td>Size</td>
              <td>Harga</td>
              <td>Deskripsi</td>
              <td>Kategori</td>
              <td width="200px">Action</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($produk as $item)
            <tr>
              <td>{{ $item->no }}</td>
              <td>{{ $item->namaproduk }}</td>
              <td><img src="{{url('product-img/',$item->gambar)}}" width="100px"></td>
              <td>{{ $item->size }}</td>
              <td>{{ $item->harga }}</td>
              <td>{{ $item->deskripsi }}</td>
              <td>{{ $item->kategori }}</td>
              <td>
                <a href="/produk/detailproduk/{{ $item->id }}" class="btn btn-sm btn-success">Detail</a>
                <a href="produk/edit/{{ $item->id }}" class="btn btn-sm btn-warning">Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $item->id}}">
                  Delete
                </button>
              </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="delete{{ $item->id }}">
              <div class="modal-dialog">
                <div class="modal-content bg-danger">
                  <div class="modal-header">
                    <h4 class="modal-title">{{ $item->namaproduk }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Apakah Anda Ingin Menghapus Data?</p>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
                    <a href="/produk/delete/{{ $item->id }}" class="btn btn-outline-light">Iya</a>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            @endforeach
          </tbody>

        </table>
      </div><!-- /.content-header -->
    </div><!-- /.content-wrapper -->

    @include('admin.footer')

    @include('admin.script')
  </div><!-- /.wrapper -->
</body>

</html>
