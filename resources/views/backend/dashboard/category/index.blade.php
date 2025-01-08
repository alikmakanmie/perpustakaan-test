<!-- Start Generation Here -->
@extends('backend.layout.master')

@section('content')
<section class="hero-section d-flex justify-content-center align-items-start" id="section_1" style="min-height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="custom-block bg-white shadow-lg p-4" style="min-height: 400px;"> <!-- Memperpanjang card -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="mb-0">Daftar Kategori</h4>
                        <div>
                            <a href="{{ route('categories.create') }}" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-plus me-1"></i> Tambah Kategori
                            </a>
                        </div>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categories as $category)
                                <tr>
                                    <td>{{ $category->name_category }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center">Tidak ada kategori yang tersedia.</td>
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
