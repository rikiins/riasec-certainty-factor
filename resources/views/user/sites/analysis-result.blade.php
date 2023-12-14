@extends('user.templates.main')

@section('content')
<div class="container mt-4">
    <div class="text-center">
        <h4>Halo, {{ auth()->user()->name }}</h4>
        <p>Kamu cuma bisa ambil tes 1 kali ya, detail hasil nya bisa kamu lihat di bawah ini</p>
    </div>

    <hr>

    <div class="row">
        <div class="col-lg-6">
            <h4 class="text-center">Gambar Sebaran Karakteristik</h4>
            <img src="{{ asset('assets/img/RIASEC-Hexagon.jpg') }}" alt="riasec" width="100%">
        </div>

        <div class="col-lg-6">
            <div class="alert alert-info text-center" role="alert">
                <i class="bi bi-info-circle"></i> Setelah dianalisis berdasarkan kesesuaian mu, masing-masing kriteria memiliki skor persentase ini :
            </div>

            <table id="results" class="table table-hover table-striped shadow">
                <thead>
                    <tr>
                        <th width="20%">Karakteristik</th>
                        <th width="20%">Persentase</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($analysisHistory as $history)
                        <tr>
                            <td class="text-center">{{ $history->characteristic->name }}</td>
                            <td class="text-center">{{ $history->percentage }} %</td>
                            <td>{{ $history->characteristic->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection