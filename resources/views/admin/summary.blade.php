@extends('admin.templates.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4>Ringkasan</h4>
</div>

<div class="card shadow">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header text-center fw-bold">Total Pengguna</div>
                    <div class="card-body text-center">{{ $totalUsers }}</div>
                </div>
            </div>
        
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header text-center fw-bold">Total Analisis</div>
                    <div class="card-body text-center">{{ "{$totalAnalyzed['totalUsers']} Pengguna, {$totalAnalyzed['totalAnalyzed']} Hasil" }}</div>
                </div>
            </div>
        
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header text-center fw-bold">Total Rules</div>
                    <div class="card-body text-center">{{ $totalRules }}</div>
                </div>
            </div>
        
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header text-center fw-bold">Total Karakteristik</div>
                    <div class="card-body text-center">{{ $totalCharacteristics }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-4 card shadow">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Karakteristik</th>
                        <th>Persentase</th>
                        <th>Tanggal Menjawab</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($analyzedUsers as $analyzedUser)
                        <tr>
                            <td>{{ $analyzedUsers->firstItem() + $loop->index }}</td>
                            <td>{{ $analyzedUser->name }}</td>
                            <td>{{ $analyzedUser->ch_name }}</td>
                            <td>{{ $analyzedUser->percentage }} %</td>
                            <td>{{ $analyzedUser->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-lg-12">
            {{ $analyzedUsers->links() }}
        </div>
    </div>
</div>
@endsection