<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h2 class="display-2 text-center">Prodotti cercati</h2>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-around">
            @foreach ($products as $product)
                <div class="col-12 col-md-4">
                    <x-cardProduct :product="$product"></x-cardProduct>                    
                </div>
            @endforeach
        </div>
    </div>
</x-layout>