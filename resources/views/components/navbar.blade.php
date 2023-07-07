<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid">
        <div>
            <a class="navbar-brand" href="#">Shop Rosy 81</a>
        </div>      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homePage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('formPage')}}">Aggiungi Prodotto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('pageReview')}}">Recensioni</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu bg-warning">
              <li><a class="dropdown-item" href="{{route('brandShow','Nike')}}">Nike</a></li>
              <li><a class="dropdown-item" href="{{route('brandShow','Adidas')}}">Adidas</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    <div class="div-vuoto">
        <a class="navbar-brand" href="#"></a>
    </div>
    </div>
  </nav>