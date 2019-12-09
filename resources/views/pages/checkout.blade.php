@extends('layouts.second')



@section('title', 'Checkout')
    

@section('content')
<main>
    <section class="checkout">
      <div class="container mt-5">
  
        <div class="bread-line"></div>
  
        <div class="row">
          <div class="col">
            <nav aria-label="breadcrumb" style="font-size: 1.2rem;">
              <ol class="breadcrumb" style="background: none;">
                <li class="breadcrumb-item"><a href="#">Package</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
              </ol>
            </nav>
          </div>
        </div>
  
        <div class="row">
          <div class="col-sm-12 col-md-8">
            <div class="card mb-5">
              <div class="container">
                <div class="card-body">

                  @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                              <li> {{$error}} </li>
                          @endforeach
                        </ul>
                      </div>
                  @endif

                  <h2 class="card-title font-weight-bold">Who's Going?</h2>
                  <h5 class="card-subtitle text-muted mb-3">Trip to  {{$item->travel_package->title}} </h5>
  
                  <table class="table table-hover table-responsive-sm text-center">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">Name</th>
                        <th scope="col">Nationality</th>
                        <th scope="col">Visa</th>
                        <th scope="col">Passport</th>
                        <th scope="col">X</th>
                      </tr>
                    </thead>
                    <tbody>

                      @forelse ($item->details as $detail)
                        <tr>
                          <th scope="row">1</th>
                          <td> <img src=" https://ui-avatars.com/?name={{$detail->username}}" class="rounded-circle" width="30">
                          </td>
                          <td>
    
                            {{$detail->username}}
                          </td>
                          <td>{{$detail->nationality}}</td>
                          <td>{{$detail->is_visa ? '30 Days' : 'N/a'}}</td>
                          <td>{{\Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}</td>
                          <td>
                            <a href=" {{route('Checkout_remove', $detail->id)}} ">
                              X
                            </a>
    
                          </td>
                        </tr>    
                      @empty
                          <tr>
                            <td>GADA OY</td>
                          </tr>
                      @endforelse

                      
  
                      
  
                    </tbody>
                  </table>
                  <!-- TABLE -->
  
  
                  <!-- FORM -->
  
                  <div class="add-member mt-3">
                    <h4 class="font-weight-bold">Add Member</h4>
  
                    <form method="POST" action="{{route('Checkout_create', $item->id)}}" >
                      @csrf 
                      <div class="form-row align-items-center">
                        <div class="col-sm-3 my-1">
                          <label class="sr-only" for="username">username</label>
                          <input type="text" class="form-control" name="username" id="username"
                            placeholder="Username">
                        </div>

                        <div class="col-sm-3 my-1">
                            <label class="sr-only" for="nationality">nationality</label>
                            <input type="text" class="form-control" name="nationality" id="nationality"
                              placeholder="nationality">
                          </div>

                        <div class="col-sm-2 my-1">
                          <label class="sr-only" for="visa">Visa</label>
                          <div class="input-group">
                            <select name="is_visa" id="is_visa" class="custom-select mr-sm-2">
                              <option value="" selected>Visa</option>
                              <option value="1">30 Days</option>
                              <option value="0">N/A</option>
                            </select>
                          </div>
                        </div>
  
                        <div class="col-sm-4 my-1">
                          <label class="sr-only" for="passport">DOE Passport</label>
                          <div class="input-group">
                            <input type="text"  id="doe_passport" placeholder="DOE Passport" name="doe_passport"
                              class="form-control datepicker"/>
                          </div>
                        </div>
  
  
                        <div class="col-auto">
                          <button type="submit" class="btn btn-primary add-btn">Add </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- FORM -->
  
  
                  <h5 class="mt-4 text-muted">Note*</h5>
                  <p class="text-muted mb-5">You are only able to invite members that has already join travelQ</p>
  
  
                </div>
              </div>
            </div>
          </div>
  
          <div class="col-sm-12 col-md-4 member-going">
            <div class="card">
              <div class="card-body">
  
  
                <h5 class="card-subtitle mb-3 font-weight-bold">Information</h5>
  
                <div class="container">
                  <table class="trip-info" style="width: 300px !important;">
  
                    <tr>
                      <th width="50%">Members</th>
                      <td width="50%" class="text-right">{{$item->details->count()}}</td>
                    </tr>
  
                    <tr>
                      <th width="50%">Additional VISA</th>
                      <td width="50%" class="text-right">Rp. {{$item->additional_visa}}/person</td>
                    </tr>
  
                    <tr>
                      <th width="50%">Trip Price</th>
                      <td width="50%" class="text-right">Rp. {{$item->travel_package->price}}/Person</td>
                    </tr>
  
                    <tr>
                      <th width="50%">Total Price</th>
                      <td width="50%" class="text-right">Rp. {{$item->transaction_total}} </td>
                    </tr>
  
                    <tr>
                      <th width="70%" class="">Total Pay (unix code)</th>
                      <td width="50%" class="text-right">Rp. {{$item->transaction_total}}, {{mt_rand(0,99 )}} </td>
                    </tr>
                  </table>
                </div>
                <hr>
  
                <h5 class="card-subtitle mb-1 font-weight-bold">Payment</h5>
                <p class="text-muted" style="font-size: .9rem;">*Please complete the payment before you continue the trip
                </p>
  
                <div class="payment">
                  <div class="bank1">
                    <div class="bank-logo">
                      <img src="./frontend/img/icons/currency.png" width="60">
                    </div>
                    <div class="bank-desc">
                      <p>PT TRAVELQ ID</p>
                      <p>BANK CENTRAL ASIA</p>
                      <p>5698 5644 1247 8896</p>
                    </div>
                  </div>
  
                  <div class="bank2 mt-4">
                    <div class="bank-logo">
                      <img src="./frontend/img/icons/money.png" width="60">
                    </div>
                    <div class="bank-desc">
                      <p>PT TRAVELQ ID</p>
                      <p>BANK CENTRAL ASIA</p>
                      <p>5698 5644 1247 8896</p>
                    </div>
                  </div>
                </div>
  
  
  
              </div>
            </div>
            <div class="book-now text-center">
              <a href="{{route('Checkout_success', $item->id)}}" class="btn btn-book ">Payment Confirmation</a>
            </div>
  
            <div class=" text-center">
              <a href="{{route('Detail', $item->travel_package->slug)}}" class="btn btn-cancel">CANCEL booking</a>
            </div>
  
          </div>
    </section>
  </main>
@endsection

@push('append-style')
  <link rel="stylesheet" href=" {{url('frontend/libraries/gijgo/css/gijgo.min.css')}} ">
    
@endpush


@push('append-script')
<script src=" {{url('frontend/libraries/gijgo/js/gijgo.min.js')}}"></script>
<script>
  $('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    uiLibrary: 'bootstrap4',
    icon: {
      rightIcon: '<img src=" {{url('frontend/img/icons/calendar.png')}} ">'
    }
  })
</script>
@endpush