@extends('backend.layout.master')

@section('content')
<section class="hero-section d-flex justify-content-center align-items-start" id="section_1" style="min-height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="custom-block bg-white shadow-lg p-4">
                    <h4 class="mb-4">Detail Buku</h4>

                    <div class="mb-4">
                        <label for="judul">Judul Buku:</label>
                        <p>{{ $book->judul }}</p>
                    </div>

                    <div class="mb-4">
                        <label for="penulis">Pengarang:</label>
                        <p>{{ $book->penulis }}</p>
                    </div>

                    <div class="mb-4">
                        <label for="penerbit">Penerbit:</label>
                        <p>{{ $book->penerbit }}</p>
                    </div>

                    <div class="mb-4">
                        <label for="tahun_terbit">Tahun Terbit:</label>
                        <p>{{ $book->tanggal_terbit }}</p>
                    </div>

                    @if($book->gambar)
                        <div class="mb-4">
                            <label for="cover">Cover Buku:</label>
                            <div>
                                <img src="{{ asset($book->gambar) }}" alt="Cover Buku" class="img-fluid" style="max-width: 200px;">
                            </div>
                        </div>
                    @endif

                    <a href="{{ route('books.index') }}" class="btn btn-secondary btn-md custom-btn">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</section>