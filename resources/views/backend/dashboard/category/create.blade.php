<!-- Start Generation Here -->
@extends('backend.layout.master')

@section('content')
<section class="hero-section d-flex justify-content-center align-items-start" id="section_1" style="min-height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="custom-block bg-white shadow-lg p-4">
                    <h4 class="mb-4">Tambah Kategori</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('categories.store') }}" class="custom-form">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="name_category">Nama Kategori</label>
                            <input type="text" class="form-control" id="name_category" name="name_category" placeholder="Masukkan nama kategori" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-md custom-btn">Simpan Kategori</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-md custom-btn">Kembali</a>
                    </form>
            </div>
        </div>
    </div>
</section>

<style>
 
</style>
<!-- End Generation Here -->
