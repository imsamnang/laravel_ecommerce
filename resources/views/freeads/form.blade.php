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
				<form action="#" id="form-post" class="form form-horizontal" method="post" accept-charset="utf-8" novalidate="novalidate" enctype="multipart/form-data">
					<input type="hidden" name="csrf_test_name" id="csrf_test_name" value="{{csrf_field()}}">
					{{csrf_field()}}
					<input type="hidden" name="category_id" value="{{$category->id}}">
					<input type="hidden" value="sub_cate_id" name="{{$subcategory->id}}">
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
						<input id="ad_headline" class="form-control" type="text" name="ad_headline" value="" required="">
						</div>
					</div>
					{{-- Size --}}
					<div class="form-group input-ad_year">
						<label for="ad_year" class="col-sm-3 control-label">Size(m<sup>2</sup>)</label>
						<div class="form-input col-sm-6 col-lg-3">
							<input type="text" name="ad_year" value="" id="ad_year" class="form-control  number " />
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
								<input type="number" min="1" name="ad_price" id="ad_price" class="form-control  number " required aria-describedby="basic-addon1" value="">
							</div>
						</div>
					</div>
					{{-- Description --}}
					<div class="form-group">
						<label for="ad_text" class="col control-label">Description <span class="red">*</span></label>
						<div class="col col-8 form-input">
						<textarea name="ad_text" id="ad_text" class="required form-control" rows="10"></textarea>
						</div>
					</div>
					{{-- Photo --}}
					<div class="form-group">
						<label for="ad_text" class="col control-label">Ad Photos <i class="red">*</i></label>
{{-- 						<div id="plupload" class="col-8">
							<div class="row plupload_block">
								<div class="pl fleft col-12">
								<span class="drop_file_hear"></span>
									<div id="multi-upload">
									<div id="console"></div>
										<ul class="list-image list-unstyled">
											<li>
												<div id="item-1" class="item">
													<a href="javascript:;" class="btn-browse" id="browse-1">Add Image</a>
												</div>
											</li>
											<li>
												<div id="item-2" class="item">
													<a href="javascript:;" class="btn-browse" id="browse-2">Add Image</a>
												</div>
											</li>
											<li>
												<div id="item-3" class="item">
													<a href="javascript:;" class="btn-browse" id="browse-3">Add Image</a>
												</div>
											</li>
											<li>
												<div id="item-4" class="item">
													<a href="javascript:;" class="btn-browse" id="browse-4">Add Image</a>
												</div>
											</li>
											<li>
												<div id="item-5" class="item">
													<a href="javascript:;" class="btn-browse" id="browse-5">Add Image</a>
												</div>
											</li>
											<li>
												<div id="item-6" class="item">
													<a href="javascript:;" class="btn-browse" id="browse-6">Add Image</a>
												</div>
											</li>
											<li>
												<div id="item-7" class="item">
													<a href="javascript:;" class="btn-browse" id="browse-7">Add Image</a>
												</div>
											</li>
											<li>
												<div id="item-8" class="item">
													<a href="javascript:;" class="btn-browse" id="browse-8">Add Image</a>
												</div>
											</li>
										</ul>
										<div class="drop_box" id="drop-image">
											<span class="image_placeholder"></span>
											<p>Drop your photo hear.</p>
										</div>
										<div class="total_status">
											<span class="current_uploads" id="current_uploads">0</span> of 
											<span class="total">8</span>
										</div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
							<div style="display:none;">
								<input type="hidden" id="count" value="1">
								<input type="hidden" id="csrf" value="{{csrf_field()}}">
								<input type="hidden" id="browser" value="">
							</div>
						</div> --}}
					</div>
					{{-- Name --}}
					<div class="form-group">
						<label for="name" class="col control-label">Name <span class="red">*</span></label>
						<div class="col col-lg-4 form-input">
						<input id="name" class="form-control" type="text" name="name" value="">
						</div>
					</div>
					{{-- Phone --}}
					<div class="form-group">
						<label for="phone" class="col control-label">Phone <span class="red">*</span></label>
						<div class="col col-lg-4 phone">
							<div class="phone-1 form-input">
								<input type="tel" name="phone-1" value="" id="phone-1" class="form-control number" maxlength="10" placeholder="Tel 1">
								<a href="javascript:void(0)" class="add_phone" data-id="add"><i class="icon-plus-full"></i></a>
							</div>
							<div class="phone-2 form-input  d-none">
								<input type="tel" name="phone-2" value="" id="phone-2" class="form-control number" maxlength="10" placeholder="Tel 2">
								<a href="javascript:void(0)" class="delete_phone" data-id="phone-2"><i class="icon-remove"></i></a>
							</div>
							<div class="phone-3 form-input d-none">
								<input type="tel" name="phone-3" value="" id="phone-3" class="form-control number" maxlength="10" placeholder="Tel 3">
								<a href="javascript:void(0)" class="delete_phone" data-id="phone-3"><i class="icon-remove"></i></a>
							</div>
						</div>
					</div>
					{{-- email --}}
					<div class="form-group">
						<label for="email" class="col control-label">Email</label>
						<div class="col col-6 form-input">
							<input type="email" name="email" id="email" class="form-control" value="">
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

								</select>
								</div>
							</div>
							{{-- Commune --}}
							<div class="form-group">
								<label for="commune" class="col control-label">Sangkat/Commune <i class="red">*</i></label>
								<div class="col col-3 form-input">
									<select data-placeholder="Select a commune" id="commune" name="commune_id" class="form-control map_form" required="" disabled="">
										<option value="0" data-value="">Select a Sangkat/Commune</option>

									</select>
								</div>
							</div>
							{{-- location Detail --}}
							<div class="form-group">
								<label for="address" class="col control-label">Location Details<i class="red">*</i></label>
								<div class="col col-8 form-input">
								<textarea name="address" id="address" class="form-control" required=""></textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="map_view col-12">
								<div class="map_box hidden" id="ad_map">
									<a id="find_location" href="#">
									<span class="icon icon-my-location"></span> Find My Location</a>
									<span id="map_loading" class="loading" style="display: none;"></span>
								</div>
								<input type="hidden" id="map_lat" name="map_lat" value="">
								<input type="hidden" id="map_lng" name="map_lng" value="">
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
							<input type="submit" name="save_ad" value="Submit" class="btn btn-lg btnsavead btn-warning btn-block">
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

	<input type="hidden" value="http://builder.test/" id="base_url" />
	<input type="hidden" value="http://builder.test/img/" id="template_path" />

	<div class="modal fade" id="account-question" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
	</div>

	<a href="#totop" id="totop"><i class="icon-up"></i></a>
