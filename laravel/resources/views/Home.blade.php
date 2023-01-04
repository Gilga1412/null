@extends('MainBody.Main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-3">
                <img src="img/LW barbatos shop.png"class="rounded mx-auto d-block " alt="logo" width="400">
            </div>
            <div class="searchbar">
                <div class="col-md-12">
                    <form action="/search" class="d-flex">
                        <input type="search" class="form-control me-2" placeholder="Search" aria-label="search"
                            name="search">
                        <button class="btn btn-outline-dark bi bi-search" type="submit"></button>
                    </form>
                </div>
            </div>
            <!--break-->
            @foreach ($barangs as $barang)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ url('tumbnail') }}/{{ 'model' }}/{{ $barang->gambar }}" class="card-img-top" alt="img Barang">
                        <div class="card-body">
                            <h5 class="card-title">{{ $barang->Nama_Barang }}</h5>
                            <p class="card-text">{{ $barang->Keterangan }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
