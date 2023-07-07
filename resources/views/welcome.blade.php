<x-layout>
    <div class="container-fluid bg-dark">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">Benvenuti in Shopping Rosy 81</h1>
            </div>
        </div>
    </div>
    @if (session('alertMessage'))
    <div class="alert alert-success" id="adv">
        {{ session('alertMessage') }}
    </div>
    @endif

    <div class="container py-5">
        <div class="row justify-content-around">
        @if ($products->isNotEmpty())
            @foreach ($products as $product)
                <div class="col-12 col-md-4">
                    <x-cardProduct :product="$product"></x-cardProduct>                    
                </div>
            @endforeach
        @else
        <div class="col-12">
            <h2 class="text-center">
                Non ci sono prodotti!
            </h2>
            <button class="py-5"><a href="{{route('formPage')}}">Aggiungi il primo</a></button>
        </div>
        @endif
        </div>
    </div>
</x-layout>