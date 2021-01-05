@extends('partial.main')
{{-- menghubungkan dari yield ke template lain --}}
@section('title')
    <h1>Query builder</h1>
@endsection
@section('content')
<div class="mb-3">
    <a href="{{'/builder/create'}}" class="btn btn-primary">Tambah Data [ + ]</a>
</div>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">judul</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($builder as $tanya)
        <tr>
        <th>{{$loop->iteration}}</th>
        <td>{{$tanya->judul}}</td>
        <td>
            <a href="/builder/{{$tanya->id}}" class="badge badge-info">detail</a>
            <a href="/builder/{{$tanya->id}}/edit" class="badge badge-success">update</a>
        <form action="/builder/{{$tanya->id}}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="badge badge-danger">hapus</button>
        </form>
        </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
