<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h2 class="display-2 text-center">{{$prodotto["name"]}}</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-cardProduct :product="$prodotto"></x-cardProduct>
            </div>
        </div>
    </div>
  
</x-layout>