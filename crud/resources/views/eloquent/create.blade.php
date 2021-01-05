    @extends('partial.main')
    {{-- menghubungkan dari yield ke template lain --}}
    @section('title')
        <h1>Tambah data eloquent</h1>
    @endsection
    @section('content')
    <div class="pull-right">
        <a href="{{url('/eloqunt')}}" class="btn btn-success mb-3">Kembali</a>
    </div>
    <form action="/eloquent" method="post">
    {{-- token --}}
    @csrf
    <div class="form-group">
        <label for="judul">judul</label>
        <input type="text" class="form-control  @error('judul') is-invalid @enderror" id="judul" name="judul"  value="{{ old('judul') }}" >
            @error('judul')
                <div class="invalid-feedback mt-2">{{ $message }}</div>
            @enderror
    </div>
        <div class="form-group">
            <label for="isi">isi :</label>
            <input type="text" class="form-control  @error('isi') is-invalid @enderror" id="isi" name="isi"  value="{{ old('isi') }}" >
            @error('isi')
                <div class="invalid-feedback mt-2">{{ $message }}</div>
            @enderror
        </div>
    <input type="text" name="jawban" value="1" hidden>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </form>


    @endsection
