<x-layout>
    @if (session('alertMessaggio'))
    <div class="alert alert-success" id="adv2">
        {{ session('alertMessaggio') }}
    </div>
    @endif
    <div class="container-fluid bg-dark">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h2 class="display-2 text-center text-white">Lascia la tua recensione</h2>
            </div>
        </div>
    </div>
    <x-form-review></x-form-review>
 
</x-layout>