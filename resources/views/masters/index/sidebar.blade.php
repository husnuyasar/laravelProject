<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
<div class="page-sidebar navbar-collapse collapse">
	<!-- BEGIN SIDEBAR MENU -->
	<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
	<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
	<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
	<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu1" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
		<li class="heading">
			<h3>GENERAL</h3>
		</li>
		<li class="active">
			<a href="{{route('dashboard::index')}}">
			<i class="icon-home"></i>
			<span class="title">Dashboard</span>
			</a>
		</li>
		<li>
			<a href="javascript:;">
			<span class="title">HASAR İHBAR</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="index_extended.html">
					YENİ İHBAR</a>
				</li>
				<li>
					<a href="{{ url('public/ihbar_ara') }}">
					İHBAR ARAMA</a>
				</li>
				<li>
					<a href="index_extended.html">
					AÇIK İHBARLARIM</a>
				</li>
				<li>
					<a href="index_extended.html">
					ÖZET RAPORLARIM</a>
				</li>
				<li>
					<a href="index_extended.html">
					AJANDAM</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<span class="title">ANLAŞMALI SERVİS</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="index_extended.html">
					HASAR İHBAR</a>
				</li>
				<li>
					<a href="index_extended.html">
					AÇIK DOSYALAR</a>
				</li>
				<li>
					<a href=" {{ url('public/dosya_ara') }}">
					DOSYA ARAMA</a>
				</li>
				<li>
					<a href="index_extended.html">
					AJANDAM</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<span class="title">HASAR EKSPERTİZ</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="ui_general.html">
					YENİ RAPOR</a>
				</li>
				<li>
					<a href="ui_buttons.html">
					AÇIK İHBARLARIM</a>
				</li>
				<li>
					<a href="ui_confirmations.html">
					AÇIK RAPORLARIM</a>
				</li>
				<li>
					<a href="ui_icons.html">
					DENETİMDEN GELEN</a>
				</li>
				<li>
					<a href="ui_colors.html">
					İSTATİSTİKLER</a>
				</li>
				<li>
					<a href="ui_typography.html">
					AJANDAM</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<span class="title">HASAR DENETİM</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="#">
					BEKLEYEN</a>
				</li>
				<li>
					<a href="{{ url('public/rapor_ara') }}">
					RAPOR ARAMA</a>
				</li>
				<li>
					<a href="#">
					RAPORLARIM</a>
				</li>
				<li>
					<a href="#">
					AJANDAM</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<span class="title">YPARÇA DAĞITIM</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href=" {{ url('public/is_emri_ara') }} ">
					İŞ EMRİ ARAMA</a>
				</li>
				<li>
					<a href="#">
					AJANDAM</a>
				</li>
				<li>
					<a href="#">
					MESAJLAR</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<span class="title">YÖNETİM</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="#">
					DETAY İSTATİSTİK</a>
				</li>
				<li>
					<a href="#">
					DOSYA İSTATİSTİK</a>
				</li>
				<li>
					<a href="#">
					SÜRE ANALİZLERİ</a>
				</li>
				<li>
					<a href="#">
					BÖLGE İSTATİSTİK</a>
				</li>
				<li>
					<a href="#">
					ARAÇ İSTATİSTİK</a>
				</li>
				<li>
					<a href="#">
					EKSPER İSTATİSTİK</a>
				</li>
				<li>
					<a href="#">
					AJANDAM</a>
				</li>
				<li>
					<a href="#">
					AYLIK RAPOR</a>
				</li>
				<li>
					<a href="#">
					TANIMLAR</a>
				</li>
			</ul>
		</li>
		
	</ul>
	<!-- END SIDEBAR MENU -->
</div>
