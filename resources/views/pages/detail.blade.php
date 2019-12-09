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
                          <h2 class="card-title font-weight-bold"> {{$item->title}} </h2>
                          <h5 class="card-subtitle text-muted mb-3"> {{$item->location}} </h5>


													@if ($item->galleries->count())
															
                          <div class="galery">
														<div class="xzoom-container">
															<img src=" {{ Storage::url($item->galleries->first()->image) }} " alt="maldives1" class="xzoom"
                                      id="xzoom-default" xoriginal=" {{ Storage::url($item->galleries->first()->image) }} " />
                              </div>

                              <div class="xzoom-thumbs">
                                  @foreach ($item->galleries as $gallery)
																	<a href=" {{ Storage::url($gallery->image)}} ">
																		<img src=" {{ Storage::url($gallery->image)}} " class="xzoom-gallery" width="210"
																				xpreview=" {{ Storage::url($gallery->image)}} ">
																	</a>
																	@endforeach

                                  
                              </div>
													</div>
													@endif
													

                          <h5 class="card-subtitle font-weight-bold mt-4"> {{$item->title}} </h5>
                          <p class="description mt-3"> {{$item->about}} .</p>

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
                                  <td width="50%" class="text-right"> 
																		{{ \Carbon\Carbon::create($item->departure)->format('l, j M Y') }}
																	</td>
                              </tr>

                              <tr>
                                  <th width="50%">Duration</th>
                                  <td width="50%" class="text-right"> {{$item->duration}} </td>
                              </tr>

                              <tr>
                                  <th width="50%">Type of Trip</th>
                                  <td width="50%" class="text-right"> {{$item->typeOfTrip}}</td>
                              </tr>

                              <tr>
                                  <th width="50%">Price</th>
                                  <td width="50%" class="text-right">Rp.{{$item->price}}/Person</td>
                              </tr>


                          </table>


                      </div>
                  </div>
                  <div class="book-now text-center">
										@auth

										<form action=" {{route('Checkout_process', $item->id)}} " method="POST" >
											@csrf
											<button class="btn btn-book pb-4" type="submit">BOOK ME IN</button>
										</form>
										
										@endauth
										@guest
										<a href="{{route('login')}}" class="btn btn-book ">Login or Register Dlu laaa</a>
												
										@endguest
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
