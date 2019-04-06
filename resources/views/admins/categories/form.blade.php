{{-- category --}}
<div class="form-group {{ $errors->has('category_name') ? 'has-error' : ''}}">
    <label for="category_name" class="control-label">{{ 'Category Name' }}</label>
    <input class="form-control" name="category_name" type="text" id="category_name" value="{{ isset($category->category_name) ? $category->category_name : ''}}" >
    {!! $errors->first('category_name', '<p class="help-block">:message</p>') !!}
</div>
{{-- category_level --}}
<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : ''}}">
  <label for="parent_id" class="control-label">{{ 'Category Level' }}</label>
  <select name="parent_id" class="form-control" id="parent_id" >
      <?php echo $category_dropdown;?>
  </select>
    {!! $errors->first('category_level', '<p class="help-block">:message</p>') !!}
</div>
{{-- description --}}
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($category->description) ? $category->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
{{-- image --}}
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ isset($category->image) ? $category->image : ''}}" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
{{-- is_active --}}
<div class="form-group {{ $errors->has('is_active') ? 'has-error' : ''}}">
    <label for="is_active" class="control-label">{{ 'Is Active' }}</label>
    <div class="radio">
    <label><input name="is_active" type="radio" value="1" {{ (isset($category) && 1 == $category->is_active) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="is_active" type="radio" value="0" @if (isset($category)) {{ (0 == $category->is_active) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('is_active', '<p class="help-block">:message</p>') !!}
</div>
{{-- submit button --}}
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
