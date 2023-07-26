@extends('layouts.layoutclient')

@section('title', 'Katalog')

@section('content')

    <div class ="row">
        <div class ="col-12 col-sm-100">

        </div>

        <div class ="col-12 col-sm-6">
            <div class="input-group mb-3">
                <input >
            </div>
        </div>
    </div>

<div class="my-5">
    <div></div>
    <form action="" method="get">
    <div class ="row">
        <div class ="col-24 col-sm-5">
            <select name="category" id="category" class="form-control">
                <option value="">Select Category</option>
                @foreach ($categories as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>

        <div class ="col-24 col-sm-5">
            <div class="input-group mb-3">
                <input type="text" name="nama_mobil" class="form-control" placeholder="Search nama mobil">
                
            </div>
        </div>
        <div class ="col-24 col-sm-2"> <div class="input-group mb-3"><button class="btn btn-primary" type="submit">Search</button></div></div>
    </div>
</form>
    <div class=row>
        @foreach ($katalog as $item)
        <div class="col-lg-4 col-md-5 col-sm-6 mb-3">
            <div class="card">
                <img src="{{asset('storage/cover/'.$item->cover)}}" class="card-img-top"
                draggable="false">
                <div class="card-body">
                    <h5 class="card-title">{{$item->nama_mobil}}</h5>
                    <p class="card-text">Nopol: {{$item->nopol}}</p>
                    <p class="card-text fw-bold currency">Harga Sewa: {{number_format($item->harga)}} /Hari</p>
                    <p class="card-text text-end fw-bold {{ $item->status == 'Tersedia' ? 'text-success' 
                        : 'text-danger'}}"> {{$item->status}} </p>
                    <a href="pesan" class="btn btn-primary center">Sewa Mobil</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection