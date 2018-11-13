<!-- BEGIN LOGO -->
<div class="page-logo">
	<a href="index.html">
	<img src="/asset/img/icc_logo.png" alt="logo" class="logo-default"/>
	</a>
	<div class="menu-toggler sidebar-toggler">
		<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
	</div>
</div>
<!-- END LOGO -->
<!-- BEGIN RESPONSIVE MENU TOGGLER -->
<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"></a>
<!-- END RESPONSIVE MENU TOGGLER -->
<!-- BEGIN PAGE ACTIONS -->
<!-- DOC: Remove "hide" class to enable the page header actions -->

  

<div class="page-actions">
	<div class="btn-group">
		 
	</div>
</div>

<!-- END PAGE ACTIONS -->
<!-- BEGIN PAGE TOP -->
<div class="page-top">
	<!-- BEGIN HEADER SEARCH BOX -->
	<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
	<form class="search-form" action="extra_search.html" method="GET">
		<div class="input-group">
			<input type="text" class="form-control input-sm" placeholder="Search..." name="query">
			<span class="input-group-btn">
			<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
			</span>
			
		</div>
	</form>
	<!-- END HEADER SEARCH BOX -->
	<!-- BEGIN TOP NAVIGATION MENU -->
	<div class="top-menu">
		<ul class="nav navbar-nav pull-right">
			
			<!-- BEGIN NOTIFICATION DROPDOWN -->
			<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
			<li class="separator hide"></li>
			<li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
			<a href="{{ route('messaging::index') }}" class="dropdown-toggle" title="Mesajlar">
				<i class="icon-envelope-open"></i>
				</a>
			</li>
			<li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" title="Online Kullanıcılar">
				<i class="fa fa-desktop"></i>
				</a>
			</li>
			<li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" title="ICC İş Akışı">
				<i class="fa fa-info-circle"></i>
				</a>
			</li>
			<li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" title="ICC Kullanım Klavuzu">
				<i class="fa fa-book"></i>
				</a>
			</li>
			<!-- END TODO DROPDOWN -->
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
			<li class="dropdown dropdown-user dropdown-dark">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<span class="username username-hide-on-mobile">
					{{ Auth::user()->name }} 
					</span>
					<!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
					<img alt="" class="img-circle" src="/asset/admin/layout4/img/avatar9.jpg"/>
				</a>
				<ul class="dropdown-menu dropdown-menu-default">
					<li>
						<a href="extra_profile.html">
						<i class="icon-user"></i> My Profile </a>
					</li>
					<li>
						<a href="page_calendar.html">
						<i class="icon-calendar"></i> My Calendar </a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="{{ route('logout.get') }}">
						<i class="icon-key"></i> Log Out </a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
	</div>
	<!-- END TOP NAVIGATION MENU -->
</div>
<!-- END PAGE TOP -->
