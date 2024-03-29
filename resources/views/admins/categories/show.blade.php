@extends('layouts.backend.matrix_admin')

@section('main-content')

  <div class="card">
      <div class="card-header">Category {{ $category->id }}</div>
      <div class="card-body">
          <a href="{{ url('/admin/category') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
          <a href="{{ url('/admin/category/' . $category->id . '/edit') }}" title="Edit Category"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

          <form method="POST" action="{{ url('admin/category' . '/' . $category->id) }}" accept-charset="UTF-8" style="display:inline">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
              <button type="submit" class="btn btn-danger btn-sm" title="Delete Category" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
          </form>
          <br/>
          <br/>
          <div class="table-responsive">
              <table class="table">
                  <tbody>
                      <tr>
                          <th>ID</th><td>{{ $category->id }}</td>
                      </tr>
                      <tr><th> Category Name </th><td> {{ $category->category_name }} </td></tr><tr><th> Category Level </th><td> {{ $category->category_level }} </td></tr><tr><th> Description </th><td> {{ $category->description }} </td></tr><tr><th> Image </th><td> {{ $category->image }} </td></tr><tr><th> Is Active </th><td> {{ $category->is_active }} </td></tr>
                  </tbody>
              </table>
          </div>

      </div>
  </div>

@endsection
