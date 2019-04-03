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
							{{__('backend.dashboard')}}
						</span>
					</a>
				</li>
				{{-- student menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('backend.manage.student')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> {{__('backend.manage.student.add_student')}}</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> {{__('backend.manage.student.student_list')}}</a></li>
					</ul>
				</li>
				{{-- enroll menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('backend.manage.enroll')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> {{__('backend.manage.enroll.add_enroll')}}</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> {{__('backend.manage.enroll.enroll_list')}}</a></li>
					</ul>
				</li>				
				{{-- teacher menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('backend.manage.teacher')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> {{__('backend.manage.teacher.add_teacher')}}</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> @lang('backend.manage.teacher.teacher_list')</a></li>
					</ul>
				</li>
				{{-- parent menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('backend.manage.parent')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> {{__('backend.manage.parent.add_parent')}}</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> @lang('backend.manage.parent.parent_list')</a></li>
					</ul>
				</li>
				{{-- subject menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('backend.manage.subject')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> {{__('backend.manage.subject.add_subject')}}</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> @lang('backend.manage.subject.subject_list')</a></li>
					</ul>
				</li>
				{{-- class menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('backend.manage.class')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> {{__('backend.manage.class.add_class')}}</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> @lang('backend.manage.class.class_list')</a></li>
					</ul>
				</li>
				{{-- exam menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('backend.manage.exam')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> {{__('backend.manage.exam.add_exam')}}</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> @lang('backend.manage.exam.exam_list')</a></li>
					</ul>
				</li>
				{{-- mark_attendance menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('backend.manage.mark_attendance')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> {{__('backend.manage.mark_attendance.add_mark_attendance')}}</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> @lang('backend.manage.mark_attendance.mark_attendance_list')</a></li>
					</ul>
				</li>
				{{-- exam_grade menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('backend.manage.exam_grade')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> {{__('backend.manage.exam_grade.add_exam_grade')}}</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> @lang('backend.manage.exam_grade.exam_grade_list')</a></li>
					</ul>
				</li>
				{{-- class_routine menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('backend.manage.class_routine')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> {{__('backend.manage.class_routine.add_class_routine')}}</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> @lang('backend.manage.class_routine.class_routine_list')</a></li>
					</ul>
				</li>
				{{-- payment menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('backend.manage.payment')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> {{__('backend.manage.payment.add_payment')}}</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> @lang('backend.manage.payment.payment_list')</a></li>
					</ul>
				</li>
				{{-- Library menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('backend.manage.library')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> {{__('backend.manage.library.add_library')}}</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> @lang('backend.manage.library.library_list')</a></li>
					</ul>
				</li>
				{{-- transport menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('backend.manage.transport')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> {{__('backend.manage.transport.add_transport')}}</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> @lang('backend.manage.transport.transport_list')</a></li>
					</ul>
				</li>
				{{-- dormitory menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('backend.manage.dormitory')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> {{__('backend.manage.dormitory.add_dormitory')}}</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> @lang('backend.manage.dormitory.dormitory_list')</a></li>
					</ul>
				</li>
				{{-- noticeboard_event menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('backend.manage.noticeboard_event')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> {{__('backend.manage.noticeboard_event.add_noticeboard_event')}}</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> @lang('backend.manage.noticeboard_event.noticeboard_event_list')</a></li>
					</ul>
				</li>								
				{{-- settings menu --}}
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>{{__('backend.settings')}}</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item">
							<a href="{{ route('languages') }}" target="_blank" class="nav-link"><i class="icon-IE"></i> {{__('backend.settings.language')}}</a>
						</li>
						<li class="nav-item">
							<a href="{{ url('admin/activitylogs') }}" class="nav-link"><i class="icon-IE"></i> {{__('backend.settings.activitylogs')}}</a>
						</li>
						<li class="nav-item">
							<a href="{{ url('admin/generator') }}" class="nav-link"><i class="icon-IE"></i> {{__('backend.settings.generator')}}</a>
						</li>							
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-firefox"></i> Second level with child</a>
							<ul class="nav nav-group-sub">
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-android"></i> Third level</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link"><i class="icon-apple2"></i> Third level with child</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-html5"></i> Fourth level</a></li>
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-css3"></i> Fourth level</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-windows"></i> Third level</a></li>
							</ul>
						</li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Second level</a></li>
					</ul>
				</li>
				{{-- profile menu --}}
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="icon-home4"></i>
						<span>
							{{__('backend.manage.profile')}}
						</span>
					</a>
				</li>				
			</ul>
		</div>
		<!-- /main navigation -->
	</div>
	<!-- /sidebar content -->	
</div>