@extends('layout.app')

@section('titlePage')
    DC Comics | Create
@endsection

@section('content')
<div class="container-fluid bg-primary" id="poster">
    <div class="container">

        <div class="me-4 pt-2" style="font-size: 2rem">
            <a class="text-white text-decoration-none" href="{{ route('comics.index') }}">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>

        <h1 class="text-uppercase text-white pt-3">create your comic</h1>
        <form action=" {{ route('comics.store') }} " method="POST" class="row">

            @csrf

            <div class="form-group mt-3">
                <label for="input-title" class="form-label text-white">Title:</label>
                <input type="text" id="input-title" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="title" autofocus>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="input-description" class="form-label text-white">Description:</label>
                <textarea id="input-description" class="form-control" name="description" cols="35" rows="3">
                </textarea>
            </div>
            <div class="form-group mt-3">
                <label for="input-thumb" class="form-label text-white">Thumb:</label>
                <input type="text" id="input-thumb" class="form-control" name="thumb" placeholder="thumbnail link"> 
            </div>
            <div class="form-group mt-3 col-6">
                <label for="input-price" class="form-label text-white">Price:</label>
                <input type="text" id="input-price" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="price">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3 col-6">
                <label for="input-series" class="form-label text-white">Series:</label>
                <input type="text" id="input-series" class="form-control" name="series" placeholder="series"> 
            </div>
            <div class="form-group mt-3 col-6">
                <label for="input-sale_date" class="form-label text-white">Sale Date:</label>
                <input type="date" id="input-sale_date" class="form-control" name="sale_date"> 
            </div>
            <div class="form-group mt-3 col-6">
                <label for="input-type" class="form-label text-white">Type:</label>
                <input type="text" id="input-type" class="form-control @error('type') is-invalid @enderror" name="type" placeholder="type">
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror 
            </div>
            <button type="submit" class="btn btn-primary btn-outline-light my-4 col-2 mx-auto text-uppercase"><strong> create </strong></button>
        </form>
    </div>
</div>

@endsection