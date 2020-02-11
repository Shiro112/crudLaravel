@extends('layout.main')

@section('title', 'Form Tambah Data')

@section('content')

    <div class="container">
        <div class="row mt-3">
            <div class="col-md">
                <form action="" id="form-create" method="post">
                    <div class="form-group">
                      <label for="txt-nis">NIS</label>
                      <input type="numeric" class="form-control" id="txt-nis" name="txt-nis">
                    </div>
                    <div class="form-group">
                      <label for="txt-nama">Nama</label>
                      <input type="text" class="form-control" id="txt-nama" name="txt-nama">
                    </div>
                    <div class="form-group">
                      <label for="txt-alamat">Alamat</label>
                      <textarea class="form-control" id="txt-alamat" name="txt-alamat">
                    </div>
                  </form>
            </div>
        </div>
    </div>

@endsection
