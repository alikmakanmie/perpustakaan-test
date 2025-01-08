<!-- Start Generation Here -->
@extends('backend.layout.master')

@section('content')
<section class="hero-section d-flex justify-content-center align-items-start" id="section_1" style="min-height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="custom-block bg-white shadow-lg p-4">
                    <h4 class="mb-4">Tambah Buku</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('books.store') }}" class="custom-form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="title">Judul Buku</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul buku" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="author">Pengarang</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Masukkan nama pengarang" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukkan nama penerbit" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="tanggal_terbit">Tanggal Terbit</label>
                            <input type="date" class="form-control @error('tanggal_terbit') is-invalid @enderror" id="tanggal_terbit" name="tanggal_terbit" value="{{ old('tanggal_terbit') }}" required>
                            @error('tanggal_terbit')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            @foreach($categories as $category)
                            <input type="checkbox" name="category_ids[]" value="{{$category->id}}" id="category_{{$category->id}}">
                            <label for="category_{{$category->id}}">{{$category->name_category}}</label>
                            @endforeach
                        </div>

                        <div class="form-group mb-4">
                            <label for="cover">Cover Buku</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                        </div>

                       

                        <button type="submit" class="btn btn-primary btn-md custom-btn">Simpan Buku</button>
                        <a href="{{ route('books.index') }}" class="btn btn-secondary btn-md custom-btn">Kembali</a>
                    </form>
            </div>
        </div>
    </div>
</section>

<style>
 
</style>
<!-- End Generation Here -->
