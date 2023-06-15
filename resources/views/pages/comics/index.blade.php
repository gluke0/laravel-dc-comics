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
                    <div class="titlebox">
                        <h6 class="text-uppercase mt-3">{{$elem['title']}}</h6>
                    </div>
                </a>
                <div class="mt-4 mb-2 d-flex justify-content-center">
                    <a href=" {{ route( 'comics.edit', $elem ) }} " class="btn btn-warning text-danger text-uppercase"><strong> edit</strong></a>
                </div>
                <div class="mb-4 d-flex justify-content-center">
                    <form action="{{route('comics.destroy', $elem)}}" method="POST">
    
                    @csrf
                    @method('DELETE')
    
                    <button type="submit" class="btn btn-danger text-uppercase text-warning" onclick="return areYouSure()"> <strong> delete </strong> </button>
    
                    </form>
                </div>

            </div>

            

            @endforeach

        </div>
        <button class="text-uppercase btn btn-primary"><a class="text-uppercase text-white text-decoration-none" href="{{ route('comics.create') }}">create comic</a></button>
    </div>
</div>

<script>

    function areYouSure(){
        return confirm("Are you sure you want to delete it?")
    };

</script>

@endsection