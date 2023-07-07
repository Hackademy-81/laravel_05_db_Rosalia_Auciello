<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form method="POST" action="{{route('productCreation')}}">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Nome Prodotto</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Brand</label>
                    <input type="text" class="form-control" name="brand">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Descrivi il tuo prodotto"  style="height: 100px" name="description"></textarea>
                    <label for="floatingTextarea2">Descrizione</label>
                </div>
                <div class="mb-3">
                    <label class="form-label">Prezzo</label>
                    <input type="number" class="form-control" name="price">
                </div>                    
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>