@extends('layouts.backend.khmer24_layout')

@push('css')
	<link rel="stylesheet" href="{{asset('assets/css/members.css')}}">
@endpush

@section('content')

	<div class="my-account-page account-page">
		<div class="my-account-head bg-white border-bottom">
			<div class="my-container text-center">
			</div>
			<div class="my-container">
				<div class="user-profile">
					<div>
						<a href="https://www.khmer24.com/en/member/edit-profile" class="user-photo" style="background: url('https://www.khmer24.com/khmer24-reform21/template/img/default_profile.jpg') no-repeat center; background-size: cover;">
						</a>
						<div class="user-info">
							<div class="name">Hi! <span id="text_name">សុភ័ក្រ លាប</span>
								<a id="btn-edit-name" class="text " data-toggle="modal" data-target="#popup_change_name" href="#popup_change_name"><span class="icon icon-edit"></span></a>
								<a href="https://www.khmer24.com/en/membership.html" style="position: absolute; right: 15px;" class="btn btn-sm btn-warning btn_yellow_brown">Upgrade To Business Account</a>
							</div>
							<ul class="info list-unstyled">
								<li>
								<b>Username:</b> <span id="username_text">p-70393143</span>
								<a class="text " data-toggle="modal" data-target="#popup_change_username" href="#popup_change_username"><span class="icon icon-edit"></span> Edit</a>
								</li>
								<li>
								<b>Register Phone:</b> 070393143 <span class="icon icon-check"></span>
								<a class="text " data-toggle="modal" data-target="#popup_change_phone" href="#popup_change_phone"><span class="icon icon-edit"></span> Change</a>
								</li>
								<li><b>Account Type:</b> Normal Account <a href="https://www.khmer24.com/en/membership.html">Update</a></li>
								<li>
								<b>Email:</b> <span id="email_text"></span>
								<a class="text " data-toggle="modal" data-target="#popup_change_email" href="#popup_change_email">Add Email</a>
								</li>
								<li>
								<b>Connect with Facebook <span class="icon icon-facebook"></span></b>
								<span class="icon icon-delete"></span>
								<a href="https://www.facebook.com/v2.9/dialog/oauth?client_id=217361691621555&amp;state=8d0794f72be2e5fb7867a337634513d2&amp;response_type=code&amp;sdk=php-sdk-5.5.0&amp;redirect_uri=https%3A%2F%2Fwww.khmer24.com%2Fen%2Fsetting%2Fconnect-with-facebook&amp;scope=email">Conncet Now</a>
								</li>
								<li class="store_url">
								<b>Store URL:</b> <a id="store_url" class="btn-link" href="https://www.khmer24.com/p-70393143">https://www.khmer24.com/p-70393143</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="nav-controls">
						<ul class="nav nav-pills nav-fill">
							<li class="nav-item active"><a class="nav-link" href="https://www.khmer24.com/en/posts"><span class="icon icon-folder"></span> My Ads</a></li>
							<li class="nav-item "><a class="nav-link" href="https://www.khmer24.com/en/likes"><span class="icon icon-like"></span> Likes</a></li>
							<li class="nav-item "><a class="nav-link" href="https://www.khmer24.com/en/notifications"><span class="icon icon-notification"></span> Notification</a></li>
							<li class="nav-item "><a class="nav-link" href="https://www.khmer24.com/en/setting"><span class="icon icon-setting-outline"></span> Setting</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="my-container pt-3 pb-3">
				<div class="filter_box">
				</div>
				<div class="row filter pb-3">
					<div class="col col-3">
						<div class="btn-group manage_ads_tab" role="group" aria-label="Basic example">
							<a class="disabled active_ads btn btn-default" href="https://www.khmer24.com/en/manage-ads.html">Active Ads <span class="counter badge badge-primary ml-1">1</span></a>
							<a class=" expired_ads btn btn-default" href="https://www.khmer24.com/en/manage-ads/expired-ads.html">Expired Ads </a>
						</div>
					</div>
					<div class="col text-right">
						<form action="https://www.khmer24.com/en/manage-ads" id="filter_form" class="form-inline" method="get">
							<span class="filter_left form-group">
								<label>Search: </label>
								<input type="text" name="search" class="form-control" placeholder="What are you looking for..." value="">
							</span>
							<span class="filter_left form-group">
								<label>Filter: </label>
								<select class="form-control" name="category" style="width: 160px;">
									<option value="">All Categories</option>
									<option value="property-housing-rentals" class="main_cate">House & Lands</option>
									<option value="landed-properties-for-sale">- Land for Sale</option>
								</select>
							</span>
							<span class="filter_right  form-group">
								<label>Sort: </label>
								<select class="form-control" name="sort" style="width: 160px;">
									<option value="posted_date_desc">Post Date: New to Old</option>
									<option value="posted_date_asc">Post Date: Old to New</option>
									<option value="renew_date_desc">Renew Date: New to Old</option>
									<option value="renew_date_asc">Renew Date: Old to New</option>
									<option value="price_desc">Price: High to Low</option>
								 	<option value="price_asc">Price: Low to High</option>
								</select>
							</span>
						</form>
					</div>
				</div>
				<div id="my_content" class="">
					<div class="post_shortcut text-center bg-white border rounded mb-3">
						<div class="text">
						Hi <strong>p-70393143</strong>, you currently have <strong>1</strong> ads (Active Ads)
						</div>
						<div>
							<a class="btn btn-warning btn-md " href="https://www.khmer24.com/en/post">
								<span class="icon icon-plus-full"></span> Post an Ad
							</a>
						</div>
					</div>
					<ul class="list_posts list-unstyled">
						<li id="item-3376753">
							<div class="item_box">
								<div class="ad_info">
									<span class="icon-point green"></span>
									<span class="status">Ad Active</span>
								</div>
								<div class="detail_box ">
									<a class="post_image" href="#" title="">
										<img alt="" class="img-cover" src="http://imagescdn.khmer24.com/19-04-13/s-369136-64-b.jpg" />
									</a>
									<div class="post_detail">
										<a class="title" href="https://www.khmer24.com/en/គមរងដឡតសមរសបបផសរង-adid-3376753.html" title="គមរងដឡតសមរសបបផសរង">គម្រោងដីឡួត៌សម្រស់បុ&#8203;ប្ផាស្រង៉ែ&#8203;</a>
										<div class="ad_price">$400</div>
										<div class="save_ads_sumery">
											<dl>
												<dt>Ad ID:</dt>
													<dd>3376753</dd>
											</dl>
											<dl>
												<dt>Posted On:</dt>
													<dd>13-Apr-19</dd>
											</dl>
											<dl>
												<dt>Renew On:</dt>
													<dd>13-Apr-19</dd>
											</dl>
											<dl>
												<dt>View:</dt>
													<dd>0</dd>
											</dl>
										</div>
										<p class="save_post_detail">
											1. ទិសខាងជើង
											2. ទិសខាងត្បូង
										</p>
									</div>
								</div>
								<div class="controls ">
									<div class="list_control text-center row">
										<div class="col">
											<a href="https://www.khmer24.com/en/promote-ad.html" class="btn btn-link " data-id="3376753" data-m="0" data-h="1" data-ampm="am"><span class="icon icon-renew"></span> Auto Renew
											</a>
										</div>
										<div class="col">
											<a class="btn btn_renew disable disabled" data-disable="true" data-renewdate="20190413" title="Renew" href="#"><span class="icon icon-repost"></span> <span class="text">Renew</span>
											</a>
										</div>
										<div class="col">
											<a class="btn btn_edit " title="Edit" href="https://www.khmer24.com/en/post?category=80&adid=3376753.html"><span class="icon icon-edit"></span> <span class="text">Edit</span>
											</a>
										</div>
										<div class="col">
											<a data-status="active" class="btn btn_delete " title="Delete" data-id="3376753" href="#delete_ad_reason"><span class="icon icon-delete"></span> <span class="text">Delete</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="modal delete_ad_reason" tabindex="-1" role="dialog" id="delete_ad_reason">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Delete Reason</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body form">
								<div id="popup_message"></div>
								<div class="reason">
									<div class="custom-control custom-radio form-group">
									<input type="radio" name="delete_ad_reason" class="custom-control-input" id="reason-lang-reason-1" value="lang-reason-1">
									<label class="custom-control-label" for="reason-lang-reason-1">This product has been sold</label>
									</div>
									<div class="custom-control custom-radio form-group">
									<input type="radio" name="delete_ad_reason" class="custom-control-input" id="reason-lang-reason-2" value="lang-reason-2">
									<label class="custom-control-label" for="reason-lang-reason-2">Suspend this ads</label>
									</div>
									<div class="custom-control custom-radio form-group">
									<input type="radio" name="delete_ad_reason" class="custom-control-input" id="reason-lang-reason-3" value="lang-reason-3">
									<label class="custom-control-label" for="reason-lang-reason-3">Delete to post new ads</label>
									</div>
									<div class="custom-control custom-radio form-group">
									<input type="radio" name="delete_ad_reason" class="custom-control-input" id="reason-other" value="other">
									<label class="custom-control-label" for="reason-other">Other</label>
									</div>
								</div>
								<div class="enter_reason" id="enter_reason">
								<textarea id="input_reason" name="enter_reason" minlength="15" maxlength="255" placeholder="Comment..." class="form-control"></textarea>
								</div>
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-secondary btn_close_modal" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-danger" id="btn_delete_ad">Delete</button>
							</div>
						</div>
					</div>
				</div>
				<script type="text/javascript">
				  $('document').ready(function(){
				      var base_url = 'https://www.khmer24.com/en/';
				      var csrf = 'a71bc44da8b47c07b2781c66cbf58cdc';
				      var id='';
				      var ad_type='active';
				      var reason='';
				      $('.btn_delete').click(function(e){
				          $('#delete_ad_reason').removeClass('loading');
				          e.preventDefault();
				          $('#popup_message').html('');
				          reason = '';
				          id = $(this).attr('data-id');
				          $('#input_reason').val('');
				          $('#enter_reason').hide();
				          $('input[name="delete_ad_reason"]').prop('checked', false);
				          var status = $(this).attr('data-status');
				          if(id) {
				              if(status=='active') {
				                  $('#delete_ad_reason').modal('show');
				              } else {
				                  if(confirm('Are you sure to delete this item?')) {
				                      $('#item-'+id).addClass('loading');
				                      $.post(base_url+'manage-ads/delete-ad',{"csrf_test_name":csrf,"adid":id,"reason":status,"status":ad_type},function(result){
				                          $('#item-'+id).removeClass('loading');
				                          if(result.status==1 || result.status=='1') {
				                              location.reload();
				                          } else {
				                              alert(result.info);
				                          }
				                      },'json');
				                  }
				              }   
				          }

				      });
				      $('.btn_close_modal').click(function(e){
				          e.preventDefault();
				          $('#delete_ad_reason').modal('hide');
				          reason = '';
				          id = '';
				          $('#input_reason').val('');
				          $('#enter_reason').hide();
				          $('input[name="delete_ad_reason"]').prop('checked', false);
				          $('#popup_message').html('');
				          $('#delete_ad_reason').removeClass('loading');
				      });
				      $('input[name="delete_ad_reason"]').change(function(){
				          $('#popup_message').html('');
				          var val = $(this).val();
				          reason = val;
				          
				          if(val=="other") {
				              $('#enter_reason').show(function(){
				                  $('#input_reason').focus();
				              });

				          } else {
				              $('#enter_reason').hide();
				          }
				      });
				      $('#btn_delete_ad').click(function(e){
				          e.preventDefault();
				          if(id) {
				              if(reason=='') {
				                  $('#popup_message').html('<div class="alert">សូមធ្វើការជ្រើសរើសប្រភេទខាងក្រោមណារមួយដើម្បីធ្វើការលប់</div>');
				              } else {
				                  if(reason=='other' && $('#input_reason').val().length<15) {
				                      $('#input_reason').focus();
				                      return;
				                  }
				                  $('#delete_ad_reason').addClass('loading');

				                  if(reason=='other') {
				                      reason = $('#input_reason').val();
				                  }

				                  $.post(base_url+'manage-ads/delete-ad',{"csrf_test_name":csrf,"adid":id,"reason":reason,"status":ad_type},function(result){
				                      $('#delete_ad_reason').removeClass('loading');
				                      if(result.status==1 || result.status=='1') {
				                          location.reload();
				                      } else {
				                          $('#popup_message').html('<div class="alert alert-danger alert-error">'+result.info+'</div>');
				                      }
				                  },'json');
				              }
				          }
				      });
				  });
				</script>
				<script>
				  $(document).ready(function(e) {
				    $('.auto_renew_checker').attr('checked', false);
				    $('.auto_renew_checker').on('change',function(event){
				        window.location.href = "https://www.khmer24.com/en/membership.html";
				    });
				  });
				</script>
				<script type="text/javascript">
				    $(document).ready(function(){
				        $('.btn_more_control').click(function(e){
				            e.stopPropagation();
				            e.preventDefault();
				            var btn = $(this);
				            if(btn.attr('data-show')=="true") {
				                $('.btn_more_control').attr('data-show',"false");
				                $('.more_controls').removeClass('active');
				                $(this).attr('data-show',"false");
				                $(this).closest('div.more_controls').removeClass('active');
				            } else {
				                $('.btn_more_control').attr('data-show',"false");
				                $('.more_controls').removeClass('active');
				                $(this).attr('data-show',"true");
				                $(this).closest('div.more_controls').addClass('active');
				            }
				        });
				        $(window).click(function() {
				            $('.btn_more_control').attr('data-show',"false");
				            $('.more_controls').removeClass('active');
				        });

				    });
				</script>
				<script type="text/javascript">
				  $(document).ready(function(){
				    $(window).on("load", function (e) {
				        $.get('#',function(respone){
				            $('#overview-statistics').removeClass('loading');
				            if(respone) {
				                if(respone.all) {
				                    $('#statistics-all').text(respone.all);
				                }
				                if(respone.today) {
				                    $('#statistics-today').text(respone.today);
				                }
				                if(respone.last_7_day) {
				                    $('#statistics-last-7-day').text(respone.last_7_day);
				                }
				                if(respone.this_month) {
				                    $('#statistics-this-month').text(respone.this_month);
				                }
				            }
				        },'json');
				    });
				    $('#filter_form select').change(function(){
				        $('#filter_form').submit();
				    });
				    $('#clear-filter').click(function(e){
				        $('#filter_form select[name="category"]').val('');
				        $('#filter_form').submit();
				    });
				  });
				</script>
			</div>
		</div>

		<div class="modal" id="confirm_popup" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Please Re-enter Your Password</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
					<div class="modal-body">
					<div id="popup_message"></div>
					<div class="info">For your security, you must re-enter your password to continue.</div>
					<div class="form pt-3"><label>Password:</label> <input id="txt_password" type="password" name="password"></div>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" id="btn_confirm">Submit</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal" id="popup_change_name" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Change Name</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
					<div class="modal-body">
					<input autocomplete="off" type="text" name="name" class="form-control" placeholder="Name" id="name">
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary btn_set_name">Save</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal" id="popup_change_username" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Username</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
					<div class="modal-body">
					<div id="popup_change_username_message"></div>
					<div class="input_box">
					<input type="text" name="username" class="form-control" placeholder="Username" id="txt_username" autocomplete="off">
					<span id="username_status_icon" class="status_icon"></span>
					</div>
					<div class="error_message error" id="error_message_username"></div>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary btn_set_username">Save</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal" id="popup_change_email" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Email</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
					<div class="modal-body">
					<div id="popup_change_email_message"></div>
					<div class="input_box">
					<input type="email" name="email" class="form-control" placeholder="Email" id="txt_email" autocomplete="off">
					<span id="email_status_icon" class="status_icon"></span>
					</div>
					<div class="error_message error" id="error_add_email"></div>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn_cancel" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary btn_set_email">Save & Verify</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal" id="popup_change_phone" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Phone</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div id="popup_change_phone_message"></div>
						<div class="input_box">
						<input type="tel" name="phone" class="form-control" placeholder="Phone number" id="txt_phone" autocomplete="off">
						<span id="phone_status_icon" class="status_icon"></span>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary btn_set_phone">Save & Verify</button>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" value="https://www.khmer24.com/" id="base_url">
		<input type="hidden" value="https://www.khmer24.com/khmer24-reform21/template/" id="template_path">

		<script type="text/javascript">
		    $('document').ready(function(){
		      var xhr_topics = null;
		      var base_url = "https://www.khmer24.com/";
		      var csrf = "a71bc44da8b47c07b2781c66cbf58cdc";
		      var modal_type = '';
		      var input_text = "";
		      $('body').on('keyup change','#txt_username',function(){
		          var txt = $(this);
		          if(input_text==txt.val()) {
		              return;
		          }
		          if(!txt.val() || txt.val().length<2) {
		              $('body').find('div#error_message_username').html('');
		              $('#username_status_icon').attr('class','status_icon');
		              return;
		          }
		          if(xhr_topics != null) {
		              xhr_topics.abort();
		          }
		          $('.btn_set_username').addClass('disabled');
		          input_text = txt.val();           
		          $('#username_status_icon').attr('class','status_icon loading');
		          xhr_topics = $.post('https://www.khmer24.com/en/ajax/check-username', {'username' : txt.val(), 'csrf_test_name' : csrf} , function(result){
		              xhr_topics = null;
		              if(result.status=='1') {
		                  $('.btn_set_username').removeClass('disabled');
		                  $('body').find('div#error_message_username').html('');
		                  $('#username_status_icon').attr('class','status_icon available');
		                  modal_type = 'username';

		              } else {
		                  $('body').find('div#error_message_username').html(result.info);
		                  $('#username_status_icon').attr('class','status_icon not_available');
		              }
		          },'json');
		      });
		      $('body').on('keyup change','#txt_phone',function(){           
		          var txt = $(this);
		          if(input_text==txt.val()) {
		              return;
		          }
		          if(!txt.val() || txt.val().length<8) {
		              $('body').find('#error_add_phone').html('');
		              $('#phone_status_icon').attr('class','status_icon');
		              return;
		          }
		          if(xhr_topics != null) {
		              xhr_topics.abort();
		          }
		          $('.btn_set_phone').addClass('disabled');
		          input_text = txt.val();
		          $('#phone_status_icon').attr('class','status_icon loading');
		          xhr_topics =$.post('https://www.khmer24.com/en/ajax/check-phone', {'phone' : txt.val(), 'csrf_test_name' : csrf} , function(result){
		              xhr_topics = null;
		              if(result.status=='1') {
		                  $('.btn_set_phone').removeClass('disabled');
		                  $('body').find('#error_add_phone').html('');
		                  $('#phone_status_icon').attr('class','status_icon available');
		                  modal_type = 'phone';
		              } else {
		                  $('body').find('#error_add_phone').html(result.info);
		                  $('#phone_status_icon').attr('class','status_icon not_available');
		              }
		          },'json');
		      });
		      $('body').on('keyup change','#txt_email',function(){
		          var txt = $(this);
		          if(input_text==txt.val()) {
		              return;
		          }
		          if(!txt.val() || txt.val().length<8) {
		              $('body').find('#error_add_email').html('');
		              $('#email_status_icon').attr('class','status_icon');
		              return;
		          }
		          if(xhr_topics != null) {
		              xhr_topics.abort();
		          }
		          $('.btn_set_email').addClass('disabled');
		          input_text = txt.val();
		          $('#email_status_icon').attr('class','status_icon loading');
		          xhr_topics =$.post('https://www.khmer24.com/en/ajax/check-email', {'email' : txt.val(), 'csrf_test_name' : csrf} , function(result){
		              xhr_topics = null;
		              if(result.status=='1') {
		                  $('.btn_set_email').removeClass('disabled');
		                  $('body').find('#error_add_email').html('');
		                  $('#email_status_icon').attr('class','status_icon available');
		                  modal_type = 'email';

		              } else {
		                  $('body').find('#error_add_email').html(result.info);
		                  $('#email_status_icon').attr('class','status_icon not_available');
		              }
		          },'json');
		      });
		      $('.modal-body .text').click(function(event){
		          event.preventDefault();
		          $('.btn_set_username').addClass('disabled');
		          $('.btn_set_phone').addClass('disabled');
		          $('body').find('div.popup_input').removeClass('loading');
		          $('body').find('div.popup_input').find('input.form-control').val('');
		          $('body').find('div.popup_input').find('div.error_message').text('').removeClass("show");
		          $(this).closest('div.popup_input').find('span.status_icon').attr('class','status_icon');
		      });
		      $('.btn_set_username').click(function(event){
		          event.preventDefault();
		          var username = $('#txt_username').val();
		          var btn = $(this);
		          if(username.length>2) {
		              $('#popup_change_username').modal('hide');
		              $('#confirm_popup').modal('show');
		              setTimeout(function(){
		                  $('body').find('div#popup_message').html('');
		                  $('body').find('div#popup_message').attr('class','');

		                  $('body').find('div#error_message_username').html('');
		                  $('body').find('input#txt_password').focus();
		              }, 100);
		          } else {
		              $('#txt_username').focus();
		          }
		      });
		      $('body').on('click','#btn_confirm',function(e){
		          e.preventDefault();
		          if($('body').find('input#txt_password').val().length<6) {
		              $('body').find('input#txt_password').focus();
		              return;
		          }
		          if(modal_type=='username') {
		              var username = $('#txt_username').val();
		              var btn = $(this);
		              if(username.length>2) {
		                  $('#confirm_popup').addClass('loading');
		                  $.post(base_url+"ajax/set-username",{"username":username, 'password':$('body').find('input#txt_password').val(), "csrf_test_name":csrf},function(result){
		                      $('#confirm_popup').removeClass('loading');
		                      $('body').find('input#txt_password').val('');
		                      if(result.status=="1" || result.status==1) {
		                          $('body').find('#username_text').text(username);
		                          $('body').find('#store_url').text(base_url+username);
		                          $('body').find('#store_url').attr('href',base_url+username);
		                          // $('#btn-edit-name').html('<span class="icon icon-edit"></span> Edit');
		                          $('#confirm_popup').modal('hide');
		                      } else {
		                          if(result.type=='password') {
		                              $('body').find('div#popup_message').attr('class', 'alert alert-danger');                          
		                              $('body').find('div#popup_message').html(result.info);                               
		                              $('body').find('div#error_message_username').html('');
		                              $('body').find('input#txt_password').focus();

		                          } else {
		                            $('#confirm_popup').modal('hide');
		                            $('#popup_change_username').modal('show');
		                            $('body').find('div#popup_change_username_message').attr('class', 'alert alert-danger');                          
		                            $('body').find('div#popup_change_username_message').html(result.info);
		                          }
		                      }
		                  },'json');
		              } else {
		                  $('body').find('#txt_username').focus();
		              }
		          }

		          if(modal_type=='phone') {

		              var phone = $('#txt_phone').val();
		              var btn = $(this);

		              if(phone.length>2) {
		                  $('#confirm_popup').addClass('loading');
		                  $.post(base_url+"ajax/set-phone",{"phone":phone, 'password':$('body').find('input#txt_password').val(), "csrf_test_name":csrf},function(result){

		                      $('#confirm_popup').removeClass('loading');

		                      $('body').find('input#txt_password').val('');
		                      if(result.status=="1" || result.status==1) {

		                          $('body').find('#phone_text').text(phone);
		                          $('body').find('a#store_url').text(base_url+phone);
		                          $('body').find('a#store_url').attr('href',base_url+phone);
		                          $('#btn-edit-phone').text('<span class="icon icon-edit"></span> Edit');
		                          $('#confirm_popup').modal('hide');

		                          if(result.redirect) {
		                              window.location.href = result.redirect;
		                          }


		                      } else {
		                          if(result.type=='password') {
		                              $('#confirm_popup').modal('show');
		                              $('body').find('div#popup_message').html(result.info);
		                              $('body').find('div#popup_message').attr('class', 'alert alert-danger');
		                              $('body').find('#error_message_phone').html('');
		                              $('body').find('input#txt_password').focus();
		                          } else {
		                            $('#confirm_popup').modal('hide');
		                            $('#popup_change_phone').modal('show');
		                              $('body').find('div#popup_change_phone_message').html(result.info);
		                              $('body').find('div#popup_change_phone_message').attr('class', 'alert alert-danger');
		                          }
		                      }

		                  },'json');
		              } else {
		                  $('body').find('#txt_phone').focus();
		              }

		          }

		          if(modal_type=='email') {

		              var email = $('#txt_email').val();
		              var btn = $(this);

		              if(email.length>2) {
		                  $('#confirm_popup').addClass('loading');
		                  $.post(base_url+"ajax/set-email",{"email":email, 'password':$('body').find('input#txt_password').val(), "csrf_test_name":csrf},function(result){

		                      $('#confirm_popup').removeClass('loading');

		                      $('body').find('input#txt_password').val('');
		                      if(result.status=="1" || result.status==1) {

		                          $('body').find('#email_text').text(email);
		                          $('body').find('a#store_url').text(base_url+email);
		                          $('body').find('a#store_url').attr('href',base_url+email);
		                          $('#btn-edit-email').text('<span class="icon icon-edit"></span> Edit');

		                          $('#confirm_popup').modal('hide');

		                          if(result.redirect) {
		                              window.location.href = result.redirect;
		                          }

		                      } else {
		                          if(result.type=='password') {
		                              $('#confirm_popup').modal('show');
		                              $('body').find('div#popup_message').html(result.info);
		                              $('body').find('div#popup_message').attr('class', 'alert alert-danger');
		                              $('body').find('#error_message_email').html('');
		                              $('body').find('input#txt_password').focus();
		                          } else {
		                              $('#confirm_popup').modal('hide');
		                              $('#popup_change_email').modal('show');
		                              $('body').find('div#popup_change_email_message').html(result.info);
		                              $('body').find('div#popup_change_email_message').attr('class', 'alert alert-danger');
		                          }
		                      }

		                  },'json');
		              } else {
		                  $('body').find('#txt_email').focus();
		              }

		          }

		          if(modal_type=='remove-email') {
		              var btn = $(this);
		              $('#confirm_popup').addClass('loading');
		              $.post(base_url+"ajax/remove-email",{'password':$('body').find('input#txt_password').val(), "csrf_test_name":csrf},function(result){
		                  $('#confirm_popup').removeClass('loading');
		                  $('body').find('input#txt_password').val('');
		                  if(result.status=="1" || result.status==1) {
		                    location.reload();
		                  } else {
		                      if(result.type=='password') {
		                          $('#confirm_popup').modal('show');
		                          $('body').find('div#popup_message').html(result.info);
		                          $('body').find('div#popup_message').attr('class', 'alert alert-danger');
		                          $('body').find('#error_message_email').html('');
		                          $('body').find('input#txt_password').focus();
		                      } else {
		                          $('body').find('#error_add_email').html(result.info);
		                      }
		                  }

		              },'json');
		          }
		      });
		      $('.btn_set_email').click(function(event){
		          event.preventDefault();
		          var email = $('#txt_email').val();
		          var btn = $(this);
		          if(email.length>2) {
		            modal_type = 'email';
		              $('#popup_change_email').modal('hide');
		              $('#confirm_popup').modal('show');
		              setTimeout(function(){
		                  $('body').find('div#popup_message').html('');
		                  $('body').find('div#popup_message').attr('class','');
		                  $('body').find('#error_message_email').html('');
		                  $('body').find('input#txt_password').focus();
		              }, 100);
		          } else {
		              $('#txt_email').focus();
		          }
		      });
		      $('.btn_set_phone').click(function(event){
		          event.preventDefault();
		          var phone = $('#txt_phone').val();
		          var btn = $(this);
		          if(phone.length>8) {
		            modal_type = 'phone';
		              $('#popup_change_phone').modal('hide');
		              $('#confirm_popup').modal('show');
		              setTimeout(function(){
		                  $('body').find('div#popup_message').html('');
		                  $('body').find('div#popup_message').attr('class','');
		                  $('body').find('#error_add_phone').html('');
		                  $('body').find('#txt_phone').focus();
		              }, 100);
		          } else {
		              $('#txt_phone').focus();
		          }
		      });
		      $('.btn_set_name').click(function(event){
		          event.preventDefault();
		          var name = $('#name').val();
		          $(btn).closest('div.popup_input').find('div.error_message').removeClass("show");
		          $(btn).closest('div.popup_input').find('div.error_message').text('');
		          if(name.length<2) {
		              $('#name').focus();
		              return;
		          }           
		          var btn = $(this);
		              $(this).closest('div.modal').addClass('loading');
		              $.post(base_url+"ajax/set-name",{"name":name,"csrf_test_name":csrf},function(result){

		                  if(result.status=="1" || result.status==1) {
		                      $('#text_name').text(name);
		                      $('input[name="name"]').val(name);
		                      $(btn).closest('div.popup_input').remove();
		                      $(btn).closest('div.modal').modal('hide');

		                  } else {
		                      $(btn).closest('div.popup_input').find('div.error_message').addClass("show");
		                      $(btn).closest('div.popup_input').find('div.error_message').text(result.info);
		                  }
		                  $(btn).closest('div.modal').removeClass('loading');

		              },'json');
		      });
		      $('.modal-body .form-control').focus(function(){
		          $(this).closest('div.popup_input').find('div.error_message').removeClass("show");
		          $(this).closest('div.popup_input').find('div.error_message').text('');
		      });
		      $('.btn-remove-email').click(function(e){
		        e.preventDefault();
		        modal_type = 'remove-email';
		        $('#confirm_popup').modal('show');
		      });        
		    });
		</script>
		<a href="#totop" id="totop"><i class="icon-up"></i></a>
		<div class="fix-feedback">
			<a href="https://www.khmer24.com/en/feedback" class="btn btn-primary btn-sm">Feedback</a>
		</div>
	</div>

@endsection

@push('js')

@endpush