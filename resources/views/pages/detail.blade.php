@extends('layouts.app')

@section('title', 'Detail Travel')


@section('content')
    
<main>
  <section class="detail">
      <div class="container mt-5">

          <div class="bread-line"></div>

          <div class="row">
              <div class="col">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb" style="background: none;">
                          <li class="breadcrumb-item"><a href="#">Package</a></li>
                          <li class="breadcrumb-item"><a href="#">Beach</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Maldives</li>
                      </ol>
                  </nav>
              </div>
          </div>

          <div class="row">
              <div class="col-sm-12 col-md-8">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title font-weight-bold">Maldives</h2>
                          <h5 class="card-subtitle text-muted mb-3">Sri Lanka, Indian Ocean</h5>


                          <div class="galery">
                              <div class="xzoom-container">
                                  <img src="frontend/img/maldives1.jpg" alt="maldives1" class="xzoom"
                                      id="xzoom-default" xoriginal="frontend/img/maldives1.jpg" />
                              </div>

                              <div class="xzoom-thumbs">
                                  <a href="frontend/img/maldives2.jpg">
                                      <img src="frontend/img/maldives2.jpg" class="xzoom-gallery" width="210"
                                          xpreview="frontend/img/maldives2.jpg">
                                  </a>

                                  <a href="frontend/img/maldives3.png">
                                      <img src="frontend/img/maldives3.png" class="xzoom-gallery" width="210"
                                          xpreview="frontend/img/maldives3.png">
                                  </a>

                                  <a href="frontend/img/maldives4.png">
                                      <img src="frontend/img/maldives4.png" class="xzoom-gallery" width="210"
                                          xpreview="frontend/img/maldives4.png">
                                  </a>
                              </div>
                          </div>

                          <h5 class="card-subtitle font-weight-bold mt-4"> Explore Maldives</h5>
                          <p class="description mt-3">Welcome to the Maldives, where sands are white as the smiles
                              of the locals,
                              where fish
                              swim happily in
                              the warm waters of the Indian Ocean, where the weather is a dream, and the deep rays
                              of the sun wait to
                              engulf you in their arms.
                              Republic of the Maldives is a sovereign archipelagic nation positioned in the Indian
                              Ocean. Notably, the
                              South Asian Island nation has no counterpart in the entire world in terms of its
                              unique geography and
                              topography.</p>

                          <div class="include">
                              <h5 class="card-subtitle font-weight-bold mt-4 mb-4"> Services Inluded</h5>
                              <div class="container">
                                  <div class="row">
                                      <div class="col-4 include-item">
                                          <img src="frontend/img/icons/boat.png" alt="boat">
                                          <p>
                                              <span>Boat</span>
                                              <br>
                                              For Exploring
                                              The Sea
                                          </p>
                                      </div>

                                      <div class="col-4 include-item border-left">
                                          <img src="frontend/img/icons/hotel.png" alt="hotel">
                                          <p>
                                              <span>Hotel</span>
                                              <br>5 Stars Hotel
                                              for Spend the
                                              night
                                          </p>
                                      </div>

                                      <div class="col-4 include-item border-left">
                                          <img src="frontend/img/icons/senorkeling.png" alt="snorkling">
                                          <p>
                                              <span>Snorkling</span>
                                              <br>Rugi cuk
                                              kalo gak snorkling
                                          </p>
                                      </div>


                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>

              <div class="col-sm-12 col-md-4 member-going">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title font-weight-bold">Members are going</h5>
                          <div class="avatar">
                              <img src="frontend/img/people/girl1.png" class="rounded-circle" width="40">
                              <img src="frontend/img/people/girl1.png" class="rounded-circle" width="40"><img
                                  src="frontend/img/people/girl1.png" class="rounded-circle" width="40">
                              <a href="#" class="card-link">Invite More</a>
                          </div>
                          <hr>

                          <h5 class="card-subtitle mb-3">Information</h5>

                          <table class="trip-info" style="width: 100%;">

                              <tr>
                                  <th width="50%">Date of Departure</th>
                                  <td width="50%" class="text-right"> 22 December 2019</td>
                              </tr>

                              <tr>
                                  <th width="50%">Duration</th>
                                  <td width="50%" class="text-right"> 4 Days 4 Nights</td>
                              </tr>

                              <tr>
                                  <th width="50%">Type of Trip</th>
                                  <td width="50%" class="text-right"> Premium</td>
                              </tr>

                              <tr>
                                  <th width="50%">Price</th>
                                  <td width="50%" class="text-right">$12k/person</td>
                              </tr>


                          </table>


                      </div>
                  </div>
                  <div class="book-now text-center">
                      <a href="checkout.html" class="btn btn-book ">BOOK ME IN</a>
                  </div>
              </div>
  </section>
</main>

@endsection

@push('append-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xZoom/xzoom.css')}}">
    
@endpush

@push('append-script')

<script src=" {{ url('frontend/libraries/xZoom/xzoom.min.js') }} "></script>

    <script>
        $(document).ready(function () {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });

    </script>
    
@endpush
