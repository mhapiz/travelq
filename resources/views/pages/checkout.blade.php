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
                  <h2 class="card-title font-weight-bold">Who's Going?</h2>
                  <h5 class="card-subtitle text-muted mb-3">Trip to Maldives, Sri Lanka</h5>
  
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
                      <tr>
                        <th scope="row">1</th>
                        <td> <img src="frontend/img/people/girl1.png" class="rounded-circle" width="30">
                        </td>
                        <td>
  
                          Clara Anastasia
                        </td>
                        <td>Singaporean</td>
                        <td>30 Days</td>
                        <td>Active</td>
                        <td>
                          <a href="#">
                            X
                          </a>
  
                        </td>
                      </tr>
  
                      <tr>
                        <th scope="row">2</th>
                        <td> <img src="frontend/img/people/girl1.png" class="rounded-circle" width="30">
                        </td>
                        <td>
  
                          Clara Anastasia
                        </td>
                        <td>Singaporean</td>
                        <td>30 Days</td>
                        <td>Active</td>
                        <td>
                          <a href="#">
                            X
                          </a>
  
                        </td>
                      </tr>
  
                    </tbody>
                  </table>
                  <!-- TABLE -->
  
  
                  <!-- FORM -->
  
                  <div class="add-member mt-3">
                    <h4 class="font-weight-bold">Add Member</h4>
  
                    <form>
                      <div class="form-row align-items-center">
                        <div class="col-sm-3 my-1">
                          <label class="sr-only" for="username">username</label>
                          <input type="text" class="form-control" name="inputUsername" id="inputUsername"
                            placeholder="Username">
                        </div>
                        <div class="col-sm-2 my-1">
                          <label class="sr-only" for="visa">Visa</label>
                          <div class="input-group">
                            <select name="inputVisa" id="inputVisa" class="custom-select mr-sm-2">
                              <option value="visa" selected>Visa</option>
                              <option value="30 days">30 Days</option>
                              <option value="N/A">N/A</option>
                            </select>
                          </div>
                        </div>
  
                        <div class="col-sm-4 my-1">
                          <label class="sr-only" for="passport">DOE Passport</label>
                          <div class="input-group">
                            <input type="text" id="doepassport" placeholder="DOE Passport" name="passport"
                              class="form-control datepicker">
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
                      <td width="50%" class="text-right">2 Members</td>
                    </tr>
  
                    <tr>
                      <th width="50%">Additional VISA</th>
                      <td width="50%" class="text-right"> $100/person</td>
                    </tr>
  
                    <tr>
                      <th width="50%">Trip Price</th>
                      <td width="50%" class="text-right"> $12k/Person</td>
                    </tr>
  
                    <tr>
                      <th width="50%">Total Price</th>
                      <td width="50%" class="text-right">$26.000,00</td>
                    </tr>
  
                    <tr>
                      <th width="70%" class="">Total Pay (unix code)</th>
                      <td width="50%" class="text-right">$25.998,00</td>
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
              <a href="{{'/success'}}" class="btn btn-book ">Payment Confirmation</a>
            </div>
  
            <div class=" text-center">
              <a href="index.html" class="btn btn-cancel">CANCEL booking</a>
            </div>
  
          </div>
    </section>
  </main>
@endsection

@push('append-style')
  <link rel="stylesheet" href=" {{url('frontend/libraries/gijgo/css/gijgo.min.css')}} ">
    
@endpush

@push('append-script')
<script src=" {{url(' frontend/libraries/gijgo/js/gijgo.min.js')}}"></script>
<script>
  $('.datepicker').datepicker({
    uiLibrary: 'bootstrap4',
    icon: {
      rightIcon: '<img src=" {{url('frontend/img/icons/calendar.png')}} ">'
    }
  })
</script>
@endpush