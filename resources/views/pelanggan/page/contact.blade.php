@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-4 align-items-center">
        <div class="col-md-6">
            <div class="content-text">
                Berdirinya grosir kami dimulai dari sebuah visi untuk memenuhi kebutuhan akan distribusi barang secara efisien dan hemat biaya di pasar lokal. Melihat potensi besar dalam mempertemukan produsen dengan pengecer, kami bersama tim mulai membangun infrastruktur yang kuat untuk menyediakan berbagai produk dengan harga kompetitif. Dengan fokus pada pelayanan yang berkualitas dan kemitraan yang solid dengan produsen lokal maupun internasional, grosir ini bertujuan tidak hanya untuk memfasilitasi kebutuhan pasar, tetapi juga menjadi mitra strategis dalam memperluas jangkauan produk bagi pengecer di seluruh kawasan.
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/warung.png') }}" style="width:100%" alt="">
        </div>
    </div>

    <div class="d-flex justify-content-lg-between mt-5">
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-users fa-2x"></i>
            <p class="m-0 fs-5">+ 300 Pelanggan</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fas fa-home fa-2x"> </i>
            <p class="m-0 fs-5"> + 20 Cabang</p>
        </div>
    </div>

    <h4 class="text-center mt-md-5 mb-md-2">Contact Us</h4>
    <hr class="mb-5">
    <div class="row  mb-md-5">
        <div class="col-md-5">
            <div class="bg-secondary" style="width: 100%; height:50vh; border-radius:10px;"></div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Kritik dan saran</h4>
                </div>
                <div class="card-body">
                    <p class="p-0 mb-5 text-lg-center">Masukan kritik dan saran anda kepada aplikasi kami ini agar kami dapat memberikan
                        apa yang menjadi kebutuhan anda dan kami dapat berkembang lebih baik lagi.
                    </p>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" value=""
                                placeholder="Masukan email Anda">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pesan" placeholder="Masukan Pesan Anda">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-4 w-100"> Kirim pesan anda</button>
                </div>
            </div>
        </div>
    </div>
@endsection
