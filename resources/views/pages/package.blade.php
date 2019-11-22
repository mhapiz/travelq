@extends('layouts.app')

@section('title', 'Package Travel')

@section('content')

  <!-- JUMBOTRON -->
  <div class="jumbotron jumbotron-fluid">
      <img src="frontend/img/banner2.jpg" alt="">
      <div class="container content-jumbotron text-center">
        <h1 class="display-4">
          Discover the Best Beaches
          <br>
          From
          <br>
          Around The World
        </h1>
      </div>
    </div>
    <!-- JUMBOTRON -->
  
    <main>
      <section class="package">
        <div class="container">
          <div class="row beaches1">
            <div class="art"></div>
            <div class="col-md-3">
              <h1>ASIA</h1>
              <h4>The Best Beaches in Asia</h4>
            </div>
  
            <div class="col-md-3">
              <div class="cardku">
                <div class="pala-card">
                  <h4>BALI</h4>
                  <h5>Indonesia</h5>
                </div>
                <img src="frontend/img/baliport.jpg" alt="Bali" />
                <a href="#" class="btn card-btn">JUMP IN</a>
              </div>
            </div>
  
            <div class="col-md-3">
              <div class="cardku">
                <div class="pala-card">
                  <h4>MALDIVES</h4>
                  <h5>Sri Lanka</h5>
                </div>
                <img src="frontend/img/maldivesport.jpg" alt="Maldives" />
                <a href="detail.html" class="btn card-btn">JUMP IN</a>
              </div>
            </div>
  
            <div class="col-md-3">
              <div class="cardku">
                <div class="pala-card">
                  <h4>BALI</h4>
                  <h5>Indonesia</h5>
                </div>
                <img src="frontend/img/baliport.jpg" alt="Bali" />
                <a href="#" class="btn card-btn">JUMP IN</a>
              </div>
            </div>
          </div>
  
          <div class="row beaches2">
            <div class="art"></div>
  
            <div class="col-md-3">
              <h1>EUROPE</h1>
              <h4>The Best Beaches in Europe</h4>
            </div>
  
            <div class="col-md-3">
              <div class="cardku">
                <div class="pala-card">
                  <h4>Mallorca</h4>
                  <h5>Spain</h5>
                </div>
                <img src="frontend/img/mallorcaport.jpg" alt="Mallorca" />
                <a href="#" class="btn card-btn">JUMP IN</a>
              </div>
            </div>
  
            <div class="col-md-3">
              <div class="cardku">
                <div class="pala-card">
                  <h4>Mallorca</h4>
                  <h5>Spain</h5>
                </div>
                <img src="frontend/img/mallorcaport.jpg" alt="Mallorca" />
                <a href="#" class="btn card-btn">JUMP IN</a>
              </div>
            </div>
  
            <div class="col-md-3">
              <div class="cardku">
                <div class="pala-card">
                  <h4>Mallorca</h4>
                  <h5>Spain</h5>
                </div>
                <img src="frontend/img/mallorcaport.jpg" alt="Mallorca" />
                <a href="#" class="btn card-btn">JUMP IN</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    
@endsection