@extends('layouts.admin')


@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Travel Gallery</h1>
    <a href=" {{ route('gallery.create') }} " class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm twxt-white-50"></i> Add More Travel Gallery </a>
  </div>

  <div class="row">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0" >

          <thead>
            <tr>
              <th>ID</th>
              <th>Travel</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
              @forelse ($items as $item)
              <tr>
                  <td> {{ $item -> id }} </td>
                  <td>{{ $item -> travel_package -> title }}</td>
                  <td>
                  <img src=" {{ Storage::url($item->image) }} " class="img-thumbnail" style="width: 150px;">  
                  </td>
                  <td>
                    <a href=" {{route('gallery.edit', $item->id)}} " class="btn btn-info" > <i class="fa fa-pencil-alt"></i> </a>
                    <form class="d-inline" action=" {{route('gallery.destroy', $item->id)}} " method="POST">
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