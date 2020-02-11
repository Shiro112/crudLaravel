@extends('layout.main')

@section('title', 'Detail Data')

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <h3>{{ $student->nama }}</h3>
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{ $student->nis }}</h5>
                  <p class="card-text">{{ $student->alamat }}</p>
                  <p class="card-text">{{ $student->jurusan }}</p>
                  <a href="{{url('/student')}}" class="btn btn-outline-success float-right">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
