@extends('layout/main')
@section('konten')
    <nav class=" navbar navbar-light">
        <div class="container">
            <a href="https://bemilkomunsri.org/" class=" navbar-brand mb-0">
                <img src="assets/img/logobem23.png" width="50px">
                <span id="span1">BEM KM FASILKOM UNSRI</span>
            </a>
            <form action="" class=" d-flex">
                <a href="/logout" class=" btn btn-outline-danger" style="color: white">Logout</a>
            </form>
        </div>
    </nav>
    <div id="main-content" class=" row align-items-center justify-content-center">
        <div class=" col-md-6">
            <div class=" d-inline-block text-center">
                <h2 class="text-center daftar">Daftar Link</h2>
            </div>
            <div class=" tambahlink d-inline-block text-center">
                <a href="/tambah"><img src="assets/img/plus.png" alt=""></a>
                <a href="/tambah">Tambah Link</a>
            </div>
            @if ($nilai_link->isEmpty())
                <div class="warning" role="alert">
                    data Link tidak ditemukan
                </div>
            @else
                @foreach ($nilai_link as $item)
                    <ul class=" list-group bg-transparent">
                        <li class=" list-group-item border-0 bg-transparent">
                            <div class=" list-link d-flex flex-col">
                                <div class=" link d-flex flex-row p-4">
                                    <span>
                                        <a href="/detail/{{ $item->id }}">
                                            <button
                                                class="btn-detail d-flex flex-row justify-items-center justify-content-center align-items-center rounded-3"
                                                type="button">
                                                <div class="round"></div>
                                                <a href="/detail/{{ $item->id }}" class=" p-detail">Details</a>
                                            </button>
                                        </a>
                                    </span>
                                    <span>
                                        <a href="/link/{{ $item->id }}" id="nama"
                                            class="link-address">bemilkomunsri.org/{{ $item->nama }}</a>
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                @endforeach
            @endif
        </div>
    </div>
@endsection
