@extends('layouts.main') 

@section('content')
<div class="container my-5">
    <h2 class="mb-4 text-center text-primary fw-bold">Add New Product</h2>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf

                <div class="card shadow-lg border-0">
                    <div class="card-body p-4">

                        <!-- Product Name -->
                        <div class="mb-4">
                            <label for="name" class="form-label fw-semibold">Product Name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter product name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Product Description -->
                        <div class="mb-4">
                            <label for="description" class="form-label fw-semibold">Product Description</label>
                            <textarea name="description" id="description" rows="4" class="form-control @error('description') is-invalid @enderror" placeholder="Provide a brief description" required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Product Price -->
                        <div class="mb-4">
                            <label for="price" class="form-label fw-semibold">Price ($)</label>
                            <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Enter product price" value="{{ old('price') }}" required>
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Product Image -->
                        <div class="mb-4">
                            <label for="image" class="form-label fw-semibold">Product Image</label>
                            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                            <small class="form-text text-muted">Accepted formats: JPG, PNG, GIF</small>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-5 py-2 fw-semibold">Add Product</button>
                        </div>

                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<style>
    
</style>

@endsection
