	<div class="post_form bg-white rounded border my_content">
		<div class="header p-3">
			<h1 class="title">POST FREE AD</h1>
			<div class="step">
				<ul class="list-unstyled">
				<li class="active"><span class="text"><i>1</i> Choose a category</span></li>
				<li class="active"><span class="text"><i>2</i> Fill Description</span></li>
				</ul>
			</div>
		</div>

		<div class="post_form p-3">
			<div class="post_form">
				<form action="{{route('post.store')}}" class="form form-horizontal" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="form_post">
					{{csrf_field()}}
					<input type="hidden" name="category_id" value="{{$category->id}}">
					<input type="hidden" name="parent_id" value="{{$subcategory->id}}" >
					{{-- category --}}
					<div class="form-group">
						<label for="title" class="col control-label">Category</label>
						<div class="col-6 cat_path">
							<div class="category-selected">
								<ul class="list-unstyled list-inline">
									<li>{{$category->category_name}}</li>
									<li>{{$subcategory->category_name}}</li>
								</ul>
								<a class="btn btn-sm  btn-primary btn_change_cat" href="{{route('post.index')}}">Change</a>
							</div>
						</div>
					</div>
					{{-- Title --}}
					<div class="form-group">
						<label for="ad_headline" class="col control-label">Title <span class="red">*</span></label>
						<div class="col col-6 form-input">
						<input id="title" class="form-control" type="text" name="title" value="{{ isset($property->title)?$property->title :'' }}" required="">
						</div>
					</div>
					{{-- Size --}}
					<div class="form-group input-ad_year">
						<label for="size" class="col-sm-3 control-label">Size(m<sup>2</sup>)</label>
						<div class="form-input col-sm-6 col-lg-3">
							<input type="text" name="size" value="{{ isset($property->size)?$property->size :'' }}" id="size" class="form-control  number" />
						</div>
					</div>
					{{-- Price --}}
					<div class="form-group input-ad_price">
						<label for="ad_price" class="col-sm-3 control-label">Price <i class="red">*</i></label>
						<div class="form-input col-sm-6 col-lg-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupPrepend_ad_price">$</span>
								</div>
								<input type="number" min="1" name="price" id="price" class="form-control  number " required aria-describedby="basic-addon1" value="{{ isset($property->price)?$property->price :'' }}">
							</div>
						</div>
					</div>
					{{-- Description --}}
					<div class="form-group">
						<label for="ad_text" class="col control-label">Description <span class="red">*</span></label>
						<div class="col col-8 form-input">
						<textarea name="description" id="description" class="required form-control" rows="4" required>
							{{ isset($property->description)?$property->description :'' }}
						</textarea>
						</div>
					</div>
					{{-- Photo --}}
					<div class="form-group">
						<label for="ad_text" class="col control-label">Ad Photos <i class="red">*</i></label>
						<div id="plupload" class="col-8">
							<div class="row plupload_block">
								<div class="pl fleft col-12">
								<!-- Code Begins -->
									<input style="display:none;" type="file" name="imageGalleries[]" id="vpb-data-file" onchange="vpb_image_preview(this)" multiple="multiple" />
									<div align="center" style="width:300px;">
										<!-- Browse File Button -->
										<span class="vpb_browse_file" onclick="document.getElementById('vpb-data-file').click();"></span>
									</div>
								</div>
								<div style="width:710px; margin-top:5px;" align="center" id="vpb-display-preview">
									@if (isset($images))
										@foreach ($images as $image)
			            		<div id="selector_{{$image->id}}" class="vpb_wrapper">
						            <img class="vpb_image_style" class="img-thumbnail" src="{{asset('uploads/property/galleries/'.$image->gallery_image)}}"
						            alt="{{$image->gallery_image}}" /><br /> 
						            <a style="cursor:pointer;padding-top:5px;" title="Click here to remove" 
						            onclick="vpb_remove_selected()">Remove</a>
			            		</div>
										@endforeach
									@endif
								</div>
							<!-- Code Begins -->
							</div>
							<div class="clear"></div>
						</div>
					</div>


					<div class="col-md-12" style="border:solid 3px #e0e0e0;">
						<div class="pddt20"></div>
						<div class=" row">
							<div class="col-md-8">
								<div class="form-group">
									<label class="col-sm-3 control-label">Feature</label>
									<div class="col-sm-8">
										<div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="input-append">
												<div class="uneditable-input">
													<i class="fa fa-file fileupload-exists"></i>
													<span class="fileupload-preview"></span>
												</div>
												<span class="btn btn-default btn-file">
													<span class="fileupload-exists">Change</span>
													<span class="fileupload-new">Select file</span>
													<input id="feature" name="feature" type="file" required="" />
												</span>
												<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
											</div>
											<label class="error" for="feature"></label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="pddt20"></div>
									<label class="col-sm-3 control-label">Images</label>
									<div class="col-sm-8">
										<div id='images-list'>
											<?php for ($i = 0; $i < 6; $i++) { ?>
											<div class="col-sm-4 images" id="image-<?php echo $i ?>">
												<div class="fileupload fileupload-new" data-provides="fileupload">
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
													<div style="padding-bottom: 4px "></div>
													<img class="img" id="img-image-<?php echo $i ?>" src="{{asset('img/image.png')}}"   />
													<div style="padding-bottom: 4px "></div>
													<label class="error" for="error-<?php echo $i ?>"></label>
												</div>
											</div>
											<?php  } ?>
										</div>
										<div class="col-sm-4 hidden">
											<a id="add-more-image" class="btn btn-default" style="background: #dedada"><i class="fa fa-plus fa-2x"></i><i class="fa fa-image fa-5x"></i> </a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4"  >
								<img  id="img-feature" src="{{asset('img/products.png')}}" alt="feature" height="300" width="100%" />
							</div>
						</div>
					</div>


					{{-- Name --}}
					<div class="form-group">
						<label for="name" class="col control-label">Name <span class="red">*</span></label>
						<div class="col col-lg-4 form-input">
						<input id="name" class="form-control" type="text" name="name" value="{{ isset($property->name)?$property->name :'' }}">
						</div>
					</div>
					{{-- Phone --}}
					<div class="form-group">
						<label for="phone" class="col control-label">Phone <span class="red">*</span></label>
						<div class="col col-lg-4 phone">
							<div class="phone-1 form-input">
								<input type="tel" name="phone_1" value="{{ isset($property->phone1)?$property->phone1 :'' }}" id="phone_1" class="form-control number" maxlength="10" placeholder="Tel 1" required>
								<a href="javascript:void(0)" class="add_phone" data-id="add"><i class="icon-plus-full"></i></a>
							</div>
							<div class="phone-2 form-input  d-none">
								<input type="tel" name="phone_2" value="{{ isset($property->phone2)?$property->phone2 :'' }}" id="phone_2" class="form-control number" maxlength="10" placeholder="Tel 2">
								<a href="javascript:void(0)" class="delete_phone" data-id="phone-2"><i class="icon-remove"></i></a>
							</div>
							<div class="phone-3 form-input d-none">
								<input type="tel" name="phone_3" value="{{ isset($property->phone3)?$property->phone3 :'' }}" id="phone_3" class="form-control number" maxlength="10" placeholder="Tel 3">
								<a href="javascript:void(0)" class="delete_phone" data-id="phone-3"><i class="icon-remove"></i></a>
							</div>
						</div>
					</div>
					{{-- email --}}
					<div class="form-group">
						<label for="email" class="col control-label">Email</label>
						<div class="col col-6 form-input">
							<input type="email" name="email" id="email" class="form-control" value="{{ isset($property->email)?$property->email :'' }}">
						</div>
					</div>
					{{-- address detail group --}}
					<div class="locations_box">
						<div class="controls">
							{{-- Province --}}
							<div class="form-group">
								<label for="province" class="col control-label">City/Province<i class="red">*</i></label>
								<div class="col col-3 form-input">
									<select data-placeholder="Select a province" id="province" name="province_id" class="form-control map_form" required="">
										<option value="0" data-value="">Select a City/Province</option>
										@foreach ($provinces as $key => $province)
											@if (isset($property))											
												@if ($key==$property->id)
													<option data-en-title="{{$province}}" value="{{$key}}" data-value="tboung-khmum" selected>{{$province}}</option>
												@else
													<option data-en-title="{{$province}}" value="{{$key}}" data-value="tboung-khmum">{{$province}}</option>
												@endif
											@endif
											<option data-en-title="{{$province}}" value="{{$key}}" data-value="tboung-khmum">{{$province}}</option>
										@endforeach
									</select>
								</div>
							</div>
							{{-- District --}}
							<div class="form-group">
								<label for="district" class="col control-label">Khan/District <i class="red">*</i></label>
								<div class="col col-3 form-input">
								<select data-placeholder="Select a district" id="district" name="district_id" class="form-control map_form" required="" disabled="">
									<option value="0" data-value="">Select a Khan/District</option>
									@if (isset($property))
										<option value="{{ $property->district_id}}" data-value="" selected="">{{ $property->district->name_en }}</option>
									@endif
								</select>
								</div>
							</div>
							{{-- Commune --}}
							<div class="form-group">
								<label for="commune" class="col control-label">Sangkat/Commune <i class="red">*</i></label>
								<div class="col col-3 form-input">
									<select data-placeholder="Select a commune" id="commune" name="commune_id" class="form-control map_form" required="" disabled="">
										<option value="0" data-value="">Select a Sangkat/Commune</option>
										@if (isset($property))
										<option value="{{ $property->commune_id}}" data-value="" selected="">{{ $property->commune->name_en }}</option>
										@endif
									</select>
								</div>
							</div>
							{{-- location Detail --}}
							<div class="form-group">
								<label for="address" class="col control-label">Location Details<i class="red">*</i></label>
								<div class="col col-8 form-input">
								<textarea name="location" id="location" class="form-control" required="">
									{{ isset($property)?$property->location :'' }}
								</textarea>
								</div>
							</div>
						</div>
					</div>
					{{-- save contact information --}}
					<div class="form-group">
						<div class="col col-8">
							<label class="save_contact">
								<div class="custom-control custom-checkbox ">
									<input type="checkbox" class="custom-control-input" id="save_contact" value="1" name="save_contact">
									<div class="custom-control-label" for="save_contact">Save contact information (<i>Name, Phone, Location, Address</i>) for the next ads.</div>
								</div>
							</label>
						</div>
					</div>
					{{-- submit button --}}
					<div class="form-group submit_box">
						<div class="col-sm-offset-2 col col-3 btn_submit">
							<input type="submit" value="Submit" class="btn btn-lg btnsavead btn-warning btn-block">
							{{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
						</div>
					</div>
				</form>
				{{-- Posting Rule --}}
				<div class="posting_rule">
					<span class="rule_title"><i class="icon-warning"></i> Posting Rule</span>
					<ul>
						<li>No posting of same ad or similar ad to multiple categories and inappropriate category</li>
						<li>No posting of false, inaccurate, misleading, defamatory content</li>
						<li>You must honestly and accurately describe the item for which you are posting an ad.</li>
						<li>khmer24.com assumes no responsibility for the accuracy of any advertisements posted on the site</li>
					</ul>
					<div>
						<a target="_blank" href="https://www.khmer24.com/en/posting-rule.html">More rules...</a>
					</div>
				</div>
			</div>
		</div>

	</div>

{{-- 	<div class="modal fade" id="account-question" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="account-question-box">
						<div class="title-head">
							<div class="text">Please! register or login to publish your ad</div>
							<div class="icon">
							<span class="user-photo" style="background: url('https://www.khmer24.com/khmer24-reform21/template/img/default_profile.jpg') no-repeat center; background-size: cover;"></span>
							</div>
							<button class="btn btn-clear btn-close-modal"><span class="icon icon-cross"></span></button>
						</div>
						<div class="detail-box">
							<div>
								<div class="info">Already have an account?</div>
								<a class="btn btn_blue btn-primary btn-md" href="https://www.khmer24.com/en/login">Log in</a>
							</div>
							<div class="devide">
								<span>Or</span>
							</div>
							<div>
								<div class="info">No account yet?</div>
								<a class="btn btn-warning btn-yellow_dark btn-md" href="https://www.khmer24.com/en/register">Register</a>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div> --}}

	<a href="#totop" id="totop"><i class="icon-up"></i></a>
