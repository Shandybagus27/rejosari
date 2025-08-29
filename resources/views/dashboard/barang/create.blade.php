@extends('dashboard.layout.app')

@section('title', 'Dashboard Admin')

@section('contents')
    <div class="py-12">
        <h1>Halaman tambah data barang</h1>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- from tambah data --}}
                <div class="col-lg-8">
                    <form method="post" action="{{ route('dashboard.barang.store') }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="barang" class="form-label">Nama Barang</label>
                            <div class="form-group">
                                <input name="barang" type="text"
                                    class="form-control @error('barang') is-invalid @enderror" id="barang"
                                    placeholder="Nama paket wisata" required autofocus>
                                @error('barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga Barang</label>
                            <div class="form-group">
                                <input name="harga" type="text"
                                    class="form-control @error('harga') is-invalid @enderror" id="harga"
                                    placeholder="Tentukan harga" required autofocus>
                                @error('harga')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stock Barang</label>
                            <div class="form-group">
                                <input name="stok" type="text"
                                    class="form-control @error('stok') is-invalid @enderror" id="stok"
                                    placeholder="Tentukan stok" required autofocus>
                                @error('stok')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- <label for="gambar" class="form-label">Upload Gambar</label>
                        <div class="form-group">
                            <input name="gambar" class="form-control" type="file" id="gambar" multiple>
                            <input-error class="mt-2" :messages="$errors - > get('gambar')" />
                            @error('gambar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror"
                            placeholder="Masukkan keterangan tambahan jika diperlukan"></textarea>
                        @error('keterangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/barang" class="btn btn-warning">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
