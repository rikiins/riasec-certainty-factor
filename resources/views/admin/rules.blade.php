@extends('admin.templates.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4>CF Rules</h4>
</div>

<div class="card shadow">
    <div class="card-body">
        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#createRulesModal">
            <i class="bi bi-database-add"></i> Buat Rule Baru
        </button>
    </div>
</div>

<div class="mt-4 card shadow">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pernyataan</th>
                        <th>Karakteristik</th>
                        <th>MB</th>
                        <th>MD</th>
                        <th>Bobot</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($characteristicRules as $rule)
                        <tr>
                            <td>{{ $characteristicRules->firstItem() + $loop->index }}</td>
                            <td>{{ $rule->questionaire->questionaire }}</td>
                            <td>{{ $rule->characteristic->name }}</td>
                            <td>{{ $rule->mb }}</td>
                            <td>{{ $rule->md }}</td>
                            <td>{{ $rule->mb - $rule->md }}</td>
                            <td>
                                <span role="button" class="text-danger fs-5 remove-rule" data-id="{{ $rule->id }}">
                                    <i class="bi bi-x-circle"></i>
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
            <div class="col-lg-12">
                {{ $characteristicRules->links() }}
            </div>
        </div>
    </div>
</div>

<div class="modal modal-lg fade" id="createRulesModal" tabindex="-1" aria-labelledby="createRulesModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="createRuleForm">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createRulesModalLabel">Rule Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <label class="form-label">Pernyataan</label>
                    <input type="text" name="questionaire" class="form-control" placeholder="Pernyataan singkat" required>
                    
                    <label class="form-label mt-2">Karakteristik</label>
                    <select name="characteristic_id" class="form-select" required>
                        <option value="">Pilih karakteristik...</option>
                        @foreach ($characteristics as $characteristic)
                            <option value="{{ $characteristic->id }}">{{ $characteristic->name }}</option>
                        @endforeach
                    </select>
                    
                    <label class="form-label mt-2">Nilai <i>Measure of Believe</i> (MB)</label>
                    <input type="text" name="mb" class="form-control" placeholder="Format : n.nn (2 digit di belakang koma)" required>

                    <label class="form-label mt-2">Nilai <i>Measure of Disbelieve</i> (MD)</label>
                    <input type="text" name="md" class="form-control" placeholder="Format : n.nn (2 digit di belakang koma)">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-outline-primary">
                        <i class="bi bi-database-check"></i> Simpan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
<script>
    const removeRule = document.querySelectorAll('.remove-rule');

    removeRule.forEach(function(elem) {
        elem.addEventListener('click', function(e) {
            const formData = new FormData();

            e.preventDefault();
            formData.append('id', elem.dataset.id);

            if (confirm('Apakah anda yakin ingin menghapus rule ini?')) {
                postForm(formData, '{{ route('remove-rule') }}');
            }
        });
    });

    createRuleForm.addEventListener('submit', async function(e) {
        const createRuleForm = document.querySelector('#createRuleForm');
        const formData = new FormData(createRuleForm);

        e.preventDefault();
        postForm(formData, '{{ route('create-rule') }}');
    });

    async function postForm(formData, url) {
        if (formData == null || url == null) {
            return false;
        }

        await fetch(url, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);

            if (data.status == 'success') {
                window.location.reload();
            }
        })
        .catch(error => {
            console.error(error);
        });
    }
</script>
@endsection