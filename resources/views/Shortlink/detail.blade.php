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
    <div class="detail">
        <h1 class="title-data">Detail Data Link</h1>
        <div class="line"></div>
        <div class="list-data">
            <ul>
                <li class="shortlink">Shortlink : {{ $linkdetail->nama }}</li>
                <li class="linkfont">Link : {{ $linkdetail->nilai_link }}</li>
            </ul>
        </div>
        <a href="/link">
            <div class="back">

                <p class="text-back">kembali</p>

            </div>
        </a>
        <div class="status">
            <p class="text-status">Status</p>
            <div class="box-status">
                <img class="detail-img" src="{{ asset('assets/img/detail.png') }}" alt="">
                <p class="status-text">Online</p>
            </div>
        </div>
        <div class="feature">
            <a id="copy" href="" data-text=" bemilkomunsri.org/{{ $linkdetail->nama }}">
                <div class="copy">
                    <img class="copy-img" src="{{ asset('assets/img/copy.png') }}" alt="">
                </div>
            </a>
            <a href="/detail-edit/{{ $linkdetail->id }}">
                <div class="update">
                    <img class="update-img" src="{{ asset('assets/img/update.png') }}" alt="">
                </div>
            </a>
            <form action="/delete/{{ $linkdetail->id }}" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                @method('delete')
                @csrf
                <button class="delete">
                    <img class="delete-img" src="{{ asset('assets/img/trash.png') }}" alt="">
                </button>
            </form>
        </div>
    </div>

    <script>
        const copy = document.querySelector('#copy');
        copy.addEventListener('click', e => {
            const input = document.createElement('input');
            input.value = copy.dataset.text;
            document.body.appendChild(input);
            input.select();
            if (document.execCommand('copy')) {
                alert('Text Copied');
                document.body.removeChild(input);
            }
        });
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
