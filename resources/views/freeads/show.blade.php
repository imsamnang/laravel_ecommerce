@extends('layouts.backend.khmer24_layout')

@push('css')
	<link href="https://www.khmer24.com/khmer24-reform21/template/css/property.css" rel="stylesheet">
	<link href="https://www.khmer24.com/khmer24-reform21/template/plugin/OwlCarousel2-2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="https://www.khmer24.com/khmer24-reform21/template/plugin/fancybox/jquery.fancybox.min.css" rel="stylesheet">
	<script src="https://www.khmer24.com/khmer24-reform21/template/plugin/OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
	<script src="https://www.khmer24.com/khmer24-reform21/template/plugin/fancybox/jquery.fancybox.min.js"></script>
@endpush

@section('content')


	<div class="detail-page">
		<div class="my-breadcrumb">
			<div class="my-container">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item" aria-current="page"><a href="https://www.khmer24.com/en/"><i class="icon-home"></i>Home</a>
						</li>
						<li class="breadcrumb-item" aria-current="page"><a href="https://www.khmer24.com/en/property.html">House & Lands</a>
						</li>
						<li class="breadcrumb-item" aria-current="page"><a href="https://www.khmer24.com/en/property/landed-properties-for-sale.html">Land for Sale </a>
						</li>
					</ol>
				</nav>
			</div>
		</div>
		<section class="pb-3">
			<div class="my-container">
				<div class="row">
					<div class="col col-8">
						<div class="bg-white border rounded">
							<div class="item-header border-bottom">

								<div id="slide-box">

									<div class="owl-carousel imglist">
										<div class="item item-1">
											<a class="w-100" href="http://imagescdn.khmer24.com/19-01-28/332733-land-for-sale62-b.jpg" data-fancybox="images">
											<img class="img-contain" src="http://imagescdn.khmer24.com/19-01-28/332733-land-for-sale62-b.jpg" alt="Land for Sale ដីលក់  土地出售">
											</a>
										</div>
										<div class="item item-2">
											<a class="w-100" href="http://imagescdn.khmer24.com/19-01-28/332733-land-for-sale62-c.jpg" data-fancybox="images">
											<img class="img-contain" src="http://imagescdn.khmer24.com/19-01-28/332733-land-for-sale62-c.jpg" alt="Land for Sale ដីលក់  土地出售">
											</a>
										</div>
										<div class="item item-3">
											<a class="w-100" href="http://imagescdn.khmer24.com/19-01-28/332733-land-for-sale62-d.jpg" data-fancybox="images">
											<img class="img-contain" src="http://imagescdn.khmer24.com/19-01-28/332733-land-for-sale62-d.jpg" alt="Land for Sale ដីលក់  土地出售">
											</a>
										</div>
										<div class="item item-4">
											<a class="w-100" href="http://imagescdn.khmer24.com/19-01-28/332733-land-for-sale62-e.jpg" data-fancybox="images">
											<img class="img-contain" src="http://imagescdn.khmer24.com/19-01-28/332733-land-for-sale62-e.jpg" alt="Land for Sale ដីលក់  土地出售">
											</a>
										</div>
										<div class="item item-5">
											<a class="w-100" href="http://imagescdn.khmer24.com/19-01-28/332733-land-for-sale26-b.jpg" data-fancybox="images">
											<img class="img-contain" src="http://imagescdn.khmer24.com/19-01-28/332733-land-for-sale26-b.jpg" alt="Land for Sale ដីលក់  土地出售">
											</a>
										</div>
										<div class="item item-6">
											<a class="w-100" href="http://imagescdn.khmer24.com/19-01-28/332733-land-for-sale62-g.jpg" data-fancybox="images">
											<img class="img-contain" src="http://imagescdn.khmer24.com/19-01-28/332733-land-for-sale62-g.jpg" alt="Land for Sale ដីលក់  土地出售">
											</a>
										</div>
									</div>

									<div class="owl-nav">
										<div class="owl-prev"><span class="icon icon-prev"></span></div>
										<div class="owl-next"><span class="icon icon-next"></span></div>
									</div>

									<div class="thumbs">
										<div class="item item-1 active">
											<a class="" href="#slide-1" data-id="1">
												<img class="img-cover" src="http://imagescdn.khmer24.com/19-01-28/s-332733-land-for-sale62-b.jpg" alt="Land for Sale ដីលក់  土地出售">
											</a>
										</div>
										<div class="item item-2 ">
											<a class="" href="#slide-2" data-id="2">
												<img class="img-cover" src="http://imagescdn.khmer24.com/19-01-28/s-332733-land-for-sale62-c.jpg" alt="Land for Sale ដីលក់  土地出售">
											</a>
										</div>
										<div class="item item-3 ">
											<a class="" href="#slide-3" data-id="3">
											 	<img class="img-cover" src="http://imagescdn.khmer24.com/19-01-28/s-332733-land-for-sale62-d.jpg" alt="Land for Sale ដីលក់  土地出售">
											</a>
										</div>
										<div class="item item-4 ">
											<a class="" href="#slide-4" data-id="4">
												<img class="img-cover" src="http://imagescdn.khmer24.com/19-01-28/s-332733-land-for-sale62-e.jpg" alt="Land for Sale ដីលក់  土地出售">
											</a>
										</div>
										<div class="item item-5 ">
											<a class="" href="#slide-5" data-id="5">
												<img class="img-cover" src="http://imagescdn.khmer24.com/19-01-28/s-332733-land-for-sale26-b.jpg" alt="Land for Sale ដីលក់  土地出售">
											</a>
										</div>
										<div class="item item-6 ">
											<a class="" href="#slide-6" data-id="6">
												<img class="img-cover" src="http://imagescdn.khmer24.com/19-01-28/s-332733-land-for-sale62-g.jpg" alt="Land for Sale ដីលក់  土地出售">
											</a>
										</div>
									</div>
								</div>

								<div class="item-short-description p-3 position-relative">
									<h1>{{$property->title}}</h1>
									<p class="price price_tag"><b class="price">{{$property->price}}</b></p>
									<ul class="list-unstyled item-info m-0">
										<li>
											<span class="title">Ad ID :</span>
											<span class="value">{{$property->id}}</span>
										</li>
										<li>
											<span class="title">Locations :</span>
											<span class="value">{{$property->province->name_en}}</span>
										</li>
										<li>
											<span class="title">Posted On :</span>
											<span class="value"><time datetime="2019-03-23 08:12:57">{{$property->created_at}}</time></span>
										</li>
										<li>
											<span class="title">View :</span>
											<span class="value">333</span>
										</li>
									</ul>
										<a rel="nofollow" href="https://www.khmer24.com/en/save-ad/3016519.html" class="btn-save-item save_ad">
											<i class="icon icon-like text_gray"></i>
										</a>
										<a rel="nofollow" onclick="javascript:void window.open('https://www.facebook.com/sharer/sharer.php?u=https://www.khmer24.com/en/property/land-for-sale-ដលក-土地出售-adid-3016519.html','1422871850498','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.khmer24.com/en/property/land-for-sale-ដលក-土地出售-adid-3016519.html" class="btn-share-item share_ad">
											<i class="icon icon-share text_gray"></i>
										</a>
								</div>
							</div>
							<div class="item-detail p-3">
								<h2>Description</h2>
								<ul class="list-unstyled item-fields">
									<li>
										<div>
											<span class="title">Size(m<sup>2</sup>):</span><span class="value">{{$property->size}}</span>
										</div>
									</li>
									<li>
										<div>
											<span class="title">Price:</span><span class="value">{{$property->price}}</span>
										</div>
									</li>
								</ul>
								<p class="post-description">{{$property->title}}<br />
								<br />
									- តំលៃ: 1,300 ដុល្លា/ម៉ែត្រការ៉េ <br />
									- សង្កាត់: ព្រែកហូ<br />
									- ទំហំដី: 7,780 ម៉ែត្រការ៉េ <br />
									- ពិពណ៌នាសង្ខេប: វាគឺជាទីតាំងដ៏ធំនិងមានទីតាំងល្អសម្រាប់ធ្វើអាជីវកម្ម, រៀបចំសណ្ឋាគារ, អាផាតមិន, ខុនដូឬរោងចក្រ។<br />
									- ដែលមានទីតាំងនៅកាច់ជ្រុងផ្លូវសម្តេចតេជោហ៊ុនសែន (60 ម៉ែត) និងផ្លូវជាតិលេខ 2 (ជិះ១៥នាទីពី ក្បាលថ្នល់) ។<br />
									- Price: 1,300$ /m2<br />
									- Sangkat: Prek Ho<br />
									- Land size: 7,780m2<br />
									- Description: It is so big and good location for business, Set up Hotel, Apartment ,Condo or Factory. <br />
									- located on the corner of Samdech decho Hun Sen (60M) and National road #2 (15minute drive from kbalthnal). <br />
									- 价格：1,300美元/平方米<br />
									- 公社：Prek Ho<br />
									- 土地面积：7,780平方米<br />
									- 描述：它是如此之大和良好的位置 商务，设置酒店，公寓，公寓或 厂。<br />
									- 位于Samdech Decho Hun Sen（60M）和国道＃2（距离kbalthnal 15分钟车程）的拐角处。</p>
							</div>
							<div class="p-3 item-contact">
								<div class="item-mention">
									<div>សូមចុចលើលេខទូរស័ព្ទ ដើម្បីបង្ហាញ ហើយកំុភ្លេចនិយាយថាអ្នកបានឃើញការផ្សព្វផ្សាយនេះនៅលើ Khmer24.com។</div>
									<div>Please click on phone number to show and don't forget to mention that you found this ad on Khmer24.com.</div>
								</div>
								<div class="phone_box btn_show_phone">
									<a href="#show_phone" rel="nofollow" class="btn_show_phone_box"><span class="icon_phone"></span><div class="num">095882xxx</div>
										<div class="btn_link">Click to show phone number</div>
									</a>
									<div class="list_numbers d-none">
									<ul class="list-unstyled m-0">
										<li class="number">
										<a href="tel:095882000" rel="nofollow" class="number-0 small" title="Cellcard:095882000">
										<img class="icon-provider" src="https://www.khmer24.com/khmer24-reform21/template/img/sim/cellcard.png" alt="cellcard">
										<div class="num">095 882 000</div>
										</a>
										</li>
										<li class="number">
										<a href="tel:086882000" rel="nofollow" class="number-1 small" title="Smart:086882000">
										<img class="icon-provider" src="https://www.khmer24.com/khmer24-reform21/template/img/sim/smart.png" alt="smart">
										<div class="num">086 882 000</div>
										</a>
										</li>
										<li class="number">
										<a href="tel:067882000" rel="nofollow" class="number-2 small" title="Metfone:067882000">
										<img class="icon-provider" src="https://www.khmer24.com/khmer24-reform21/template/img/sim/metfone.png" alt="metfone">
										<div class="num">067 882 000</div>
										</a>
										</li>
									 </ul>
									</div>
								</div>
							</div>
							<div class="item-footer border-top p-1">
								<a class="btn btn-link text-primary btn-sm" rel="nofollow" onclick="javascript:void window.open('https://www.facebook.com/sharer/sharer.php?u=https://www.khmer24.com/en/property/land-for-sale-ដលក-土地出售-adid-3016519.html','1422871850498','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.khmer24.com/en/property/land-for-sale-ដលក-土地出售-adid-3016519.html">
									<span class="icon icon-share"></span> Share</a>
								<a class="btn btn-link text-primary btn-sm float-right" data-toggle="modal" data-target="#report-modal"><span class="icon icon-warning"></span> Report</a>
							</div>
						</div>
						<div class="disclaimer p-3 bg-white border mt-3">
							<div class="title">ការមិនទទួលខុសត្រូវ / Disclaimer</div>
							<div class="info">យើងខ្ញុំមិនគ្រប់គ្រងមាតិកា ដែលបានបង្ហោះឡើងដោយសមាជិកឡើយ។ ដូច្នេះយើងមិនទទួលខុសត្រូវលើការផ្សាយផលិតផលនេះទេ ហើយក៏មិនធានាចំពោះបញ្ហាដែលទាក់ទងដោយផ្ទាល់ ឬ ប្រយោលទៅនឹងសកម្មភាព ឬ អសកម្មណាមួយឡើយ។<br>We does not control the content posted by members and therefore assumes no responsibility and disclaims any liability for any consequence relating directly or indirectly to any action or inaction.</div>
						</div>
						<div class="relate-items mt-3">
							<div class="item-header">
								<div class="profile">
									<a class="cover-image" href="https://www.khmer24.com/en/BusinessChannel" style="height:91px">
									<img class="img-cover" src="http://imagescdn.khmer24.com/members/332733/banner/businesschannel_83.png">
									</a>
									<div class="profile-detail">
										<a class="image profile-image" href="https://www.khmer24.com/en/BusinessChannel">
										<img class="img-cover" src="http://imagescdn.khmer24.com/members/332733/businesschann_a4.jpg">
										</a>
										<div class="user_detail">
											<a class="name" href="https://www.khmer24.com/en/BusinessChannel">Business Channel Cambodia</a>
											<div class="member_status ">Last Active Yesterday</div>
											<a class="link" href="https://www.khmer24.com/en/BusinessChannel">https://www.khmer24.com/BusinessChannel</a>
											<a class="btn btn_gotostore btn btn-warning btn-sm" href="https://www.khmer24.com/en/BusinessChannel">Go to Store</a>
										</div>
									</div>
								</div>
							</div>
							<div class="item-content">
								<ul class="list-unstyled items">
									<li class="item">
										<a href="https://www.khmer24.com/en/land-for-sale-ដសមរបលក-土地待售-adid-3183897.html" title="Land for Sale ដីសម្រាប់លក់​ 土地待售" class="bg-white border rounded">
										<article>
										<div class="image"><img class="img-cover" src="http://imagescdn.khmer24.com/19-01-23/s-332733-land-for-sale9-b.jpg" alt="Land for Sale ដីសម្រាប់លក់​ 土地待售"></div>
										<div class="detail">
										<h4 class="title truncate truncate-2">Land for Sale ដីសម្រាប់លក់​ 土地待售</h4>
										<p class="price text-red m-0">$4,000</p>
										</div>
										</article>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<aside class="col-4 right-side">
						<div class="bg-white border rounded profile">
						<a class="header" href="https://www.khmer24.com/en/BusinessChannel">
						<div class="image">
						<img class="img-cover" src="http://imagescdn.khmer24.com/members/332733/businesschann_a4.jpg" />
						</div>
						<div class="detail">
						<p class="name">Business Channel Cambodia</p>
						<p class="last-active">Last Active Yesterday</p>
						<p class="btn-link">Show all ad from this user</p>
						</div>
						</a>
						<div class="content">
						<div class="phone_box btn_show_phone">
						<a href="#show_phone" rel="nofollow" class="btn_show_phone_box"><span class="icon_phone"></span><div class="num">095882xxx</div> <div class="btn_link">Click to show phone number</div></a>
						<div class="list_numbers d-none">
						<ul class="list-unstyled m-0">
						<li class="number">
						<a href="tel:095882000" rel="nofollow" class="number-0 small" title="Cellcard:095882000">
						<img class="icon-provider" src="https://www.khmer24.com/khmer24-reform21/template/img/sim/cellcard.png" alt="cellcard">
						<div class="num">095 882 000</div>
						</a>
						</li>
						<li class="number">
						<a href="tel:086882000" rel="nofollow" class="number-1 small" title="Smart:086882000">
						<img class="icon-provider" src="https://www.khmer24.com/khmer24-reform21/template/img/sim/smart.png" alt="smart">
						<div class="num">086 882 000</div>
						</a>
						</li>
						<li class="number">
						<a href="tel:067882000" rel="nofollow" class="number-2 small" title="Metfone:067882000">
						<img class="icon-provider" src="https://www.khmer24.com/khmer24-reform21/template/img/sim/metfone.png" alt="metfone">
						<div class="num">067 882 000</div>
						</a>
						</li>
						</ul>
						</div>
						</div>
						<ul class="list-unstyled user-info m-0">
						<li>
						<a class="btn-link" href="https://www.khmer24.com/en/BusinessChannel"><span class="icon icon-store"></span> https://www.khmer24.com/en/BusinessChannel</a>
						</li>
						<li>
						<span class="icon icon-location"></span> Kandal , Samdech decho Hun Sen (60M) and National road #2 (15minute drive from kbalthnal). </li>
						</ul>
						<a class="map_box btn_showMap" target="_blank" href="https://maps.google.com/maps?q=12.50062847042421,104.97525008197022&amp;17" rel="nofollow">
						<div class="text btn btn-block btn-default"><span class="icon icon-google-map"></span> Show on Google Map</div>
						</a>
						</div>
						<div class="footer border-top">
						<a class="btn btn-warning btn-block" href="https://www.khmer24.com/en/chats?adid=3016519"><span class="icon icon-chat"></span> Chat</a>
						</div>
						</div>
						<div class="sponsors text-center pt-3"><ins data-revive-zoneid="8" data-revive-id="015d25e957e6ef856e6d5cad1815bf26"></ins>
						<script async src="//banner.khmer24.ws/www/delivery/asyncjs.php"></script></div>
					</aside>
				</div>
			</div>
		</section>

		<div class="modal" tabindex="-1" role="dialog" id="report-modal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Report</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="message"></div>
						<form action="https://www.khmer24.com/en/report" id="form_report" method="post" accept-charset="utf-8">
							<input type="hidden" name="csrf_test_name" value="2f2d1e231bfc8c975a2ddfcb29979feb" />
							<input type="hidden" name="id" value="3016519" />
							<div class="custom-control custom-radio form-group">
							<input type="radio" name="report" class="custom-control-input" id="reason-1" value="1">
							<label class="custom-control-label" for="reason-1">Product already sold</label>
							</div>
							<div class="custom-control custom-radio form-group">
							<input type="radio" name="report" class="custom-control-input" id="reason-2" value="2">
							<label class="custom-control-label" for="reason-2">Seller not responding/phone unreachable</label>
							</div>
							<div class="custom-control custom-radio form-group">
							<input type="radio" name="report" class="custom-control-input" id="reason-3" value="3">
							<label class="custom-control-label" for="reason-3">Ad is duplicate</label>
							</div>
							<div class="custom-control custom-radio form-group">
							<input type="radio" name="report" class="custom-control-input" id="reason-4" value="4">
							<label class="custom-control-label" for="reason-4">Wrong category</label>
							</div>
							<div class="custom-control custom-radio form-group">
							<input type="radio" name="report" class="custom-control-input" id="reason-5" value="5">
							<label class="custom-control-label" for="reason-5">Fraud reason</label>
							</div>
						</form> 
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-clear btn-link" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary btn-submit-report">Submit</button>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
				$(document).ready(function() {

					$.fancybox.defaults.hash = false;

			        
					var owl = $(".owl-carousel").owlCarousel({items:1, center:true, dots:false, margin:10, callbacks:true, URLhashListener:true, autoplayHoverPause:true, startPosition:'URLHash'});
					$(".owl-nav div").click(function(e){
						if($(this).attr('class')=="owl-prev") {
							owl.trigger('prev.owl.carousel');
						} else {
							owl.trigger('next.owl.carousel');
						}
					});
					owl.on('changed.owl.carousel', function(event) {
						$('body').find('#slide-box .thumbs div').removeClass('active');
						$('body').find('#slide-box .thumbs div.item-'+(event.item.index+1)).addClass('active');
					});
					// Custom options
					$( '[data-fancybox="images"]' ).fancybox({
					  buttons : [
					    'close'
					  ]
					});
					$('body').on('click','#slide-box .thumbs a', function(e){
						e.preventDefault();
						$('body').find('#slide-box .thumbs div').removeClass('active');
						$(this).closest('div').addClass('active');
						var id = $(this).attr('data-id');
						owl.trigger('to.owl.carousel',id-1);
					});

			        var phone_show_status = false;
			        $('.btn_show_phone').click(function(e){        	
			        	if(phone_show_status == false) {
			        		e.preventDefault();
				        	$('.btn_show_phone').find('.btn_show_phone_box').addClass('d-none');
				        	$('.btn_show_phone').find('.list_numbers').removeClass('d-none');
				        	$('.post-description').find('.btn_show_phone');
				            $($('body').find('p.post-description').find('a.btn_show_phone')).each(function( index ) {
				                var phone = $(this).attr('data-value');
				              $(this).html(phone);
				            });
			        	}
			            if(phone_show_status==false) {
			                 e.preventDefault();

			                phone_show_status=true;
			                	                $('.phone_box').addClass('active');

			            }
			        	
			        	phone_show_status = true;
			        });


			        $('.btn-submit-report').click(function(e){
			        	e.preventDefault();
			        	
			        	$('#report-modal').addClass('active');

			        	$('#report-modal').find('.message').html('');
			        	$.post($('#form_report').attr('action'),$('#form_report').serialize(),function(respone) {
			        		$('#report-modal').removeClass('active');
			        		if(respone.status) {
				        		$('#report-modal').find('.modal-body').html('<div class="text-center p-3">'+respone.success+'</div>');
				        		$('#report-modal').find('.modal-footer').remove();
			        		} else {
				        		$('#report-modal').find('.message').html(respone.error);
			        		}
			        	},'json');
			        });


			        $('#suggestion_text .text').click(function(){
			        	$('#input-message').val($(this).text());
			        	$('#message-form').submit();
			        });

			        $('.btn-save-item').click(function(e){
			        	e.preventDefault();
			        	$.get($(this).attr('href'),function(respone){
			        		if(respone.save_status) {
			        			$('.btn-save-item').addClass('active');
			        		} else {
			        			$('.btn-save-item').removeClass('active');
			        		}
			        	},'json');
			        });

				});
		</script>
	</div>


@endsection

@push('js')
	{{-- expr --}}
@endpush