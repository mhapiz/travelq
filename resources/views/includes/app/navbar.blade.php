<!-- NAVBAR -->
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <!-- Just an image -->
    <a class="navbar-brand" href=" {{'/'}} ">
      <img src="frontend/img/icons/TravelQ.png" alt="TravelQ" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto mr-4">
        <a class="nav-item nav-link active" href=" {{'/'}} ">Home <span class="sr-only">(current)</span></a>
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Services
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <a class="nav-item nav-link" href=" {{'/package'}} ">Package</a>
      </div>


      @guest
          <!-- MOBILE BTN FOR LOGIN -->
      <form class="form-inline my-2 my-lg-0 d-block d-md-none">
        <button href="#" class="btn btn-login" type="button" onclick="event.preventDefault(); location.href=' {{url('login')}}';">
          LOGIN
        </button>
      </form>

      <!-- DESKTOP BTN FOR LOGIN -->
      <form class="form-inline my-2 my-lg-0 d-none d-md-block">
        <button href="#" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4 pt-2" type="button" onclick="event.preventDefault(); location.href=' {{url('login')}}';">
          LOGIN
        </button>
      </form>
      @endguest

      @auth
          <!-- MOBILE BTN FOR LOGIN -->
      <form class="form-inline my-2 my-lg-0 d-block d-md-none" action="{{url('logout')}}" method="POST" >
        <button href="#" class="btn btn-login " type="submit">
          @csrf
          LOGOUT
        </button>
      </form>

      <!-- DESKTOP BTN FOR LOGIN -->
      <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="POST" >
        <button href="#" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4 pt-2" type="submit">
          @csrf
          LOGOUT
        </button>
      </form>
      @endauth


    </div>
  </nav>
</div>
<!-- NAVBAR -->