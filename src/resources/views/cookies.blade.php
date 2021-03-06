@if (!request()->cookie('legal'))

	<link href="{{ asset('vendor/laravel-cookies/css/laravel-cookies.css') }}" rel="stylesheet">

	<div class="cookies">
		<div class="container">
			<p>{!! config('cookies.text') !!} <a class="close_cookies" href="#">close</a></p>
		</div>
	</div>

@endif

@section('scripts')
@parent

<script>
	$(function() {
		$('.close_cookies').click(function(e) {
			e.preventDefault();
			$.get('/setLegalCookie', function() {
				$('.cookies').hide();
			});
		});
	});
</script>

@endsection