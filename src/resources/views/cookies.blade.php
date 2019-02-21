@if (!cookie('legal'))

	<div class="cookies">
		<div class="container">
			<p>Usamos cookies propias y de terceros para mejorar su experiencia en este sitio web. Si continúa navegando, entendemos que acepta nuestra <a href="{{ route('politica-cookies') }}">política de cookies.</a><a class="close_cookies" href="#">CERRAR</a></p>
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