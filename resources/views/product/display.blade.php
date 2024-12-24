@extends('layouts.main')
@section('content')
<body>
    <div class="d-flex justify-content-between mb-3">
        
        <a href="{{url('product.show')}}" class="btn btn-primary mt-3">Add Product</a>
        <a href="javascript:history.back()" class="btn btn-primary mt-3">&larr; Back</a>
    </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4 ">
            <div class="col">
              <div class="card product-card">
                <img src="{{asset('storage/assets/images/bag.jpg')}}" class="card-img-top" alt="Product 1">
                <div class="hover-buttons">
                  <form action="{{ route('add.to.cart') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="name" value="Product 1">
                    <input type="hidden" name="price" value="10.00">
                    <button type="submit" class="btn-custom"><i class="bi bi-cart fs-3"></i></button>
                </form>
                  
                  <button class="btn-outline-custom">Details</button>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Bag </h5>
                  <p class="card-text text-muted">Rs 500</p>
                  <div class="star-rating"> 
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                </div>
              </div>
            </div>
            
            <div class="col">
              <div class="card product-card">
                <img src="{{asset('storage/assets/images/art.jpg')}}" class="card-img-top" alt="Product 2">
                <div class="hover-buttons">
                  <button class="btn-custom"><i class="bi bi-cart fs-3"></i></button>
                  <button class="btn-outline-custom">Details</button>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Rajasthani patchwork</h5>
                  <p class="card-text text-muted">RS 600</p>
                  <div class="star-rating"> 
                      <i class="fas fa-star "></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                </div>
              </div>
            </div>
          
            <div class="col">
              <div class="card product-card">
                <img src="{{asset('storage/assets/images/jacket_black.jpg')}}" class="card-img-top" alt="Product 3">
                <div class="hover-buttons">
                  <button class="btn-custom"><i class="bi bi-cart fs-3"></i></button>
                  <button class="btn-outline-custom">Details</button>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Jacket Black and white</h5>
                  <p class="card-text text-muted">Rs 1000</p>
                  <div class="star-rating"> 
                      <i class="fas fa-star "></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                </div>
              </div>
            </div>
          </div>
          @endsection 