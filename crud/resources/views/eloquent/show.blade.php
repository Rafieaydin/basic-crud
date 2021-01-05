@extends('partial.main')
{{-- menghubungkan dari yield ke template lain --}}
@section('title')
    <h1>Query eloquent</h1>
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
        <th>1</th>
        <td>{{$eloquent->Judul}}</td>
        <td>{{$eloquent->isi}}</td>
        <td>
            <a href="/eloquent" class="badge badge-info">kembali</a>
        </form>
        </td>
        </tr>
    </tbody>
</table>
@endsection
