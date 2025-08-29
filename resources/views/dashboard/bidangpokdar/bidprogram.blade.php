
@extends('dashboard.layout.app')

@section('title', 'Dashboard Admin')

@section('contents')
    <div class="row">
        {{-- Buat Konten di sini --}}
        <!-- Begin Page Content -->
            <!-- Page Heading -->
            <div class="row">
                <div class="col-12 py-2 text-center">
                    <h1 class="h3 mb-1 text-gray-800">Bidang Program</h1>
                    <p class="mb-1"></p>
                </div>
            </div>

            <!-- DataTales Example -->
            <main class="container border">
                <div class="row">
                    <div class="col-12 py-1">
                        <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <a href="{{ route('dashboard.bidangpokdar.create') }}">
                                        <button type="button" class="btn btn-primary">Tambah Data</button>
                                    </a> 
                                </div>


                                <div class="card-body">
                                    {{-- <div class="table-responsive"> --}}
                                        <div style="overflow-x:auto;">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">No</th>
                                                        <th class="text-center">Bidang Program</th>
                                                        <th class="text-center">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($bidangs as $key => $item)
                                                    <tr class="border-b border-gray-200">
                                                        <td class="py-3 px-6 text-center">{{$key + 1}}</td>
                                                        <td class="py-3 px-6 text-center">{{$item->bidang_program}}</td>
                                                        {{-- <td class="text-center">
                                                            <a href="{{ route('dashboard.bidangpokdar.edit', $item->id) }}"
                                                                class="btn btn-warning btn-sm"><span><i
                                                                        class="fa-solid fa-pen-to-square"></i></span></a>
                        
                                                            <form action="{{ route('dashboard.bidangpokdar.delete', $item->id) }}" method="post"
                                                                class="d-inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('yakin ingin menghapus?');"><span><i
                                                                            class="fa-solid fa-trash"></i></span></button>
                                                            </form>
                                                        </td> --}}
                                                        {{-- <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                                            <form onsubmit="return confirm('Yakin mau di hapus? Data yang dihapus tidak bisa kembali');" 
                                                                action="{{ route('dashboard.tabel.bidang.destroy', $item->id) }}" method="post">
                                                                

                                                                    <a class="btn btn-warning" href="{{ route('dashboard.bidangpokdar.edit', $item->id) }}" id="{{ $item->id }}-edit-btn" role="button"><i class="fa-solid fa-pen-to-square"></i>
                                                                    </a>
                    

                                                                @csrf
                                                                @method('DELETE')
                                                                    <button type="submit" id="{{ $item->id }}-delete-btn" class="btn btn-danger"><i class="fa-solid fa-trash"></i>
                                                                    </button>
                                                            </form>
                                                        </td> --}}
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
    
@endsection
