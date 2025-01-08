<!-- Start Generation Here -->
@extends('backend.layout.master')

@section('content')
<section class="hero-section d-flex justify-content-center align-items-start" id="section_1" style="min-height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="custom-block bg-white shadow-lg p-4" style="min-height: 400px;"> <!-- Memperpanjang card -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="mb-0">Daftar Buku</h4>
                        <div>
                            <a href="{{ route('books.create') }}" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-plus me-1"></i> Tambah Buku
                            </a>
                        </div>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('undo'))
                        <div class="alert alert-warning">
                            {{ session('undo') }}
                            <a href="{{ route('books.restore', session('undo_id')) }}" class="btn btn-link">Undo</a>
                        </div>
                    @endif

                    @if(session('deleted'))
                        <div class="alert alert-danger">
                            {{ session('deleted') }}
                            <a href="{{ route('books.restore', session('deleted_id')) }}" class="btn btn-link">Undo</a>
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Cover</th> <!-- Menambahkan kolom untuk gambar -->
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tanggal Terbit</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($books as $book)
                                <tr>
                                    <td>
                                        @if($book->gambar) <!-- Menampilkan gambar jika ada -->
                                            <img src="{{ asset($book->gambar) }}" alt="{{ $book->judul }}" style="width: 50px; height: auto;">
                                        @else
                                            <span>Tidak ada gambar</span>
                                        @endif
                                    </td>
                                    <td>{{ $book->judul }}</td>
                                    <td>{{ $book->penulis }}</td>
                                    <td>{{ $book->penerbit }}</td>
                                    <td>{{ $book->tanggal_terbit }}</td>
                                    <td>{{ implode(', ', $book->category->pluck('name_category')->toArray() )}}</td>
                                    <td>
                                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm">Show</a>
                                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada buku yang tersedia.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Generation Here -->
