  <div class="row">
    <div class="col-sm-8">
		<div class="card">
	    <div class="card-body">
				<div class="form-group">
					<label class="control-label">Images</label>
					<div id='images-list' class="col-md-12">
						@for ($i = 0; $i < 6; $i++)
						{{-- <div class="fileupload fileupload-new" data-provides="fileupload"> --}}
							<div class="input-append hidden">
								<div class="uneditable-input">
									<i class="fa fa-file fileupload-exists"></i>
									<span class="fileupload-preview"></span>
								</div>
								<span class="btn btn-default btn-file">
									<input id="input-img-image-<?php echo $i ?>" name="images[]" type="file"  onchange="loadFile(event,<?php echo $i ?>)"/>
									<input  name="images_edit[]" type="text">
								</span>
							</div>
							<img class="img" id="img-image-{{$i}}" src="{{asset('img/image.png')}}" style="margin-right: 70px; padding-bottom: 4px"  />
						{{-- </div> --}}
						@endfor
					</div>
				</div>
	    </div>
	  </div>
    </div>
  </div>