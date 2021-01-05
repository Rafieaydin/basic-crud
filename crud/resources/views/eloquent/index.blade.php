@extends('partial.main')
{{-- menghubungkan dari yield ke template lain --}}
@section('title')
    <h1>Query eloquent</h1>
@endsection
@section('content')
<div class="mb-3">
    <a href="{{'/eloquent/create'}}" class="btn btn-primary">Tambah Data [ + ]</a>
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
    @foreach ($eloquent as $tanya)
        <tr>
        <th>{{$loop->iteration}}</th>
        <td>{{$tanya->Judul}}</td>
        <td>
            <a href="/eloquent/{{$tanya->id}}" class="badge badge-info">detail</a>
            <a href="/eloquent/{{$tanya->id}}/edit" class="badge badge-success">update</a>
        <form action="/eloquent/{{$tanya->id}}" method="POST" class="d-inline">
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
