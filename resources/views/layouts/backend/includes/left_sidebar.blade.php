<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
	<!-- Sidebar mobile toggler -->
	<div class="sidebar-mobile-toggler text-center">
		<a href="#" class="sidebar-mobile-main-toggle">
			<i class="icon-arrow-left8"></i>
		</a>
		Navigation
		<a href="#" class="sidebar-mobile-expand">
			<i class="icon-screen-full"></i>
			<i class="icon-screen-normal"></i>
		</a>
	</div>
	<!-- /sidebar mobile toggler -->
	<!-- Sidebar content -->
	<div class="sidebar-content">
		<!-- User menu -->
		<div class="sidebar-user">
			<div class="card-body">
				<div class="media">
					<div class="mr-3">
						<a href="#"><img src="{{asset('assets/backend/global_assets/images/placeholders/placeholder.jpg')}}" width="38" height="38" class="rounded-circle" alt=""></a>
					</div>
					<div class="media-body">
						<div class="media-title font-weight-semibold">Victoria Baker</div>
						<div class="font-size-xs opacity-50">
							<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
						</div>
					</div>
					<div class="ml-3 align-self-center">
						<a href="#" class="text-white"><i class="icon-cog3"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- /user menu -->
		<!-- Main navigation -->
		<div class="card card-sidebar-mobile">
			<ul class="nav nav-sidebar" data-nav-type="accordion">
				<!-- Main -->
				<li class="nav-item">
					<a href="{{ route('home') }}" class="nav-link active">
						<i class="icon-home4"></i>
						<span>
							{{-- Dashboard --}}
							{{__('dashboard')}}
						</span>
					</a>
				</li>
				{{-- category menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('admin.categories')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="{{ route('category.create') }}" class="nav-link"><i class="icon-IE"></i> {{__('admin.categories.create')}}</a></li>
						<li class="nav-item"><a href="{{ route('category.index') }}" class="nav-link"><i class="icon-chrome"></i> {{__('admin.categories.index')}}</a></li>
					</ul>
				</li>
				{{-- product menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('admin.products')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="{{ route('product.create') }}" class="nav-link"><i class="icon-IE"></i> {{__('admin.products.create')}}</a></li>
						<li class="nav-item"><a href="{{ route('product.index') }}" class="nav-link"><i class="icon-chrome"></i> {{__('admin.products.index')}}</a></li>
					</ul>
				</li>
				{{-- language translations --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('admin.manage.language')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="{{ route('languages') }}" target="_blank" class="nav-link"><i class="icon-IE"></i> {{ __('admin.language.translator') }}</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> {{__('backend.manage.student.student_list')}}</a></li>
					</ul>
				</li>					
			</ul>
		</div>
		<!-- /main navigation -->
	</div>
	<!-- /sidebar content -->	
</div>