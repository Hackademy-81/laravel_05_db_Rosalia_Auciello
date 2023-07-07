<x-layout>
    <div class="container bg-dark">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h2 class="display-2 text-center text-white">Grazie per aver lasciato la tua recensione {{$nomeReindirizzato}}</h2>
            </div>
        </div>        
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h2 class="display-3 text-center">Potrebbero interessarti questi articoli</h2>
            </div>
        </div>        
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
           @foreach ($products as $product)
           <div class="col-md-4">
            <x-cardProduct :product="$product"></x-cardProduct>
           </div>               
           @endforeach
        </div>        
    </div>
</x-layout>