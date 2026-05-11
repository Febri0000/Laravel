@extends('main')

@section('title', 'Tambah Prodi')

@section('content')
     <form action="{{ route('prodi.store')}}" method="post">
        <div class="form-group">
            <label for="">Nama Prodi</label>
            <input type="text" name="nama_fakultas"
            class="form-control" value="{{ old
            ('nama_prodi')}}">
        </div>

        @error('nama_fakultas')
           <div class="text-danger"> {{$message}}</div>    
        @enderror

        <div class="from-group">
            <label for="">Singkatan</label>
            <input type="text" name="singkatan"
            class="form-control">
        </div>
        
        @error('singkatan')
           <div class="text-danger"> {{$message}}</div>    
        @enderror

        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
@endsection