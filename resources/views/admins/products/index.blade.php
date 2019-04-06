@extends('layouts.backend.master')

@section('formtitle','Category Lists')

@section('main-content')

<div class="card">
  <div class="card-body">
      <a href="{{ url('/admin/category/create') }}" class="btn btn-success btn-sm" title="Add New Category">
          <i class="fa fa-plus" aria-hidden="true"></i> Add New
      </a>
      <form method="GET" action="{{ url('/admin/category') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
        <div class="input-group">
          <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
          <span class="input-group-append">
            <button class="btn btn-secondary" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <br/>
      <br/>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Category</th>
              <th>Product Name</th>
              <th>Qty</th>
              <th>Price</th>
              <th>Image</th>
              <th>Is Active</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->category->category_name }}</td>
                <td>{{ $item->product_name }}</td>
                <td>{{ $item->qty }}</td>
                <td>{{ $item->price }}</td>
                <td>
                  <img src="{{ asset('uploads/product/'.$item->image)}}" class="img-responsive" alt="Image" style="width: 50px;height: 50px">
                </td>
                <td>{{ $item->is_active }}</td>
                <td>
                  <a href="{{ url('/admin/product/' . $item->id) }}" title="View Product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                  <a href="{{ url('/admin/product/' . $item->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                  <form method="POST" action="{{ url('/admin/product' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $products->appends(['search' => Request::get('search')])->render() !!} </div>
      </div>
  </div>
</div>

@endsection
