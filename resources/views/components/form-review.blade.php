<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form method="POST" action="{{route('reviewCreate')}}">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Nome e Cognome</label>
                  <input type="text" class="form-control" name="nameSurname">
                </div>
                <div class="mb-3">
                    <label class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="La tua recensione"  style="height: 100px" name="description"></textarea>
                    <label for="floatingTextarea2">Lascia la tua recensione</label>
                </div>                   
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
              </form>
        </div>
    </div>
</div>