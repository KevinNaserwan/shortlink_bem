@extends('layout/main')
@section('konten')
    <nav class=" navbar navbar-light">
        <div class="container">
            <a href="https://bemilkomunsri.org/" class=" navbar-brand mb-0">
                <img src="assets/img/logobem23.png" width="50px">
                <span id="span1">BEM KM FASILKOM UNSRI</span>
            </a>
            <form action="" class=" d-flex">
                <a href="" class=" btn btn-outline-danger" style="color: white">Logout</a>
            </form>
        </div>
    </nav>
    <div id="main-content" class=" row align-items-center justify-content-center">
        <div class=" col-md-6">
            <div class=" d-inline-block text-center">
                <h2 class="text-center daftar mt-5">Daftar Link</h2>
            </div>
            <ul class=" list-group bg-transparent">
                <li class=" list-group-item border-0 bg-transparent">
                    <div class=" list-link d-flex flex-col">
                        <div class=" link d-flex flex-row p-4">
                            <span>
                                <button
                                    class="btn-detail d-flex flex-row justify-items-center justify-content-center align-items-center rounded-3"
                                    type="button">
                                    <div class="round"></div>
                                    <a href="" class=" p-detail">Details</a>
                                </button>
                            </span>
                            <span>
                                <a href="" id="nama"
                                    class="link-address">bemilkomunsri.org/EvaluasiCakraBaswara1</a>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
