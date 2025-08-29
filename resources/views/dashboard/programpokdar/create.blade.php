@extends('dashboard.layout.app')

@section('title', 'Dashboard Admin')

@section('contents')
    <div class="py-12">
        <h1>Halaman tambah data program</h1>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- from tambah data --}}
                <div class="col-lg-8">
                    <form method="post" action="{{ route('dashboard.programpokdar.store') }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="bidang_id">Bidang Program</label>
                                <select class="form-control @error('kategori') is-invalid @enderror" id="bidang_id"
                                    name="bidang_id">
                                    <option selected>Pilih bidang</option>
                                    @foreach ($bidangs as $bidang)
                                        @if (old('bidang_id') == $bidang->id)
                                            <option value="{{ $bidang->id }}">{{ $bidang->bidang_program }}
                                            </option>
                                        @else
                                            <option value="{{ $bidang->id }}">{{ $bidang->bidang_program }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('kategori')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group col-md-4">
                                <label for="program" class="form_control">Program</label>
                                <input type="text" name="program"
                                    class="form-control @error('program') is-invalid @enderror" id="program"
                                    value="{{ old('program') }}">
                                @error('program')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <fieldset class="form-group row">
                                    <legend class="col-form-label col-sm-3 float-sm-left pt-4">Status</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="status"
                                                value="Rencana">
                                            <label class="form-check-label" for="status">
                                                Rencana
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="status"
                                                value="Sedang Berjalan">
                                            <label class="form-check-label" for="status">
                                                Sedang Berjalan
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="status"
                                                value="Selesai">
                                            <label class="form-check-label" for="status">
                                                Selesai
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            {{-- <div class="form-group col-md-4">
                                <label for="tahun" class="form_control">Tahun</label>
                                <input type="text" name="tahun" class="form-control @error('tahun') is-invalid @enderror" id="tahun" value="{{ old('tahun') }}">
                                @error('tahun')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                @enderror
                            </div> --}}
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="dimulai" class="form-label">Dimulai</label>
                                <div class="input-group date col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="date" class="form-control" id="dimulai" value="{{ old('dimulai') }}"
                                        name="dimulai">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="selesai" class="form-label">Selesai</label>
                                <div class="input-group date col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="date" class="form-control" id="selesai" value="{{ old('selesai') }}"
                                        name="selesai">
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <input type="text" name="lokasi"
                                    class="form-control @error('program') is-invalid @enderror" id="lokasi"
                                    value="{{ old('lokasi') }}">
                                @error('lokasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="luas_area" class="form-label">Luas area</label><br />
                                <input type="text" name="luas_area" class="form-control" id="luas_area"
                                    value="{{ old('luas_area') }}">
                                <div id="passwordHelpBlock" class="form-text">
                                    <small class="col-md-4">Luas area bisa dikosongi</small>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="jumlah_anggaran" class="form-label">Jumlah Anggaran</label>
                                <input type="text" name="jumlah_anggaran"
                                    class="form-control @error('jumlah_anggaran') is-invalid @enderror"
                                    id="jumlah_anggaran" value="{{ old('jumlah_anggaran') }}">
                                @error('jumlah_anaggaran')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input id="keterangan" type="hidden" name="keterangan">
                                <trix-editor input="keterangan"></trix-editor>
                            </div>
                        </div>

                </div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/" class="btn btn-warning">Batal</a>
                </form>
            </div>

        </div>
    </div>
    </div>
@endsection
