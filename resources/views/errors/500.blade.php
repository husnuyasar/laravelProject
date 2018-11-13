@extends('masters.entry.master')

@section('content')
	<div class="container">

		<form class="form-signin" onsubmit="return false">
			<div class="panel periodic-login">
				<div class="panel-body text-center">
					<h1 class="atomic-symbol"><img src="/asset/img/landing-logo.png" /></h1>
					
					<i class="fa fa-warning fa-5x"></i>
					<hr />
					<p>
						{{ trans('500.erroroccured') }}
					</p>
					<div class="text-center" style="padding:5px;">
						<a href="{{ url('/index') }}">
						<i class="fa fa-recycle"></i>
						{{ trans('500.tohome') }}
						</a>
					</div>
				</div>
			</div>
		</form>

	</div>
@endsection
