@extends('partial.main')
{{-- menghubungkan dari yield ke template lain --}}
@section('title')
    <h1>Query builder</h1>
@endsection
@section('content')
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">judul</th>
        <th scope="col">isi</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    @foreach ( $detail as $data)
        <th>{{$loop->iteration}}</th>
        <td>{{$data->judul}}</td>
        <td>{{$data->isi}}</td>
        <td>
            <a href="/builder" class="badge badge-info">kembali</a>
        </form>
        </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
