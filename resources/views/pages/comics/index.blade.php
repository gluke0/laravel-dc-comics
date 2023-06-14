@extends( 'layout.app' )

@section('titlePage')
    DC Comics | Comics
@endsection

@section('content')
<div class="container-fluid" id="poster">
    <div class="container poster-section p-5">
        <div class="row">

            @foreach ( $comics as $elem )
            <div class="poster col-12 col-md-2 col-lg-2">
                <a class="text-decoration-none" href="{{ route('comics.show', ['comic' => $elem->id]) }}">
                    <img src="{{$elem['thumb']}}" alt="poster">
                    <h6 class="text-uppercase mt-3">{{$elem['title']}}</h6>
                </a>
            </div>
            @endforeach

        </div>
        <span id="button" class="text-uppercase"><a class="text-uppercase text-white text-decoration-none" href="{{ route('comics.create') }}">create comic</a></span>
    </div>
</div>

@endsection