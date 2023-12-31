@extends('layout.app')

@section ('titlePage')
    DC Comics | Comic
@endsection

@section('content')

<div class="container-fluid">
    <div class="container d-flex py-3">
        <div class="me-4" style="font-size: 3rem">
            <a href="{{ route('comics.index') }}">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>
        <img src=" {{ $comics['thumb'] }} " alt="Poster Movies">
        <div class="ps-4 d-flex flex-column">
            <h1 class="text-primary text-uppercase"> {{ $comics['title'] }} </h1>
            <p> {{ $comics['description'] }} </p>
            <div>
                <div>
                    <span class="show-label"> <strong> Type: </strong> </span>
                    <span class="text-capitalize">{{ $comics['type'] }}</span>
                </div>
                <div>
                    <span class="show-label"><strong> Series: </strong></span>
                    <span class="text-capitalize">{{ $comics['series'] }}</span>
                </div>
                <div>
                    <span class="show-label"><strong> Date: </strong></span>
                    <span class="text-capitalize">{{ $comics['sale_date'] }}</span>
                </div>
            </div>
            <div class="text-end">
                <span class="show-label"><strong> Price: </strong></span>
                <span class="text-capitalize">{{ $comics['price'] }}</span>
            </div>
            <div class="mt-5">
                <a href=" {{ route( 'comics.edit', $comics ) }} " class="btn btn-warning text-danger text-uppercase"><strong> edit</strong></a>
            </div>
            <div class="mt-2">
                <form action="{{route('comics.destroy', $comics)}}" method="POST">

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger text-uppercase text-warning" onclick="return areYouSure()"> <strong> delete </strong> </button>

                </form>
            </div>
        </div> 
    </div>
</div>

<script>

    function areYouSure(){
        return confirm("Are you sure you want to delete it?")
    };

</script>

@endsection