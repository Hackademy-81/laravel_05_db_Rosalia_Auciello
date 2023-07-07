<div class="card mt-5">
    <img src="https://picsum.photos/300" class="card-img-top" alt="...">
    <div class="card-body d-flex  flex-column align-items-center justify-content-center">
    @if (Route::currentRouteName()=='homePage' || Route::currentRouteName()=='brandShow')
        <h5 class="card-title fw-bold text-center">{{$product["name"]}}</h5>
        <p class="card-text">{{$product["brand"]}}</p>
        <p class="card-text">{{substr($product["description"],0,10)}}...</p>
        <a href="{{route('prodottoDettaglio', ["idProduct"=>$product['id']])}}" class="btn btn-primary">Scopri di più</a>
    @else
    <p class="card-text">{{$product["brand"]}}</p>
    <p class="card-text">{{$product["description"]}}</p>
    <p class="card-text fw-bold text-center">{{$product["price"]}}€</p>
    <a href="{{route('homePage')}}" class="btn btn-primary">Torna indietro</a>
    @endif     
    </div>
</div>