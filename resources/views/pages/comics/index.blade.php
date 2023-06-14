@extends( 'layout.app' )

@section('titlePage')
    DC Comics | Comics
@endsection

@section('content')
<div class="container-fluid" id="poster">
    <div class="container poster-section p-5">
        <div class="row">

            {{-- @foreach ( $comics as $elem )
            <div class="poster col-12 col-md-2 col-lg-2">
                <img src="{{$elem['thumb']}}" alt="poster">
                <h6 class="text-uppercase mt-3">{{$elem['series']}}</h6>
            </div>
            @endforeach --}}

        </div>
        <span id="button" class="text-uppercase">load more</span>
    </div>
    <div class="container-fluid" id="buy">
        <div class="container p-4" id="buy-section">
            <div class="row text-white justify-content-center">
                <div class="col-2 d-flex align-items-center text-uppercase">
                    <img class="me-2" style="width:20%" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="digital comics">
                    digital comics
                </div>
                <div class="col-2 d-flex align-items-center text-uppercase">
                    <img class="me-2" src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="merchandise">
                    dc merchandise
                </div>
                <div class="col-2 d-flex align-items-center text-uppercase">
                    <img class="me-2" class="shrink" src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="subscriptions">
                    subscription
                </div>
                <div class="col-2 d-flex align-items-center text-uppercase">
                    <img class="me-2" style="width:20%" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="shop locator">
                    comic shop locator
                </div>
                <div class="col-2 d-flex align-items-center text-uppercase">
                    <img class="me-2" src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="dc power">
                    dc power visa
                </div>
            </div>
        </div>
    </div>
</div>

@endsection