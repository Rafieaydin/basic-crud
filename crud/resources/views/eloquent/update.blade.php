    @extends('partial.main')
    {{-- menghubungkan dari yield ke template lain --}}
    @section('title')
        <h1>Ubah data eloquent</h1>
    @endsection
    @section('content')
    <div class="pull-right">
        <a href="{{url('/eloquent')}}" class="btn btn-success">Kembali</a>
    </div>
                {{-- masukan id --}}
    <form action="/eloquent/{{$eloquent->id}}" method="post">
        {{-- method --}}
        @method('put')
    {{-- token --}}
    @csrf
    <div class="form-group">
        <label for="judul">judul</label>
        <input type="text" class="form-control  @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul',$eloquent->Judul)}}">

        @error('judul')
            <div class="invalid-feedback mt-2">{{ $message }}</div>
        @enderror
    </div>
     <div class="form-group">
        <label for="isi">pertanyaan :</label>
        <input type="text" class="form-control  @error('isi') is-invalid @enderror" id="isi" name="isi" value="{{ old('isi',$eloquent->isi)}}"  >

        @error('isi')
            <div class="invalid-feedback mt-2">{{ $message }}</div>
        @enderror
     </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </form>


    @endsection
