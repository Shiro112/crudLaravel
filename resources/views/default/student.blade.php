@extends('layout.main')

@section('title', 'CRUD with Laravel')

@section('content')

    <div class="container">
        <div class="row mt-3">
            <div class="col-md">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    </div>
                    <div class="form-group col-md-6">
                    <a href="{{url('/student/create')}}" class="btn btn-success float-right">Tambah Data</a>
                    </div>
                </div>
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $s)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $s->nis }}</td>
                            <td>{{ $s->nama }}</td>
                            <td>
                            <a href="/student/{{ $s->id }}" class="badge badge-primary">Detail</a>
                                <a href="" class="badge badge-warning">Edit</a>
                                <a href="" class="badge badge-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection
