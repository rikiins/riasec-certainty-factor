@extends('user.templates.main')

@section('content')
<div class="container mt-4">
    @if ($errors->first('users_cf.*'))
        <div class="alert alert-danger alert-dismissible">
            <strong>{{ $errors->first('users_cf.*') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h4 class="text-center">Isi semua pernyataan yang paling cocok sama diri kamu</h4>
    
    <form action="{{ route('analyze') }}" method="POST">
        @csrf
        @for ($i = 0; $i < count($characteristicRules); $i++)
            <div class="card shadow mt-4">
                <div class="card-body">
                    <h6>{{ $i + 1 . ". {$characteristicRules[$i]->questionaire->questionaire}" }}</h6>
                    <hr>
                        <input type="hidden" name="users_cf[{{ $i }}][id]" value="{{ $characteristicRules[$i]->id }}">
                        <select name="users_cf[{{ $i }}][value]" class="form-select" required>
                        <option value="">Pilih kesesuaian...</option>
                        @foreach ($scores as $score)
                            <option value="{{ $score->cf_value }}">{{ $score->description }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        @endfor

        <div class="d-grid gap-2 my-4">
            <button type="submit" class="btn btn-outline-primary shadow py-3">
                <i class="bi bi-file-earmark-bar-graph"></i> Lihat Hasil
            </button>
        </div>
    </form>
</div>
@endsection