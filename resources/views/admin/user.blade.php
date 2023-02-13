@extends('admin.index')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
          <li class="breadcrumb-item active">User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel User</h5>

              <div class="card-tools">
                <a href="{{ url('/form') }}" class="btn btn-tool">
                    <i class="bi bi-clipboard2-plus"></i>
                </a>
            </div>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor Handphone</th>
                    <th scope="col">Foto</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
@endsection
