@extends('layouts.layoutadmin')

@section('title', 'Add Katalog')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

<div class="pagetitle">
<h1>Tambah Data Mobil</h1>
      <nav>
      </nav>
    </div>

    <div class="mt-5">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form action="mobil-add" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nopol" class="form-label">Nopol</label>
                <input type="text" name="nopol" id="nopol" class="form-control" placeholder="Isi Nopol">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Mobil</label>
                <input type="text" name="nama_mobil" id="name" class="form-control" placeholder="Nama Mobil">
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Gambar Mobil</label>
                <input type="file" name="images" id="images" class="form-control" placeholder="Nama Mobil">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga Sewa</label>
                <input type="number" name="harga" id="harga" class="form-control" placeholder="Harga Sewa">
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="categories[]" id="category" class="from-control select-multiple" multiple>
                    @foreach ($categories as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
</select>
            </div>

<div>
    <button class="btn btn-success mt-3" type="submit">Simpan</button>
</div>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js "></script>
<script>
$(document).ready(function() {
    $('.select-multiple').select2();
});</script>
@endsection