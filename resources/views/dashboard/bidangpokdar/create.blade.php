@extends('dashboard.layout.app')

@section('title', 'Dashboard Admin')

@section('contents')
    
<form action="{{ route('dashboard.bidangpokdar.store') }}" method="post">
    @csrf
    <div class="form-group col-6">
        <label form="bidang_program" class="form-label">Bidang Program</label>
        <input placeholder="Tambahkan Bidang Program..." name="bidang_program" class="form-control @error('bidang_program') is-invalid 
        @enderror" id="bidang_program">
        @error('bidang_program')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <button type="submit" class="btn btn-primary">Save</button>
</form>

{{-- @push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("input[type=datetime-local]");
</script>
@endpush --}}

<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDevault
    });
</script>
@endsection