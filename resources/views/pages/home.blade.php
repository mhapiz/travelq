@extends('layouts.app')

@section('title', 'TravelQ')


@section('content')


  <!-- JUMBOTRON -->
  <div class="jumbotron jumbotron-fluid">
    <img src="frontend/img/banner1.jpg" alt="">
    <div class="container content-jumbotron text-center">
      <h1 class="display-4">
        Start Your Journey <br />
        With Us . . .
      </h1>
      <a href="#" class="btn btn-get-started mt-5 mx-auto"> Get Started</a>
    </div>
  </div>
  <!-- JUMBOTRON -->

  <!-- SATU -->
  <main>
    <section class="package-trip">
      <div class="ln"></div>
      <div class="container">
        <div class="row trips">
          <div class="col-md-3">
            <h1>
              Go Wherever <br />
              You Want
            </h1>
          </div>


          <div class="col-md-3 ">
            <div class="cardku">
              <div class="pala-card">
                <h4>BEACH</h4>
                <h5>From Around The World</h5>
              </div>
              <img src="frontend/img/destBeach.jpg" alt="" />
              <a href="beach.html" class="btn card-btn">Discover More</a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="cardku">
              <div class="pala-card">
                <h4>DESERT</h4>
                <h5>From Around The World</h5>
              </div>
              <img src="frontend/img/destDesert.png" alt="" />
              <a href="#" class="btn card-btn">Discover More</a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="cardku">
              <div class="pala-card">
                <h4>MOUNTAIN</h4>
                <h5>From Around The World</h5>
              </div>
              <img src="frontend/img/destMount.png" alt="" />
              <a href="#" class="btn card-btn">Discover More</a>
            </div>
          </div>


        </div>
      </div>
    </section>
    <!-- SATU -->

    <!-- ---------------------------------------------DUA------------------------------------------------------ -->
    <section class="services">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-3 text-center">
            <h1>Our Services</h1>
          </div>
        </div>
      </div>

      <div class="bungkus">
        <div class="container">
          <!-- ---------------------------------------ROW SERVICESS--------------------------------------- -->
          <div class="row ">
            <div class="col-md-3 text-center">
              <img src="./frontend/img/icons/car1.png" alt="car icon" width="100" class="mb-2" />

              <h3>Car Hire</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Consequuntur, dolore. Voluptatibus, ducimus rerum dolore
                similique totam blanditiis temporibus at deserunt?
              </p>
            </div>

            <div class="col-md-3 text-center">
              <img src="./frontend/img/icons/refund.png" alt="refund icon" width="90" class="mb-2" />

              <h3>Easy Refund</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Consequuntur, dolore. Voluptatibus, ducimus rerum dolore
                similique totam blanditiis temporibus at deserunt?
              </p>
            </div>

            <div class="col-md-3 text-center">
              <img src="./frontend/img/icons/shield.png" alt="shield icon" width="90" class="mb-2" />

              <h3>Insurance</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Consequuntur, dolore. Voluptatibus, ducimus rerum dolore
                similique totam blanditiis temporibus at deserunt?
              </p>
            </div>

            <div class="col-md-3 text-center">
              <img src="./frontend/img/icons/ticket.png" alt="ticket icon" width="100" class="mb-2" />

              <h3>Ticket</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Consequuntur, dolore. Voluptatibus, ducimus rerum dolore
                similique totam blanditiis temporibus at deserunt?
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ---------------------------------------------DUA------------------------------------------------------ -->

    <!-- ---------------------------------------------TIGA------------------------------------------------------ -->
    <section class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h1>
              Our <br />
              Partners
            </h1>
          </div>

          <div class="col-md-3 text-center">
            <img src="frontend/img/icons/airasia.png" alt="Air Asia" height="100" />
          </div>

          <div class="col-md-3 text-center">
            <img src="frontend/img/icons/garuda.png" alt="Garuda" height="200" />
          </div>

          <div class="col-md-3 text-center">
            <img src="frontend/img/icons/airbnb.png" alt="airbnb" height="200" />
          </div>

        </div>
      </div>
    </section>
    <!-- ---------------------------------------------TIGA------------------------------------------------------ -->

    <section class="testimonial">
      <div class="row justify-content-center">
        <div class="col-md-4 text-center">
          <h1>Those Who Love Us</h1>
        </div>
      </div>

      <div class="ln"></div>

      <div class="container">
        <div class="row justify-content-center mt-3">
          <div class="col-md-3">
            <div class="card" style="width: 16rem;">
              <div class="card-body text-center">
                <img src="frontend/img/people/girl2.png" alt="Galuh" width="150" class="img-thumbnail rounded-circle" />
                <h5 class="card-title mt-1">Galuh</h5>
                <h6 class="card-subtitle mb-2 text-muted">Student</h6>
                <p class="card-text">
                  It was glorious and i could not stop to say woohooo for every
                  single moment Thank You Very Much :*
                </p>

                <hr width="90%" />

                <div class=" text-muted" style="">
                  Trip to Maldives, Sri Lanka
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card" style="width: 16rem;">
              <div class="card-body text-center">
                <img src="frontend/img/people/girl1.png" alt="Clara" width="150" class="img-thumbnail rounded-circle" />
                <h5 class="card-title mt-1">Clara</h5>
                <h6 class="card-subtitle mb-2 text-muted">Photographer</h6>
                <p class="card-text">
                  It was glorious and i could not stop to say woohooo for every
                  single moment Thank You Very Much :*
                </p>

                <hr width="90%" />

                <div class=" text-muted" style="">
                  Trip to Maldives, Sri Lanka
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card" style="width: 16rem;">
              <div class="card-body text-center">
                <img src="frontend/img/people/girl3.png" alt="Emiliano" width="150" class="img-thumbnail rounded-circle" />
                <h5 class="card-title mt-1">Emiliano Vittoriosi</h5>
                <h6 class="card-subtitle mb-2 text-muted">Model</h6>
                <p class="card-text">
                  It was glorious and i could not stop to say woohooo for every
                  single moment Thank You Very Much :*
                </p>

                <hr width="90%" />

                <div class=" text-muted" style="">
                  Trip to Maldives, Sri Lanka
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <div class="row justify-content-center cta">
      <div class="col-6 col-md-2">
        <a href="#" class="btn btn-outline-dark ml-auto"> I Need Help</a>
      </div>

      <div class="col-6 col-md-2">
        <a href="#" class="btn btn-get-started mr-auto"> Get Started</a>
      </div>
    </div>
    <!-- ---------------------------------------------TIGA------------------------------------------------------ -->
  </main>


@endsection