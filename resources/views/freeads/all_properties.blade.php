@extends('layouts.backend.khmer24_layout')

@push('css')
	<link  href="{{asset('assets/css/property.css')}}" rel="stylesheet" type="text/css">
@endpush

@section('content')

	<header id="header" class="bg-white border-bottom">
		<div class="my-container header-content">
			<nav class="navbar row">
				<a href="https://www.khmer24.com/en/" class="navbar-brand">
					<img src="https://www.khmer24.com/khmer24-reform21/template/img/khmer24.gif" alt="Khmer24"></a>
				<ul class="nav mr-auto left-nav">
					<li class="nav-item">
						<a class="nav-link disabled btn-change-lang" href="https://www.khmer24.com/km/property/all-property.html"><span class="icon khmer-flage"></span></a>
					</li>
				</ul>
				<ul class="nav nav-pills justify-content-end right-nav">
					<li class="nav-item nav-item-login">
						<a class="nav-link" href="https://www.khmer24.com/en/notifications">
							<span class="icon icon-notification-fill"></span>
							<span id="notification-badge" class="badge badge-pill badge-danger d-none">0</span>
						</a>
					</li>
					<li class="nav-item nav-item-login nav-user-photo">
						<div class="dropdown">
						<a class="nav-link" href="https://www.khmer24.com/en/posts" id="dropdownUserMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="icon icon-user-photo"><img class="img-cover" src="https://www.khmer24.com/khmer24-reform21/template/img/user.png"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownUserMenu">
							<a class="dropdown-item" href="https://www.khmer24.com/en/post" title="POST FREE AD"><span class="icon-plus-full"></span> POST FREE AD</a>
							<a class="dropdown-item" href="https://www.khmer24.com/en/manage-ads.html" title="My Ads"><span class="icon-folder"></span> My Ads</a>
							<a class="dropdown-item" href="https://www.khmer24.com/en/likes.html" title="Likes"><span class="icon-like"></span> Likes</a>
							<a class="dropdown-item" href="https://www.khmer24.com/en/setting.html" title="Setting"><span class="icon-setting-outline"></span> Setting</a>
							<a class="dropdown-item" href="https://www.khmer24.com/en/logout.html" title="Log out"><span class="icon-off"></span> Log out</a>
						</div>
						</div>
					</li>
					<li class="nav-item ml-2">
						<a class="nav-link btn-post btn-warning long-text" href="https://www.khmer24.com/en/post">POST FREE AD</a>
						<a class="nav-link btn-post btn-warning short-text" href="https://www.khmer24.com/en/post">POST</a>
					</li>
				</ul>
			</nav>
			<div id="header-search">
				<form class="form-inline form-mini-search p-0 pb-2 mr-auto" action="https://www.khmer24.com/en/search" method="get">
					<input class="form-control col-12 pr-4 input-keyword" type="search" placeholder="What are you looking for..." aria-label="What are you looking for..." value="" name="q">
					<select name="category" class="form-control select-category">
					<option value="">All Category</option>
					<option value="mobile-phones-tablets" class="main">Phones & Tablets</option>
					<option value="phones-tablets" class="child">Phones, Tablets</option>
					<option value="smart-watches" class="child">Smart Watches</option>
					<option value="phone-accessories" class="child">Phone Accessories</option>
					<option value="phone-numbers" class="child">Phone Numbers</option>
					<option value="computer-and-accessories" class="main">Computers & Accessories</option>
					<option value="computers" class="child">Computers</option>
					<option value="computer-accessories" class="child">Computer accessories</option>
					<option value="softwares" class="child">Softwares</option>
					<option value="electronics-appliances" class="main">Electronics & Appliances</option>
					<option value="consumer-electronics" class="child">Consumer Electronics</option>
					<option value="security-camera" class="child">Security Camera</option>
					<option value="cameras-camcorders" class="child">Cameras, camcorders</option>
					<option value="tvs-videos-and-audios" class="child">TVs, Videos and Audios</option>
					<option value="home-appliances" class="child">Home appliances </option>
					<option value="video-games-consoles-toys" class="child">Video games, consoles, toys </option>
					<option value="cars-and-vehicles" class="main">Cars and Vehicles</option>
					<option value="cars-for-sale" class="child">Cars for Sale</option>
					<option value="bicycles" class="child">Bicycles</option>
					<option value="motorcycles-for-sale" class="child">Motorcycles for Sale</option>
					<option value="vehicles-for-rent" class="child"> Vehicles for Rent</option>
					<option value="car-maintenance-repair" class="child">Car Maintenance & Repair</option>
					<option value="lorries-vans" class="child">Lorries & Vans</option>
					<option value="financing-insurance" class="child">Financing & Insurance</option>
					<option value="car-parts-accessories" class="child">Car Parts & Accessories</option>
					 <option value="others-vihicles" class="child">Others</option>
					<option selected value="property-housing-rentals" class="main">House & Lands</option>
					<option value="house-for-sale" class="child">House for Sale</option>
					<option value="house-for-rent" class="child">House for Rent</option>
					<option value="apartment-for-sale" class="child">Apartment for Sale</option>
					<option value="apartment-for-rent" class="child">Apartment for Rent</option>
					<option value="landed-properties-for-sale" class="child">Land for Sale</option>
					<option value="landed-properties-for-rent" class="child">Landed Properties for Rent</option>
					<option value="commercial-properties-for-sale" class="child">Commercial for Sale</option>
					<option value="commercial-properties-for-rent" class="child">Commercial for Rent</option>
					<option value="room-for-rent" class="child">Room for Rent</option>
					<option value="properties-wanted" class="child">Properties Wanted</option>
					<option value="agent-services" class="child">Agent Services</option>
					<option value="others-properties" class="child">Others</option>
					<option value="jobs" class="main">Jobs</option>
					<option value="jobs-accounting" class="child">Accounting</option>
					<option value="jobs-administration" class="child">Administration</option>
					<option value="jobs-architecture-engineering" class="child">Architecture/Engineering</option>
					<option value="jobs-assistant-secretary" class="child">Assistant/Secretary</option>
					<option value="jobs-audit-taxation" class="child">Audit/Taxation</option>
					<option value="jobs-banking-insurance" class="child">Banking/Insurance</option>
					<option value="jobs-cashier-receptionist" class="child">Cashier/Receptionist</option>
					<option value="jobs-catering-restaurant" class="child">Catering/Restaurant</option>
					<option value="jobs-cleaner-maid" class="child">Cleaner/Maid</option>
					<option value="jobs-consultancy" class="child">Consultancy</option>
					<option value="jobs-customer-service" class="child">Customer Service</option>
					<option value="jobs-design" class="child">Design</option>
					<option value="jobs-education-training" class="child">Education/Training</option>
					<option value="jobs-finance" class="child">Finance</option>
					<option value="jobs-freight-shipping-delivery-warehouse" class="child">Freight/Shipping /Delivery/Warehouse</option>
					<option value="jobs-hotel-hospitality" class="child">Hotel/Hospitality</option>
					<option value="jobs-human-resource" class="child">Human Resource</option>
					<option value="jobs-information-technology" class="child">Information Technology</option>
					<option value="jobs-lawyer-legal-service" class="child">Lawyer/Legal Service</option>
					<option value="jobs-management" class="child">Management</option>
					<option value="jobs-manufacturing" class="child">Manufacturing</option>
					<option value="jobs-marketing" class="child">Marketing</option>
					<option value="jobs-media-advertising" class="child">Media/Advertising</option>
					<option value="jobs-medical-health-nursing" class="child">Medical/Health/Nursing</option>
					<option value="jobs-merchandising-purchasing" class="child">Merchandising/Purchasing</option>
					<option value="jobs-operations" class="child">Operations</option>
					<option value="jobs-project-management" class="child">Project Management</option>
					<option value="jobs-quality-control" class="child">Quality Control</option>
					<option value="jobs-resort-casino" class="child">Resort/Casino</option>
					<option value="jobs-sales" class="child">Sales</option>
					<option value="jobs-security-driver" class="child">Security/Driver</option>
					<option value="jobs-technician" class="child">Technician</option>
					<option value="jobs-telecommunication" class="child">Telecommunication</option>
					<option value="jobs-translation-interpretation" class="child">Translation/Interpretation</option>
					<option value="jobs-travel-agent-ticket-sales" class="child">Travel Agent/Ticket Sales</option>
					<option value="jobs-others" class="child">Others</option>
					<option value="services" class="main">Services</option>
					<option value="accounting" class="child">Accounting</option>
					<option value="automotive" class="child">Automotive</option>
					<option value="advertising-media" class="child">Advertising & Media</option>
					<option value="bridal-services" class="child">Bridal Services</option>
					<option value="cleaning-maid-services" class="child">Cleaning & Maid Services</option>
					<option value="construction-arch.-interiors" class="child">Construction, Arch. & Interiors</option>
					<option value="education-training" class="child">Education & Training</option>
					<option value="engineering" class="child">Engineering</option>
					<option value="insurance" class="child">Insurance</option>
					<option value="massage-spa" class="child">Massage & Spa</option>
					<option value="hospitality-travel-tourism" class="child">Hospitality, Travel & Tourism</option>
					<option value="health-medical-pharma" class="child">Health, Medical & Pharma</option>
					<option value="it-telecom" class="child">IT & Telecom</option>
					<option value="interior-design-renovation" class="child">Interior Design & Renovation</option>
					<option value="legal" class="child">Legal</option>
					<option value="movers-logistics" class="child">Movers & Logistics</option>
					<option value="plumbing-electrical" class="child">Plumbing & Electrical</option>
					<option value="property-real-estate" class="child">Property & Real Estate</option>
					<option value="science" class="child">Science</option>
					<option value="supply-chain-logistics" class="child">Supply Chain & Logistics</option>
					<option value="printing-publishing" class="child">Printing & Publishing</option>
					<option value="other-services" class="child">Other Services</option>
					<option value="fashion-beauty" class="main">Fashion & Beauty</option>
					<option value="jewellery-watches" class="child">Jewelry, watches </option>
					<option value="clothing-accessories" class="child">Clothing, accessories</option>
					<option value="beauty-healthcare-products" class="child">Beauty & Healthcare</option>
					<option value="books-sports-hobbies" class="main">Books, Sports & Hobbies</option>
					<option value="cds-dvds-vhs" class="child">CDS, DVDS, VHS</option>
					<option value="books" class="child">Books</option>
					<option value="sports-equipment" class="child">Sports Equipment</option>
					<option value="others-buy-sell" class="child">Others</option>
					<option value="furniture-decor" class="main">Furniture & Decor</option>
					<option value="household-items" class="child">Household Items</option>
					<option value="office-furniture" class="child">Office Furniture</option>
					<option value="home-furniture" class="child">Home Furniture</option>
					<option value="kitchenware" class="child">Kitchenware</option>
					<option value="handicrafts-paintings" class="child">Handicrafts Paintings</option>
					<option value="pets" class="main">Pets</option>
					<option value="dogs" class="child">Dogs</option>
					<option value="cats" class="child">Cats</option>
					<option value="birds" class="child">Birds</option>
					<option value="fish" class="child">Fish</option>
					<option value="pet-food" class="child">Pet Food</option>
					<option value="pet-accessories" class="child">Pet Accessories</option>
					<option value="other-pets" class="child">Other</option>
					<option value="foods" class="main">Foods</option>
					<option value="meat" class="child">Meat</option>
					<option value="seafood" class="child">Seafood</option>
					<option value="fruits" class="child">Fruits</option>
					<option value="vegetables" class="child">Vegetables</option>
					<option value="beverages" class="child">Beverages</option>
					<option value="grocery" class="child">Grocery</option>
					<option value="bread-and-bakery" class="child">Bread & Bakery</option>
					<option value="beer-and-wine" class="child">Beer & Wine</option>
					<option value="rice-and-cereal" class="child">Rice & Cereal</option>
					<option value="other-foods" class="child">Other</option>
					</select>
					<button class="btn my-0 my-sm-0" type="submit"><span class="icon ion-ios-search"></span></button>
				</form>
			</div>
		</div>
	</header>

	<div class="listing-page">
		<div class="my-breadcrumb">
			<div class="my-container">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item" aria-current="page"><a href="https://www.khmer24.com/en/"><i class="icon-home"></i>Home</a>
						</li>
						<li class="breadcrumb-item" aria-current="page">House & Lands in Cambodia</li>
					</ol>
				</nav>
			</div>
		</div>

		<section class="page-header">
			<div class="my-container">
				<h1 class="title">House & Lands in Cambodia</h1>
			</div>
		</section>

		<section class="categories-items">
			<div class="my-container">
			<div class="lists-categories">
			<ul class="list-unstyled sub_categories">
			<li><a href="https://www.khmer24.com/en/c-house-for-sale.html">House for Sale</a></li>
			<li><a href="https://www.khmer24.com/en/c-house-for-rent.html">House for Rent</a></li>
			<li><a href="https://www.khmer24.com/en/c-apartment-for-sale.html">Apartment for Sale</a></li>
			<li><a href="https://www.khmer24.com/en/c-apartment-for-rent.html">Apartment for Rent</a></li>
			 <li><a href="https://www.khmer24.com/en/c-landed-properties-for-sale.html">Land for Sale</a></li>
			<li><a href="https://www.khmer24.com/en/c-landed-properties-for-rent.html">Landed Properties for Rent</a></li>
			<li><a href="https://www.khmer24.com/en/c-commercial-properties-for-sale.html">Commercial for Sale</a></li>
			<li><a href="https://www.khmer24.com/en/c-commercial-properties-for-rent.html">Commercial for Rent</a></li>
			<li><a href="https://www.khmer24.com/en/c-room-for-rent.html">Room for Rent</a></li>
			<li><a href="https://www.khmer24.com/en/c-properties-wanted.html">Properties Wanted</a></li>
			<li><a href="https://www.khmer24.com/en/c-agent-services.html">Agent Services</a></li>
			<li><a href="https://www.khmer24.com/en/c-others-properties.html">Others</a></li>
			</ul>
			</div>
			</div>
		</section>

		<section class="pb-3">
			<div class="my-container">
				<div class="row">
			<!-- ads left			 -->
					<div class="col-3 left-side">
						<div class="p-3 bg-white border rounded filter-box">
							<div class="filter_title">Refine your Results</div>
								<form class="form" id="ftr_left" method="get" action="https://www.khmer24.com/en/property/all-property.html?">
									<div class="form-group filter-group ">
											<label class="filter-title">City/Province</label>
											<div class="filter-data">
												<select class="form-control fter_d  form-control-" name="location">
													<option value="">All</option><option value="phnom-penh">Phnom Penh</option><option value="preah-sihanouk">Preah Sihanouk</option><option value="kampong-cham">Kampong Cham</option><option value="siem-reap">Siem Reap</option><option value="battambang">Battambang</option><option value="kandal">Kandal</option><option value="banteay-meanchey">Banteay Meanchey</option><option value="kampong-chhnang">Kampong Chhnang</option><option value="kampong-speu">Kampong Speu</option><option value="kampong-thom">Kampong Thom</option><option value="kampot">Kampot</option><option value="kep">Kep</option><option value="koh-kong">Koh Kong</option><option value="kratie">Kratie</option><option value="mondulkiri">Mondulkiri</option><option value="oddar-meanchey">Otdar Meanchey</option><option value="pailin">Pailin</option><option value="preah-vihear">Preah Vihear</option><option value="prey-veng">Prey Veng</option><option value="pursat">Pursat</option><option value="ratanakiri">Ratanakiri</option><option value="stung-treng">Stung Treng</option><option value="svay-rieng">Svay Rieng</option><option value="takeo">Takeo</option><option value="tboung-khmum">Tboung Khmum</option>
												</select>
											</div>
									</div>
									<input type="hidden" name="category" value="48" />
									<input type="hidden" name="sortby" value="" />
								</form>
						</div>
						<div class="sponsors text-center pt-3">				
						</div>
					</div>
			<!-- content right			 -->
					<div class="col col-9 right-side">
						<div class="bar">
							<div class="left">
							<h2 class="title">30775 Result On 13 Apr, 2019 </h2>
							</div>
							<div class="right text-right">
								<ul class="nav justify-content-end">
									<li class="nav-item">
											<label>View</label>
											<span class="btn-group mr-1" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-default icon icon-list btn-change-view" disabled></button>
											<button type="button" class="btn btn-default icon-gallery btn-change-view"></button>
											</span>
									</li>
									<li class="nav-item dropdown">
										<label>Sort By</label>
										<a class="btn btn-default btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Laste Ads </a>
										<div class="dropdown-menu btn-sortby" aria-labelledby="dropdownMenuLink">
											<a class="dropdown-item " data-value="latestads" href="#">Laste Ads</a>
											<a class="dropdown-item " data-value="newads" href="#">New Ads</a>
											<a class="dropdown-item " data-value="mosthitads" href="#">Most Hit Ads</a>
											<a class="dropdown-item " data-value="priceasc" href="#">Price: Low to High</a>
											<a class="dropdown-item " data-value="pricedesc" href="#">Price: High to Low</a>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div>
							<ul class="list-unstyled list-items item-list">
								<li class="item  special-item  top-item ">
									<a class="border post" href="https://www.khmer24.com/en/property/វឡកនកត-link-house-la-នបរបងហត-បងសនរ-តរវករលកបនទនខលង-adid-1654786.html" title="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង">
									<article>
										<div class="item-image">
											<img class="img-cover" src="http://imagescdn.khmer24.com/19-02-25/s-114796-link-house-la1-b.jpg" alt="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង" />
										</div>
										<div class="item-detail">
											<h2 class="item-title truncate truncate-2 ">វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង</h2>
											<p class="description truncate truncate-2">* វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវ&#8203;ការលក់បន្ទាន់ខ្លាំង។
											* តំលៃ៖ 179,500ដុល្លារ (អា...... <i>tel: 010245643,011735635</i></p> <ul class="list-unstyled summary">
											<li>Phnom Penh</li>
											<li><time datetime="2019-04-12 18:00:01">15 hours ago</time></li>
											<li>23 hits</li> </ul>
											<p class="item-price m-0 text-red">$179,500</p>
											<div class="list_thumb"><span class="thumb"><img class="img-cover" src="http://imagescdn.khmer24.com/19-02-25/s-114796-link-house-la1-c.jpg"></span><span class="thumb"><img class="img-cover" src="http://imagescdn.khmer24.com/19-02-25/s-114796-link-house-la1-d.jpg"></span><span class="thumb"><img class="img-cover" src="http://imagescdn.khmer24.com/19-02-25/s-114796-link-house-la1-e.jpg"></span></div>
											</div>
									</article>
									</a>
									<a class="username-tag" href="https://www.khmer24.com/en/TiveaSuorsdey">TiveaSuorsdey</a>
								</li>
								<li class="item  special-item  top-item ">
									<a class="border post" href="https://www.khmer24.com/en/property/វឡទល-សមរបជល-នទលទពង1-ខណឌចករមន-adid-2719844.html" title="វីឡា​ទោល សម្រាប់ជួល នៅទួលទំពូង1 ខណ្ឌចំការមន">
										<article>
											<div class="item-image">
											<img class="img-cover" src="http://imagescdn.khmer24.com/19-02-21/s-114796-165-b.jpg" alt="វីឡា​ទោល សម្រាប់ជួល នៅទួលទំពូង1 ខណ្ឌចំការមន" />
											</div>
											<div class="item-detail">
											<h2 class="item-title truncate truncate-2 ">វីឡា​ទោល សម្រាប់ជួល នៅទួលទំពូង1 ខណ្ឌចំការមន</h2>
											<p class="description truncate truncate-2">* វីឡា​ទោល សម្រាប់ជួល នៅទួលទំពូង1 ខណ្ឌចំការមន។
											* តំលៃជួល៖ 3,500 ដុល្លារ​ (អាចចរចាបាន) ។​
											* ទំហំផ្ទះ ៖ 9,5... <i>tel: 011631688,015888638</i></p> <ul class="list-unstyled summary">
											<li>Phnom Penh</li>
											<li><time datetime="2019-03-29 16:46:12">29-Mar-2019</time></li>
											<li>561 hits</li> </ul>
											<p class="item-price m-0 text-red">$3,500</p>
											<div class="list_thumb"><span class="thumb"><img class="img-cover" src="http://imagescdn.khmer24.com/19-02-21/s-114796-165-c.jpg"></span><span class="thumb"><img class="img-cover" src="http://imagescdn.khmer24.com/19-02-21/s-114796-165-d.jpg"></span><span class="thumb"><img class="img-cover" src="http://imagescdn.khmer24.com/19-02-21/s-114796-165-e.jpg"></span></div>
											</div>
										</article>
									</a>
									<a class="username-tag" href="https://www.khmer24.com/en/TiveaSuorsdey">TiveaSuorsdey</a>
								</li>
								<li class="item  special-item  top-item ">
									<a class="border post" href="https://www.khmer24.com/en/property/western-style-luxury-apartment-57m2-sihanoukville-adid-3051517.html" title="Western style luxury apartment, 57m2, Sihanoukville">
									<article>
										<div class="item-image">
											<img class="img-cover" src="http://imagescdn.khmer24.com/18-11-27/s-337042-western-style-luxury-apar99-b.jpg" alt="Western style luxury apartment, 57m2, Sihanoukville" />
										</div>
										<div class="item-detail">
											<h2 class="item-title truncate truncate-2 ">Western style luxury apartment, 57m2, Sihanoukville</h2>
											<p class="description truncate truncate-2">Bedrooms: 1
											Living room: 1
											Bathrooms: 1
											Unfurnished
											Hot water shower
											Balcony/Terra...... <i>tel: 086535614,061528055</i></p> <ul class="list-unstyled summary">
											<li>Preah Sihanouk</li>
											<li><time datetime="2018-11-27 10:20:02">27-Nov-2018</time></li>
											<li>4921 hits</li> </ul>
											<p class="item-price m-0 text-red">$56,430</p>
											<div class="list_thumb"><span class="thumb"><img class="img-cover" src="http://imagescdn.khmer24.com/18-11-27/s-337042-western-style-luxury-apar99-c.jpg"></span><span class="thumb"><img class="img-cover" src="http://imagescdn.khmer24.com/18-11-27/s-337042-western-style-luxury-apar99-d.jpg"></span><span class="thumb"><img class="img-cover" src="http://imagescdn.khmer24.com/18-11-27/s-337042-western-style-luxury-apar99-e.jpg"></span></div>
										</div>
									</article>
									</a>
								</li>
							</ul>
						</div>
			<!-- pagination -->
						<div class="p-3">
							<div class="Page navigation my-pagination">
								<ul class="pagination justify-content-center m-0">
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){


			$('.btn-change-view').click(function(e){
				e.preventDefault();
				var type = $(this).attr('data-type');
				$.get('https://www.khmer24.com/en/change-ad-view.html',function(respone){
					location.reload();
				});
			});

			$('#ftr_left select, input[type="radio"]').change(function(){
				$('#ftr_left').submit();
			});


			$('.btn-sortby a').click(function(e){
				e.preventDefault();
				$('#ftr_left').find('input[name="sortby"]').val($(this).attr('data-value'));
				$('#ftr_left').submit();
			});

			$('.clear_filter .a_fter_d').click(function(){
				var btn = $(this);
				var parent = btn.closest('div.form-group');
				parent.find('input').val('');
				parent.find('select').val('');
				$('#ftr_left').submit();
			});
			

		});
	</script>

@endsection


@push('js')

@endpush

