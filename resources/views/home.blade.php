<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
@extends('layouts.app')
<link href="{{ asset('css/styless.css') }}" rel="stylesheet">
@section('content')
<div class="wrapper">
    <div class="section">
        <br><br>
            <h1><b>Wooden Art </b> <br> Studio Furniture</h1>
            <p>Wooden Art Strudo Furniture adalah perusahaan yang bergerak di bidang ritel furniture yang terdaftar dengan brand Wooden Art,
            memiliki tujuan utama untuk memenuhi berbagai macam kebutuhan furniture perumahan, perkantoran dan instansi atau lembaga-lembaga yang ada di indonesia.<br>
         	Sofa terbaik Wooden Art, dengan desain dan material kualitas baik dengan harga terjangkau, melengkapi hari-hari Anda di rumah yang nyaman dan penuh kebahagiaan.
        </p>
          
        <a href="{{ url('/') }}"><button class="btn-1">Get Started</button></a>
    </div>
<!--END OF SECTION-->
</div>
<!--END OF WRAPPER-->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <!-- <img src="{{ url('images/avatar.png') }}" class="rounded mx-auto d-block" width="300" alt=""> -->
        </div>
        @foreach($barangs as $barang)
        <div class="col-md-4">
            <div class="card">
              <img src="{{ url('uploads') }}/{{ $barang->gambar }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                    <strong>Stok :</strong> {{ $barang->stok }} <br>
                    <hr>
                    <strong>Keterangan :</strong> <br>
                    {{ $barang->keterangan }} 
                </p>
                <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
              </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>
@endsection
