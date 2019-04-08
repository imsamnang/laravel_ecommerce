  <div class="row">
    <div class="col-sm-6">
        {{-- category_level --}}
        <div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
          <label for="category_id" class="control-label">{{ 'Product Category' }}</label>
          <select name="category_id" class="form-control" id="category_id" >
              <?php echo $category_dropdown;?>
          </select>
            {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
        </div>
        {{-- product name --}}
        <div class="form-group {{ $errors->has('category_name') ? 'has-error' : ''}}">
            <label for="product_name" class="control-label">{{ 'Product Name' }}</label>
            <input class="form-control" name="product_name" type="text" id="product_name" value="{{ isset($product->product_name) ? $product->product_name : ''}}" >
            {!! $errors->first('product_name', '<p class="help-block">:message</p>') !!}
        </div>
        {{-- qty --}}
        <div class="form-group {{ $errors->has('qty') ? 'has-error' : ''}}">
            <label for="qty" class="control-label">{{ 'Quantity' }}</label>
            <input class="form-control" name="qty" type="text" id="qty" value="{{ isset($product->qty) ? $product->qty : ''}}" >
            {!! $errors->first('qty', '<p class="help-block">:message</p>') !!}
        </div>
        {{-- product name --}}
        <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
            <label for="price" class="control-label">{{ 'Price' }}</label>
            <input class="form-control" name="price" type="text" id="price" value="{{ isset($product->price) ? $product->price : ''}}" >
            {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
        </div>
        {{-- description --}}
        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
            <label for="description" class="control-label">{{ 'Description' }}</label>
            <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($product->description) ? $product->description : ''}}</textarea>
            {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
        </div>
        {{-- image --}}
        <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
            <label for="image" class="control-label">{{ 'Image' }}</label>
            <input class="form-control" name="image" type="file" id="image" value="{{ isset($product->image) ? $product->image : ''}}" >
            {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
        </div>
        {{-- image Gallery --}}
        <div class="form-group {{ $errors->has('imageGallery') ? 'has-error' : ''}}">
            <label for="imageGallery" class="control-label">{{ 'Image Gallery' }}</label>
            <input class="form-control" name="imageGalleries[]" type="file" id="imageGalleries" value="{{ isset($product->image) ? $product->image : ''}}" multiple>
            {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
        </div>
        {{-- is_active --}}
        <div class="form-group {{ $errors->has('is_active') ? 'has-error' : ''}}">
            <label for="is_active" class="control-label">{{ 'Is Active' }}</label>
            <div class="radio">
            <label><input name="is_active" type="radio" value="1" {{ (isset($product) && 1 == $product->is_active) ? 'checked' : '' }}> Yes</label>
        </div>
        <div class="radio">
            <label><input name="is_active" type="radio" value="0" @if (isset($product)) {{ (0 == $product->is_active) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
        </div>
            {!! $errors->first('is_active', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-sm-6">
      <?php
      if(isset($imageGalleries)){ ?>
      <ol class="list-group">
        @foreach ($imageGalleries as $image)
          <li class="list-group-item">
            <img src="{{ asset('uploads/product/galleries/'.$image->gallery_image) }}" class="img-responsive" style="width: 100px; height: 100px" alt="Image Gallery">
          </li>
        @endforeach 
      </ol>
      <?php } ?>
    </div>
  </div>
  <div class="row mt-1">
    {{-- submit button --}}
    <div class="form-group">
      <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </div>
  </div>