@extends('user.templates.main')

@section('content')
<div class="container mt-4">
    <div class="text-center">
        <h4>Selamat datang, {{ auth()->user()->name }}</h4>
        <p>Sebelum kamu mengisi pertanyaan pada tes ini, kenalan dulu yuk sama RIASEC !</p>
    </div>

    <hr>

    <div class="row">
        <div class="col-lg-6">
            <h4 class="text-center">Apa itu RIASEC ?</h4>
            <img src="{{ asset('assets/img/RIASEC-Hexagon.jpg') }}" alt="riasec" width="100%">

            <p>Kalau kamu udah siap, kamu bisa klik tombol di bawah ini</p>
            
            <div class="d-grid gap-2">
                <a href="{{ route('questionaires') }}" class="btn btn-outline-primary shadow"><i class="bi bi-arrow-right-square"></i> Mulai Tes</a>
            </div>
        </div>

        <div class="col-lg-6">
            <p>RIASEC merupakan singkatan dari 6 jenis kepribadian. Beberapa di antaranya Realistic (realistis), Investigative (investigatif), Artistic (artistik), Social (sosial), Enterprising (berani berusaha) dan Conventional (konvensional).</p>

            <ol>
                <li>Realistic</li>
                <p>Orang dengan jenis kepribadian realistic menyukai pekerjaan yang terbilang rumit dan membutuhkan ketelitian. Mereka kurang menyukai bidang pekerjaan yang melibatkan dokumen atau kerja sama tim.</p>

                <li>investigative</li>
                <p>Orang dengan jenis kepribadian investigasi menyukai pekerjaan yang berkaitan dengan ide dan pemikiran guna mencari fakta dari suatu masalah. Mereka tidak menyukai aktivitas fisik atau jabatan yang mengharuskannya mengatur orang lain.</p>

                <li>Artistic</li>
                <p>Orang dengan jenis kepribadian artistic menyukai pekerjaan yang berhubungan dengan artistik, seperti akting, musik, seni dan desain. Mereka menyukai kreativitas dan pekerjaan yang dapat dilakukan tanpa mengikuti aturan.</p>

                <li>Social</li>
                <p>Orang dengan berkepribadian sosial cenderung suka menolong orang dan menyukai kegiatan yang mengharuskannya berinteraksi dengan banyak orang. Mereka suka mengajar, memberi nasihat dan membantu serta melayani orang lain.</p>

                <li>Enterprising</li>
                <p>Orang dengan jenis kepribadian ini menyukai pekerjaan yang berkaitan dengan proyek suatu bisnis. Mereka ahli dalam bernegosiasi dan memimpin orang, membuat keputusan serta mengambil risiko demi sebuah keuntungan.</p>

                <li>Conventional</li>
                <p>Orang dengan jenis kepribadian konvensional menyukai pekerjaan sesuai prosedur dan rutinitas yang telah ditetapkan. Mereka akan bekerja sesuai dengan standar yang ada dan patuh pada peraturan yang dibuat oleh pemimpinnya.</p>
            </ol>
        </div>
    </div>
</div>
@endsection