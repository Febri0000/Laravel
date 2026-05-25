@extends('main')

@section('title', 'Tambah Program Studi')

@section('content')
     <form action="{{ route('mahasiswa.store')}}" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Nama Mahasiswa</label>
            <input type="text" name="nama"
            class="form-control" value="{{ old
            ('nama')}}">
        </div>

        @error('nama')
           <div class="text-danger"> {{$message}}</div>    
        @enderror

        <div class="from-group">
            <label for="">NPM
            <input type="text" name="npm"
            class="form-control" value="{{ old
            ('npm')}}">
        </div>
        @error('npm')
           <div class="text-danger"> {{$message}}</div>    
        @enderror

         <div class="from-group">
            <label for="">Foto</label>
            <input type="text" name="foto"
            class="form-control" value="{{ old
            ('kaprodi')}}">
        </div>
        @error('foto')
           <div class="text-danger"> {{$message}}</div>    
        @enderror

        <div class="from-group">
            <label for="">Program Studi</label>
            <select name="fakultas_id" class="form-control">
               <option value="">Pilih Prodi</option>
               @foreach ($prodi as $row )
                     <option value="{{ $row->id }}">
                        {{ old('prodi_id') == $row->id? 'selected' : '' }}>
                        {{ $row->nama_prodi }}
                     </option>             
               @endforeach
            </select>
        </div>
        @error('prodi_id')
           <div class="text-dangger"> {{ $message}} </div>
        @enderror   

        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
@endsection