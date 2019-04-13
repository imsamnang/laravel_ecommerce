@extends('layouts.backend.khmer24_layout')

@push('css')
	<link  href="{{asset('assets/css/post.css')}}" rel="stylesheet" type="text/css">
	<link  href="{{asset('assets/css/property.css')}}" rel="stylesheet" type="text/css">
@endpush

@section('content')

<div class="home-page">
	<section class="bg-white border-bottom nav-header-bar menu-items">
		<div class="my-container">
			<ul class="nav">
				<li class="nav-item">
				<a class="nav-link active" href="https://www.khmer24.com/en/property.html"><span class="icon icon-home"></span></a>
				</li>
				<li class="nav-item">
				<div class="dropdown">
				<button class="nav-link btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Buy </button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="https://www.khmer24.com/en/property/house-for-sale.html">House for Sale</a>
				<a class="dropdown-item" href="https://www.khmer24.com/en/property/apartment-for-sale.html">Apartment for Sale</a>
				<a class="dropdown-item" href="https://www.khmer24.com/en/property/landed-properties-for-sale.html">Land for Sale</a>
				<a class="dropdown-item" href="https://www.khmer24.com/en/property/commercial-properties-for-sale.html">Commercial for Sale</a>
				</div>
				</div>
				</li>
				<li class="nav-item">
				<div class="dropdown">
				<button class="nav-link btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Rent </button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="https://www.khmer24.com/en/property/house-for-rent.html" House for Rent< a>
				<a class="dropdown-item" href="https://www.khmer24.com/en/property/apartment-for-rent.html">Apartment for Rent</a>
				<a class="dropdown-item" href="https://www.khmer24.com/en/property/landed-properties-for-rent.html">Landed for Rent</a>
				<a class="dropdown-item" href="https://www.khmer24.com/en/property/commercial-properties-for-rent.html">Commercial for Rent</a>
				<a class="dropdown-item" href="https://www.khmer24.com/en/property/room-for-rent.html">Room for Rent</a>
				</div>
				</div>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="https://www.khmer24.com/en/property/properties-wanted.html">Properties Wanted</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="https://www.khmer24.com/en/property/agent-services.html">Agent Services</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="https://www.khmer24.com/en/property/others-properties.html">Other Categories</a>
				</li>
			</ul>
		</div>
	</section>
		
	<section class="border-bottom search-box">
		<div class="my-container">
			<div class="text-center">
			<h1 class="big-title">Find Properties in Cambodia</h1>
			<p class="small-title">Welcome to khmer24.com, the biggest online market in Cambodia.</p>
			</div>
			<div class="pb-3 pt-2">
			<div class="row justify-content-center">
			<div class="col-9">
			<form class="form" action="https://www.khmer24.com/en/property/search" method="get">
			<div class="input-group form-row">
			<input type="text" class="form-control" name="q" placeholder="Search House & Lands...">
			<select class="form-control col-3" name="category" required>
			<option value="">Category</option>
			<option value="house-for-sale">House for Sale</option>
			<option value="house-for-rent">House for Rent</option>
			<option value="apartment-for-sale">Apartment for Sale</option>
			<option value="apartment-for-rent">Apartment for Rent</option>
			<option value="landed-properties-for-sale">Land for Sale</option>
			<option value="landed-properties-for-rent">Landed Properties for Rent</option>
			<option value="commercial-properties-for-sale">Commercial for Sale</option>
			 <option value="commercial-properties-for-rent">Commercial for Rent</option>
			<option value="room-for-rent">Room for Rent</option>
			<option value="properties-wanted">Properties Wanted</option>
			<option value="agent-services">Agent Services</option>
			<option value="others-properties">Others</option>
			</select>
			<select class="form-control col-3" name="location">
			<option value="">Locations</option>
			<option value="phnom-penh">Phnom Penh</option>
			<option value="preah-sihanouk">Preah Sihanouk</option>
			<option value="kampong-cham">Kampong Cham</option>
			<option value="siem-reap">Siem Reap</option>
			<option value="battambang">Battambang</option>
			<option value="kandal">Kandal</option>
			<option value="banteay-meanchey">Banteay Meanchey</option>
			<option value="kampong-chhnang">Kampong Chhnang</option>
			<option value="kampong-speu">Kampong Speu</option>
			<option value="kampong-thom">Kampong Thom</option>
			<option value="kampot">Kampot</option>
			<option value="kep">Kep</option>
			<option value="koh-kong">Koh Kong</option>
			<option value="kratie">Kratie</option>
			<option value="mondulkiri">Mondulkiri</option>
			<option value="oddar-meanchey">Otdar Meanchey</option>
			<option value="pailin">Pailin</option>
			<option value="preah-vihear">Preah Vihear</option>
			<option value="prey-veng">Prey Veng</option>
			<option value="pursat">Pursat</option>
			<option value="ratanakiri">Ratanakiri</option>
			<option value="stung-treng">Stung Treng</option>
			<option value="svay-rieng">Svay Rieng</option>
			<option value="takeo">Takeo</option>
			<option value="tboung-khmum">Tboung Khmum</option>
			</select>
			<input type="submit" value="Search" name="" class="form-control btn btn-primary col-2">
			</div>
			</form>
			</div>
			</div>
			</div>
		</div>
	</section>

	<section class="list-categories">
		<div class="my-container">
		<div class="categories-items">
		<div class="header">
		<h2 class="title">Find House & Lands by Category</h2>
		<a class="btn btn-outline-primary btn-sm" href="https://www.khmer24.com/en/property/all-property.html">View All</a>
		</div>
		<div class="content">
		<ul class="list-unstyled items-has-image sale-categories">
		<li class="">
		<div class="item">
		<div class="detail">
		<div class="image">
		<img class="img-cover" src="https://www.khmer24.com/khmer24-reform21/template/img/categories/photo-house.jpg" />
		</div>
		<div class="title">House</div>
		</div>
		<div class="controls">
		<a href="https://www.khmer24.com/en/property/house-for-sale.html"><span class="btn">Buy</span></a>
		<a href="https://www.khmer24.com/en/property/house-for-rent.html"><span class="btn">Rent</span></a>
		</div>
		</div>
		</li>
		<li class="">
		<div class="item">
		<div class="detail">
		<div class="image">
		<img class="img-cover" src="https://www.khmer24.com/khmer24-reform21/template/img/categories/photo-land.jpg" />
		</div>
		<div class="title">Lands</div>
		</div>
		<div class="controls">
		<a href="https://www.khmer24.com/en/property/landed-properties-for-sale.html"><span class="btn">Buy</span></a>
		<a href="https://www.khmer24.com/en/property/landed-properties-for-rent.html"><span class="btn">Rent</span></a>
		</div>
		</div>
		</li>
		<li class="">
		<div class="item">
		<div class="detail">
		<div class="image">
		<img class="img-cover" src="https://www.khmer24.com/khmer24-reform21/template/img/categories/photo-apartment.jpg" />
		</div>
		<div class="title">Apartment</div>
		</div>
		<div class="controls">
		<a href="https://www.khmer24.com/en/property/apartment-for-sale.html"><span class="btn">Buy</span></a>
		<a href="https://www.khmer24.com/en/property/apartment-for-rent.html"><span class="btn">Rent</span></a>
		</div>
		</div>
		</li>
		<li class="">
		<div class="item">
		<div class="detail">
		<div class="image">
		<img class="img-cover" src="https://www.khmer24.com/khmer24-reform21/template/img/categories/photo-commercial-properties.jpg" />
		</div>
		<div class="title">Commercial Properties</div>
		</div>
		<div class="controls">
		<a href="https://www.khmer24.com/en/property/commercial-properties-for-sale.html"><span class="btn">Buy</span></a>
		<a href="https://www.khmer24.com/en/property/commercial-properties-for-rent.html"><span class="btn">Rent</span></a>
		</div>
		</div>
		</li>
		<li class="">
		<div class="item">
		<div class="detail">
		<div class="image">
		<img class="img-cover" src="https://www.khmer24.com/khmer24-reform21/template/img/categories/photo-room.jpg" />
		</div>
		<div class="title">Room</div>
		</div>
		<div class="controls one">
		<a href="https://www.khmer24.com/en/property/room-for-rent.html"><span class="btn">Rent</span></a>
		</div>
		</div>
		</li>
		</ul>
		</div>
		</div>
		</div>
	</section>

<!-- Top House & Lands -->
	<section class="list-last-items pt-3">
		<div class="my-container">
			<div class="last-items pt-3 pb-3">
				<div class="header">
					<h2 class="title">Recent House & Lands</h2> 
					<a class="btn btn-link btn-sm" href="https://www.khmer24.com/en/property/all-property.html">View All</a>
				</div>
				<div class="content">
					<ul class="list-unstyled">
						<li class="item">
							<a class="item border bg-white rounded" href="https://www.khmer24.com/en/វឡកនកត-link-house-la-នបរបងហត-បងសនរ-តរវករលកបនទនខលង-adid-1654786.html" title="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង">
								<article>
									<div class="image">
										<img class="img-cover" src="http://imagescdn.khmer24.com/19-02-25/s-114796-link-house-la1-b.jpg" alt="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង">
									</div>
									<div class="detail">
										<h3 class="title truncate truncate-2">វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង</h3>
										<p class="price text-red m-0">$179,500</p>
									</div>
								</article>
							</a>
						</li>
						<li class="item">
							<a class="item border bg-white rounded" href="https://www.khmer24.com/en/វឡកនកត-link-house-la-នបរបងហត-បងសនរ-តរវករលកបនទនខលង-adid-1654786.html" title="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង">
								<article>
									<div class="image">
										<img class="img-cover" src="http://imagescdn.khmer24.com/19-02-25/s-114796-link-house-la1-b.jpg" alt="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង">
									</div>
									<div class="detail">
										<h3 class="title truncate truncate-2">វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង</h3>
										<p class="price text-red m-0">$179,500</p>
									</div>
								</article>
							</a>
						</li>
						<li class="item">
							<a class="item border bg-white rounded" href="https://www.khmer24.com/en/វឡកនកត-link-house-la-នបរបងហត-បងសនរ-តរវករលកបនទនខលង-adid-1654786.html" title="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង">
								<article>
									<div class="image">
										<img class="img-cover" src="http://imagescdn.khmer24.com/19-02-25/s-114796-link-house-la1-b.jpg" alt="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង">
									</div>
									<div class="detail">
										<h3 class="title truncate truncate-2">វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង</h3>
										<p class="price text-red m-0">$179,500</p>
									</div>
								</article>
							</a>
						</li>
						<li class="item">
							<a class="item border bg-white rounded" href="https://www.khmer24.com/en/វឡកនកត-link-house-la-នបរបងហត-បងសនរ-តរវករលកបនទនខលង-adid-1654786.html" title="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង">
								<article>
									<div class="image">
										<img class="img-cover" src="http://imagescdn.khmer24.com/19-02-25/s-114796-link-house-la1-b.jpg" alt="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង">
									</div>
									<div class="detail">
										<h3 class="title truncate truncate-2">វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង</h3>
										<p class="price text-red m-0">$179,500</p>
									</div>
								</article>
							</a>
						</li>
					</ul>
					<div class="row justify-content-md-center pt-3">
						<div class="col-8">
							<a href="https://www.khmer24.com/en/property/all-property.html" class="btn btn-primary btn-block">View All</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- Browse by Location	 -->
	<section class="list-locations pt-3">
		<div class="my-container">
		<div class="list-locations">
		<div class="header">
		<h2 class="title">Browse by Location</h2>
		</div>
		<div class="content">
		<ul class="list-unstyled">
		<li class="big">
		<a href="https://www.khmer24.com/en/property/all-property-in-phnom-penh.html" title="Phnom Penh" class="truncate">Phnom Penh</a>
		</li>
		<li class="big">
		<a href="https://www.khmer24.com/en/property/all-property-in-preah-sihanouk.html" title="Preah Sihanouk" class="truncate">Preah Sihanouk</a>
		</li>
		<li class="big">
		<a href="https://www.khmer24.com/en/property/all-property-in-kampong-cham.html" title="Kampong Cham" class="truncate">Kampong Cham</a>
		</li>
		<li class="big">
		<a href="https://www.khmer24.com/en/property/all-property-in-siem-reap.html" title="Siem Reap" class="truncate">Siem Reap</a>
		</li>
		<li class="big">
		<a href="https://www.khmer24.com/en/property/all-property-in-battambang.html" title="Battambang" class="truncate">Battambang</a>
		</li>
		<li class="big">
		<a href="https://www.khmer24.com/en/property/all-property-in-kandal.html" title="Kandal" class="truncate">Kandal</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-banteay-meanchey.html" title="Banteay Meanchey" class="truncate">Banteay Meanchey</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-kampong-chhnang.html" title="Kampong Chhnang" class="truncate">Kampong Chhnang</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-kampong-speu.html" title="Kampong Speu" class="truncate">Kampong Speu</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-kampong-thom.html" title="Kampong Thom" class="truncate">Kampong Thom</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-kampot.html" title="Kampot" class="truncate">Kampot</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-kep.html" title="Kep" class="truncate">Kep</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-koh-kong.html" title="Koh Kong" class="truncate">Koh Kong</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-kratie.html" title="Kratie" class="truncate">Kratie</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-mondulkiri.html" title="Mondulkiri" class="truncate">Mondulkiri</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-oddar-meanchey.html" title="Otdar Meanchey" class="truncate">Otdar Meanchey</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-pailin.html" title="Pailin" class="truncate">Pailin</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-preah-vihear.html" title="Preah Vihear" class="truncate">Preah Vihear</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-prey-veng.html" title="Prey Veng" class="truncate">Prey Veng</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-pursat.html" title="Pursat" class="truncate">Pursat</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-ratanakiri.html" title="Ratanakiri" class="truncate">Ratanakiri</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-stung-treng.html" title="Stung Treng" class="truncate">Stung Treng</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-svay-rieng.html" title="Svay Rieng" class="truncate">Svay Rieng</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-takeo.html" title="Takeo" class="truncate">Takeo</a>
		</li>
		<li class="">
		<a href="https://www.khmer24.com/en/property/all-property-in-tboung-khmum.html" title="Tboung Khmum" class="truncate">Tboung Khmum</a>
		</li>
		</ul>
		</div>
		</div>
		</div>
	</section>

<!-- Recent House & Lands -->
	<section class="list-last-items pt-3">
		<div class="my-container">
			<div class="last-items pt-3 pb-3">
				<div class="header">
					<h2 class="title">Recent House & Lands</h2> 
					<a class="btn btn-link btn-sm" href="https://www.khmer24.com/en/property/all-property.html">View All</a>
				</div>
				<div class="content">
					<ul class="list-unstyled">
						<li class="item">
							<a class="item border bg-white rounded" href="https://www.khmer24.com/en/វឡកនកត-link-house-la-នបរបងហត-បងសនរ-តរវករលកបនទនខលង-adid-1654786.html" title="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង">
								<article>
									<div class="image">
										<img class="img-cover" src="http://imagescdn.khmer24.com/19-02-25/s-114796-link-house-la1-b.jpg" alt="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង">
									</div>
									<div class="detail">
										<h3 class="title truncate truncate-2">វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង</h3>
										<p class="price text-red m-0">$179,500</p>
									</div>
								</article>
							</a>
						</li>
						<li class="item">
							<a class="item border bg-white rounded" href="https://www.khmer24.com/en/វឡកនកត-link-house-la-នបរបងហត-បងសនរ-តរវករលកបនទនខលង-adid-1654786.html" title="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង">
								<article>
									<div class="image">
										<img class="img-cover" src="http://imagescdn.khmer24.com/19-02-25/s-114796-link-house-la1-b.jpg" alt="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង">
									</div>
									<div class="detail">
										<h3 class="title truncate truncate-2">វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង</h3>
										<p class="price text-red m-0">$179,500</p>
									</div>
								</article>
							</a>
						</li>
						<li class="item">
							<a class="item border bg-white rounded" href="https://www.khmer24.com/en/វឡកនកត-link-house-la-នបរបងហត-បងសនរ-តរវករលកបនទនខលង-adid-1654786.html" title="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង">
								<article>
									<div class="image">
										<img class="img-cover" src="http://imagescdn.khmer24.com/19-02-25/s-114796-link-house-la1-b.jpg" alt="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង">
									</div>
									<div class="detail">
										<h3 class="title truncate truncate-2">វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង</h3>
										<p class="price text-red m-0">$179,500</p>
									</div>
								</article>
							</a>
						</li>
						<li class="item">
							<a class="item border bg-white rounded" href="https://www.khmer24.com/en/វឡកនកត-link-house-la-នបរបងហត-បងសនរ-តរវករលកបនទនខលង-adid-1654786.html" title="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង">
								<article>
									<div class="image">
										<img class="img-cover" src="http://imagescdn.khmer24.com/19-02-25/s-114796-link-house-la1-b.jpg" alt="វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង">
									</div>
									<div class="detail">
										<h3 class="title truncate truncate-2">វីឡាកូនកាត់ Link House (LA) នៅ​បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង</h3>
										<p class="price text-red m-0">$179,500</p>
									</div>
								</article>
							</a>
						</li>
					</ul>
					<div class="row justify-content-md-center pt-3">
						<div class="col-8">
							<a href="https://www.khmer24.com/en/property/all-property.html" class="btn btn-primary btn-block">View All</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
			$(document).ready(function(){
				$('.owl-carousel-top-items').owlCarousel({
				    loop:true,
				    margin:15,
				    responsiveClass:true,
				    dots: false,
				    nav: true,
				    autoplay: true,
				    autoplayHoverPause:true,
				    autoplayTimeout: 5000,
				    loop:true,
				    responsive:{
				        0:{
				            items:1,
				            nav:true
				        },
				        600:{
				            items:3,
				            nav:false
				        },
				        1000:{
				            items:4,
				            nav:true,
				            loop:false
				        }
				    }
				});

			});
	</script>

</div>
@endsection

@push('js')
	{{-- expr --}}
@endpush


