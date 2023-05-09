@extends('layout/main')
@section('konten')
    <nav class=" navbar navbar-light">
        <div class="container">
            <a href="https://bemilkomunsri.org/" class=" navbar-brand mb-0">
                <img src="{{ asset('assets/img/logobem23.png') }}" width="50px">
                <span id="span1">BEM KM FASILKOM UNSRI</span>
            </a>
            <form action="" class=" d-flex">
                <a href="/logout" class=" btn btn-outline-danger" style="color: white">Logout</a>
            </form>
        </div>
    </nav>
    <div class="form-link">
        <h1>Form Ubah Data Link</h1>
        <div class="line"></div>
        <a href="/detail/{{ $linkdetail->id }}">
            <div class="back-button">
                <img src="{{ asset('assets/img/back.png') }}" alt="">
            </div>
        </a>
        <form method="POST" action="/detail/edit/{{ $linkdetail->id }}">
            @csrf
            @method('PUT')
            <div class="title">
                <p>bemilkomunsri.org/</p>
            </div>
            <input class="inputshortname form-control" type="text" name="nama" id="nama"
                placeholder="Nama Shortlink">
            <p class="alert">Link (harus menggunakan http:// atau https://)</p>
            <input class="inputlink form-control" type="text" name="nilai_link" id="nilai_link"
                placeholder="Masukkan Link">
            <button class="add">Ubah Data</button>
        </form>
    </div>
@endsection
