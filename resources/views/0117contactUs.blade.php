@extends('layout.0117main')

@section('container')
<div class="row">
  <div class="col-sm-4">
    <img src="/images/Dika.jpeg" width="300">  
  </div>
  <div class="col-sm-6">
    <!-- <h1>Halaman Contact Us </h1> -->
    <h3>{{ $nama }}</h3>
    <p>Kontak    : {{ $kontak }}</p>  
    <p>Email     : {{ $email }}</p> 
    <img src="/images/Ig.jpg" width="25">{{ $ig }}
    <br><img src="/images/twt.png" width="40">{{ $twt }}
    <br><img src="/images/ytb.jpg" width="40">{{ $ytb }}
    <br><a href="/"> Balik Ke Home </a>
  </div>
</div>
@endsection
