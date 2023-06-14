@extends( 'layout.app' )

@section('titlePage')
    DC Comics | Home
@endsection

@section( 'content' )
    <div class="text-center p-5">
        <h1 class="pt-5">We are still working on it...</h1>
        <h3 class="pb-5"> ...give a look at the
            <a href="{{ route('comics.index') }}" ><strong> Comics Page </strong></a>
        </h3>
    </div>

<div class="container-fluid" id="poster">
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