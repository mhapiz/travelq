@extends('layouts.admin')


@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Travel Package</h1>
    <a href=" {{ route('travel-package.create') }} " class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm twxt-white-50"></i> Add More Travel Package </a>
  </div>

  <div class="row">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0" >

          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Location</th>
              <th>Type</th>
              <th>Departure</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
              @forelse ($items as $item)
              <tr>
                  <td> {{ $item -> id }} </td>
                  <td>{{ $item -> title }}</td>
                  <td>{{ $item -> location }}</td>
                  <td>{{ $item -> typeOfTrip }}</td>
                  <td>{{ $item -> departure }}</td>
                  <td>
                    <a href=" {{route('travel-package.edit', $item->id)}} " class="btn btn-info" > <i class="fa fa-pencil-alt"></i> </a>
                    <form class="d-inline" action=" {{route('travel-package.destroy', $item->id)}} " method="POST">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </button>
                    </form> 
                  </td>
              </tr>
              @empty
                  <tr>
                    <td colspan="6" class="text-center font-weight-bold" > Still Empty</td>
                  </tr>
              @endforelse
          </tbody>

        </table>
      </div>
    </div>
  </div>

 



</div>
<!-- /.container-fluid -->
@endsection