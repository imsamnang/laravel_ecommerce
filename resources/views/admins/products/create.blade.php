@extends('layouts.backend.matrix_admin')

@section('main-content')

  <div class="card">
    <div class="card-header">Create New Product</div>
    <div class="card-body">
      <a href="{{ url('/admin/product') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
      <br />
      <br />
      @if ($errors->any())
          <ul class="alert alert-danger">
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      @endif
      <form method="POST" action="{{ url('/admin/product') }}" accept-charset="UTF-8" enctype="multipart/form-data">
          {{ csrf_field() }}
          @include ('admins.products.form', ['formMode' => 'create'])
      </form>

    </div>
  </div>

@endsection
